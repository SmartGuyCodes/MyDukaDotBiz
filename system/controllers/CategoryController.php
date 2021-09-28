<?php

/**
 * Created by PhpStorm.
 * User: NZIOKI
 * Date: 1/25/2016
 * Time: 8:11 PM
 */
class CategoryController extends ProductService implements Controller{
    function __construct(){
        parent::__construct();
    }

    private function showCategories(){
        $this->display('category/categories.tpl');
    }

    private function showDigital(){
        $this->display('category/digital.tpl');
    }

    private function showFashion(){
        $this->display('category/fashion.tpl');
    }

    private function showSports(){
        $this->display('category/sports.tpl');
    }

    private function showFurniture(){
        $this->display('category/furniture.tpl');
    }

    private function showJewelry(){
        $this->display('category/jewelry.tpl');
    }

    function run(){
        $qry = isset($_REQUEST['query']) ? trim(filter_input(INPUT_GET, 'query')) : NULL;
        switch ($qry) {
            case NULL:
            case 'default':
                $this->showCategories();
                break;
            case 'digital':
                $this->showDigital();
                break;
            case 'fashion':
                $this->showFashion();
                break;
            case 'sports':
                $this->showSports();
                break;
            case 'furniture':
                $this->showFurniture();
                break;
            case 'jewelry':
                $this->showJewelry();
                break;
            default:
                die('404');
                break;
        }
    }
}