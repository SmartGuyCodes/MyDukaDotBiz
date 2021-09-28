<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My Duka Dot Biz - {$title}</title>
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

    <link rel="icon" href="{$cdn}myduka.gif" type="image/gif">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="https://www.myduka.com/cdn/myduka.gif">
    
    <!-- google fonts -->
    <link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

    <!-- all css here -->
    <!-- style css -->
    <link rel="stylesheet" href="{$cdn}css/bootstrap.min.css">
    <link rel="stylesheet" href="{$cdn}css/font-awesome.min.css">
    <link rel="stylesheet" href="{$cdn}css/animate.css">
    <link rel="stylesheet" href="{$cdn}css/jquery-ui.min.css">
    <link rel="stylesheet" href="{$cdn}css/meanmenu.min.css">
    <link rel="stylesheet" href="{$cdn}css/owl.carousel.css">
    <link rel="stylesheet" href="{$cdn}lib/css/nivo-slider.css">
    <link rel="stylesheet" href="{$cdn}lib/css/preview.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="{$cdn}css/style.css">
    <link rel="stylesheet" href="{$cdn}css/responsive.css">
    <!-- modernizr js -->
    <script src="{$cdn}js/vendor/modernizr-2.8.3.min.js"></script>

    {*Data tables styler*}
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <script type='application/ld+json'>
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
    </script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

{include file="users/accessModal.tpl"}

{include file="cart/modals.tpl"}

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
                        <h1><a href="/{$globals.blogs.main}" target="_blank">Blogs</a></h1>
                        <p style="color: #000 !important;">News and updates</p>
                    </div>
                </div>
                <div class="col-lg-3 hidden-md hidden-sm">
                    <div class="header-box">
                        <i style="color: #0D7478;" class="fa fa-gavel"></i>
                        <h1><a href="/{$globals.bids.all}">MyDUKA AUCTION</a></h1>
                        <p style="color: #000 !important;">Our Auction Duka.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4">
                    <div class="header-box money-back">
                        <i style="color: #0D7478;" class="fa fa-user"></i>
                        <h1 style="color: #000 !important;">USER ACCOUNT</h1>
                        <p>
                            {if isset($uId)}
                                <a href="/{$globals.user.dashboard}">Dashboard</a> |
                                {*<a href="/{$globals.user.wishlist}">Wishlist</a> |*}
                                <a href="/{$globals.user.orders}">Orders</a>
                            {else}
                                <a data-toggle="modal" data-target=".bs-modal-sm">Register</a> |
                                <a data-toggle="modal" data-target=".bs-modal-sm">Login</a>
                            {/if}
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
                                <form id="myduka-general-search" class="navbar-form navbar-left navbar-main-search-category" role="search" action="/{$globals.search.display}" method="post" enctype="multipart/form-data" style="margin-top: 20px;">
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
                                    <img src="{$cdn}img/cart/icon-cart.png" alt="" />
                                    {if isset($mycart) || empty($mycart)}
                                        <span class="badge">{count($mycart)}</span>
                                    {else}
                                        <span class="badge">0</span>
                                    {/if}
                                </div>
                                <div class="cart-text">
                                    my cart :<br>
                                    <span>KES. {$total|number_format:2:".":","}</span>
                                </div>
                            </a>
                            <div class="cart-dawn">
                                {if isset($mycart)}
                                    {foreach $mycart as $item}
                                        <div class="cart-dawn-single">
                                            <div class="cart-single-img">
                                                <a href="/{$globals.products.profile|cat:($item.id)}" target="_blank">
                                                    <img src="{$uploads|cat:($item.image)}" alt="{$item.name}" title="{$item.name}" />
                                                </a>
                                            </div>
                                            <div class="cart-single-text">
                                                <h4>
                                                    <a href="/{$globals.products.profile|cat:($item.id)}" target="_blank">
                                                        {$item.name}
                                                    </a>
                                                </h4>
                                                <span><strong>{$item.qty}</strong> x</span>
                                                <span class="new-price">{$item.price|number_format:2:".":","}/-</span>
                                            </div>
                                            {*<div class="cart-single-icon">*}
                                                {*<a href="#"><img src="{$cdn}img/gif/remove.gif" alt="" /></a>*}
                                            {*</div>*}
                                        </div>
                                    {/foreach}
                                    <div class="cart-bottom-single">
                                    <p>
                                        Total:
                                        <span class="new-price">{$total|number_format:2:".":","}/=</span>
                                    </p>
                                    <div class="add-to-cart">
                                        <a href="/{$globals.cart.checkout}">Checkout</a>
                                    </div>
                                </div>
                                {else}
                                    <div class="cart-dawn-single">
                                        <p>0 Items in your cart. Go <a href="/">shopping</a></p>
                                    </div>
                                {/if}
                            </div>
                        </div>
                        <div class="top-menu hidden-xs">
                            <ul>
                                <li>
                                    <a href="#">My Account
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul>
                                        {if isset($uId)}
                                            <li><a href="/{$globals.user.dashboard}">Dashboard</a></li>
                                            {*<li><a href="/{$globals.user.wishlist}">Wishlist</a></li>*}
                                            <li><a href="/{$globals.user.orders}">Orders</a></li>
                                            <li><a href="/{$globals.access.logout}">Logout</a></li>
                                        {else}
                                            <li><a data-toggle="modal" data-target=".bs-modal-sm">Register</a></li>
                                            <li><a data-toggle="modal" data-target=".bs-modal-sm">Login</a></li>
                                        {/if}
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
                                        <!-- <a href="/{$globals.products.category|cat:('home-and-living')}">
                                            {*<i class="fa fa-shopping-bag"></i>*}
                                            Household
                                        </a> -->
                                        <div class="mega-menu mega-one">
                                            <span>
                                                <a class="mega-menu-title" href="/{$globals.products.sub_sub_category|cat:('home-appliances')}">
                                                    <span class="mega-inner">Home appliances</span>
                                                </a>
                                                <a href="/{$globals.products.mini_category|cat:('air-conditioners')}">Air Conditioners</a>
                                                <a href="/{$globals.products.mini_category|cat:('fans-and-air-coolers')}">Fans & Air Coolers</a>
                                                <a href="/{$globals.products.mini_category|cat:('vacuum-cleaners')}">Vacuum Cleaners</a>
                                                <a href="/{$globals.products.mini_category|cat:('washing-machines')}">Washing Machines</a>
                                            </span>
                                            <span>
                                                <a class="mega-menu-title" href="/{$globals.products.sub_sub_category|cat:('kitchenware')}">
                                                    <span class="mega-inner">Kitchenware</span>
                                                </a>
                                                <a href="/{$globals.products.mini_category|cat:('cookware')}">Cookware</a>
                                                <a href="/{$globals.products.mini_category|cat:('dishwashers')}">Dishwashers</a>
                                                <a href="/{$globals.products.mini_category|cat:('vacuum-flasks')}">Vacuum Flasks</a>
                                                <a href="/{$globals.products.mini_category|cat:('microwaves')}">Microwaves</a>
                                                <a href="/{$globals.products.mini_category|cat:('refrigerators')}">Refrigerators</a>
                                                <a href="/{$globals.products.mini_category|cat:('utencils')}">Utensils</a>
                                            </span>
                                            <span>
                                                <a class="mega-menu-title" href="/{$globals.products.sub_sub_category|cat:('furniture')}">
                                                    <span class="mega-inner">Furniture</span>
                                                </a>
                                                {*<a href="#">Bar Stools</a>*}
                                                {*<a href="#">Beds & Mattresses</a>*}
                                                <a href="/{$globals.products.mini_category|cat:('bedroom')}">Bedroom</a>
                                                <a href="/{$globals.products.mini_category|cat:('benches-and-stools')}">Benches & Stools</a>
                                                <a href="/{$globals.products.mini_category|cat:('cabinets-and-cupboards')}">Cabinets & Cupboards</a>
                                                <a href="/{$globals.products.mini_category|cat:('chairs-desks-and-home-office')}">Chairs, Desks & Home Office</a>
                                                <a href="/{$globals.products.mini_category|cat:('entertainment-units-and-tv-stands')}">Entertainment Units & TV Stands</a>
                                                <a href="/{$globals.products.mini_category|cat:('frames-and-covers')}">Frames & Covers</a>
                                                <a href="/{$globals.products.mini_category|cat:('sofas-lovecoats-and-chaises')}">Sofas, Lovecoats & Chaises</a>
                                                <a href="/{$globals.products.mini_category|cat:('tables-and-dining-sets')}">Tables &Dining Sets</a>
                                            </span>
                                            <span>
                                                <a class="mega-menu-title" href="/{$globals.products.sub_sub_category|cat:('bedding')}">
                                                    <span class="mega-inner">Bedding</span>
                                                </a>
                                                <a href="/{$globals.products.mini_category|cat:('blankets-and-throws')}">Blankets & Throws</a>
                                                <a href="/{$globals.products.mini_category|cat:('bed-pillows')}">Bed Pillows</a>
                                                <a href="/{$globals.products.mini_category|cat:('bed-in-a-bag')}">Bed-in-a-bag</a>
                                                <a href="/{$globals.products.mini_category|cat:('mattress')}">Mattress</a>
                                                <a href="/{$globals.products.mini_category|cat:('pillow-cases')}">Pillow Cases</a>
                                                <a href="/{$globals.products.mini_category|cat:('sheets')}">Sheets</a>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="/{$globals.products.category|cat:('computers-and-gaming')}">
                                            <i class="fa fa-television"></i>
                                            Computers
                                        </a>
                                        <div class="mega-menu mega-two">
                                            <span>
                                                <a class="mega-menu-title" href="/{$globals.products.sub_sub_category|cat:('computers')}">
                                                    <span class="mega-inner">Computers</span>
                                                </a>
                                                <a href="/{$globals.products.mini_category|cat:('laptops')}">Laptops</a>
                                                <a href="/{$globals.products.mini_category|cat:('desktops')}">Desktops</a>
                                            </span>
                                            <span>
                                                <a class="mega-menu-title" href="/{$globals.products.sub_sub_category|cat:('storage')}">
                                                    <span class="mega-inner">Storage</span>
                                                </a>
                                                <a href="/{$globals.products.mini_category|cat:('flashdrives')}">Flash Drives</a>
                                                <a href="/{$globals.products.mini_category|cat:('external-hard-disks')}">External HD</a>
                                                <a href="/{$globals.products.mini_category|cat:('memory-cards')}">Memory Cards</a>
                                            </span>
                                            <span>
                                                <a class="mega-menu-title" href="/{$globals.products.sub_sub_category|cat:('printers-and-scanners')}">
                                                    <span class="mega-inner">Printers & Scanners</span>
                                                </a>
                                                <a href="/{$globals.products.mini_category|cat:('deskjet-printers')}">Deskjet Printers</a>
                                                <a href="/{$globals.products.mini_category|cat:('laserjet-printers')}">Laserjet Printers</a>
                                                <a href="/{$globals.products.mini_category|cat:('multifunction-printers')}">Multifunction Printers</a>
                                                <a href="/{$globals.products.mini_category|cat:('cartridges')}">Cartridges</a>
                                                <a href="/{$globals.products.mini_category|cat:('toners')}">Toners</a>
                                            </span>
                                            <span>
                                                <a class="mega-menu-title" href="/{$globals.products.sub_sub_category|cat:('computer-accessories')}">
                                                    <span class="mega-inner">Accessories</span>
                                                </a>
                                                <a href="/{$globals.products.mini_category|cat:('softwares')}">Softwares</a>
                                                <a href="/{$globals.products.mini_category|cat:('webcams')}">Webcams</a>
                                                <a href="/{$globals.products.mini_category|cat:('computer-speakers')}">Computer Speakers</a>
                                                <a href="/{$globals.products.mini_category|cat:('keyboards')}">Keyboards</a>
                                                <a href="/{$globals.products.mini_category|cat:('mouse')}">Mouse</a>
                                                <a href="/{$globals.products.mini_category|cat:('laptop-skins')}">Laptop Skins</a>
                                                <a href="/{$globals.products.mini_category|cat:('laptop-bags')}">Laptop Bags</a>
                                                <a href="/{$globals.products.mini_category|cat:('adapters')}">Adapters</a>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="/{$globals.products.mini_category|cat:('laptops')}"><i class="fa fa-laptop"></i> Laptops</a>  
                                    </li>
                                    <li>
                                        <a href="/{$globals.products.mini_category|cat:('desktops')}"><i class="fa fa-desktop"></i> Desktops</a>  
                                    </li>
                                    <li>
                                        <a href="/{$globals.products.sub_sub_category|cat:('gaming')}">
                                            <i class="fa fa-gamepad"> Gaming</i>
                                        </a>   
                                        <div class="mega-menu mega-two">                                     
                                            <span>
                                                <a class="mega-menu-title" href="/{$globals.products.mini_category|cat:('sony-playstation')}">
                                                    <span class="mega-inner">Sony Playstation</span>
                                                </a>

                                                <a  class="mega-menu-title" href="/{$globals.products.mini_category|cat:('xbox')}">
                                                    <span class="mega-inner">XBox</span>
                                                </a>
                                                <a  class="mega-menu-title" href="/{$globals.products.mini_category|cat:('handheld-consoles')}">
                                                    <span class="mega-inner">Handheld Consoles</span>
                                                </a>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="/{$globals.products.category|cat:('tvs-and-audio')}">
                                            <i class="fa fa-film"></i>
                                            Tv
                                        </a>
                                        <div class="mega-menu mega-two">
                                            <span>
                                                <a class="mega-menu-title" href="/{$globals.products.sub_sub_category|cat:('tvs')}">
                                                    <span class="mega-inner">TVs & Audio</span>
                                                </a>
                                                <a href="/{$globals.products.mini_category|cat:('analogue-tvs')}">Analogue TVs</a>
                                                <a href="/{$globals.products.mini_category|cat:('digital-tvs')}">Digital TVs</a>
                                                <a href="/{$globals.products.mini_category|cat:('smart-tvs')}">Smart TVs</a>
                                            </span>   
                                            <span>
                                                <a class="mega-menu-title" href="/{$globals.products.sub_sub_category|cat:('home-audio')}">
                                                    <span class="mega-inner">Home Audio</span>
                                                </a>
                                                <a href="/{$globals.products.mini_category|cat:('home-theatre-systems')}">Home Theatre Systems</a>
                                                <a href="/{$globals.products.mini_category|cat:('sub-woofers')}">Sub-woofers</a>
                                                <a href="/{$globals.products.mini_category|cat:('sound-bars')}">Sound bars</a>
                                                <a href="/{$globals.products.mini_category|cat:('dvd-players')}">DVD Players</a>
                                            </span>
                                            <span>
                                                <a class="mega-menu-title" href="/{$globals.products.sub_sub_category|cat:('tv-and-audio-accessories')}">
                                                    <span class="mega-inner">Accessories</span>
                                                </a>
                                                <a href="/{$globals.products.mini_category|cat:('hdmi-cables')}">HDMI Cables</a>
                                                <a href="/{$globals.products.mini_category|cat:('remotes')}">Remotes</a>
                                                <a href="/{$globals.products.mini_category|cat:('surge-protectors-and-power')}">Surge Protectors & Power</a>
                                                <a href="/{$globals.products.mini_category|cat:('speaker-accessories')}">Speaker Accessories</a>
                                                <a href="/{$globals.products.mini_category|cat:('digital-audio-cables')}">Digital Audio Cables</a>
                                                <a href="/{$globals.products.mini_category|cat:('av-component-racks')}">A/V Component Racks</a>
                                            </span>
                                        </div>
                                    </li>
                                    <li><a href="/{$globals.products.category|cat:('mobile-and-tablets')}"><i class="fa fa-mobile"></i> Mobile</a>
                                        <div class="mega-menu mega-two">
                                            <span>
                                                <a class="mega-menu-title" href="/{$globals.products.sub_sub_category|cat:('mobile')}">
                                                    <span class="mega-inner">Mobile</span>
                                                </a>
                                                <a href="/{$globals.products.mini_category|cat:('smart-phones')}">Smart Phones</a>
                                                <a href="/{$globals.products.mini_category|cat:('feature-phones')}">Feature Phones</a>
                                            </span>
                                            <span>
                                                <a class="mega-menu-title" href="/{$globals.products.sub_sub_category|cat:('tablets')}">
                                                    <span class="mega-inner">Tablets</span>
                                                </a>
                                                <a href="/{$globals.products.mini_category|cat:('tablets')}">Tablets</a>
                                                <a href="/{$globals.products.mini_category|cat:('tablet-accessories')}">Tablet Accessories</a>
                                            </span>
                                            <span>
                                                <a class="mega-menu-title" href="/{$globals.products.sub_sub_category|cat:('phablets')}">
                                                    <span class="mega-inner">Phablets</span>
                                                </a>
                                                <a href="/{$globals.products.mini_category|cat:('phablets')}">Phablets</a>
                                                <a href="/{$globals.products.mini_category|cat:('phablets-accessories')}">Phablets Accessories</a>
                                            </span>
                                            <span>
                                                <a class="mega-menu-title" href="/{$globals.products.sub_sub_category|cat:('mobile-accessories')}">
                                                    <span class="mega-inner">Accessories</span>
                                                </a>
                                                <a href="/{$globals.products.mini_category|cat:('earphones')}">Earphones</a>
                                                <a href="/{$globals.products.mini_category|cat:('cables-and-chargers')}">Cables & Chargers</a>
                                                <a href="/{$globals.products.mini_category|cat:('screen-guards')}">Screen Guards</a>
                                                <a href="/{$globals.products.mini_category|cat:('selfie-sticks')}">Selfie Sticks</a>
                                                <a href="/{$globals.products.mini_category|cat:('power-banks')}">Power Banks</a>
                                                <a href="/{$globals.products.mini_category|cat:('cases-and-covers')}">Cases & Covers</a>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="/{$globals.products.category|cat:('apple')}">
                                            <i class="fa fa-apple"></i> Apple</a>
                                        <div class="mega-menu mega-two">
                                            <span>
                                                <a class="mega-menu-title" href="/{$globals.products.sub_sub_category|cat:('apple-computers')}">
                                                    <span class="mega-inner">Computers</span>
                                                </a>
                                                <a href="/{$globals.products.mini_category|cat:('macbook')}">MacBook</a>
                                                <a href="/{$globals.products.mini_category|cat:('macbook-air')}">MacBook Air</a>
                                                <a href="/{$globals.products.mini_category|cat:('macbook-pro')}">MacBook Pro</a>
                                                <a href="/{$globals.products.mini_category|cat:('imac')}">iMac</a>
                                                <a href="/{$globals.products.mini_category|cat:('mac-pro')}">Mac Pro</a>
                                                <a href="/{$globals.products.mini_category|cat:('mac-mini')}">Mac Mini</a>
                                                <a href="/{$globals.products.mini_category|cat:('mac-accessories')}">Mac Accessories</a>
                                            </span>
                                            <span>
                                                <a class="mega-menu-title" href="/{$globals.products.sub_sub_category|cat:('apple-mobile')}">
                                                    <span class="mega-inner">Mobile</span>
                                                </a>
                                                <a href="/{$globals.products.mini_category|cat:('iphone-6s')}">iPhone 6S</a>
                                                <a href="/{$globals.products.mini_category|cat:('iphone-6')}">iPhone 6</a>
                                                <a href="/{$globals.products.mini_category|cat:('iphone-se')}">iPhone SE</a>
                                                <a href="/{$globals.products.mini_category|cat:('iphone-5s')}">iPhone 5S</a>
                                                <a href="/{$globals.products.mini_category|cat:('iphone-5')}">iPhone 5</a>
                                                <a href="/{$globals.products.mini_category|cat:('iphone-4s')}">iPhone 4S</a>
                                                <a href="/{$globals.products.mini_category|cat:('iphone-4')}">iPhone 4</a>
                                                <a href="/{$globals.products.mini_category|cat:('ipad-pro')}">iPad Pro</a>
                                                <a href="/{$globals.products.mini_category|cat:('ipad-air')}">iPad Air</a>
                                                <a href="/{$globals.products.mini_category|cat:('ipad-mini-4')}">iPad Mini 4</a>
                                                <a href="/{$globals.products.mini_category|cat:('ipad-mini-2')}">iPad Mini 2</a>
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
    {*<div class="mobile-menu-area visible-xs">*}
        {*<div class="container">*}
            {*<div class="row">*}
                {*<div class="col-md-12">*}
                    {*<div class="mobile-menu">*}
                        {*<nav id="dropdown">*}
                            {*<ul>*}
                                {*<li>*}
                                    {*<a href="/">MyDUKA</a>*}
                                {*</li>*}
                                {*<li><a href="">Home</a>*}
                                    {*<ul>*}
                                        {*<li><a href="#">Home Appliances</a>*}
                                            {*<ul>*}
                                                {*<li><a href="#">Mice and Trackballs 1</a></li>*}
                                                {*<li><a href="#">Mice and Trackballs 2</a></li>*}
                                                {*<li><a href="#">Mice and Trackballs 3</a></li>*}
                                            {*</ul>*}
                                        {*</li>*}
                                        {*<li><a href="#">Kitchenware</a>*}
                                            {*<ul>*}
                                                {*<li><a href="#">Printers 1</a></li>*}
                                                {*<li><a href="#">Printers 2</a></li>*}
                                                {*<li><a href="#">Printers 3</a></li>*}
                                            {*</ul>*}
                                        {*</li>*}
                                        {*<li><a href="#">Scanners</a>*}
                                            {*<ul>*}
                                                {*<li><a href="#">Scanners 1</a></li>*}
                                                {*<li><a href="#">Scanners 2</a></li>*}
                                                {*<li><a href="#">Scanners 3</a></li>*}
                                            {*</ul>*}
                                        {*</li>*}
                                        {*<li><a href="#">Web Cameras</a>*}
                                            {*<ul>*}
                                                {*<li><a href="#">Web Cameras 1</a></li>*}
                                                {*<li><a href="#">Web Cameras 2</a></li>*}
                                                {*<li><a href="#">Web Cameras 3</a></li>*}
                                            {*</ul>*}
                                        {*</li>*}
                                    {*</ul>*}
                                {*</li>*}
                                {*<li><a href="">Computer & Gaming</a>*}
                                    {*<ul>*}
                                        {*<li><a href="#">Fashion & Beauty 1</a>*}
                                            {*<ul>*}
                                                {*<li><a href="#">Fashion & Beauty 1 Elit</a></li>*}
                                                {*<li><a href="#">Fashion & Beauty 1 Liber</a></li>*}
                                                {*<li><a href="#">Fashion & Beauty 1 Nulla</a></li>*}
                                            {*</ul>*}
                                        {*</li>*}
                                        {*<li><a href="#">Fashion & Beauty 2</a>*}
                                            {*<ul>*}
                                                {*<li><a href="#">Fashion & Beauty 2 Elit</a></li>*}
                                                {*<li><a href="#">Fashion & Beauty 2 Liber</a></li>*}
                                                {*<li><a href="#">Fashion & Beauty 2 Nulla</a></li>*}
                                            {*</ul>*}
                                        {*</li>*}
                                        {*<li><a href="#">Fashion & Beauty 3</a>*}
                                            {*<ul>*}
                                                {*<li><a href="#">Fashion & Beauty 3 Elit</a></li>*}
                                                {*<li><a href="#">Fashion & Beauty 3 Liber</a></li>*}
                                                {*<li><a href="#">Fashion & Beauty 3 Nulla</a></li>*}
                                            {*</ul>*}
                                        {*</li>*}
                                    {*</ul>*}
                                {*</li>*}
                                {*<li><a href="shop.html">Tv & audio</a>*}
                                    {*<ul>*}
                                        {*<li><a href="#">Bags 2</a>*}
                                            {*<ul>*}
                                                {*<li><a href="#">Bags 2 Elit</a></li>*}
                                                {*<li><a href="#">Bags 2 Liber</a></li>*}
                                                {*<li><a href="#">Bags 2 Nulla</a></li>*}
                                            {*</ul>*}
                                        {*</li>*}
                                        {*<li><a href="#">Bags 3</a>*}
                                            {*<ul>*}
                                                {*<li><a href="#">Bags 3 Elit</a></li>*}
                                                {*<li><a href="#">Bags 3 Liber</a></li>*}
                                                {*<li><a href="#">Bags 3 Nulla</a></li>*}
                                            {*</ul>*}
                                        {*</li>*}
                                        {*<li><a href="#">Ring</a>*}
                                            {*<ul>*}
                                                {*<li><a href="#">Ring Elit</a></li>*}
                                                {*<li><a href="#">Ring Liber</a></li>*}
                                                {*<li><a href="#">Ring Nulla</a></li>*}
                                            {*</ul>*}
                                        {*</li>*}
                                    {*</ul>*}
                                {*</li>*}
                                {*<li><a href="shop-list.html">Electronic</a>*}
                                    {*<ul>*}
                                        {*<li><a href="#">Gift 1</a></li>*}
                                        {*<li><a href="#">PC</a></li>*}
                                        {*<li><a href="#">MAC</a></li>*}
                                    {*</ul>*}
                                {*</li>*}
                                {*<li><a href="shop.html">Computer</a>*}
                                    {*<ul>*}
                                        {*<li><a href="#">Furniture 1</a>*}
                                            {*<ul>*}
                                                {*<li><a href="#">Furniture 1 Elit</a></li>*}
                                                {*<li><a href="#">Furniture 1 Liber</a></li>*}
                                                {*<li><a href="#">Furniture 1 Nulla</a></li>*}
                                            {*</ul>*}
                                        {*</li>*}
                                        {*<li><a href="#">Macs</a>*}
                                            {*<ul>*}
                                                {*<li><a href="#">Macs 2</a></li>*}
                                                {*<li><a href="#">Macs 3</a></li>*}
                                                {*<li><a href="#">Macs Elit</a></li>*}
                                            {*</ul>*}
                                        {*</li>*}
                                        {*<li><a href="#">Windows</a>*}
                                            {*<ul>*}
                                                {*<li><a href="#">Windows 1</a></li>*}
                                                {*<li><a href="#">Windows 2</a></li>*}
                                                {*<li><a href="#">Windows 3</a></li>*}
                                            {*</ul>*}
                                        {*</li>*}
                                    {*</ul>*}
                                {*</li>*}
                                {*<li><a href="#">Pages</a>*}
                                    {*<ul>*}
                                        {*<li><a class="mega-three-title" href="shop.html">Shop Grid View </a></li>*}
                                        {*<li><a class="mega-three-title" href="shop-list.html">Shop List View</a></li>*}
                                        {*<li><a class="mega-three-title" href="blog.html">Blog</a></li>*}
                                        {*<li><a class="mega-three-title" href="blog-details.html">Blog-Details</a></li>*}
                                        {*<li><a class="mega-three-title" href="single-product.html">Single-Product</a></li>*}
                                        {*<li><a class="mega-three-title" href="wishlist.html">Wishlist</a></li>*}
                                        {*<li><a class="mega-three-title" href="checkout.html">Checkout</a></li>*}
                                        {*<li><a class="mega-three-title" href="shopping-cart.html">Shopping-Cart</a></li>*}
                                        {*<li><a class="mega-three-title" href="my-account.html">My Account</a></li>*}
                                        {*<li><a class="mega-three-title" href="contact-us.html">Contact Us</a></li>*}
                                    {*</ul>*}
                                {*</li>*}
                            {*</ul>*}
                        {*</nav>*}
                    {*</div>*}
                {*</div>*}
            {*</div>*}
        {*</div>*}
    {*</div>*}
    <!-- mobile menu area end -->
</header>