<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top navbar-transparent-black mm-fixed-top" role="navigation" id="navbar">
    <!-- Branding -->
    <div class="navbar-header col-md-2">
        <a class="navbar-brand" href="">
            <i class="fa fa-opencart"></i>
            <strong>MyDuka.</strong>Biz
        </a>
        <div class="sidebar-collapse">
            <a href="#">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>
    <!-- Branding end -->

    <!-- .nav-collapse -->
    <div class="navbar-collapse">
        <!-- Page refresh -->
        <ul class="nav navbar-nav refresh">
            <li class="divided">
                <a href="#" class="page-refresh"><i class="fa fa-refresh"></i></a>
            </li>
        </ul>
        <!-- /Page refresh -->

        <!-- Search -->
        <div class="search" id="main-search">
            <i class="fa fa-search"></i> <input type="text" placeholder="Search...">
        </div>
        <!-- Search end -->

        <!-- Quick Actions -->
        <ul class="nav navbar-nav quick-actions">
            {*<li class="dropdown divided user" id="current-user">*}
                {*<div class="profile-photo">*}
                    {*<img src="{$cdn}assets/images/user-icon.png" alt />*}
                {*</div>*}
                {*<a class="dropdown-toggle options" data-toggle="dropdown" href="#">*}
                    {*{$username}*}
                     {*<i class="fa fa-caret-down"></i>*}
                {*</a>*}

                {*<ul class="dropdown-menu arrow settings">*}
                    {*<li>*}
                        {*<a href="#"><i class="fa fa-user"></i> Profile</a>*}
                    {*</li>*}

                    {* <li>
                        <a href="#"><i class="fa fa-calendar"></i> Calendar</a>
                    </li> *}

                    {* <li>
                        <a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge badge-red" id="user-inbox">3</span></a>
                    </li> *}

                    {*<li class="divider"></li>*}

                    {*<li>*}
                        {*<a href="/{$globals.access.logout}"><i class="fa fa-power-off"></i> Logout</a>*}
                    {*</li>*}
                {*</ul>*}
            {*</li>*}

            <li>
                <a href="#mmenu"><i class="fa fa-comments"></i></a>
            </li>
        </ul>
        <!-- /Quick Actions -->

        <!-- Sidebar -->
        <ul class="nav navbar-nav side-nav" id="sidebar">

            <li class="collapsed-content">
                <ul>
                    <li class="search">
                        <!-- Collapsed search pasting here at 768px -->
                    </li>
                </ul>
            </li>

            {* Dashboard *}
            {*{if $role eq 0}*}
                <li class="navigation" id="dashboard">
                    <a href="#" class="sidebar-toggle" data-toggle="#dashboard">
                        Dashboard
                        <i class="fa fa-angle-up"></i>
                    </a>
                    <ul class="menu">
                        <li>
                            <a href="/{$globals.admin.main}">
                                <i class="fa fa-tachometer"></i>
                                Main Dashboard
                            </a>
                        </li>
                    </ul>
                </li>
            {*{/if}*}
            {* ./End *}

            {* Shop Summary *}
            {*{if $role eq 0 || $role eq 1 || $role eq 2}*}
                <li class="navigation" id="summary">
                    <a href="#" class="sidebar-toggle" data-toggle="#summary">
                        MyDUKA Shop Summary
                        <i class="fa fa-angle-up"></i>
                    </a>
                    <ul class="menu">
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-database"></i>
                                Categories
                                <b class="fa fa-plus dropdown-plus"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/{$globals.admin.new_category}">
                                        <i class="fa fa-caret-right"></i>
                                        New
                                    </a>
                                </li>
                                <li>
                                    <a href="/{$globals.admin.show_categories}">
                                        <i class="fa fa-caret-right"></i>
                                        All Categories
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-product-hunt"></i>
                                Products
                                <b class="fa fa-plus dropdown-plus"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/{$globals.admin.new_product}">
                                        <i class="fa fa-caret-right"></i>
                                        New Product
                                    </a>
                                </li>
                                <li>
                                    <a href="/{$globals.admin.show_products}">
                                        <i class="fa fa-caret-right"></i>
                                        All Products
                                    </a>
                                </li>
                                {*All the following to have a data table with add new button on top*}
                                <li>
                                    <a href="/{$globals.admin.featured_products}">
                                        <i class="fa fa-caret-right"></i>
                                        Featured Products
                                </a>
                                </li>
                                <li>
                                    <a href="/{$globals.admin.deals}">
                                        <i class="fa fa-caret-right"></i>
                                        Deals
                                    </a>
                                </li>
                                <li>
                                    <a href="/{$globals.admin.clearance}">
                                        <i class="fa fa-caret-right"></i>
                                        Clearance
                                    </a>
                                </li>
                                {*End modification*}
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-users"></i>
                                Merchants
                                <b class="fa fa-plus dropdown-plus"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/{$globals.admin.new_merchant}">
                                        <i class="fa fa-caret-right"></i>
                                        New
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-caret-right"></i>
                                        All Merchants
                                    </a>
                                </li>
                            </ul>
                        </li>

                        {*<li class="dropdown">*}
                            {*<a href="" class="dropdown-toggle" data-toggle="dropdown">*}
                                {*<i class="fa fa-gift"></i>*}
                                {*Offers*}
                                {*<b class="fa fa-plus dropdown-plus"></b>*}
                            {*</a>*}
                            {*<ul class="dropdown-menu">*}
                                {*<li>*}
                                    {*<a href="">*}
                                        {*<i class="fa fa-caret-right"></i>*}
                                        {*New*}
                                    {*</a>*}
                                {*</li>*}
                                {*<li>*}
                                    {*<a href="">*}
                                        {*<i class="fa fa-caret-right"></i>*}
                                        {*All Offers*}
                                    {*</a>*}
                                {*</li>*}
                            {*</ul>*}
                        {*</li>*}

                        <li class="dropdown">
                            <a href="/{$globals.admin.show_orders}" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-cart-arrow-down"></i>
                                Orders
                                <b class="fa fa-plus dropdown-plus"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/{$globals.admin.show_orders}">
                                        <i class="fa fa-caret-right"></i>
                                        Orders
                                    </a>
                                </li>
                                <li>
                                    <a href="/{$globals.admin.urgent_orders}">
                                        <i class="fa fa-caret-right"></i>
                                        Urgent Orders
                                    </a>
                                </li>
                                {*<li>*}
                                    {*<a href="">*}
                                        {*<i class="fa fa-caret-right"></i>*}
                                        {*Paid*}
                                    {*</a>*}
                                {*</li>*}
                                {*<li>*}
                                    {*<a href="">*}
                                        {*<i class="fa fa-caret-right"></i>*}
                                        {*Cash On Delivery*}
                                    {*</a>*}
                                {*</li>*}
                                {*<li>*}
                                    {*<a href="">*}
                                        {*<i class="fa fa-caret-right"></i>*}
                                        {*Delivered*}
                                    {*</a>*}
                                {*</li>*}
                                {*<li>*}
                                    {*<a href="">*}
                                        {*<i class="fa fa-caret-right"></i>*}
                                        {*Undelivered*}
                                    {*</a>*}
                                {*</li>*}
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-truck"></i>
                                Deliveries
                                <b class="fa fa-plus dropdown-plus"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="">
                                        <i class="fa fa-caret-right"></i>
                                        New Courier
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-caret-right"></i>
                                        My Duka Dot Biz Deliveries
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-caret-right"></i>
                                        G4S
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-caret-right"></i>
                                        Africa Internet Express(AIX)
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            {*{/if}*}
            {* ./End *}

            <li class="navigation" id="marketing">
                <a href="#" class="sidebar-toggle" data-toggle="#marketing">
                    Blog Management System
                </a>
                <ul class="menu">
                    <li class="dropdown">
                        <a href="/{$globals.admin.display_blogs}" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-book"></i>
                            Blogs
                            <b class="fa fa-plus dropdown-plus"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/{$globals.admin.display_blogs}">
                                    <i class="fa fa-caret-right"></i>
                                    All
                                </a>
                            </li>

                            <li>
                                <a href="/{$globals.admin.new_blog}">
                                    <i class="fa fa-caret-right"></i>
                                    New Blog
                                </a>
                            </li>
                        </ul>
                   </li>
                </ul>
            </li>

            {*<li class="navigation" id="finance">*}
                {*<a href="#" class="sidebar-toggle" data-toggle="#finance">*}
                    {*Financial Overview*}
                    {*<i class="fa fa-angle-up"></i>*}
                {*</a>*}
                {*<ul class="menu">*}
                    {*<li class="dropdown">*}
                        {*<a href="/{$globals.admin.payments}" class="dropdown-toggle" data-toggle="dropdown">*}
                            {*<i class="fa fa-usd"></i>*}
                            {*Payments*}
                            {*<b class="fa fa-plus dropdown-plus"></b>*}
                        {*</a>*}
                        {*<ul class="dropdown-menu">*}
                            {*<li>*}
                                {*<a href="/{$globals.admin.payments}">*}
                                    {*<i class="fa fa-caret-right"></i>*}
                                    {*All*}
                                {*</a>*}
                            {*</li>*}
                            {*<li>*}
                                {*<a href="/{$globals.admin.paid_orders}">*}
                                    {*<i class="fa fa-caret-right"></i>*}
                                    {*Mpesa*}
                                {*</a>*}
                            {*</li>*}
                            {*<li>*}
                                {*<a href="/{$globals.admin.delivered_orders}">*}
                                    {*<i class="fa fa-caret-right"></i>*}
                                    {*Airtel Money*}
                                {*</a>*}
                            {*</li>*}
                            {*<li>*}
                                {*<a href="/{$globals.admin.undelivered_orders}">*}
                                    {*<i class="fa fa-caret-right"></i>*}
                                    {*Jambopay*}
                                {*</a>*}
                            {*</li>*}
                            {*<li>*}
                                {*<a href="/{$globals.admin.undelivered_orders}">*}
                                    {*<i class="fa fa-caret-right"></i>*}
                                    {*Visa Cards*}
                                {*</a>*}
                            {*</li>*}
                            {*<li>*}
                                {*<a href="/{$globals.admin.undelivered_orders}">*}
                                    {*<i class="fa fa-caret-right"></i>*}
                                    {*Paypal*}
                                {*</a>*}
                            {*</li>*}
                        {*</ul>*}
                    {*</li>*}
                {*</ul>*}
            {*</li>*}

            {* Staff *}
            {if $role eq 1 || $role eq 0}
                {*<li class="navigation" id="users">*}
                    {*<a href="#" class="sidebar-toggle" data-toggle="#users">*}
                        {*MyDuka Users*}
                        {*<i class="fa fa-angle-up"></i>*}
                    {*</a>*}
                    {*<ul class="menu">*}
                        {*<li class="dropdown">*}
                            {*<a href="/{$globals.staff.show}" class="dropdown-toggle" data-toggle="dropdown">*}
                                {*<i class="fa fa-user-secret"></i>*}
                                {*Staff*}
                                {*<b class="fa fa-plus dropdown-plus"></b>*}
                            {*</a>*}
                            {*<ul class="dropdown-menu">*}
                                {*<li>*}
                                    {*<a href="/{$globals.staff.new}">*}
                                        {*<i class="fa fa-caret-right"></i>*}
                                        {*New*}
                                    {*</a>*}
                                {*</li>*}
                                {*<li>*}
                                    {*<a href="/{$globals.staff.show}">*}
                                        {*<i class="fa fa-caret-right"></i>*}
                                        {*Administrators*}
                                    {*</a>*}
                                {*</li>*}
                            {*</ul>*}
                        {*</li>*}

                        {* <li class="dropdown">*}
                            {*<a href="/{$globals.admin.users}" class="dropdown-toggle" data-toggle="dropdown">*}
                                {*<i class="fa fa-users"></i>*}
                                {*Users*}
                                {*<b class="fa fa-plus dropdown-plus"></b>*}
                            {*</a>*}
                            {*<ul class="dropdown-menu">*}
                                {*<li>*}
                                    {*<a href="/{$globals.admin.users}">*}
                                        {*<i class="fa fa-caret-right"></i>*}
                                        {*All*}
                                    {*</a>*}
                                {*</li>*}
                                {*<li>*}
                                    {*<a href="/{$globals.admin.merchants}">*}
                                        {*<i class="fa fa-caret-right"></i>*}
                                        {*Registered Merchants*}
                                    {*</a>*}
                                {*</li>*}
                                {*<li>*}
                                    {*<a href="/{$globals.admin.clients}">*}
                                        {*<i class="fa fa-caret-right"></i>*}
                                        {*Registered Clients*}
                                    {*</a>*}
                                {*</li>*}
                            {*</ul>*}
                        {*</li> *}

                        {* <li class="dropdown">*}
                            {*<a href="" class="dropdown-toggle" data-toggle="dropdown">*}
                                {*<i class="fa fa-briefcase"></i>*}
                                {*Careers*}
                                {*<b class="fa fa-plus dropdown-plus"></b>*}
                            {*</a>*}
                            {*<ul class="dropdown-menu">*}
                                {*<li>*}
                                    {*<a href="/{$globals.career.new}">*}
                                        {*<i class="fa fa-caret-right"></i>*}
                                        {*All*}
                                    {*</a>*}
                                {*</li>*}
                                {*<li>*}
                                    {*<a href="/{$globals.admin.merchants}">*}
                                        {*<i class="fa fa-caret-right"></i>*}
                                        {*New*}
                                    {*</a>*}
                                {*</li>*}
                            {*</ul>*}
                        {*</li> *}
                    {*</ul>*}
                {*</li>*}
            {/if}
            {* ./End *}
        </ul>
        <!-- Sidebar end -->
    </div>
    <!--/.nav-collapse -->
</div>
<!-- Fixed navbar end -->