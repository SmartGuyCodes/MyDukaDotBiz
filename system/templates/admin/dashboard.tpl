{include file="admin/head.tpl"}
<body class="bg-1">

<!-- Wrap all page content here -->
<div id="wrap">
    <!-- Make page fluid -->
    <div class="row">
        <!--Left bar-->
        {include file="admin/sidebar.tpl"}

        <div id="content" class="col-md-12">
            {include file="admin/title.tpl"}

            <!-- content main container -->
            <div class="main">
                <!-- cards -->
                <div class="row cards">
                    <div class="card-container col-lg-6 col-sm-6 col-sm-12">
                        <div class="card card-green hover">
                            <div class="front">
                                <div class="media">
                                        <span class="pull-left">
                                           <i class="fa fa-product-hunt media-object"></i>
                                        </span>
                                    <div class="media-body">
                                        <small class="dashboard-titles">Products</small>
                                        <h2 class="media-heading animate-number" data-value="{$products|default:0}" data-animation-duration="1500">
                                            {$products|default: 0}
                                        </h2>
                                    </div>
                                </div>
                            </div>

                            <div class="back">
                                <a href="/{$globals.admin.show_products}">
                                    <i class="fa fa-bar-chart-o fa-4x"></i>
                                    <span>Check Summary</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-container col-lg-6 col-sm-6 col-xs-12">
                        <div class="card card-white hover">
                            <div class="front">
                                <div class="media">
                                        <span class="pull-left">
                                            <i class="fa fa-cart-arrow-down media-object"></i>
                                        </span>

                                    <div class="media-body">
                                        <small class="dashboard-titles">Orders</small>
                                        <h2 class="media-heading animate-number" data-value="{$orders|default:0}" data-animation-duration="1500">
                                            {$orders|default:0}
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="back">
                                <a href="/{$globals.admin.show_orders}">
                                    <i class="fa fa-bar-chart-o fa-4x"></i>
                                    <span>Check Summary</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row cards">
                    <div class="card-container col-lg-6 col-sm-6 col-sm-12">
                        <div class="card card-blue hover">
                            <div class="front">
                                <div class="media">
                                    <span class="pull-left">
                                        <i class="fa fa-exclamation-circle media-object"></i>
                                    </span>
                                    <div class="media-body">
                                        <small class="dashboard-titles">Product Categories</small>
                                        <h2 class="media-heading animate-number" data-value="{$categories|default:0}" data-animation-duration="1500">
                                            {$categories|default:0}
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="back">
                            <a href="/{$globals.admin.show_categories}">
                            <i class="fa fa-bar-chart-o fa-4x"></i>
                            <span>Check Summary</span>
                            </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-container col-lg-6 col-sm-6 col-xs-12">
                        <div class="card card-greensea hover">
                            <div class="front">
                                <div class="media">
                                    <span class="pull-left">
                                        <i class="fa fa-book media-object"></i>
                                    </span>

                                    <div class="media-body">
                                        <small class="dashboard-titles">Blogs</small>
                                        <h2 class="media-heading animate-number" data-value="{$blogs|default:0}" data-animation-duration="1500">
                                            {$blogs|default:0}
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="back">
                                <a href="/{$globals.admin.display_blogs}">
                                    <i class="fa fa-bar-chart-o fa-4x"></i>
                                    <span>Check Summary</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row cards">

                    {* <div class="card-container col-lg-3 col-sm-6 col-xs-12">
                        <div class="card card-green hover">
                            <div class="front">
                                <div class="media">
                                    <span class="pull-left">
                                        <i class="fa fa-usd media-object"></i>
                                    </span>

                                    <div class="media-body">
                                        <small class="dashboard-titles">Payments</small>
                                        <h2 class="media-heading animate-number" data-value="{$payments|default:0}" data-animation-duration="1500">
                                            {$payments|default:0}
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="back">
                                <a href="#">
                                    <i class="fa fa-bar-chart-o fa-4x"></i>
                                    <span>Check Summary</span>
                                </a>
                            </div>
                        </div>
                    </div> *}

                    {* <div class="card-container col-lg-6 col-sm-6 col-sm-12">
                        <div class="card card-greensea hover">
                            <div class="front">
                                <div class="media">
                                    <span class="pull-left">
                                        <i class="fa fa-users media-object"></i>
                                    </span>

                                    <div class="media-body">
                                        <small class="dashboard-titles">Users</small>
                                        <h2 class="media-heading animate-number" data-value="{$users|default:0}" data-animation-duration="1500">
                                            {$users|default:0}
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="back">
                                <a href="#">
                                    <i class="fa fa-bar-chart-o fa-4x"></i>
                                    <span>Check Summary</span>
                                </a>
                            </div>
                        </div>
                    </div> *}

                    {*<div class="card-container col-lg-6 col-sm-6 col-xs-12">*}
                        {*<div class="card card-red hover">*}
                            {*<div class="front">*}
                                {*<div class="media">*}
                                        {*<span class="pull-left">*}
                                            {*<i class="fa fa-user-secret media-object"></i>*}
                                        {*</span>*}

                                    {*<div class="media-body">*}
                                        {*<small class="dashboard-titles">Staff</small>*}
                                        {*<h2 class="media-heading animate-number" data-value="{$staff|default:0}" data-animation-duration="1500">*}
                                            {*{$staff|default:0}*}
                                        {*</h2>*}
                                    {*</div>*}
                                {*</div>*}
                            {*</div>*}
                            {*<div class="back">*}
                                {*<a href="/{$globals.staff.show}">*}
                                    {*<i class="fa fa-bar-chart-o fa-4x"></i>*}
                                    {*<span>Check Summary</span>*}
                                {*</a>*}
                            {*</div>*}
                        {*</div>*}
                    {*</div>*}
                </div>

                <div class="row cards">
                    {* <div class="card-container col-lg-4 col-sm-6 col-xs-12">
                        <div class="card card-slategray hover">
                            <div class="front">
                                <div class="media">
                                    <span class="pull-left">
                                        <i class="fa fa-gift media-object"></i>
                                    </span>

                                    <div class="media-body">
                                        <small class="dashboard-titles">Offers(<span style="font-size: 10px">Coming soon</span>)</small>
                                        <h2 class="media-heading animate-number" data-value="{$revenue|default:0}" data-animation-duration="1500">
                                            {$offers|default:0}
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="back">
                                <a href="#">
                                    <i class="fa fa-bar-chart-o fa-4x"></i>
                                    <span>Check Summary</span>
                                </a>
                            </div>
                        </div>
                    </div> *}

                    {* <div class="card-container col-lg-4 col-sm-6 col-xs-12">
                        <div class="card card-red hover">
                            <div class="front">
                                <div class="media">
                                    <span class="pull-left">
                                        <i class="fa fa-globe media-object"></i>
                                    </span>

                                    <div class="media-body">
                                        <small class="dashboard-titles">Deliveries(<span style="font-size: 10px">Coming soon</span>)</small>
                                        <h2 class="media-heading animate-number" data-value="{$revenue|default:0}" data-animation-duration="1500">
                                            {$deliveries|default:0}
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="back">
                                <a href="#">
                                    <i class="fa fa-bar-chart-o fa-4x"></i>
                                    <span>Check Summary</span>
                                </a>
                            </div>
                        </div>
                    </div> *}
                </div>
                <!-- /cards -->
                <hr style="border-top: 1px solid #f0f0f0" />

                <!--Urgent orders-->
                <div class="row">
                    <h1 style="text-align: center;">Urgent Orders <span style="font-size: 20px; color: #000 !important;"><a href="/{$globals.admin.urgent_orders}">more</a></span></h1>
                    <!-- tile body -->
                    <div class="tile-body color blue rounded-corners">
                        <div class="table-responsive">
                            <table  class="table table-datatable table-custom" id="urgentOrdersDataTable">
                                <thead>
                                <tr>
                                    <th class="sort-alpha">Client Name</th>
                                    <th class="sort-alpha">Client Phone</th>
                                    <th class="sort-amount">Client Email</th>
                                    <th class="sort-amount">Client Location</th>
                                    <th class="sort-amount">Product Name</th>
                                    <th class="sort-amount">Product Price</th>
                                    <th class="sort-amount">Product Image</th>
                                    <th class="sort-amount">Time</th>
                                </tr>
                                </thead>
                                <tbody>
                                {foreach $urgent_orders as $u_order}
                                    {if !empty($u_order.ClientName) && !empty($u_order.ClientPhone) && !empty($u_order.ClientEmail) && !empty($u_order.ClientLocation)}
                                        <tr class="odd gradeX">
                                        <td>{$u_order.ClientName}</td>
                                        <td>{$u_order.ClientPhone}</td>
                                        <td>{$u_order.ClientEmail}</td>
                                        <td>{$u_order.ClientLocation}</td>
                                        <td>{$u_order.ProductName}</td>
                                        <td>KES. {$u_order.ProductPrice|number_format:2:".":","}</td>
                                        <td>
                                            <img id="pimg" src="{$uploads|cat:($u_order.ProductImg)}" width="50" height="50">
                                        </td>
                                        <td class="text-center">{$u_order.created_at}</td>
                                    </tr>
                                    {/if}
                                {/foreach}
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /tile body -->
                </div>
                <hr style="border-top: 1px solid #f0f0f0" />

                <!--Latest orders-->
                <div class="row">
                    <h1 style="text-align: center;">Latest Orders <span style="font-size: 20px; color: #000 !important;"><a href="/{$globals.admin.show_orders}">more</a></span></h1>
                    <!-- tile body -->
                    <div class="tile-body color blue rounded-corners">
                        <div class="table-responsive">
                            <table  class="table table-datatable table-custom" id="latestOrdersDataTable">
                                <thead>
                                <tr>
                                    <th style="text-align: center;"class="sort-alpha">Client</th>
                                    <th style="text-align: center;" class="sort-alpha">Client Phone</th>
                                    <th style="text-align: center;" class="sort-alpha">Client Email</th>
                                    <th style="text-align: center;" class="sort-alpha">Description</th>
                                    <th style="text-align: center;" class="sort-amount">Amount(KES.)</th>
                                    <th style="text-align: center;" class="sort-amount">Date Ordered</th>
                                </tr>
                                </thead>
                                <tbody>
                                {foreach $recent_orders as $order}
                                    <tr class="odd gradeX">
                                        <td style="text-align: center;">{$order.fname} {$order.lname}</td>
                                        <td style="text-align: center;">{$order.OrderPhone}</td>
                                        <td style="text-align: center;">{$order.OrderEmail}</td>
                                        <td>{$order.OrderDescription}</td>
                                        <td style="text-align: center;">{$order.OrderAmount|number_format:2:".":","}</td>
                                        <td class="text-center">{$order.OrderDate}</td>
                                    </tr>
                                {/foreach}
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /tile body -->
                </div>

            </div>
            <!-- /content container -->
        </div>

        <!--Right menu-->
        {include file="admin/rightbar.tpl"}
    </div>
    <!-- Make page fluid-->
</div>
<!-- Wrap all page content end -->

{include file="admin/scripts.tpl"}

</body>
</html>
