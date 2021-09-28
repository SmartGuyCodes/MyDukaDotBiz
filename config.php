<?php
# Define Globals!
if (!defined('__ROOT__')) {
    # Path Separator!
    define('PS', PATH_SEPARATOR);

    # Directory separator!
    define('DS', DIRECTORY_SEPARATOR);

    # Root Directory!
    define('__ROOT__', __DIR__);

    # System Directory!
    define('__SYS__', __ROOT__ . sprintf('%1$ssystem%1$s', DS));

    # API Directory!
    define('__APIS__', __SYS__ . sprintf('apis%1$s', DS));

    # Set Include path!
    set_include_path(
        get_include_path() . PS
        . __SYS__ . sprintf('apis%1$s', DS) . PS
        . __SYS__ . sprintf('controllers%1$s', DS) . PS
        . __SYS__ . sprintf('services%1$s', DS) . PS
        . __SYS__ . sprintf('utilities%1$s', DS) . PS
    );

    # Auto-load classes!
    spl_autoload_register(function ($class){
        # Exclude smarty classes, already loaded in smarty main class!        
        if ((preg_match("/smarty/i", $class) && $class !== "SmartyPesa") || $class === 'finfo') {
            return;
        }elseif (preg_match('/paypal/i', $class)) {
            $class = str_replace("\\", "/", $class);
        }

        $file = "$class.php";
        return include_once $file;
    });

    # Register error handler!
    error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

    # This is crazy but, set phone validation regex!
    define('PHONE_REGEX', '/^\+2547(?:[0-9] ?){7}[0-9]$/');

    # Set cdn path
    define('CDN', 'http://dev.my-duka.com/cdn/');

    # Set the MyDuka domain...
    define('MD_D', 'http://dev.my-duka.com/');

    # Set session user identifier!
    define('MD_OWNER', 'shopper');

    # Set session admin identifier!
    define('MD_ADMIN', '_admin');

    # Set Logo
    define('MYDUKA_LOGO', CDN . 'logo.png');

    # Set your shop's address
    define('DUKA_ADDRESS', "My Duka Dot Biz, Jampark Plaza, Suite 14, Ngong' Road, Nairobi, Kenya.");

    # Set uploads url
//    define('DUKA_UPLOADS', 'https://www.myduka.biz/uploads/');
    // define('DUKA_UPLOADS', 'http://uploads.myduka.com/');
   define('DUKA_UPLOADS', 'uploads/');

    # Set copyright statement
    define('COPY', 'My-Duka Dot Biz &copy; 2021. All Rights Reserved.');

    #Define admin database stuff
    define('DBHOST', 'localhost');
    define('DBNAME', 'liduka');
    define('DBUSER', 'phpmyadmin');
    define('DBPWD', 'FuckYou!'); //admin2016!

    #MPESA PAYMENT DETAILS
    define('PAYBILL_NUMBER', '750878');
    define('PASSKEY', '684a20e4c57cbfce520db917f85aeb60eb271c146780573811e3c81672a0e917');

    #PAYPAL PAYMENT KEYS
    define('PAYPAL_CLIENT_ID','AVBqCcF3kXwDCvnHf4SF-6kUZtQcGtFBgpysIsg8B6WHyMI46dth_jpEBC2XvKFeuH732QmT6Y0Nxcwx');
    define('PAYPAL_CLIENT_SECRET','EExuIrdXtXzKPKzt6I66HAy1cjCQnFmyYH9fb7tMwuSibePNt5KjSbMQW6f8Sb8VYjyGkZXLGqcxSoUk');

    #facebook API Credentials
    define('FB_ID', '1666396280307609');
    define('FB_SECRET', 'd07e0de87b61704feb34c4cef3d1e834');
    define('FB_GRAPH_VERSION', 'v2.2');

    # Seed the random generator!
    mt_srand((double)microtime() * 1000);

    # Set session name!
    session_name('_myduka');
    session_start();
}