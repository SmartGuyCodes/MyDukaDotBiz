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
//1. Autoload the SDK package.
require __APIS__ . 'PayPal-PHP-SDK/autoload.php';

class PaymentService extends OrderService{
    function __construct(){
        parent::__construct();
    }

    #add cash on delivery payment
    public function addPayment($orderTracker, $method, $paid, $amount, $shipping){
        try{
            $sql = "INSERT INTO payment(PaymentOrder, method, paid, amount, shipping)
                    VALUES(:morder, :method, :paid, :amount, :shipping)";
            $stmt = $this->runQuery($sql);
            $stmt->bindParam(':morder', $orderTracker);
            $stmt->bindParam(':method', $method);
            $stmt->bindParam(':paid', $paid);
            $stmt->bindParam(':amount', $amount);
            $stmt->bindParam(':shipping', $shipping);
            $stmt->execute();

            $result = $this->lastID();
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }

    #add mpesa payment
    public function mpesaPayment($order, $method, $number, $code, $amount, $shipping){
        try{
            $sql = "INSERT INTO payment(PaymentOrder, method, PaymentPhone, PaymentCode, amount, shipping)
                    VALUES(:morder, :method, :phone, :code, :amount, :shipping)";
            $stmt = $this->runQuery($sql);
            $stmt->bindParam(':morder', $order);
            $stmt->bindParam(':method', $method);
            $stmt->bindParam(':phone', $number);
            $stmt->bindParam(':code', $code);
            $stmt->bindParam(':amount', $amount);
            $stmt->bindParam(':shipping', $shipping);
            $stmt->execute();

            $result = $this->lastID();
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }

    public static function processMPESA(){

    }

    protected function payPalPayment($cardType, $cardNumber, $cardExpMonth, $cardExpYear, $cardCvv2, $cardFirstName, $cardLastName){
        //2. Instantiate the PayPal APi
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                PAYPAL_CLIENT_ID, //ClientID
                PAYPAL_CLIENT_SECRET  //ClientSecret
            )
        );

        //3. Get the creditCard info
        $creditCard = new \PayPal\Api\CreditCard();
        $creditCard->setType($cardType);
        $creditCard->setNumber($cardNumber);
        $creditCard->setExpireMonth($cardExpMonth);
        $creditCard->setExpireYear($cardExpYear);
        $creditCard->setCvv2($cardCvv2);
        $creditCard->setFirstName($cardFirstName);
        $creditCard->setLastName($cardLastName);

        //4. payment call and credit card print function
        $result = [];
        try{
            $card = $creditCard->create($apiContext);
            echo'<pre>'; print_r($card); die;
            $result = $card;
        }
        catch(\PayPal\Exception\PayPalConnectionException $e){
            $result = $e->getData();
        }

        return $result;
    }

}