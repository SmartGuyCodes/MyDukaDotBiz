<?php
/*~
.----------------------------------------------------------------------------.
|  Mission: Code Business Ideas Into Realities                               |
|   Version: 0.1                                                             |
|----------------------------------------------------------------------------|
|     Admin: Charles Evans Ogego Otieno (project admininistrator)            |
|   Authors: C.E.O Otieno (codeartist254) codeartist254@gmail.com            |
|          : trulance247@gmail.com                                                                |
|          :                                   |
| Copyright (c) 2013-2015, C.E.O Otieno. All Rights Reserved.                |
| ---------------------------------------------------------------------------|
|   License:                                                                 |
| This program is distributed in the hope that it will be useful - WITHOUT   |
| ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or      |
| FITNESS FOR A PARTICULAR PURPOSE.                                          |
|                                                                            |
| THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"|
| AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE  |
| IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE |
| ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE  |
| LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR        |
| CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF       |
| SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS   |
| INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN    |
| CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)    |
| ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE |
| POSSIBILITY OF SUCH DAMAGE.                                                |
|----------------------------------------------------------------------------|
| I offer a number of paid services :                                        |
| - Web Hosting on highly optimized fast and secure servers                  |
| - Technology Consulting                                                    |
| - Outsourcing (highly qualified programmers and graphic designers)         |
'----------------------------------------------------------------------------'
*/

Class PaymentController extends PaymentService implements Controller{
    function __construct () {
        parent::__construct();
    }

    function mainPage(){
        #now get order by it's tracking number
        $order = $this->getOrderByOID(trim(filter_input(INPUT_GET, 'info')));
        $shippingPayment = $order['OrderShipping'];
        //echo'<pre>'; print_r($shippingPayment); die;

        $cart = $_SESSION['cartProducts'];
        $total = 0;
        foreach($cart as $cartItem){
            $price = $cartItem['price'];
            $qty = $cartItem['qty'];
            $subTotal = $price * $qty;
            $total = $subTotal + $total;
        }

        $this->assign('title', 'Payment Options');
        $this->assign('shipping', $shippingPayment);
        $this->assign('price', $order['OrderAmount']);
        $this->assign('item', $order['OrderDescription']);
        $this->assign('mail', $order['OrderEmail']);
        $this->assign('user', $order['fname']);
        $this->assign('order', trim(filter_input(INPUT_GET, 'info')));
        $this->assign('total', $total);
        $this->assign('mycart', $cart);
        $this->assign('uId', $_SESSION[MD_OWNER]);
        $this->display('payments/main.tpl');
    }

    public function mobilePayment(){
        $user = $this->getUserByID($_SESSION['shopper']);
        $result = [];

        $orderTracker = trim(filter_input(INPUT_POST, 'tracker'));
        $order = $this->getOrderByOID($orderTracker);
        $orderTracker = $order['OrderTrackingNumber'];

        $mpesaNo = trim(filter_input(INPUT_POST, 'mpesano'));
        $mpesaCode = trim(filter_input(INPUT_POST, 'code'));
        $method = trim(filter_input(INPUT_POST, 'method'));
        $orderCost = trim(filter_input(INPUT_POST, 'orderCost'));
        $shippingCost = trim(filter_input(INPUT_POST, 'shipping'));

        #add to payment table
        if($this->mpesaPayment($orderTracker, $method, $mpesaNo, $mpesaCode, $orderCost, $shippingCost)){
            #before sending mail, sort the mpesa SOAP API.
            try {
                #i. initialize ethe mpesa API
                $wsdl = 'https://safaricom.co.ke/mpesa_online/lnmo_checkout_server.php?wsdl';
                $time = time();
                $pass = PASSKEY;
                $paybill = PAYBILL_NUMBER;
                $string = $paybill . ',' . $pass . ',' . $time;
                $hashed = base64_decode(hash('sha256', $string));

                $client = new SoapClient($wsdl);

                $location = $client->__setLocation($wsdl);
                $request = $client->confirmTransaction([
                    'MERCHANT_TRANSACTION_ID' => PAYBILL_NUMBER,
                    'PASSWORD' => $hashed,
                    'TIMESTAMP' => $time
                ]);
                $action = 'https://safaricom.co.ke/mpesa_online/lnmo_checkout_server.php';
                $r = $client->__doRequest($request, $location, $action, 1);

                echo '<pre>'; print_r($r); die;

            } catch (SoapFault $fault) {
                trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
            }


            #send mail
            $MailService = new MailService;

            $this->assign('item', trim(filter_input(INPUT_POST, 'item')));
            $this->assign('dukad', MD_D);
            $this->assign('order', $orderTracker);
            $this->assign('shipping', $shippingCost);
            $this->assign('amount', $orderCost);
            $this->assign('method', $method);
            $this->assign('user', $user['UserEmail']);
            $this->assign('emblem', 'www.myduka.biz/cdn/logo.png');
            $this->assign('copy', Utils::myDukaCopyright());
            $this->assign('address', DUKA_ADDRESS);

            $mail = $user['UserEmail'];

            $this->assign('userMail', $mail);
            $subject = "Thank you for your purchase at myDUKA! Order# " . $orderTracker;
            $body = $this->fetch('emails/order.tpl');
            $altBody = "MPESA Order Payment Confirmation";

            $serviceSubject = "#". $orderTracker ."Order Payment Confirmation";
            $serviceBody = $this->fetch('emails/orderService.tpl');
            $serviceMail = 'customercare@myduka.biz';

            if($MailService->mydukaMailer($subject, $mail, $body, $altBody)){ //to create some loader to handle the waiting shit!
                $MailService->mydukaMailer($serviceSubject, $serviceMail, $serviceBody, $altBody);
                session_destroy();
                $result['msg'] = 'Your order ref: #' .$orderTracker. ' has been successfully placed.';
            }
            else{
                $result['msg'] = 'Your order ref: #' .$orderTracker. ' has not been successfully placed. Now proceed to payment';
            }
        }
        else {
            $result['msg'] = 'Failed';
        }

        header('Content-type: application/json');
        json_encode($result);
    }

    public function cashOnDelivery(){
        $result = [];
        $user = $this->getUserByID($_SESSION['shopper']);
        $uname = null;
        if(!empty($user['UserFirstName'])){
            $uname = $user['UserFirstName'];
        }
        else{
            $uname = 'My Duka Shopper - ' . $user['UserEmail'];
        }

        $orderId = trim(filter_input(INPUT_GET, 'info'));
        $order = $this->getOrderByOID($orderId);
        $orderTracker = $order['OrderTrackingNumber'];
        $paid = '0';
        $method = trim(filter_input(INPUT_POST, 'method'));
        $amount = trim(filter_input(INPUT_POST, 'orderCost'));
        $shipping = trim(filter_input(INPUT_POST, 'shipping'));

        #process payment
        $cod = $this->addPayment($orderTracker, $method, $paid, $amount, $shipping);
         if($cod){
             #send mail
             $MailService = new MailService;

             $this->assign('item', trim(filter_input(INPUT_POST, 'item')));
             $this->assign('dukad', MD_D);
             $this->assign('order', trim(filter_input(INPUT_GET, 'info')));
             $this->assign('shipping', trim(filter_input(INPUT_POST, 'shipping')));
             $this->assign('amount', trim(filter_input(INPUT_POST, 'amount')));
             $this->assign('method', 'Cash On Delivery');
             $this->assign('user', $uname);
             $this->assign('emblem', 'www.myduka.biz/cdn/logo.png');
             $this->assign('copy', Utils::myDukaCopyright());
             $this->assign('address', DUKA_ADDRESS);

             $mail = $user['UserEmail'];
             $this->assign('userMail', $mail);
             $subject = "Thank you for your purchase at myDUKA! Order# ". $orderTracker;
             $body = $this->fetch('emails/order.tpl');
             $altBody = "COD Order Payment Confirmation";

             $serviceSubject = "#". $orderTracker ."Order Payment Confirmation";
             $serviceBody = $this->fetch('emails/orderService.tpl');
             $serviceMail = 'customercare@myduka.biz';

             if($MailService->mydukaMailer($subject, $mail, $body, $altBody)){ //to create some loader to handle the waiting shit!
                 $MailService->mydukaMailer($serviceSubject, $serviceMail, $serviceBody, $altBody);
//                 session_destroy();
                 #destroy session in the next pages
             }

             $result['msg'] = $cod;
         }
         else{
             $result['msg'] = 'Payment failed';
         }

        header('Content-type: application/json');
        echo json_encode($result);
    }

    public function redirect(){
        $url = $_SERVER["REQUEST_URI"];
        $url = explode("/", $url);
        $url = explode("?", $url[2]);
        $url = explode("&", $url[1]);

        $pesapal_transaction_tracking_id = explode('=', $url[0]);
        $pesapal_merchant_reference = explode('=', $url[1]);

        $pesapal_transaction_tracking_id = $pesapal_transaction_tracking_id[1];
        $pesapal_merchant_reference = $pesapal_merchant_reference[1];

        unset($_SESSION['cartProducts']);

        $reference = null;
        $pesapal_tracking_id = null;
        if(isset($pesapal_merchant_reference)) {
            $reference = $pesapal_merchant_reference;
        }
        if(isset($pesapal_transaction_tracking_id)) {
            $pesapal_tracking_id = $pesapal_transaction_tracking_id;
        }

        if($this->updateOrderByTracker($reference, $pesapal_tracking_id)){
            $this->assign('resp', 'success');
        }
        else{
            $this->assign('resp', 'failure');
        }
        $this->display('payment/redirect.tpl');
    }

    public function mpesaPage(){
        echo'<pre>'; print_r($_REQUEST); die;
    }

    public function payPalPage(){
//        echo '<pre>'; print_r($_REQUEST); die;
        $this->assign('order', trim(filter_input(INPUT_GET, 'info')));
        $this->assign('title', 'PayPal Checkout');
        $this->display('payments/payPal.tpl');
    }

    public function paypalPay(){
//        echo '<pre>'; print_r($_REQUEST); die;
        $order = trim(filter_input(INPUT_GET, 'info'));
        $fname = trim(filter_input(INPUT_POST, 'cFName'));
        $lname = trim(filter_input(INPUT_POST, 'cLName'));
        $cNo = trim(filter_input(INPUT_POST, 'cNumber'));
        $cvv = trim(filter_input(INPUT_POST, 'cCVV'));
        $ctype = trim(filter_input(INPUT_POST, 'cType'));
        $cexpmonth = trim(filter_input(INPUT_POST, '$cExpMonth'));
        $cexpyear = trim(filter_input(INPUT_POST, '$cExpYear'));

        echo $this->payPalPayment($ctype, $cNo, $cexpmonth, $cexpyear, $cvv, $fname, $lname);
    }

    public function successPaymentResp(){
        echo'<pre>'; print_r($_REQUEST); die;
    }

    public function failurePaymentResp(){
        echo'<pre>'; print_r($_REQUEST); die;
    }

    function run(){
        $q = isset($_REQUEST['query']) ? trim(filter_input(INPUT_GET, 'query')) : NULL;
        switch($q){
            case NULL:
            case 'main':
                $this->mainPage();
                break;
            case 'paypal':
                $this->payPalPage();
                break;
            case 'paypal-pay':
                $this->payPalPay();
                break;
            case 'mpesa':
                $this->mobilePayment();
                break;
            case 'lipa-na-mpesa':
                $this->mpesaPage();
                break;
            case 'cod':
                $this->cashOnDelivery();
                break;
            case 'redirect':
                $this->redirect();
                break;
            case 'success':
                $this->successPaymentResp();
                break;
            case 'failed':
                $this->failurePaymentResp();
                break;
            default:
                //add error page logic here.
                die('Payment query error 404');
                break;
        }
    }
}