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

Class UserController extends ProductService implements Controller{
    function __construct () {
        parent::__construct();
    }


    #user registration
    private function registerUser(){
        $fname = trim(filter_input(INPUT_POST, 'fname'));
        $lname = trim(filter_input(INPUT_POST, 'lname'));
        $email = trim(filter_input(INPUT_POST, 'mail'));
        $phone = trim(filter_input(INPUT_POST, 'phone'));
        $pwd = trim(filter_input(INPUT_POST, 'pwd'));
        $passwordHash = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$this->userExists($email)){
            #generate a unique account code with myduka prefix:
            $code = uniqid('myduka_');
            if($this->insertUser($fname, $lname, $email, $phone, $passwordHash, $code)){
                $MailService = new MailService;

                $this->assign('dukad', MD_D);
                $this->assign('user', $fname);
                $this->assign('emblem', 'www.myduka.biz/cdn/logo.png');
                $this->assign('copy', Utils::myDukaCopyright());
                $this->assign('address', DUKA_ADDRESS);
                $this->assign('code', $code);
                $this->assign('mail', $email);
                $subject = "My Duka Dot Biz Registration Confirmation";
                $body = $this->fetch('emails/confirm_email.tpl');

                $altBody = "Registration Confirmation";
                $MailService->mydukaBidMailer($subject, $email, $body, $altBody);
//                $MailService->registrationMail($subject, $email, $body, $altBody);

                #then set user session
                $_SESSION[MD_OWNER] = $this->lastID();
            }
            $result['msg'] = 'Success.Check your mail to confirm your registration';
        }
        else{
            $result['msg'] = 'Sorry, that email already exist';
        }

        header('Content-type: application/json');
        echo json_encode($result);
    }

    protected function verifyUser(){
        #get the user code and email from the clicked link:

        #get code from db using the mgiven email

        #compare the codes

        #if the codes are same update user verify field to true(1)

        #else don't not change shit!!
        echo'<pre>'; print_r($_REQUEST); die;
    }

    #user login
    public function login(){
        $result = [];

        $mail = trim(filter_input(INPUT_POST, 'mail'));
        $pwd = trim(filter_input(INPUT_POST, 'pwd'));

        if($this->loginUser($mail, $pwd)){
            $result['msg'] = 'Success, user logged in';
        }
        else{
            $result['msg'] = 'Error login in. Try again.';
        }

        header('Content-type: application/json');
        echo json_encode($result);
    }

    #checkout as guest
    protected function guestCheckout(){
        $result = [];
        $guest = trim(filter_input(INPUT_POST, 'mail'));
        $ac = $this->insertGuest($guest);
        if($ac){
            $_SESSION[MD_OWNER] = $ac;
            $result['msg'] = 'Success, user checked out';
        }
        else{
            $result['msg'] = 'Error checking out. Try again.';
        }

        header('Content-type: application/json');
        echo json_encode($result);
    }

    #user dashboard
    public function userDashboard(){
        $shopper = $_SESSION[MD_OWNER];
        $user = $this->getUserByID($shopper);
        $ordersrvce = new OrderService();
        $order = $ordersrvce->getOrdersByUserId($shopper);
        $wishes = $this->getWishlist($shopper);

        $cart = $_SESSION['cartProducts'];
        $total = 0;
        foreach($cart as $key => $cartItem){
            $price = $cartItem['price'];
            $qty = $cartItem['qty'];
            $subTotal = $price * $qty;
            $total = $subTotal + $total;
        }

        $this->assign('user', $user);
        $this->assign('total', $total);
        $this->assign('mycart', $cart);
        $this->assign('uId', $_SESSION[MD_OWNER]);
        $this->assign('wish', count($wishes));
        $this->assign('orders', count($order));
        $this->assign('active', 'dashboard');
        $this->assign('title', 'My Dashboard');
        $this->display('users/dashboard.tpl');
    }

    #change user details
    public function updateAccount(){
        #get the input data
        $uId = trim(filter_input(INPUT_GET, 'info'));
        $fname = trim(filter_input(INPUT_POST, 'fname'));
        $lname = trim(filter_input(INPUT_POST, 'lname'));
        $mail = trim(filter_input(INPUT_POST, 'mail'));
        $phone = trim(filter_input(INPUT_POST, 'phone'));
        $street = trim(filter_input(INPUT_POST, 'street'));
        $city = trim(filter_input(INPUT_POST, 'city'));
        $county = trim(filter_input(INPUT_POST, 'county'));
        $address = trim(filter_input(INPUT_POST, 'address'));
        $address2 = trim(filter_input(INPUT_POST, 'address2'));

        $result = '';

        if($this->updateAccountDetailsById($uId, $fname, $lname, $mail, $phone, $street, $city, $county, $address, $address2)){
            #sent email notification about this change then set response
            $result['msg'] = 'Your account has been successfully updated.';
        }else{
            $result['msg'] = 'Error. Your account has been not updated.';
        }

        header('Content-type: application/json');
        echo json_encode($result);
    }

    #user wishlist
    public function userWishlist(){
        $cart = $_SESSION['cartProducts'];
        $total = 0;
        foreach($cart as $key => $cartItem){
            $price = $cartItem['price'];
            $qty = $cartItem['qty'];
            $subTotal = $price * $qty;
            $total = $subTotal + $total;
        }


        $this->assign('total', $total);
        $this->assign('mycart', $cart);
        $this->assign('wishes', $this->getWishlist($_SESSION[MD_OWNER]));
        $this->assign('active', 'wishlist');
        $this->assign('title', 'My Wishlist');
        $this->display('users/wishlist.tpl');
    }

    #user orders
    public function userOrders(){
        $ordersrvce = new OrderService();
        $order = $ordersrvce->getOrdersByUserId($_SESSION['shopper']);

        $this->assign('orders', $order);
        $this->assign('active', 'orders');
        $this->assign('title', 'My Orders');
        $this->display('users/orders.tpl');
    }

    #user personal info
    public function userPersonalInfo(){
        $this->assign('active', 'personalInfo');
        $this->assign('title', 'My Personal Information');
        $this->display('users/personalInfo.tpl');
    }

    #user address book
    public function userAdresBook(){
        $this->assign('active', 'adresBook');
        $this->assign('title', 'My Addresses');
        $this->display('users/adresBook.tpl');
    }

    #user products
    public function userProducts(){
        $products = $this->getProductsByuId($_SESSION['shopper']);

        $this->assign('uId', $_SESSION[MD_OWNER]);
        $this->assign('products', $products);
        $this->assign('active', 'products');
        $this->assign('title', 'User Products');
        $this->display('users/products.tpl');
    }

    #user messages
    public function userMsgs(){
        $this->assign('active', 'msgs');
        $this->assign('title', 'User Messages');
        $this->display('users/msgs.tpl');
    }

    function run(){
        $q = trim(filter_input(INPUT_GET, 'query'));
        switch(isset($q) ? $q : null){
            case 'register':
                $this->registerUser();
                break;
            case 'login':
                $this->login();
                break;
            case 'update':
                $this->updateAccount();
                break;
            case 'guest':
                $this->guestCheckout();
                break;
            case 'dashboard':
                $this->userDashboard();
                break;
            case 'update-info':
                $this->updateAccount();
                break;
            case 'personal_info':
                $this->userPersonalInfo();
                break;
            case 'adres_book':
                $this->userAdresBook();
                break;
            case 'products':
                $this->userProducts();
                break;
            case 'orders':
                $this->userOrders();
                break;
            case 'wishlist':
                $this->userWishlist();
                break;
            case 'msgs':
                $this->userMsgs();
                break;
            default:
                die('User query Error 404: Page Not Found');
                break;
        }
    }
}