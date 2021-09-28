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

Class CartController extends ProductService implements Controller{
    function __construct () {
        parent::__construct();
    }

    public function add(){
        $type = trim(filter_input(INPUT_GET, 'query'));
        $img = trim(filter_input(INPUT_POST, 'image'));
        $id = trim(filter_input(INPUT_POST, 'id'));
        $name = trim(filter_input(INPUT_POST, 'name'));
        $price = trim(filter_input(INPUT_POST, 'price'));
        $qty = trim(filter_input(INPUT_POST, 'qty'));
        $sku = trim(filter_input(INPUT_POST, 'sku'));
        $descr = trim(filter_input(INPUT_POST, 'details'));
        $newProduct = array();

        //add to the cart session
        if($qty <= 0 || $qty == ''){
            $results['msg'] = 'No item quantity';
        }
        else {
            if (isset( $type ) && $type == 'add') {
                foreach ($_POST as $key => $value) {
                    $newProduct[$key] = filter_var ($value, FILTER_SANITIZE_STRING);
                }

                //remove unnecessary variables
                unset( $newProduct[ 'query' ] );

                //add post to new array product
                $newProduct[ 'id' ] = $id;
                $newProduct[ 'name' ] = $name;
                $newProduct[ 'price' ] = $price;
                $newProduct[ 'image' ] = $img;
                $newProduct[ 'qty' ] = $qty;
                $newProduct[ 'sku' ] = $sku;
                $newProduct[ 'details' ] = $descr;

                //now set the session
                if (isset( $_SESSION[ "cartProducts" ] )) {
                    if (isset( $_SESSION[ 'cartProducts' ][ $id ] )) {
                        unset(  $_SESSION[ 'cartProducts' ][ $id ] );
                    }
                }

                $_SESSION[ 'cartProducts' ][ $id ] = $newProduct;

                $totalItems = count ($_SESSION[ 'cartProducts' ]);
                $results = json_encode ([ 'items' => $totalItems, 'cart' => $newProduct]);
            }
            header('Content-type: application/json');
            echo $results;
        }
    }

    public function update(){
        //update item quantity in product session
        $qty = $_REQUEST['quantity'];
        if(isset($qty) && is_array($qty)){
            foreach($qty as $key => $value){
                $_SESSION["cartProducts"][$key]["qty"] = $value;
            }
        }
    }

    public function checkout(){
        #create an order id if the user session is not empty
//        if(!empty($_SESSION['shopper'])){
            $orderSrv = new OrderService();
            $this->assign('orderID', $orderSrv->orderTrackGenerator());
//        }

        $cart = $_SESSION['cartProducts'];
        $total = 0;
        foreach($cart as $cartItem){
            $price = $cartItem['price'];
            $qty = $cartItem['qty'];
            $subTotal = $price * $qty;
            $total = $subTotal + $total;
        }

        $this->assign('title', 'Shopping Cart');
        $this->assign('total', $total);
        $this->assign('mycart', $cart);
        $this->assign('uId', $_SESSION[MD_OWNER]);
        $this->display('cart/checkout.tpl');
    }

    public function getOptionsModal(){
        $this->display('cart/checkoutOptions.tpl');
    }

    public function checkoutOption() {
        $cart = $_SESSION['cartProducts'];
        $total = 0;
        foreach($cart as $cartItem){
            $price = $cartItem['price'];
            $qty = $cartItem['qty'];
            $subTotal = $price * $qty;
            $total = $subTotal + $total;
        }

        $this->assign('title', 'Buying Options');
        $this->assign('total', $total);
        $this->assign('mycart', $cart);
        $this->assign('uId', $_SESSION[MD_OWNER]);
        $this->display ('cart/checkout.tpl');
    }

    public function removeProduct(){
        $product_code = trim(filter_input(INPUT_GET, 'info'));

        if(isset($_SESSION["cartProducts"][$product_code])){
            unset($_SESSION["cartProducts"][$product_code]);
        }

        $total_items = count($_SESSION["cartProducts"]);
        die(json_encode(array('items'=>$total_items)));
    }
    
    //add to wishlist
    private function addToWishList(){
        $result = [];
        $user = trim(filter_input(INPUT_POST, 'user'));
        $product = trim(filter_input(INPUT_POST, 'product'));
        $name = trim(filter_input(INPUT_POST, 'name'));
        $price = trim(filter_input(INPUT_POST, 'price'));
        
//        $res = $this->wishExists($user, $product);
//        echo'<pre>'; print_r($res); die;
        
//        if($this->wishExists($user, $product) > 0){
//            echo 'Already added to wishlist';
//        }
//        else {
            //before inserting check if it already exists in the wishlist
            if($this->insertWish($user, $product, $name, $price)){
                $result['msg'] = "Success adding item to wishlist.";
            }
            else{
                $result['msg'] = 'Failed';
            }
//        }

        header('Content-type: application/json');
        echo json_encode($result);
    }
    
    public function getWishlistCount(){
        $this->assign('wishcount', $this->getWishlist(trim(INPUT_GET, 'info')));
    }
    
    //Buy now option
    private function buyNowModal(){
        $pId = trim(filter_input(INPUT_GET, 'info'));
        $product = $this->getProductById($pId);
//        echo '<pre>'; print_r($product); die;
        $this->assign('product', $product);
        $this->assign('pId', $pId);
        $this->display('cart/buy.tpl');
    }
    
    //add buy now item to the urgent orders tbl
    private function urgentOrder(){
        $ordersrv = new OrderService();
        $result = [];
        #client details
        $cname = trim(filter_input(INPUT_POST, 'cname'));
        $cemail = trim(filter_input(INPUT_POST, 'cemail'));
        $cphone = trim(filter_input(INPUT_POST, 'cphone'));
        $clocation = trim(filter_input(INPUT_POST, 'clocation'));
        $shipping = Utils::getNumerals($clocation);
        $shippingFee = $shipping[0];

        #product info
        $pId = trim(filter_input(INPUT_GET, 'info'));
        $pname = trim(filter_input(INPUT_POST, 'pname'));
        $pimg = trim(filter_input(INPUT_POST, 'pimg'));
        $pprice = trim(filter_input(INPUT_POST, 'pprice'));
        $pqty = trim(filter_input(INPUT_POST, 'pqty'));
        $track = $ordersrv->orderTrackGenerator();

        if($this->insertUrgentOrder($pId, $pname, $pimg, $pprice, $cname, $cemail, $cphone, $clocation, $pqty)){
            #send mail to user and customer care
            $this->assign('name', $cname);
            $this->assign('phone', $cphone);

            $this->assign('emblem', 'www.myduka.biz/cdn/logo.png');
            $this->assign('copy', Utils::myDukaCopyright());
            $this->assign('address', DUKA_ADDRESS);
            $this->assign('userMail', $cemail);

            $subject = "URGENT ORDER";
            $body = $this->fetch('emails/urgentOrder.tpl');
            $altBody = "Urgent Order Confirmation";

            $serviceSubject = "Urgent Order Confirmation";
            $serviceBody = $this->fetch('emails/urgentOrderCustmerCare.tpl');
            $serviceMail = 'customercare@myduka.biz';

            $itemImg = trim(filter_input(INPUT_POST, 'pimg'));
            $itemDescr = trim(filter_input(INPUT_POST, 'pdesc'));
            $itemQty = trim(filter_input(INPUT_POST, 'pqty'));
            $itemPrice = trim(filter_input(INPUT_POST, 'pprice'));

            #send mail to user then to the customer care
            $MailService = new MailService();
            if($MailService->mydukaMailer($subject, $cemail, $body, $altBody)){
//                $MailService->mydukaMailer($serviceSubject, $serviceMail, $serviceBody, $altBody);
                $MailService->mydukaMailer($serviceSubject, 'myduka247@gmail.com', $serviceBody, $altBody);

                #Order Details
                $this->assign('itemImg', $itemImg);
                $this->assign('itemDescr', $itemDescr);
                $this->assign('itemQty', $itemQty);
                $this->assign('itemPrice', $itemPrice);
                $this->assign('shipping', $shippingFee);
                $totalCost = $itemPrice * $itemQty;

                #Mail Details
                $this->assign('dukad', MD_D);
                $this->assign('user', $cname);
                $this->assign('track', $track);
                $this->assign('cost', $totalCost);
                $this->assign('phone', $cphone);
                $this->assign('emblem', 'www.myduka.biz/cdn/logo.png');
                $this->assign('copy', Utils::myDukaCopyright());
                $this->assign('address', DUKA_ADDRESS);
                $subject = "Your order #" .$track. " has been processed.";
                $body = $this->fetch('emails/purchase.tpl');

                $altBody = "Purchase Confirmation";
                $serviceSubject = "Urgent Order #". $track ." Purchase Confirmation";
                $serviceBody = $this->fetch('emails/purchaseService.tpl');
                $serviceMail = 'customercare@myduka.biz';

                $MailService->mydukaMailer($serviceSubject, $serviceMail, $serviceBody, $altBody);
                $MailService->mydukaMailer($subject, $cemail, $serviceBody, $altBody);
            }

            $result['msg'] = 'Your order has been received. Our manager will contact you as soon as possible.';
        }
        else{
            $result['msg'] = 'Error.Try again.';
        }

        header('Content-type: application/json');
        echo json_encode($result);
    }

    //Bid now option
    private function bidNowModal(){
        $pId = trim(filter_input(INPUT_GET, 'info'));
        $product = $this->getProductById($pId);

        $bidPrices = [];
        $bidsrv = new BidService();
        $bids = $bidsrv->getBidsByProductID($pId);
        foreach($bids as $key => $val) {
            $p = $val['bidderPrice'];
            $bidPrices[]=$p;
        }
//        echo'<pre>'; print_r(); die;
        $this->assign('highestBid', max($bidPrices));
        $this->assign('product', $product);
        $this->assign('pId', $pId);
        $this->display('cart/bid.tpl');
    }

    //submit bid
    private function bidNow(){
        $result = [];
        $bidsvce = new BidService();
        $pId = trim(filter_input(INPUT_GET, 'info'));
        $name = trim(filter_input(INPUT_POST, 'bname'));
        $phone = trim(filter_input(INPUT_POST, 'bphone'));
        $email = trim(filter_input(INPUT_POST, 'bemail'));
        $price = trim(filter_input(INPUT_POST, 'bidPrice'));

        try{
            #get its bids
            $bidPrices = [];
            $q = trim(filter_input(INPUT_GET, 'info'));
            $bids = $bidsvce->getBidsByProductID($q);
            foreach($bids as $key => $val) {
                $p = $val['bidderPrice'];
                $bidPrices[] = $p;
            }

            #get the highest bid
            $highestBid = max($bidPrices);

            #compare the highest bid with the input bid, then display the corresponding errors.
            if($price < $highestBid){
                $result['msg'] = 'Error. Your bid is lower than the highest bid.';
            }
            elseif($price == $highestBid){
                $result['msg'] = "Error. Your bid cannot be equal to the highest bid.";
            }
            elseif( $price > $highestBid){
                if($bidsvce->addBid($pId, $name, $email, $phone, $price)){
                    #send mail to user and...
                    $this->assign('name', $name);
                    $this->assign('phone', $phone);
                    $this->assign('price', $price);
                    $this->assign('emblem', 'www.myduka.biz/cdn/logo.png');
                    $this->assign('copy', Utils::myDukaCopyright());
                    $this->assign('address', DUKA_ADDRESS);
                    $this->assign('userMail', $email);

                    $subject = "NEW BID";
                    $body = $this->fetch('emails/newBidNotify.tpl');
                    $altBody = "New Bid Notification";

                    #send mail to user then to the customer care
                    $MailService = new MailService();
                    $toBidder = $MailService->mydukaMailer($subject, $email, $body, $altBody);
                    if($toBidder){
                        #now send mail to the  auction agents(auction@myuduka.biz)
                        $this->assign('name', $name);
                        $this->assign('phone', $phone);
                        $this->assign('price', $price);
                        $this->assign('emblem', 'www.myduka.biz/cdn/logo.png');
                        $this->assign('copy', Utils::myDukaCopyright());
                        $this->assign('address', DUKA_ADDRESS);
                        $this->assign('userMail', $email);

                        $subject = "NEW BID";
                        $body = $this->fetch('emails/newBidNotifyAdmin.tpl');
                        $altBody = "New Bid Notification";

                        #send mail to user then to the customer care
                        $MailService = new MailService();
                        $toAuctionAgent = $MailService->mydukaMailer($subject, 'auction@myduka.biz', $body, $altBody);
                        if($toAuctionAgent){
                            $result['msg'] = 'Success. Check your mail for confirmation.';
                        }
                    }
                }
                else{
                    $result['msg'] = 'Error.Try again.';
                }
            }
            else{
                $result['msg'] = 'Unknown error!';
            }
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        header('Content-type: application/json');
        echo json_encode($result);
    }
    
    function run () {
        $qry = trim(filter_input(INPUT_GET, 'query'));
        switch(isset($qry) ? $qry : NULL){
            case 'add':
                $this->add();
                break;
            case 'update':
                $this->update();
                break;
            case 'buy-now-modal':
                $this->buyNowModal();
                break;
            case 'urgent-buy':
                $this->urgentOrder();
                break;
            case 'bid-now-modal':
                $this->bidNowModal();
                break;
            case 'bid-now':
                $this->bidNow();
                break;
            case 'checkout':
                $this->checkout();
                break;
            case 'remove':
                $this->removeProduct();
                break;
            case 'checkout-options':
                $this->getOptionsModal();
                break;
            default:
                die("Cart query error 404");
                break;
        }

    }
}