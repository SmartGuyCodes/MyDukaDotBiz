{include file="shared/head.tpl"}

<!-- slider-area start-->
<div class="slider-area slider-area-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                <!-- category-menu-list start -->
                <div class="left-category-menu">
                    <div class="left-product-cat">
                        <div class="category-heading">
                            <h2>categories</h2>
                        </div>
                        <div class="category-menu-list">
                            <ul>
                                <!-- Single menu start -->
                                <li class="arrow-plus">
                                    <a href="/{$globals.products.category|cat:('apple')}">
                                        <i class="fa fa-apple"></i>
                                        Apple
                                    </a>
                                    <!--  mega menu start -->
                                    <div class="cat-left-drop-menu all-drop-menu">
                                        <span>
                                            <a class="mega-menu-title" href="#">
                                                <span class="mega-inner">Computers</span>
                                            </a>
                                            <a href="#">MacBook</a>
                                            <a href="#">MacBook Air</a>
                                            <a href="#">MacBook Pro</a>
                                            <a href="#">iMac</a>
                                            <a href="#">Mac Pro</a>
                                            <a href="#">Mac Mini</a>
                                        </span>
                                        <span>
                                            <a class="mega-menu-title" href="#">
                                                <span class="mega-inner">Mobile</span>
                                            </a>
                                            <a href="#">iPad Pro</a>
                                            <a href="#">iPad Air</a>
                                            <a href="#">iPad Mini 4</a>
                                            <a href="#">iPad Mini 2</a>
                                            <a href="#">iPad Accessories</a>
                                            <a href="#">iPhone 6S</a>
                                            <a href="#">iPhone 6</a>
                                            <a href="#">iPhone SE</a>
                                            <a href="#">Others</a>
                                        </span>
                                    </div>
                                    <!-- mega menu end -->
                                </li>
                                <!-- Single menu end -->

                                <!-- Single menu start -->
                                <li class="">
                                    <a href="/{$globals.products.mini_category|cat:('desktops')}">
                                        <i class="fa fa-desktop"></i>
                                        Desktops
                                    </a>
                                </li>
                                <!-- Single menu end -->

                                <!-- Single menu start -->
                                <li class="arrow-plus">
                                    <a href="/{$globals.products.sub_sub_category|cat:('gaming')}">
                                        <i class="fa fa-gamepad"></i>
                                        Gaming
                                    </a>
                                    <!--  mega menu start -->
                                    <div class="cat-left-drop-menu all-drop-menu">
                                        <span>
                                            <a class="mega-menu-title" href="/{$globals.products.mini_category|cat:('sony-playstation')}">
                                                <span class="mega-inner">Sony Playstation</span>
                                            </a>
                                        </span>
                                        <span>
                                            <a class="mega-menu-title" href="/{$globals.products.mini_category|cat:('xbox')}">
                                                <span class="mega-inner">XBox</span>
                                            </a>
                                        </span>
                                        <span>
                                            <a class="mega-menu-title" href="/{$globals.products.mini_category|cat:('handheld-consoles')}">
                                                <span class="mega-inner">Handheld Consoles</span>
                                            </a>
                                        </span>
                                    </div>
                                    <!-- mega menu end -->
                                </li>
                                <!-- Single menu end -->

                                <!-- Single menu start -->
                                <li class="arrow-plus">
                                    <a href="/{$globals.products.category|cat:('home-and-living')}"><i class="fa fa-home"></i> Home & Living</a>
                                    <!--  mega menu start -->
                                    <div class="cat-left-drop-menu all-drop-menu">
                                        <span>
                                            <a class="mega-menu-title" href="#">
                                                <span class="mega-inner">Home Appliances</span>
                                            </a>
                                            <a href="#">Air Conditioners</a>
                                            <a href="#">Fans & Air Coolers</a>
                                            <a href="#">Vacuum Cleaners</a>
                                            <a href="#">Washing Machines</a>
                                        </span>
                                        <span>
                                            <a class="mega-menu-title" href="#">
                                                <span class="mega-inner">Kitchenware</span>
                                            </a>
                                            <a href="#">Cookware</a>
                                            <a href="#">Dishwashers</a>
                                            <a href="#">Vacuum Flasks</a>
                                            <a href="#">Microwaves</a>
                                            <a href="#">Refrigerators</a>
                                            <a href="#">Utensils</a>
                                            {*<a href="#">Blenders</a>*}
                                            {*<a href="#">Bread Machines</a>*}
                                            {*<a href="#">Coffee Machines & Tea Makers</a>*}
                                            {*<a href="#">Deep Fryers</a>*}
                                            {*<a href="#">Food Processors</a>*}
                                            {*<a href="#">Juicers</a>*}
                                            {*<a href="#">Mixers</a>*}
                                            {*<a href="#">Toasters</a>*}
                                            {*<a href="#">Toaster Ovens</a>*}
                                        </span>
                                        <span>
                                            <a class="mega-menu-title" href="#">
                                                <span class="mega-inner">Furniture</span>
                                            </a>
                                            {*<a href="#">Bar Stools</a>*}
                                            {*<a href="#">Beds & Mattresses</a>*}
                                            <a href="#">Bedroom</a>
                                            <a href="#">Benches & Stools</a>
                                            <a href="#">Cabinets & Cupboards</a>
                                            <a href="#">Chairs, Desks & Home Office</a>
                                            <a href="#">Entertainment Units & TV Stands</a>
                                            <a href="#">Frames & Covers</a>
                                            <a href="#">Sofas, Lovecoats & Chaises</a>
                                            <a href="#">Tables &Dining Sets</a>
                                        </span>
                                        <span>
                                            <a class="mega-menu-title" href="#">
                                                <span class="mega-inner">Bedding</span>
                                            </a>
                                            <a href="#">Blankets & Throws</a>
                                            <a href="#">Bed Pillows</a>
                                            <a href="#">Bed-in-a-bag</a>
                                            <a href="#">Mattress</a>
                                            <a href="#">Pillow Cases</a>
                                            <a href="#">Sheets</a>
                                        </span>
                                    </div>
                                    <!-- mega menu end -->
                                </li>
                                <!-- Single menu end -->
                                
                                <!-- Single menu start -->
                                <li class="arrow-plus">
                                    <a href="/{$globals.products.category|cat:('kids')}"><i class="fa fa-child"></i> Kids Store</a>
                                    <!--  mega menu start -->
                                    <div class="cat-left-drop-menu all-drop-menu">
                                        <span>
                                            <a class="mega-menu-title" href="#">
                                                <span class="mega-inner">Baby Shop</span>
                                            </a>
                                            <a href="#">Bedding</a>
                                            <a href="#">Clothes</a>
                                            <a href="#">Nursery Furniture</a>
                                            <a href="#">Strollers</a>
                                            <a href="#">Shoes</a>
                                        </span>
                                        <span>
                                            <a class="mega-menu-title" href="#">
                                                <span class="mega-inner">Kids & Toys</span>
                                            </a>
                                            <a href="#">Crib Toys</a>
                                            <a href="#">Plush baby toys</a>
                                            <a href="#">Developmental Baby Toys</a>
                                            <a href="#">Blocks & Sorters</a>
                                            <a href="#">Other Toys</a>
                                        </span>
                                        <span>
                                            <a class="mega-menu-title" href="#">
                                                <span class="mega-inner">Gift Hampers & Baskets</span>
                                            </a>
                                            <a href="#">Baby Books & CDs</a>
                                            <a href="#">Warm & Cozy Gifts</a>
                                            <a href="#">Gift Sets</a>
                                            <a href="#">Nursery Gifts</a>
                                            <a href="#">Bathtime Fun</a>
                                            <a href="#">Others</a>
                                        </span>
                                    </div>
                                    <!-- mega menu end -->
                                </li>
                                <!-- Single menu end -->

                                <!-- Single menu start -->
                                <li class="">
                                    <a href="/{$globals.products.mini_category|cat:('laptops')}">
                                        <i class="fa fa-laptop"></i>
                                        Laptops
                                    </a>
                                </li>
                                <!-- Single menu end -->

                                <!-- MEGA ACCORDION START -->
                                <li class="arrow-plus">
                                    <a href="/{$globals.products.category|cat:('mobile-and-tablets')}">
                                        <i class="fa fa-mobile-phone"></i>
                                        Mobile
                                    </a>
                                    <!--  MEGA MENU START -->
                                    <div class="cat-left-drop-menu all-drop-menu">
                                        <span>
                                            <a class="mega-menu-title" href="#">
                                                <span class="mega-inner">Mobile</span>
                                            </a>
                                            <a href="#">Smart Phones</a>
                                            <a href="#">Feature Phones</a>
                                        </span>
                                        <span>
                                            <a class="mega-menu-title" href="#">
                                                <span class="mega-inner">Tablets</span>
                                            </a>
                                            <a href="#">Tablets</a>
                                            <a href="#">Tablet Accessories</a>
                                        </span>
                                        <span>
                                            <a class="mega-menu-title" href="#">
                                                <span class="mega-inner">Phablets</span>
                                            </a>
                                            <a href="#">Phablets</a>
                                            <a href="#">Phablets Accessories</a>
                                        </span>
                                        <span>
												<a class="mega-menu-title" href="#">
                                                    <span class="mega-inner">Accessories</span>
                                                </a>
                                                <a href="#">Earphones</a>
                                                <a href="#">Cables & Chargers</a>
                                                <a href="#">Screen Guards</a>
                                                <a href="#">Selfie Sticks</a>
                                                <a href="#">Power Banks</a>
                                                <a href="#">Cases & Covers</a>
                                                <a href="#">Memory Cards</a>
                                                <a href="#">Others</a>
											</span>
                                    </div>
                                    <!-- MEGA MENU END -->
                                </li>

                                <li class="arrow-plus">
                                    <a href="/{$globals.products.category|cat:('tv-and-audio')}"><i class="fa fa-film"></i> TV & Audio</a>
                                    <!--  MEGA MENU START -->
                                    <div class="cat-left-drop-menu all-drop-menu">
											<span>
												<a class="mega-menu-title" href="#">
                                                    <span class="mega-inner">TVs</span>
                                                </a>
                                                <a href="#">Analogue TVs</a>
                                                <a href="#">Digital TVs</a>
                                                <a href="#">Smart TVs</a>
											</span>
											<span>
												<a class="mega-menu-title" href="#">
                                                    <span class="mega-inner">Home Audios</span>
                                                </a>
                                                <a href="#">Home Theatre Systems</a>
                                                <a href="#">Floor-standing</a>
                                                <a href="#">Sub-woofers</a>
                                                <a href="#">Sound bars</a>
                                                <a href="#">Computer Speakers</a>
											</span>
											<span>
												<a class="mega-menu-title" href="#">
                                                    <span class="mega-inner">Accessories</span>
                                                </a>
                                                <a href="#">HDMI Cables</a>
                                                <a href="#">Remotes</a>
                                                <a href="#">Surge Protectors & Power</a>
                                                <a href="#">Speaker Accessories</a>
                                                <a href="#">Digital Audio Cables</a>
                                                <a href="#">A/V Component Racks</a>
											</span>
                                    </div>
                                    <!-- MEGA MENU END -->
                                </li>
                                <!-- MENU ACCORDION END -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="bend niceties preview-2">
                    <div id="myduka-adverts" class="slides">
                        <img src="{$cdn}img/banner/new-banner.jpg" alt="myduka-banner" title="#slider-direction-1"  />
                        <img src="{$cdn}img/banner/myduka-intro.jpg" alt="myduka-banner" title="#slider-direction-2"  />
                        <img src="{$cdn}img/slider/bg-slider2-home2.jpg" alt="myduka-banner" title="#slider-direction-3"  />
                        <img src="{$cdn}img/slider/bg-slider-home2.jpg" alt="myduka-banner" title="#slider-direction-4"  />
                        <img src="{$cdn}img/banner/iphone-banner.jpg" alt="myduka-banner" title="#slider-direction-5"  />
                        <img src="{$cdn}img/banner/sneaker-banner.jpg" alt="myduka-banner" title="#slider-direction-6"  />
                        <img src="{$cdn}img/banner/kids-banner.jpg" alt="myduka-banner" title="#slider-direction-7"  />
                        <img src="{$cdn}img/banner/audio-banner.jpg" alt="myduka-banner" title="#slider-direction-8"  />
                        <img src="{$cdn}img/banner/monopod.jpg" alt="myduka-banner" title="#slider-direction-9"  />
                        <img src="{$cdn}img/banner/television.jpg" alt="myduka-banner" title="#slider-direction-10"  />
                        <img src="{$cdn}img/banner/business-suit.jpg" alt="myduka-banner" title="#slider-direction-11"  />
                        <img src="{$cdn}img/banner/hiking.jpg" alt="myduka-banner" title="#slider-direction-12"  />
                    </div>
                    <!-- direction 1 -->
                    <div id="slider-direction-1" class="slider-direction slider-one">
                        <div class="slider-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="slider-content hidden-xs">
                                        <!-- layer-1-heading-->
                                        {*<div class="home-2-layer-heading">*}
                                        {*<h2 class="title1">My Duka Dot Biz</h2>*}
                                        {*<h1 class="title2">Big Sale!!</h1>*}
                                        {*</div>*}
                                        {*<div class="slider-price">*}
                                        {*KES. 99,900*}
                                        {*<span class="hm-btn">KES.94,950</span>*}
                                        {*</div>*}
                                        <!-- layer-1-button -->
                                        {*<div class="home-2-layer-button">*}
                                        {*<a href="#" class="slider-btn" >Shop Now</a>*}
                                        {*</div>*}
                                    </div>
                                    {*<div class="layer-1-img">*}
                                    {*<img src="{$cdn}img/slider/home2-slider-caption1.png" alt="" />*}
                                    {*</div>*}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- direction 2 -->
                    <div id="slider-direction-2" class="slider-direction slider-two">
                        <div class="slider-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                                    <div class="slider-content">
                                        <!-- layer-2-heading -->
                                        <div class="home-2-layer2-heading">
                                            <h2 class="title1">Lenovo Now starting at</h2>
                                        </div>
                                        <span class="hm-layer2-btn">KES. 29,999</span>
                                    </div>
                                    <!-- layer-2-img -->
                                    <div class="layer-2-img">
                                        <img src="{$cdn}img/slider/home-2-slider-caption2.png" alt="My Duka Dot Biz Online Shopping" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- direction 3 -->
                    <div id="slider-direction-3" class="slider-direction slider-three">
                        <div class="slider-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                                    <div class="slider-content">
                                        <!-- layer-2-heading -->
                                        <div class="home-2-layer2-heading">
                                            <h2 class="title1">My Duka Dot Biz</h2>
                                        </div>
                                        <span class="hm-layer2-btn">KES. 19,900</span>
                                    </div>
                                    <!-- layer-2-img -->
                                    <div class="layer-2-img">
                                        <img src="{$cdn}img/slider/home-2-slider-caption2.png" alt="My Duka Dot Biz Online Shopping" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- direction 4 -->
                    <div id="slider-direction-4" class="slider-direction slider-four">
                        <div class="slider-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="slider-content hidden-xs">
                                        <!-- layer-1-heading-->
                                        <div class="home-2-layer-heading">
                                            <h2 class="title1">Now starting at KES.9,900!</h2>
                                            <h1 class="title2">big sale</h1>
                                        </div>
                                        <div class="slider-price">
                                            KES. 9,900
                                            {*<span class="hm-btn">KES.450</span>*}
                                        </div>
                                        <!-- layer-1-button -->
                                        <div class="home-2-layer-button">
                                            <a href="/{$globals.products.category|cat:('mobile-and-tablets')}" class="slider-btn" >Shop Now</a>
                                        </div>
                                    </div>
                                    <div class="layer-1-img">
                                        <img src="{$cdn}img/slider/home2-slider-caption1.png" alt="My Duka Dot Biz Online Shopping" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- direction 5 -->
                    <div id="slider-direction-5" class="slider-direction slider-five">
                        <div class="slider-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="slider-content hidden-xs">
                                        <!-- layer-1-heading-->
                                        {*<div class="home-2-layer-heading">*}
                                        {*<h2 class="title1">My Duka Dot Biz</h2>*}
                                        {*<h1 class="title2">Big Sale!!</h1>*}
                                        {*</div>*}
                                        {*<div class="slider-price">*}
                                        {*KES. 99,900*}
                                        {*<span class="hm-btn">KES.94,950</span>*}
                                        {*</div>*}
                                        <!-- layer-1-button -->
                                        {*<div class="home-2-layer-button">*}
                                        {*<a href="#" class="slider-btn" >Shop Now</a>*}
                                        {*</div>*}
                                    </div>
                                    {*<div class="layer-1-img">*}
                                    {*<img src="{$cdn}img/slider/home2-slider-caption1.png" alt="" />*}
                                    {*</div>*}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- direction 6 -->
                    <div id="slider-direction-6" class="slider-direction slider-six">
                        <div class="slider-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="slider-content hidden-xs">
                                        <!-- layer-1-heading-->
                                        {*<div class="home-2-layer-heading">*}
                                        {*<h2 class="title1">My Duka Dot Biz</h2>*}
                                        {*<h1 class="title2">Big Sale!!</h1>*}
                                        {*</div>*}
                                        {*<div class="slider-price">*}
                                        {*KES. 99,900*}
                                        {*<span class="hm-btn">KES.94,950</span>*}
                                        {*</div>*}
                                        <!-- layer-1-button -->
                                        {*<div class="home-2-layer-button">*}
                                        {*<a href="#" class="slider-btn" >Shop Now</a>*}
                                        {*</div>*}
                                    </div>
                                    {*<div class="layer-1-img">*}
                                    {*<img src="{$cdn}img/slider/home2-slider-caption1.png" alt="" />*}
                                    {*</div>*}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- direction 7 -->
                    <div id="slider-direction-7" class="slider-direction slider-seven">
                        <div class="slider-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="slider-content hidden-xs">
                                        <!-- layer-1-heading-->
                                        {*<div class="home-2-layer-heading">*}
                                        {*<h2 class="title1">My Duka Dot Biz</h2>*}
                                        {*<h1 class="title2">Big Sale!!</h1>*}
                                        {*</div>*}
                                        {*<div class="slider-price">*}
                                        {*KES. 99,900*}
                                        {*<span class="hm-btn">KES.94,950</span>*}
                                        {*</div>*}
                                        <!-- layer-1-button -->
                                        {*<div class="home-2-layer-button">*}
                                        {*<a href="#" class="slider-btn" >Shop Now</a>*}
                                        {*</div>*}
                                    </div>
                                    {*<div class="layer-1-img">*}
                                    {*<img src="{$cdn}img/slider/home2-slider-caption1.png" alt="" />*}
                                    {*</div>*}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- direction 8 -->
                    <div id="slider-direction-8" class="slider-direction slider-eight">
                        <div class="slider-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="slider-content hidden-xs">
                                        <!-- layer-1-heading-->
                                        {*<div class="home-2-layer-heading">*}
                                        {*<h2 class="title1">My Duka Dot Biz</h2>*}
                                        {*<h1 class="title2">Big Sale!!</h1>*}
                                        {*</div>*}
                                        {*<div class="slider-price">*}
                                        {*KES. 99,900*}
                                        {*<span class="hm-btn">KES.94,950</span>*}
                                        {*</div>*}
                                        <!-- layer-1-button -->
                                        {*<div class="home-2-layer-button">*}
                                        {*<a href="#" class="slider-btn" >Shop Now</a>*}
                                        {*</div>*}
                                    </div>
                                    {*<div class="layer-1-img">*}
                                    {*<img src="{$cdn}img/slider/home2-slider-caption1.png" alt="" />*}
                                    {*</div>*}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- direction 8 -->
                    <div id="slider-direction-9" class="slider-direction slider-nine">
                        <div class="slider-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="slider-content hidden-xs">
                                        <!-- layer-1-heading-->
                                        {*<div class="home-2-layer-heading">*}
                                        {*<h2 class="title1">My Duka Dot Biz</h2>*}
                                        {*<h1 class="title2">Big Sale!!</h1>*}
                                        {*</div>*}
                                        {*<div class="slider-price">*}
                                        {*KES. 99,900*}
                                        {*<span class="hm-btn">KES.94,950</span>*}
                                        {*</div>*}
                                        <!-- layer-1-button -->
                                        {*<div class="home-2-layer-button">*}
                                        {*<a href="#" class="slider-btn" >Shop Now</a>*}
                                        {*</div>*}
                                    </div>
                                    {*<div class="layer-1-img">*}
                                    {*<img src="{$cdn}img/slider/home2-slider-caption1.png" alt="" />*}
                                    {*</div>*}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- direction 8 -->
                    <div id="slider-direction-10" class="slider-direction slider-ten">
                        <div class="slider-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="slider-content hidden-xs">
                                        <!-- layer-1-heading-->
                                        {*<div class="home-2-layer-heading">*}
                                        {*<h2 class="title1">My Duka Dot Biz</h2>*}
                                        {*<h1 class="title2">Big Sale!!</h1>*}
                                        {*</div>*}
                                        {*<div class="slider-price">*}
                                        {*KES. 99,900*}
                                        {*<span class="hm-btn">KES.94,950</span>*}
                                        {*</div>*}
                                        <!-- layer-1-button -->
                                        {*<div class="home-2-layer-button">*}
                                        {*<a href="#" class="slider-btn" >Shop Now</a>*}
                                        {*</div>*}
                                    </div>
                                    {*<div class="layer-1-img">*}
                                    {*<img src="{$cdn}img/slider/home2-slider-caption1.png" alt="" />*}
                                    {*</div>*}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- direction 8 -->
                    <div id="slider-direction-11" class="slider-direction slider-eleven">
                        <div class="slider-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="slider-content hidden-xs">
                                        <!-- layer-1-heading-->
                                        {*<div class="home-2-layer-heading">*}
                                        {*<h2 class="title1">My Duka Dot Biz</h2>*}
                                        {*<h1 class="title2">Big Sale!!</h1>*}
                                        {*</div>*}
                                        {*<div class="slider-price">*}
                                        {*KES. 99,900*}
                                        {*<span class="hm-btn">KES.94,950</span>*}
                                        {*</div>*}
                                        <!-- layer-1-button -->
                                        {*<div class="home-2-layer-button">*}
                                        {*<a href="#" class="slider-btn" >Shop Now</a>*}
                                        {*</div>*}
                                    </div>
                                    {*<div class="layer-1-img">*}
                                    {*<img src="{$cdn}img/slider/home2-slider-caption1.png" alt="" />*}
                                    {*</div>*}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- direction 8 -->
                    <div id="slider-direction-12" class="slider-direction slider-twelve">
                        <div class="slider-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="slider-content hidden-xs">
                                        <!-- layer-1-heading-->
                                        {*<div class="home-2-layer-heading">*}
                                        {*<h2 class="title1">My Duka Dot Biz</h2>*}
                                        {*<h1 class="title2">Big Sale!!</h1>*}
                                        {*</div>*}
                                        {*<div class="slider-price">*}
                                        {*KES. 99,900*}
                                        {*<span class="hm-btn">KES.94,950</span>*}
                                        {*</div>*}
                                        <!-- layer-1-button -->
                                        {*<div class="home-2-layer-button">*}
                                        {*<a href="#" class="slider-btn" >Shop Now</a>*}
                                        {*</div>*}
                                    </div>
                                    {*<div class="layer-1-img">*}
                                    {*<img src="{$cdn}img/slider/home2-slider-caption1.png" alt="" />*}
                                    {*</div>*}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 hidden-xs">
                <div class="banner2 banner-margin">
                    <a href="#">
                        <img src="{$cdn}img/banner/home2-banner1.jpg" alt="My Duka Dot Biz Online Shopping" />
                        <div class="banner-text">
                            <h2>Samsung Galaxy S5</h2>
                            <p>Bigger than bigger</p>
                        </div>
                    </a>
                </div>
                <div class="banner2">
                    <a href="#">
                        <img src="{$cdn}img/banner/home2-banner2.jpg" alt="My Duka Dot Biz Online Shopping" />
                        <div class="banner-text">
                            <h1>Macbook pro</h1>
                            <h3>
                                <span>Sale up to 30%</span>
                                all products
                            </h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider-area end-->

<!-- RTB products-tab-area start-->
<div class="product-tab-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-tab">
                    <ul class="product-nav" role="tablist">
                        <li role="presentation" class="active"><a href="#bids" aria-controls="latest" role="tab" data-toggle="tab">Bids</a></li>
                    </ul>
                    <div class="tab-content">
                        <!--clearance tab start-->
                        <div id="bids" role="tabpanel" class="tab-pane active">
                            <div class="row">
                                <div class="product-crousel-2 indicator-style">
                                    {foreach $products as $item}
                                        {if $item.bid eq 1}
                                            {include file="products/bid.tpl"}
                                        {/if}
                                    {foreachelse}
                                        No products for bid yet
                                    {/foreach}
                                </div>
                            </div>
                        </div>
                        <!--latest tab end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- RTB products-area end-->

<!-- features-product-area start-->
<div class="features-product-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h3>Featured Products</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="features-crousel indicator-style">
                {foreach $featured as $item}
                    {if $item.bid eq 0 || $item.bid eq NULL}
                        {include file="products/item.tpl"}
                    {/if}
                    {foreachelse}
                    No Featured products yet
                {/foreach}
            </div>
        </div>
    </div>
</div>
<!-- features-product-area end-->

<!-- clearance-deals-product-tab-area start-->
<div class="product-tab-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-tab">
                    <ul class="product-nav" role="tablist">
                        <li role="presentation" class="active"><a href="#clearance" aria-controls="latest" role="tab" data-toggle="tab">Clearance</a></li>
                        <li role="presentation"><a href="#deals" aria-controls="sale" role="tab" data-toggle="tab">Deals</a></li>
                    </ul>
                    <div class="tab-content">
                        <!--clearance tab start-->
                        <div id="clearance" role="tabpanel" class="tab-pane active">
                            <div class="row">
                                <div class="product-crousel-2 indicator-style">
                                    {foreach $clearance as $item}
                                        {include file="products/item.tpl"}
                                    {foreachelse}
                                        No products being cleared yet
                                    {/foreach}
                                </div>
                            </div>
                        </div>
                        <!--latest tab end-->
                        <!--deals tab start-->
                        <div id="deals" role="tabpanel" class="tab-pane">
                            <div class="row">
                                <div class="product-crousel-2 indicator-style">
                                    {foreach $deals as $item}
                                        {include file="products/item.tpl"}
                                    {foreachelse}
                                        No Deals on products yet
                                    {/foreach}
                                </div>
                            </div>
                        </div>
                        <!--sale tab end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-tab-area end-->

<!-- features-product-area start-->
<div class="features-product-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h3>Featured Products</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="features-crousel indicator-style">
                {foreach $featured as $item}
                    {if $item.bid eq 0 || $item.bid eq NULL}
                        {include file="products/item.tpl"}
                    {/if}
                {foreachelse}
                    No Featured products yet
                {/foreach}
            </div>
        </div>
    </div>
</div>
<!-- features-product-area end-->

<!-- banner-area start-->
<div class="banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner2">
                    <img src="{$cdn}img/banner/banner2.jpg" alt="My Duka Dot Biz Online Shopping" />
                    <div class="banner2-text">
                        <h2>lenovo plus</h2>
                        <h3>Sale up to 30%</h3>
                        <a href="#">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner2 banner2-bottom">
                    <img src="{$cdn}img/banner/banner3.jpg" alt="My Duka Dot Biz Online Shopping" />
                    <div class="banner2-text">
                        <h2>nikon d70</h2>
                        <h3>new arrivals</h3>
                        <a href="#">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner-area end-->
<br>

<!-- home-body-care-product-tab-area start-->
<div class="product-tab-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-tab">
                    <ul class="product-nav" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="latest" role="tab" data-toggle="tab">Home & Living</a></li>
                        <li role="presentation"><a href="#kidz" aria-controls="sale" role="tab" data-toggle="tab">Kids</a></li>
                    </ul>
                    <div class="tab-content">
                        <!--clearance tab start-->
                        <div id="home" role="tabpanel" class="tab-pane active">
                            <div class="row">
                                <div class="product-crousel-2 indicator-style">
                                    {foreach $home as $item}
                                        {if $item.bid eq 0 || $item.bid eq NULL}
                                            {include file="products/item.tpl"}
                                        {/if}
                                    {foreachelse}
                                        No Home and Living products yet
                                    {/foreach}
                                </div>
                            </div>
                        </div>
                        <!--latest tab end-->

                        <!--deals tab start-->
                        <div id="kidz" role="tabpanel" class="tab-pane">
                            <div class="row">
                                <div class="product-crousel-2 indicator-style">
                                    {foreach $kids as $item}
                                        {if $item.bid eq 0 || $item.bid eq NULL}
                                            {include file="products/item.tpl"}
                                        {/if}
                                    {foreachelse}
                                        No Kids products yet
                                    {/foreach}
                                </div>
                            </div>
                        </div>
                        <!--sale tab end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-tab-area end-->

<!-- banner-area start-->
<div class="banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner2">
                    <img src="{$cdn}img/banner/banner2.jpg" alt="My Duka Dot Biz Online Shopping" />
                    <div class="banner2-text">
                        <h2>lenovo plus</h2>
                        <h3>Sale up to 30%</h3>
                        <a href="#">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner2 banner2-bottom">
                    <img src="{$cdn}img/banner/banner3.jpg" alt="My Duka Dot Biz Online Shopping" />
                    <div class="banner2-text">
                        <h2>nikon d70</h2>
                        <h3>new arrivals</h3>
                        <a href="#">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner-area end-->
<br>

<!-- computers-gaming-tv-audio-product-tab-area start-->
<div class="product-tab-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-tab">
                    <ul class="product-nav" role="tablist">
                        <li role="presentation" class="active"><a href="#comp-and-gaming" aria-controls="latest" role="tab" data-toggle="tab">Computers & Gaming</a></li>
                        <li role="presentation"><a href="#tv-and-audio" aria-controls="sale" role="tab" data-toggle="tab">TVs & Audio</a></li>
                    </ul>
                    <div class="tab-content">
                        <!--clearance tab start-->
                        <div id="comp-and-gaming" role="tabpanel" class="tab-pane active">
                            <div class="row">
                                <div class="product-crousel-2 indicator-style">
                                    {foreach $computers_gaming as $item}
                                        {if $item.bid eq 0 || $item.bid eq NULL}
                                            {include file="products/item.tpl"}
                                        {/if}
                                    {foreachelse}
                                        No Computer and Gaming products yet
                                    {/foreach}
                                </div>
                            </div>
                        </div>
                        <!--latest tab end-->
                        <!--deals tab start-->
                        <div id="tv-and-audio" role="tabpanel" class="tab-pane">
                            <div class="row">
                                <div class="product-crousel-2 indicator-style">
                                    {foreach $tvs_audio as $item}
                                        {if $item.bid eq 0 || $item.bid eq NULL}
                                            {include file="products/item.tpl"}
                                        {/if}
                                    {foreachelse}
                                        No Tv and Audio products yet
                                    {/foreach}
                                </div>
                            </div>
                        </div>
                        <!--sale tab end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-tab-area end-->

<!-- banner-area start-->
<div class="banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner2">
                    <img src="{$cdn}img/banner/banner2.jpg" alt="My Duka Dot Biz Online Shopping" />
                    <div class="banner2-text">
                        <h2>lenovo plus</h2>
                        <h3>Sale up to 30%</h3>
                        <a href="#">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner2 banner2-bottom">
                    <img src="{$cdn}img/banner/banner3.jpg" alt="My Duka Dot Biz Online Shopping" />
                    <div class="banner2-text">
                        <h2>nikon d70</h2>
                        <h3>new arrivals</h3>
                        <a href="#">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner-area end-->
<br>

<!-- mobile-tablets-apple-product-tab-area start-->
<div class="product-tab-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-tab">
                    <ul class="product-nav" role="tablist">
                        <li role="presentation" class="active"><a href="#mobile-and-tablets" aria-controls="latest" role="tab" data-toggle="tab">Mobile & Tablets</a></li>
                        <li role="presentation"><a href="#apple" aria-controls="sale" role="tab" data-toggle="tab">Apple</a></li>
                    </ul>
                    <div class="tab-content">
                        <!--clearance tab start-->
                        <div id="mobile-and-tablets" role="tabpanel" class="tab-pane active">
                            <div class="row">
                                <div class="product-crousel-2 indicator-style">
                                    {foreach $mobile_tablets as $item}
                                        {if $item.bid eq 0 || $item.bid eq NULL}
                                            {include file="products/item.tpl"}
                                        {/if}
                                    {foreachelse}
                                        No MObile and Tablet products yet
                                    {/foreach}
                                </div>
                            </div>
                        </div>
                        <!--latest tab end-->
                        <!--deals tab start-->
                        <div id="apple" role="tabpanel" class="tab-pane">
                            <div class="row">
                                <div class="product-crousel-2 indicator-style">
                                    {foreach $apple as $item}
                                        {if $item.bid eq 0 || $item.bid eq NULL}
                                            {include file="products/item.tpl"}
                                        {/if}
                                    {foreachelse}
                                        No Apple products yet
                                    {/foreach}
                                </div>
                            </div>
                        </div>
                        <!--sale tab end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-tab-area end-->

<!-- banner-area start-->
<div class="banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner2">
                    <img src="{$cdn}img/banner/banner2.jpg" alt="My Duka Dot Biz Online Shopping" />
                    <div class="banner2-text">
                        <h2>lenovo plus</h2>
                        <h3>Sale up to 30%</h3>
                        <a href="#">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner2 banner2-bottom">
                    <img src="{$cdn}img/banner/banner3.jpg" alt="My Duka Dot Biz Online Shopping" />
                    <div class="banner2-text">
                        <h2>nikon d70</h2>
                        <h3>new arrivals</h3>
                        <a href="#">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner-area end-->
<br>


<!-- trending-product-area start-->
<div class="features-product-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h3>Trending Products</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="features-crousel indicator-style">
                {foreach $products as $item}
                    {if $item.bid eq 0 || $item.bid eq NULL}
                        {include file="products/item.tpl"}
                    {/if}
                {foreachelse}
                    No Trending products yet
                {/foreach}
            </div>
        </div>
    </div>
</div>
<!-- features-product-area end-->

<!-- ours-brand-area start-->
{include file="shared/brands.tpl"}
<!-- ours-brand-area end-->

<!-- Recent Blogs section -->
{*include file="shared/recentBlogs.tpl"*}
<!-- recent-post-area end-->

{include file="shared/footer.tpl"}