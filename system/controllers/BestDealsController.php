<?php
class BestDealsController extends CategoryService implements Controller{
    function __construct(){
        parent::__construct();
    }

    public function showMain(){
        $this->assign('title', 'Best Deals');
        $this->display('category/main.tpl');
    }

    public function showSubCategory($sub){
        $this->assign('title', 'Best Deals');
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