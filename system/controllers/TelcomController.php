<?php
class TelcomController extends CategoryService implements Controller{
    function __construct(){
        parent::__construct();
    }

    public function showMain(){
        $productsrv = new ProductService();
        $this->assign('items', $productsrv->getCategoryItems('mobile-and-tablets'));

        $cart = $_SESSION['cartProducts'];
        $total = 0;
        foreach($cart as $key => $cartItem){
            $price = $cartItem['price'];
            $qty = $cartItem['qty'];
            $subTotal = $price * $qty;
            $total = $subTotal + $total;
        }

        $this->assign('active', 'telcom');
        $this->assign('title', 'Home');
        $this->assign('total', $total);
        $this->assign('mycart', $cart);
        $this->assign('uId', $_SESSION[MD_OWNER]);
        $this->assign('title', 'Mobile & Tablets');
        $this->display('category/main.tpl');
    }

    public function showSubCategory($sub){
        $this->assign('title', 'Telcom');
        $this->assign('sub', $sub);
        $this->display('category/subCategory.tpl');
    }

    function run(){
        $qry = isset($_REQUEST['query']) ? trim(filter_input(INPUT_GET, 'query')) : NULL;
        switch($qry){
            case '':
            case NULL:
                $this->showMain();
                break;
            case 'sub':
                $this->showSubCategory($_REQUEST['info']);
                die;
            default:
                die('404');
                break;
        }
    }
}