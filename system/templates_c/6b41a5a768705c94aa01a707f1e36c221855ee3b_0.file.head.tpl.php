<?php
/* Smarty version 3.1.29-dev/14, created on 2021-06-24 07:56:48
  from "/var/www/html/dev.my-duka.com/system/templates/shared/head.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29-dev/14',
  'unifunc' => 'content_60d41ea0a13d96_88269236',
  'file_dependency' => 
  array (
    '6b41a5a768705c94aa01a707f1e36c221855ee3b' => 
    array (
      0 => '/var/www/html/dev.my-duka.com/system/templates/shared/head.tpl',
      1 => 1624514200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:users/accessModal.tpl' => 1,
    'file:cart/modals.tpl' => 1,
  ),
),false)) {
function content_60d41ea0a13d96_88269236 ($_smarty_tpl) {
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My Duka Dot Biz - <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <meta name="description" content="My Duka Dot Biz a Kenyan online market place. We also offer online advertising for merchants products on our e-commerce platform.Buy digital cameras mobile and tablets, collectibles, kids items, coupons, computer and games, digital cameras, tv and cameras.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <!-- <meta content="utf-8" http-equiv=""> -->
    <meta name="keywords" content="online shopping in kenya, online shopping sites in kenya, online shopping in kenya for clothes, online shopping sites, online shopping websites, online shopping mobile, online shopping shoes, an online shopping site,  an online shopping cart, a website for online shopping, online shopping bags, online shopping best offers, online shopping clothes, online shopping cash on delivery, online shopping cheap, online shopping deals, online shopping electronics, online shopping experience, online shopping for women, online shopping for kids, online shopping for men, online shopping for girls, online shopping fashion, online shopping for clothes, online shopping for shoes, online shopping for dresses, online shopping games, online shopping handbags, online shopping store, online shopping, online mobile shopping, shop, online shopping website, ecommerce, cheap mobile phones, cell phones, phones, mobile phone price, buy mobile phones, phone shop, www.myduka.biz" />
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="referrer" content="unsafe-url">

    <!-- <meta name="keywords" content="Best Electronics, Online Shopping, Buy Mobile Phones, Laptops, Consumer Electronics, My Duka Dot Biz, E-Commerce, M-Commerce" /> -->
    <meta name="msvalidate.01" content="" />
    <meta name="google-site-verification" content="" />

    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
myduka.gif" type="image/gif">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="https://www.myduka.com/cdn/myduka.gif">
    
    <!-- google fonts -->
    <link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

    <!-- all css here -->
    <!-- style css -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
css/animate.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
css/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
css/meanmenu.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
lib/css/nivo-slider.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
lib/css/preview.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
css/style.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
css/responsive.css">
    <!-- modernizr js -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
js/vendor/modernizr-2.8.3.min.js"><?php echo '</script'; ?>
>

    
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <?php echo '<script'; ?>
 type='application/ld+json'>
    {
        "@context":"https://schema.org",
        "@type":"Organization",
        "name":"My Duka Dot Biz",
        "url":"https://www.myduka.biz",
        "sameAs":[
            "https://www.facebook.com/myDUKA.bizOnlineShoppingKE/",
            "https://twitter.com/myDuka_biz"
        ],
        "logo":"https://www.myduka.biz/cdn/logo.png",
        "contactPoint":{
            "@type":"ContactPoint",
            "telephone":"+254 787 735 825",
            "contactType":"customer service"
        }
    }
    <?php echo '</script'; ?>
>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:users/accessModal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cart/modals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<header>
    <!-- header-top-area start-->
    <div class="header-top-area hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-4">
                    <div class="header-box">
                        <i style="color: #0D7478;" class="fa fa-shopping-basket"></i>
                        <h1><a href="/">© My Duka.Biz™</a></h1>
                        <p style="color: #000 !important;">Reliable | Secure | Efficient</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4">
                    <div class="header-box">
                        <i style="color: #0D7478;" class="fa fa-newspaper-o"></i>
                        <h1><a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['blogs']['main'];?>
" target="_blank">Blogs</a></h1>
                        <p style="color: #000 !important;">News and updates</p>
                    </div>
                </div>
                <div class="col-lg-3 hidden-md hidden-sm">
                    <div class="header-box">
                        <i style="color: #0D7478;" class="fa fa-gavel"></i>
                        <h1><a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['bids']['all'];?>
">MyDUKA AUCTION</a></h1>
                        <p style="color: #000 !important;">Our Auction Duka.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4">
                    <div class="header-box money-back">
                        <i style="color: #0D7478;" class="fa fa-user"></i>
                        <h1 style="color: #000 !important;">USER ACCOUNT</h1>
                        <p>
                            <?php if (isset($_smarty_tpl->tpl_vars['uId']->value)) {?>
                                <a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['user']['dashboard'];?>
">Dashboard</a> |
                                
                                <a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['user']['orders'];?>
">Orders</a>
                            <?php } else { ?>
                                <a data-toggle="modal" data-target=".bs-modal-sm">Register</a> |
                                <a data-toggle="modal" data-target=".bs-modal-sm">Login</a>
                            <?php }?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-top-area end-->

    <!-- header-bottom-area start -->
    <div class="header-bottom-area">
        <div class="container">
            <div class="row">
                <div class="header-bottom">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="logo">
                            <a title="myDUKA" href="/">
                                <img src="/cdn/logo.png" alt="My Duka Dot Biz Logo"/>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                        <nav id="navbar-search" class="navbar navbar-default">
                            <div class="nav nav-justified navbar-nav">
                                <form id="myduka-general-search" class="navbar-form navbar-left navbar-main-search-category" role="search" action="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['search']['display'];?>
" method="post" enctype="multipart/form-data" style="margin-top: 20px;">
                                    <div id="duka-search-wrapper" class="form-group ui-widget">
                                        <input id="duka-search" name="search-item" class="form-control auto" value="" type="text" placeholder="Search the Entire Store..."/>
                                        <button id="search-btn" class="navbar-main-search-submit">
                                            <i style="color: #ffffff;" class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="cart">
                            <a href="#">
                                <div class="cart-icon">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
img/cart/icon-cart.png" alt="" />
                                    <?php if (isset($_smarty_tpl->tpl_vars['mycart']->value) || empty($_smarty_tpl->tpl_vars['mycart']->value)) {?>
                                        <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['mycart']->value);?>
</span>
                                    <?php } else { ?>
                                        <span class="badge">0</span>
                                    <?php }?>
                                </div>
                                <div class="cart-text">
                                    my cart :<br>
                                    <span>KES. <?php echo number_format($_smarty_tpl->tpl_vars['total']->value,2,".",",");?>
</span>
                                </div>
                            </a>
                            <div class="cart-dawn">
                                <?php if (isset($_smarty_tpl->tpl_vars['mycart']->value)) {?>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['mycart']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                                        <div class="cart-dawn-single">
                                            <div class="cart-single-img">
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['profile']).(($_smarty_tpl->tpl_vars['item']->value['id']));?>
" target="_blank">
                                                    <img src="<?php echo ($_smarty_tpl->tpl_vars['uploads']->value).(($_smarty_tpl->tpl_vars['item']->value['image']));?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" />
                                                </a>
                                            </div>
                                            <div class="cart-single-text">
                                                <h4>
                                                    <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['profile']).(($_smarty_tpl->tpl_vars['item']->value['id']));?>
" target="_blank">
                                                        <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

                                                    </a>
                                                </h4>
                                                <span><strong><?php echo $_smarty_tpl->tpl_vars['item']->value['qty'];?>
</strong> x</span>
                                                <span class="new-price"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['price'],2,".",",");?>
/-</span>
                                            </div>
                                            
                                                
                                            
                                        </div>
                                    <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
                                    <div class="cart-bottom-single">
                                    <p>
                                        Total:
                                        <span class="new-price"><?php echo number_format($_smarty_tpl->tpl_vars['total']->value,2,".",",");?>
/=</span>
                                    </p>
                                    <div class="add-to-cart">
                                        <a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['cart']['checkout'];?>
">Checkout</a>
                                    </div>
                                </div>
                                <?php } else { ?>
                                    <div class="cart-dawn-single">
                                        <p>0 Items in your cart. Go <a href="/">shopping</a></p>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="top-menu hidden-xs">
                            <ul>
                                <li>
                                    <a href="#">My Account
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul>
                                        <?php if (isset($_smarty_tpl->tpl_vars['uId']->value)) {?>
                                            <li><a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['user']['dashboard'];?>
">Dashboard</a></li>
                                            
                                            <li><a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['user']['orders'];?>
">Orders</a></li>
                                            <li><a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['access']['logout'];?>
">Logout</a></li>
                                        <?php } else { ?>
                                            <li><a data-toggle="modal" data-target=".bs-modal-sm">Register</a></li>
                                            <li><a data-toggle="modal" data-target=".bs-modal-sm">Login</a></li>
                                        <?php }?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-bottom-area end -->

    <!-- main-menu-area start -->
    <div id="sticker" class="main-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="menu-full">
                        <div class="main-menu hidden-xs">
                            <nav>
                                <ul>
                                    <li>
                                        <a class="mainmenu-icon" href="/">
                                            <i class="fa fa-home"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <!-- <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['category']).(('home-and-living'));?>
">
                                            
                                            Household
                                        </a> -->
                                        <div class="mega-menu mega-one">
                                            <span>
                                                <a class="mega-menu-title" href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['sub_sub_category']).(('home-appliances'));?>
">
                                                    <span class="mega-inner">Home appliances</span>
                                                </a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('air-conditioners'));?>
">Air Conditioners</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('fans-and-air-coolers'));?>
">Fans & Air Coolers</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('vacuum-cleaners'));?>
">Vacuum Cleaners</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('washing-machines'));?>
">Washing Machines</a>
                                            </span>
                                            <span>
                                                <a class="mega-menu-title" href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['sub_sub_category']).(('kitchenware'));?>
">
                                                    <span class="mega-inner">Kitchenware</span>
                                                </a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('cookware'));?>
">Cookware</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('dishwashers'));?>
">Dishwashers</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('vacuum-flasks'));?>
">Vacuum Flasks</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('microwaves'));?>
">Microwaves</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('refrigerators'));?>
">Refrigerators</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('utencils'));?>
">Utensils</a>
                                            </span>
                                            <span>
                                                <a class="mega-menu-title" href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['sub_sub_category']).(('furniture'));?>
">
                                                    <span class="mega-inner">Furniture</span>
                                                </a>
                                                
                                                
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('bedroom'));?>
">Bedroom</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('benches-and-stools'));?>
">Benches & Stools</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('cabinets-and-cupboards'));?>
">Cabinets & Cupboards</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('chairs-desks-and-home-office'));?>
">Chairs, Desks & Home Office</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('entertainment-units-and-tv-stands'));?>
">Entertainment Units & TV Stands</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('frames-and-covers'));?>
">Frames & Covers</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('sofas-lovecoats-and-chaises'));?>
">Sofas, Lovecoats & Chaises</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('tables-and-dining-sets'));?>
">Tables &Dining Sets</a>
                                            </span>
                                            <span>
                                                <a class="mega-menu-title" href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['sub_sub_category']).(('bedding'));?>
">
                                                    <span class="mega-inner">Bedding</span>
                                                </a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('blankets-and-throws'));?>
">Blankets & Throws</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('bed-pillows'));?>
">Bed Pillows</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('bed-in-a-bag'));?>
">Bed-in-a-bag</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('mattress'));?>
">Mattress</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('pillow-cases'));?>
">Pillow Cases</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('sheets'));?>
">Sheets</a>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['category']).(('computers-and-gaming'));?>
">
                                            <i class="fa fa-television"></i>
                                            Computers
                                        </a>
                                        <div class="mega-menu mega-two">
                                            <span>
                                                <a class="mega-menu-title" href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['sub_sub_category']).(('computers'));?>
">
                                                    <span class="mega-inner">Computers</span>
                                                </a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('laptops'));?>
">Laptops</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('desktops'));?>
">Desktops</a>
                                            </span>
                                            <span>
                                                <a class="mega-menu-title" href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['sub_sub_category']).(('storage'));?>
">
                                                    <span class="mega-inner">Storage</span>
                                                </a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('flashdrives'));?>
">Flash Drives</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('external-hard-disks'));?>
">External HD</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('memory-cards'));?>
">Memory Cards</a>
                                            </span>
                                            <span>
                                                <a class="mega-menu-title" href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['sub_sub_category']).(('printers-and-scanners'));?>
">
                                                    <span class="mega-inner">Printers & Scanners</span>
                                                </a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('deskjet-printers'));?>
">Deskjet Printers</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('laserjet-printers'));?>
">Laserjet Printers</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('multifunction-printers'));?>
">Multifunction Printers</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('cartridges'));?>
">Cartridges</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('toners'));?>
">Toners</a>
                                            </span>
                                            <span>
                                                <a class="mega-menu-title" href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['sub_sub_category']).(('computer-accessories'));?>
">
                                                    <span class="mega-inner">Accessories</span>
                                                </a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('softwares'));?>
">Softwares</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('webcams'));?>
">Webcams</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('computer-speakers'));?>
">Computer Speakers</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('keyboards'));?>
">Keyboards</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('mouse'));?>
">Mouse</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('laptop-skins'));?>
">Laptop Skins</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('laptop-bags'));?>
">Laptop Bags</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('adapters'));?>
">Adapters</a>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('laptops'));?>
"><i class="fa fa-laptop"></i> Laptops</a>  
                                    </li>
                                    <li>
                                        <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('desktops'));?>
"><i class="fa fa-desktop"></i> Desktops</a>  
                                    </li>
                                    <li>
                                        <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['sub_sub_category']).(('gaming'));?>
">
                                            <i class="fa fa-gamepad"> Gaming</i>
                                        </a>   
                                        <div class="mega-menu mega-two">                                     
                                            <span>
                                                <a class="mega-menu-title" href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('sony-playstation'));?>
">
                                                    <span class="mega-inner">Sony Playstation</span>
                                                </a>

                                                <a  class="mega-menu-title" href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('xbox'));?>
">
                                                    <span class="mega-inner">XBox</span>
                                                </a>
                                                <a  class="mega-menu-title" href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('handheld-consoles'));?>
">
                                                    <span class="mega-inner">Handheld Consoles</span>
                                                </a>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['category']).(('tvs-and-audio'));?>
">
                                            <i class="fa fa-film"></i>
                                            Tv
                                        </a>
                                        <div class="mega-menu mega-two">
                                            <span>
                                                <a class="mega-menu-title" href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['sub_sub_category']).(('tvs'));?>
">
                                                    <span class="mega-inner">TVs & Audio</span>
                                                </a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('analogue-tvs'));?>
">Analogue TVs</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('digital-tvs'));?>
">Digital TVs</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('smart-tvs'));?>
">Smart TVs</a>
                                            </span>   
                                            <span>
                                                <a class="mega-menu-title" href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['sub_sub_category']).(('home-audio'));?>
">
                                                    <span class="mega-inner">Home Audio</span>
                                                </a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('home-theatre-systems'));?>
">Home Theatre Systems</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('sub-woofers'));?>
">Sub-woofers</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('sound-bars'));?>
">Sound bars</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('dvd-players'));?>
">DVD Players</a>
                                            </span>
                                            <span>
                                                <a class="mega-menu-title" href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['sub_sub_category']).(('tv-and-audio-accessories'));?>
">
                                                    <span class="mega-inner">Accessories</span>
                                                </a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('hdmi-cables'));?>
">HDMI Cables</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('remotes'));?>
">Remotes</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('surge-protectors-and-power'));?>
">Surge Protectors & Power</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('speaker-accessories'));?>
">Speaker Accessories</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('digital-audio-cables'));?>
">Digital Audio Cables</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('av-component-racks'));?>
">A/V Component Racks</a>
                                            </span>
                                        </div>
                                    </li>
                                    <li><a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['category']).(('mobile-and-tablets'));?>
"><i class="fa fa-mobile"></i> Mobile</a>
                                        <div class="mega-menu mega-two">
                                            <span>
                                                <a class="mega-menu-title" href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['sub_sub_category']).(('mobile'));?>
">
                                                    <span class="mega-inner">Mobile</span>
                                                </a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('smart-phones'));?>
">Smart Phones</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('feature-phones'));?>
">Feature Phones</a>
                                            </span>
                                            <span>
                                                <a class="mega-menu-title" href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['sub_sub_category']).(('tablets'));?>
">
                                                    <span class="mega-inner">Tablets</span>
                                                </a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('tablets'));?>
">Tablets</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('tablet-accessories'));?>
">Tablet Accessories</a>
                                            </span>
                                            <span>
                                                <a class="mega-menu-title" href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['sub_sub_category']).(('phablets'));?>
">
                                                    <span class="mega-inner">Phablets</span>
                                                </a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('phablets'));?>
">Phablets</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('phablets-accessories'));?>
">Phablets Accessories</a>
                                            </span>
                                            <span>
                                                <a class="mega-menu-title" href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['sub_sub_category']).(('mobile-accessories'));?>
">
                                                    <span class="mega-inner">Accessories</span>
                                                </a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('earphones'));?>
">Earphones</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('cables-and-chargers'));?>
">Cables & Chargers</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('screen-guards'));?>
">Screen Guards</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('selfie-sticks'));?>
">Selfie Sticks</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('power-banks'));?>
">Power Banks</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('cases-and-covers'));?>
">Cases & Covers</a>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['category']).(('apple'));?>
">
                                            <i class="fa fa-apple"></i> Apple</a>
                                        <div class="mega-menu mega-two">
                                            <span>
                                                <a class="mega-menu-title" href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['sub_sub_category']).(('apple-computers'));?>
">
                                                    <span class="mega-inner">Computers</span>
                                                </a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('macbook'));?>
">MacBook</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('macbook-air'));?>
">MacBook Air</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('macbook-pro'));?>
">MacBook Pro</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('imac'));?>
">iMac</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('mac-pro'));?>
">Mac Pro</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('mac-mini'));?>
">Mac Mini</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('mac-accessories'));?>
">Mac Accessories</a>
                                            </span>
                                            <span>
                                                <a class="mega-menu-title" href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['sub_sub_category']).(('apple-mobile'));?>
">
                                                    <span class="mega-inner">Mobile</span>
                                                </a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('iphone-6s'));?>
">iPhone 6S</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('iphone-6'));?>
">iPhone 6</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('iphone-se'));?>
">iPhone SE</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('iphone-5s'));?>
">iPhone 5S</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('iphone-5'));?>
">iPhone 5</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('iphone-4s'));?>
">iPhone 4S</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('iphone-4'));?>
">iPhone 4</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('ipad-pro'));?>
">iPad Pro</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('ipad-air'));?>
">iPad Air</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('ipad-mini-4'));?>
">iPad Mini 4</a>
                                                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['mini_category']).(('ipad-mini-2'));?>
">iPad Mini 2</a>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main-menu-area end -->

    <!-- mobile-menu-area start -->
    
        
            
                
                    
                        
                            
                                
                                    
                                
                                
                                    
                                        
                                            
                                                
                                                
                                                
                                            
                                        
                                        
                                            
                                                
                                                
                                                
                                            
                                        
                                        
                                            
                                                
                                                
                                                
                                            
                                        
                                        
                                            
                                                
                                                
                                                
                                            
                                        
                                    
                                
                                
                                    
                                        
                                            
                                                
                                                
                                                
                                            
                                        
                                        
                                            
                                                
                                                
                                                
                                            
                                        
                                        
                                            
                                                
                                                
                                                
                                            
                                        
                                    
                                
                                
                                    
                                        
                                            
                                                
                                                
                                                
                                            
                                        
                                        
                                            
                                                
                                                
                                                
                                            
                                        
                                        
                                            
                                                
                                                
                                                
                                            
                                        
                                    
                                
                                
                                    
                                        
                                        
                                        
                                    
                                
                                
                                    
                                        
                                            
                                                
                                                
                                                
                                            
                                        
                                        
                                            
                                                
                                                
                                                
                                            
                                        
                                        
                                            
                                                
                                                
                                                
                                            
                                        
                                    
                                
                                
                                    
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                    
                                
                            
                        
                    
                
            
        
    
    <!-- mobile menu area end -->
</header><?php }
}
