<?php
class StockController extends CategoryService implements Controller{
    function __construct(){
        parent::__construct();
    }

    public function showMain(){
        $productsrv = new ProductService();

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
        $this->assign('uId', $_SESSION[MD_OWNER]);
        $this->assign('items', $productsrv->getProducts());
        $this->assign('active', 'stock');
        $this->assign('title', 'Stock Clearance');
        $this->display('category/main.tpl');
    }

    function run(){
        $qry = isset($_REQUEST['query']) ? trim(filter_input(INPUT_GET, 'query')) : NULL;
        switch($qry){
            case '':
            case NULL:
                $this->showMain();
                break;
            default:
                die('404');
                break;
        }
    }
}