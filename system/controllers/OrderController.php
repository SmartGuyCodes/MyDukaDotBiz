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

Class OrderController extends OrderService implements Controller{
    function __construct () {
        parent::__construct();
    }

    public function checkoutAsGuest(){
        $result = [];
        #get guest email and check if the mail exists the alert user on the next action
        $guest = trim(filter_input(INPUT_POST, 'guestMail'));

        #if user mail doesn't exist, save in the user table
//        if(!$this->userExists($guest)){
            if($this->insertGuest($guest)){
                #then set user session
                $_SESSION[MD_OWNER] = $this->lastID();
                #generate order Id
                $orderId = $this->orderTrackGenerator();
                $result['msg'] = $orderId;
            }
            else{
                $result['msg'] = 'Sorry our bots could not register you as a guest.Contact us here: support@myduka.biz';
            }
//        }
//        else{
//            $result['msg'] = 'EMAIL EXISTS.';
//        }

        header('Content-type: application/json');
        echo json_encode($result);
    }

    public function checkoutByRegistering(){
        #get user inputs
        $fname = trim(filter_input(INPUT_POST, 'fname'));
        $lname = trim(filter_input(INPUT_POST, 'lname'));
        $email = trim(filter_input(INPUT_POST, 'email'));
        $phone = trim(filter_input(INPUT_POST, 'phone'));
        $pwd = trim(filter_input(INPUT_POST, 'pwd'));
        $passwordHash = password_hash($pwd, PASSWORD_DEFAULT);

        #save user info in the usr table
        if(!$this->userExists($email)){
            #generate a unique account code with myduka prefix:
            $code = uniqid('myduka_');
            if($this->insertUser($fname, $lname, $email, $phone, $passwordHash, $code)){
                #then set user session
                $_SESSION[MD_OWNER] = $this->lastID();

                #generate order id and then send the id to the next page
                $orderId = $this->orderTrackGenerator();
                $result['msg'] = $orderId;
            }
            else{
                $result['msg'] = 'Sorry, our bots could not register your email. Contact them at support@myduka.biz';
            }
        }
        else{
            $result['msg'] = 'Sorry, user email exists';
        }

        header('Content-type: application/json');
        echo json_encode($result);
    }

    public function checkoutByLogin(){
        #create a result variable
        $result = [];

        #get user info
        $mail = trim(filter_input(INPUT_POST, 'email'));
        $pwd = trim(filter_input(INPUT_POST, 'password'));

        #get user by input mail
        if(!$this->userExists($mail)){
            #login user
            if($this->loginUser($mail, $pwd)){
                #now generate order Id
                $orderId = $this->orderTrackGenerator();
                $result['msg'] = $orderId;
            }
            else{
                $result['msg'] = 'user cannot login. Contact the admin';
            }
        }
        else{
            $result['msg'] = 'Sorry user does not exist.';
        }

        header('Content-type: application/json');
        echo json_encode($result);
    }

    public function paymentDetails(){
        foreach($_SESSION['cartProducts'] as $item) {
            $items[] = $item;
        }
        $itemSeries = serialize($items);

        #generate order id if one doesn't exist
        $cart = $_SESSION['cartProducts'];
        $user = $this->getUserByID($_SESSION[MD_OWNER]);
        $orderId = trim(filter_input(INPUT_GET, 'info'));
        $total = 0;
        foreach($cart as $cartItem){
            $price = $cartItem['price'];
            $qty = $cartItem['qty'];
            $subTotal = $price * $qty;
            $total = $subTotal + $total;
        }

        $this->assign('items', $itemSeries);
        $this->assign('orderID', $orderId);
        $this->assign('title', 'Shipping and Payment Details');
        $this->assign('user', $user);
        $this->assign('total', $total);
        $this->assign('mycart', $cart);
        $this->assign('uId', $_SESSION[MD_OWNER]);
        $this->display('orders/payment.tpl');
    }

    public function checkout(){        
        #generate guest id here and then set session
        if(!isset($_SESSION[MD_OWNER])){            
            $cart = $_SESSION['cartProducts'];
            $user = $this->getUserByID($_SESSION[MD_OWNER]);
            $total = 0;
            foreach($cart as $cartItem){
                $price = $cartItem['price'];
                $qty = $cartItem['qty'];
                $subTotal = $price * $qty;
                $total = $subTotal + $total;
            }

            $this->assign('user', $user);
            $this->assign('total', $total);
            $this->assign('mycart', $cart);
            $this->assign('uId', $_SESSION[MD_OWNER]);
            $this->display('cart/option.tpl');
        }
        else{
            $this->shippingInfo();
        }
    }

    function confirmOrder(){
        $oId = trim(filter_input(INPUT_GET, 'info'));
        $fname = trim(filter_input(INPUT_POST, 'fname'));
        $lname = trim(filter_input(INPUT_POST, 'lname'));
        $mail = trim(filter_input(INPUT_POST, 'mail'));
        $phone = trim(filter_input(INPUT_POST, 'phone'));
        $street = trim(filter_input(INPUT_POST, 'street'));
        $city = trim(filter_input(INPUT_POST, 'city'));
        $county = trim(filter_input(INPUT_POST, 'county'));
        $adres = trim(filter_input(INPUT_POST, 'address'));
        $adres2 = trim(filter_input(INPUT_POST, 'address2'));
        $delivery = trim(filter_input(INPUT_POST, 'delivery'));
        $items = trim(filter_input(INPUT_POST, 'items'));
        $currency = trim(filter_input(INPUT_POST, 'currency'));
        $totalCost = trim(filter_input(INPUT_POST, 'total'));

        $uID = $_SESSION['shopper'];
        $shippingPayment = Utils::getNumerals($delivery);
//        echo'<pre>'; print_r($shippingPayment[0]); die;

        $result = [];
        #save order info in the orderTbl
        #first check if the order already exists, if yest update the order
        $order = $this->insertOrder($uID, $fname, $lname, $mail, $phone, $items, $street, $city, $adres, $totalCost, $currency, $oId, $shippingPayment[0]);
        if($order){
            #then send email to the user and the customer care with order information
            $result['msg'] = $order;
        }
        else{
            $result['msg'] = 'Failed.';
        }
        #then move to the payment page

        header('Content-type: application/json');
        echo json_encode($result);
    }

    function run(){
        $q = trim(filter_input(INPUT_GET, 'query'));
        switch(isset($q) ? $q : NULL){
            case NULL:
            case 'checkout':
                $this->checkout();
                break;
            case 'checkout-as-guest':
                $this->checkoutAsGuest();
                break;
            case 'checkout-by-reg':
                $this->checkoutByRegistering();
                break;
            case 'checkout-by-login':
                $this->checkoutByLogin();
                break;
            #not yet tested functions
            case 'payment-details':
                $this->paymentDetails();
                break;
            case 'confirm':
                $this->confirmOrder();
                break;
            case 'shipping':
                $this->shippingInfo();
                break;
            case 'pshipping':
                $this->processShipping();
                break;
            case 'review':
                $this->reviewOrder();
                break;
            default:
                die('Order Query Error 404');
                break;
        }
    }
}