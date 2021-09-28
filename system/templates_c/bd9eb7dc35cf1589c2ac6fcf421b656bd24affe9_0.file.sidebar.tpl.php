<?php
/* Smarty version 3.1.29-dev/14, created on 2021-04-09 12:17:30
  from "/var/www/html/dev.my-duka.com/system/templates/admin/sidebar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29-dev/14',
  'unifunc' => 'content_607029ba7c5853_17018497',
  'file_dependency' => 
  array (
    'bd9eb7dc35cf1589c2ac6fcf421b656bd24affe9' => 
    array (
      0 => '/var/www/html/dev.my-duka.com/system/templates/admin/sidebar.tpl',
      1 => 1474008064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607029ba7c5853_17018497 ($_smarty_tpl) {
?>
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

            
            
                <li class="navigation" id="dashboard">
                    <a href="#" class="sidebar-toggle" data-toggle="#dashboard">
                        Dashboard
                        <i class="fa fa-angle-up"></i>
                    </a>
                    <ul class="menu">
                        <li>
                            <a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['admin']['main'];?>
">
                                <i class="fa fa-tachometer"></i>
                                Main Dashboard
                            </a>
                        </li>
                    </ul>
                </li>
            
            

            
            
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
                                    <a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['admin']['new_category'];?>
">
                                        <i class="fa fa-caret-right"></i>
                                        New
                                    </a>
                                </li>
                                <li>
                                    <a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['admin']['show_categories'];?>
">
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
                                    <a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['admin']['new_product'];?>
">
                                        <i class="fa fa-caret-right"></i>
                                        New Product
                                    </a>
                                </li>
                                <li>
                                    <a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['admin']['show_products'];?>
">
                                        <i class="fa fa-caret-right"></i>
                                        All Products
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['admin']['featured_products'];?>
">
                                        <i class="fa fa-caret-right"></i>
                                        Featured Products
                                </a>
                                </li>
                                <li>
                                    <a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['admin']['deals'];?>
">
                                        <i class="fa fa-caret-right"></i>
                                        Deals
                                    </a>
                                </li>
                                <li>
                                    <a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['admin']['clearance'];?>
">
                                        <i class="fa fa-caret-right"></i>
                                        Clearance
                                    </a>
                                </li>
                                
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
                                    <a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['admin']['new_merchant'];?>
">
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

                        
                            
                                
                                
                                
                            
                            
                                
                                    
                                        
                                        
                                    
                                
                                
                                    
                                        
                                        
                                    
                                
                            
                        

                        <li class="dropdown">
                            <a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['admin']['show_orders'];?>
" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-cart-arrow-down"></i>
                                Orders
                                <b class="fa fa-plus dropdown-plus"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['admin']['show_orders'];?>
">
                                        <i class="fa fa-caret-right"></i>
                                        Orders
                                    </a>
                                </li>
                                <li>
                                    <a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['admin']['urgent_orders'];?>
">
                                        <i class="fa fa-caret-right"></i>
                                        Urgent Orders
                                    </a>
                                </li>
                                
                                    
                                        
                                        
                                    
                                
                                
                                    
                                        
                                        
                                    
                                
                                
                                    
                                        
                                        
                                    
                                
                                
                                    
                                        
                                        
                                    
                                
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
            
            

            <li class="navigation" id="marketing">
                <a href="#" class="sidebar-toggle" data-toggle="#marketing">
                    Blog Management System
                </a>
                <ul class="menu">
                    <li class="dropdown">
                        <a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['admin']['display_blogs'];?>
" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-book"></i>
                            Blogs
                            <b class="fa fa-plus dropdown-plus"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['admin']['display_blogs'];?>
">
                                    <i class="fa fa-caret-right"></i>
                                    All
                                </a>
                            </li>

                            <li>
                                <a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['admin']['new_blog'];?>
">
                                    <i class="fa fa-caret-right"></i>
                                    New Blog
                                </a>
                            </li>
                        </ul>
                   </li>
                </ul>
            </li>

            
                
                    
                    
                
                
                    
                        
                            
                            
                            
                        
                        
                            
                                
                                    
                                    
                                
                            
                            
                                
                                    
                                    
                                
                            
                            
                                
                                    
                                    
                                
                            
                            
                                
                                    
                                    
                                
                            
                            
                                
                                    
                                    
                                
                            
                            
                                
                                    
                                    
                                
                            
                        
                    
                
            

            
            <?php if ($_smarty_tpl->tpl_vars['role']->value == 1 || $_smarty_tpl->tpl_vars['role']->value == 0) {?>
                
                    
                        
                        
                    
                    
                        
                            
                                
                                
                                
                            
                            
                                
                                    
                                        
                                        
                                    
                                
                                
                                    
                                        
                                        
                                    
                                
                            
                        

                        
                            
                                
                                
                                
                            
                            
                                
                                    
                                        
                                        
                                    
                                
                                
                                    
                                        
                                        
                                    
                                
                                
                                    
                                        
                                        
                                    
                                
                            
                        

                        
                            
                                
                                
                                
                            
                            
                                
                                    
                                        
                                        
                                    
                                
                                
                                    
                                        
                                        
                                    
                                
                            
                        
                    
                
            <?php }?>
            
        </ul>
        <!-- Sidebar end -->
    </div>
    <!--/.nav-collapse -->
</div>
<!-- Fixed navbar end --><?php }
}
