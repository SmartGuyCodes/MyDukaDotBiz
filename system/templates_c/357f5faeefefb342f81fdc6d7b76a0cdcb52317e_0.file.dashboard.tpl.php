<?php
/* Smarty version 3.1.29-dev/14, created on 2021-04-09 12:17:29
  from "/var/www/html/dev.my-duka.com/system/templates/admin/dashboard.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29-dev/14',
  'unifunc' => 'content_607029b9aba6f6_07463293',
  'file_dependency' => 
  array (
    '357f5faeefefb342f81fdc6d7b76a0cdcb52317e' => 
    array (
      0 => '/var/www/html/dev.my-duka.com/system/templates/admin/dashboard.tpl',
      1 => 1474008064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/head.tpl' => 1,
    'file:admin/sidebar.tpl' => 1,
    'file:admin/title.tpl' => 1,
    'file:admin/rightbar.tpl' => 1,
    'file:admin/scripts.tpl' => 1,
  ),
),false)) {
function content_607029b9aba6f6_07463293 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body class="bg-1">

<!-- Wrap all page content here -->
<div id="wrap">
    <!-- Make page fluid -->
    <div class="row">
        <!--Left bar-->
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <div id="content" class="col-md-12">
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


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
                                        <h2 class="media-heading animate-number" data-value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['products']->value)===null||$tmp==='' ? 0 : $tmp);?>
" data-animation-duration="1500">
                                            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['products']->value)===null||$tmp==='' ? 0 : $tmp);?>

                                        </h2>
                                    </div>
                                </div>
                            </div>

                            <div class="back">
                                <a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['admin']['show_products'];?>
">
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
                                        <h2 class="media-heading animate-number" data-value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['orders']->value)===null||$tmp==='' ? 0 : $tmp);?>
" data-animation-duration="1500">
                                            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['orders']->value)===null||$tmp==='' ? 0 : $tmp);?>

                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="back">
                                <a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['admin']['show_orders'];?>
">
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
                                        <h2 class="media-heading animate-number" data-value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['categories']->value)===null||$tmp==='' ? 0 : $tmp);?>
" data-animation-duration="1500">
                                            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['categories']->value)===null||$tmp==='' ? 0 : $tmp);?>

                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="back">
                            <a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['admin']['show_categories'];?>
">
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
                                        <h2 class="media-heading animate-number" data-value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['blogs']->value)===null||$tmp==='' ? 0 : $tmp);?>
" data-animation-duration="1500">
                                            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['blogs']->value)===null||$tmp==='' ? 0 : $tmp);?>

                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="back">
                                <a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['admin']['display_blogs'];?>
">
                                    <i class="fa fa-bar-chart-o fa-4x"></i>
                                    <span>Check Summary</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row cards">

                    

                    

                    
                        
                            
                                
                                        
                                            
                                        

                                    
                                        
                                        
                                            
                                        
                                    
                                
                            
                            
                                
                                    
                                    
                                
                            
                        
                    
                </div>

                <div class="row cards">
                    

                    
                </div>
                <!-- /cards -->
                <hr style="border-top: 1px solid #f0f0f0" />

                <!--Urgent orders-->
                <div class="row">
                    <h1 style="text-align: center;">Urgent Orders <span style="font-size: 20px; color: #000 !important;"><a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['admin']['urgent_orders'];?>
">more</a></span></h1>
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
                                <?php
$_from = $_smarty_tpl->tpl_vars['urgent_orders']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_u_order_0_saved_item = isset($_smarty_tpl->tpl_vars['u_order']) ? $_smarty_tpl->tpl_vars['u_order'] : false;
$_smarty_tpl->tpl_vars['u_order'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['u_order']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['u_order']->value) {
$_smarty_tpl->tpl_vars['u_order']->_loop = true;
$__foreach_u_order_0_saved_local_item = $_smarty_tpl->tpl_vars['u_order'];
?>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['u_order']->value['ClientName']) && !empty($_smarty_tpl->tpl_vars['u_order']->value['ClientPhone']) && !empty($_smarty_tpl->tpl_vars['u_order']->value['ClientEmail']) && !empty($_smarty_tpl->tpl_vars['u_order']->value['ClientLocation'])) {?>
                                        <tr class="odd gradeX">
                                        <td><?php echo $_smarty_tpl->tpl_vars['u_order']->value['ClientName'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['u_order']->value['ClientPhone'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['u_order']->value['ClientEmail'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['u_order']->value['ClientLocation'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['u_order']->value['ProductName'];?>
</td>
                                        <td>KES. <?php echo number_format($_smarty_tpl->tpl_vars['u_order']->value['ProductPrice'],2,".",",");?>
</td>
                                        <td>
                                            <img id="pimg" src="<?php echo ($_smarty_tpl->tpl_vars['uploads']->value).(($_smarty_tpl->tpl_vars['u_order']->value['ProductImg']));?>
" width="50" height="50">
                                        </td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['u_order']->value['created_at'];?>
</td>
                                    </tr>
                                    <?php }?>
                                <?php
$_smarty_tpl->tpl_vars['u_order'] = $__foreach_u_order_0_saved_local_item;
}
if ($__foreach_u_order_0_saved_item) {
$_smarty_tpl->tpl_vars['u_order'] = $__foreach_u_order_0_saved_item;
}
?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /tile body -->
                </div>
                <hr style="border-top: 1px solid #f0f0f0" />

                <!--Latest orders-->
                <div class="row">
                    <h1 style="text-align: center;">Latest Orders <span style="font-size: 20px; color: #000 !important;"><a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['admin']['show_orders'];?>
">more</a></span></h1>
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
                                <?php
$_from = $_smarty_tpl->tpl_vars['recent_orders']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_order_1_saved_item = isset($_smarty_tpl->tpl_vars['order']) ? $_smarty_tpl->tpl_vars['order'] : false;
$_smarty_tpl->tpl_vars['order'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['order']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
$__foreach_order_1_saved_local_item = $_smarty_tpl->tpl_vars['order'];
?>
                                    <tr class="odd gradeX">
                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['order']->value['fname'];?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value['lname'];?>
</td>
                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['order']->value['OrderPhone'];?>
</td>
                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['order']->value['OrderEmail'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['order']->value['OrderDescription'];?>
</td>
                                        <td style="text-align: center;"><?php echo number_format($_smarty_tpl->tpl_vars['order']->value['OrderAmount'],2,".",",");?>
</td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['order']->value['OrderDate'];?>
</td>
                                    </tr>
                                <?php
$_smarty_tpl->tpl_vars['order'] = $__foreach_order_1_saved_local_item;
}
if ($__foreach_order_1_saved_item) {
$_smarty_tpl->tpl_vars['order'] = $__foreach_order_1_saved_item;
}
?>
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
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/rightbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
    <!-- Make page fluid-->
</div>
<!-- Wrap all page content end -->

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html>
<?php }
}
