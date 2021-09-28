<?php
/*
 * PHP*NG7: http://www.phpgang.com/php7-powering-the-web-a-whole-lot-better_3281.html
 */
include_once 'config.php';
ob_start("ob_gzhandler");

# Get module!
$module = filter_input(INPUT_GET, 'module');

# Init controller object!
$controller = null;

# List global modules
$globalmodules = [
    'bids',
    'about',
    'logout',
    'support',
    'landing',
    'access',
    'user',
    'cart',
    'products',
    'sudo',
    'search',
    'order',
    'newsletter',
    'career',
    'support',
    'blogs',
    'blog',
    'offers',
    'cart',
    'review',
    'payments'
];

# Check if is global module
if (in_array($module, $globalmodules)) {
    if ($module == 'landing') {
        $controller=new LandingController();
    }
    elseif ($module == 'search') {
        $controller=new SearchController();
    }
    elseif ($module == 'sudo') {
        $controller=new AdminMasterController();
    }
    elseif($module == 'access'){
        $controller = new AccessController();
    }
    elseif($module == 'cart'){
        $controller = new CartController();
    }
    elseif($module == 'products'){
        $controller = new ProductController();
    }
    elseif($module == 'order'){
        $controller = new OrderController();
    }
    elseif($module == 'stock'){
        $controller = new StockController();
    }
    elseif($module == 'newsletter'){
        $controller = new NewsLetterController();
    }
    elseif($module == 'career'){
        $controller = new CareerController();
    }
    elseif($module == 'support'){
        $controller = new SupportController();
    }
    elseif($module == 'blogs' || $module == 'blog'){
        $controller = new BlogController();
    }
    elseif($module == 'offers'){
        $controller = new OffersController();
    }
    elseif ($module == 'about') {
        $controller = new AboutusController();
    }
    elseif ($module == 'review') {
        $controller = new ReviewController();
    }
    elseif ($module == 'user') {
        $controller = new UserController();
    }
    elseif ($module == 'payments') {
        $controller = new PaymentController();
    }
    elseif ($module == 'bids') {
        $controller = new BidController();
    }
    else{
        $controller = new ErrorController();
    }
}
elseif (!isset($_SESSION[MD_OWNER])) {
    $controller = new LandingController();
}
else {
    # Route!
    switch ($module) {
        case '' :
        case 'landing' :
            $controller = new LandingController();
            break;
        case 'user' :
            $controller = new UserController();
            break;
        case 'products' :
            $controller = new ProductController();
            break;
        case 'cart' :
            $controller = new CartController();
            break;
        case 'offers':
            $controller = new OffersController();
            break;
        case 'settings' :
            $controller = new SettingsController();
            break;
        case 'search' :
            $controller = new SearchController();
            break;
        case 'order' :
            $controller = new OrderController();
            break;
        case 'payments' :
            $controller = new PaymentController();
            break;
        case 'bids' :
            $controller = new BidController();
            break;
        case 'stock':
            $controller=new StockController();
            break;
        case 'review':
            $controller=new ReviewController();
            break;
        case 'support':
            $controller=new SupportController();
            break;
        case 'sudo':
            $controller=new AdminMasterController();
            break;
        default :
            die("Index module Error 404: Page Not Found");
            break;
    }
}

# Kaboom!
$controller->run();