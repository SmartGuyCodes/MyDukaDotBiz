<?php
/* Smarty version 3.1.29-dev/14, created on 2021-04-09 12:19:14
  from "/var/www/html/dev.my-duka.com/system/templates/admin/allProducts.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29-dev/14',
  'unifunc' => 'content_60702a22ca4813_78724343',
  'file_dependency' => 
  array (
    '9085edc8046141038f81e481268991da6687525b' => 
    array (
      0 => '/var/www/html/dev.my-duka.com/system/templates/admin/allProducts.tpl',
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
function content_60702a22ca4813_78724343 ($_smarty_tpl) {
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


        <!-- Page content -->
        <div id="content" class="col-md-12">
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


            <!-- content main container -->
            <div class="main">
                <!-- row -->
                <div class="row">
                    <!-- col 12 -->
                    <div class="col-md-12">
                        <!-- tile -->
                        <section class="tile transparent">
                            <!-- tile header -->
                            <div class="tile-header transparent">
                                <h1><strong>My Duka</strong> Products </h1>
                                <div class="controls">
                                    <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                            <!-- /tile header -->

                            <!-- tile body -->
                            <div class="tile-body color blue rounded-corners">
                                <div class="table-responsive">
                                    <table  class="table table-datatable table-custom" id="staffDataTable">
                                        <thead>
                                        <tr>
                                            <th class="sort-alpha">SKU</th>
                                            <th class="sort-alpha">Name</th>
                                            <th class="sort-amount">Price</th>
                                            <th class="sort-amount">Category</th>
                                            <th class="sort-amount">View</th>
                                            <th class="sort-amount">Time</th>
                                            <th class="sort-amount">Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['products']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_product_0_saved_item = isset($_smarty_tpl->tpl_vars['product']) ? $_smarty_tpl->tpl_vars['product'] : false;
$_smarty_tpl->tpl_vars['product'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['product']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
$__foreach_product_0_saved_local_item = $_smarty_tpl->tpl_vars['product'];
?>
                                            <tr class="odd gradeX">
                                                <td>#<?php echo $_smarty_tpl->tpl_vars['product']->value['ProductSKU'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['product']->value['ProductName'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['product']->value['ProductPrice'];?>
</td>
                                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['product']->value['ProductCategoryID'];?>
</td>
                                                <td class="text-center">
                                                    <a style="color: #000" style="color: #fff !important;" href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['admin']['product_profile']).(($_smarty_tpl->tpl_vars['product']->value['ProductID']));?>
">
                                                        Profile
                                                    </a>
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['product']->value['ProductUpdateDate'];?>
</td>
                                                <td class="text-center">
                                                    <a style="color: #000" href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['admin']['delete_product']).(($_smarty_tpl->tpl_vars['product']->value['ProductID']));?>
">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_0_saved_local_item;
}
if ($__foreach_product_0_saved_item) {
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_0_saved_item;
}
?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /tile body -->
                        </section>
                        <!-- /tile -->
                    </div>
                    <!-- /col 12 -->
                </div>
                <!-- /row -->
            </div>
            <!-- /content container -->
        </div>
        <!-- Page content end -->

        <!--Right bar-->
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
