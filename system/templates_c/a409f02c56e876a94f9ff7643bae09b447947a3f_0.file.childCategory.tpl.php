<?php
/* Smarty version 3.1.29-dev/14, created on 2021-04-09 12:15:16
  from "/var/www/html/dev.my-duka.com/system/templates/products/childCategory.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29-dev/14',
  'unifunc' => 'content_607029343fe988_08023971',
  'file_dependency' => 
  array (
    'a409f02c56e876a94f9ff7643bae09b447947a3f' => 
    array (
      0 => '/var/www/html/dev.my-duka.com/system/templates/products/childCategory.tpl',
      1 => 1474008064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:shared/head.tpl' => 1,
    'file:products/item.tpl' => 1,
    'file:shared/brands.tpl' => 1,
    'file:shared/recentBlogs.tpl' => 1,
    'file:shared/footer.tpl' => 1,
  ),
),false)) {
function content_607029343fe988_08023971 ($_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once '/var/www/html/dev.my-duka.com/smarty/libs/plugins/function.math.php';
if (!is_callable('smarty_modifier_truncate')) require_once '/var/www/html/dev.my-duka.com/smarty/libs/plugins/modifier.truncate.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- shop page area start -->
<div class="shop-product-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                
                
                
                <div class="shop-product-view">
                    <!-- Shop Product Tab Area -->
                    <div class="shop-tab-area">
                        <div class="left-sidebar-title">
                            <ul class="page-menu">
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    <a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['products']['category'];
echo $_smarty_tpl->tpl_vars['cat']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</a>
                                </li>
                                <li>
                                    <a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['products']['sub_sub_category'];
echo $_smarty_tpl->tpl_vars['subCat']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['subCategroy']->value;?>
</a>
                                </li>
                                <li>
                                    <a class="active" href="#"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Tab Bar -->
                        <div class="tab-bar">
                            <div class="tab-bar-left">
                                <div class="tab-bar-inner">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="active"><a href="#shop-grid" data-toggle="tab"><i class="fa fa-th"></i></a></li>
                                        <li><a href="#shop-list" data-toggle="tab"><i class="fa fa-th-list"></i></a></li>
                                    </ul>
                                </div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                            </div>

                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        </div>
                        <!-- End Tab Bar -->

                        <!-- Tab Content -->
                        <div class="tab-content">
                            <div id="shop-grid" class="tab-pane active" role="tabpanel">
                                <div class="row">
                                    <?php
$_from = $_smarty_tpl->tpl_vars['products']->value;
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
                                        <!-- single-product start -->
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:products/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                                        </div>
                                        <!-- single-product end -->
                                    <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
                                </div>
                            </div>
                            <div id="shop-list" class="tab-pane shop-list" role="tabpanel">
                                <div class="row">
                                    <?php
$_from = $_smarty_tpl->tpl_vars['products']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_1_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_1_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['ProductBrand'])) {?>
                                            <!-- single blog start -->
                                            <div class="product-single">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="product-img">
                                                        <?php if ($_smarty_tpl->tpl_vars['item']->value['ProductStock'] <= 0) {?>
                                                            <span class="new">Out of Stock</span>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['item']->value['ProductNewPrice'] < $_smarty_tpl->tpl_vars['item']->value['ProductPrice'] && $_smarty_tpl->tpl_vars['item']->value['ProductNewPrice'] != 0) {?>
                                                            <span class="new">
                                                                -<?php echo smarty_function_math(array('assign'=>((string)$_smarty_tpl->tpl_vars['percentage']->value),'equation'=>"(x / y) * 100",'x'=>($_smarty_tpl->tpl_vars['item']->value['ProductPrice']-$_smarty_tpl->tpl_vars['item']->value['ProductNewPrice']),'y'=>$_smarty_tpl->tpl_vars['item']->value['ProductPrice'],'format'=>"%.0f"),$_smarty_tpl);?>
%
                                                            </span>
                                                        <?php }?>
                                                        <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['profile']).(($_smarty_tpl->tpl_vars['item']->value['ProductID']));?>
">
                                                            <img class="primary-img" src="<?php echo ($_smarty_tpl->tpl_vars['uploads']->value).(($_smarty_tpl->tpl_vars['item']->value['ProductImage']));?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['ProductName'];?>
" />
                                                            <img class="secondary-img" src="<?php echo ($_smarty_tpl->tpl_vars['uploads']->value).(($_smarty_tpl->tpl_vars['item']->value['ProductImage']));?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['ProductName'];?>
" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="product-details">
                                                        <div class="product-content">
                                                            <h1><a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['profile']).(($_smarty_tpl->tpl_vars['item']->value['ProductID']));?>
"><strong><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['item']->value['ProductBrand'], 'UTF-8');?>
</strong></a></h1>
                                                            <h2><a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['profile']).(($_smarty_tpl->tpl_vars['item']->value['ProductID']));?>
"><strong><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value['ProductName'],40);?>
</strong></a></h2>
                                                            <div class="pro-price">
                                                                <?php if ($_smarty_tpl->tpl_vars['item']->value['ProductNewPrice'] < $_smarty_tpl->tpl_vars['item']->value['ProductPrice'] && $_smarty_tpl->tpl_vars['item']->value['ProductNewPrice'] != 0) {?>
                                                                    <span class="new-price">KES.<?php echo number_format($_smarty_tpl->tpl_vars['item']->value['ProductNewPrice'],2,".",",");?>
</span>
                                                                    <span class="old-price">KES.<?php echo number_format($_smarty_tpl->tpl_vars['item']->value['ProductPrice'],2,".",",");?>
</span>
                                                                <?php } else { ?>
                                                                    <span class="new-price">KES. <?php echo number_format($_smarty_tpl->tpl_vars['item']->value['ProductPrice'],2,".",",");?>
</span>
                                                                <?php }?>
                                                            </div>
                                                            
                                                            
                                                            
                                                        </div>
                                                        <div class="product-reveiw">
                                                            <?php echo $_smarty_tpl->tpl_vars['item']->value['ProductOverview'];?>

                                                            <a class="readmore" href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['profile']).(($_smarty_tpl->tpl_vars['item']->value['ProductID']));?>
">Read more</a>
                                                        </div>
                                                        <div class="action">
                                                            <div class="add-to-cart">
                                                                <a href="#">Add to cart</a>
                                                                <a href="#">Buy Now</a>
                                                            </div>
                                                            <div class="add-to-link">
                                                                <a class="add-to-wishlist" href="#" data-toggle="tooltip" data-placement="top" title="Add to Wish List">
                                                                    <i class="fa fa-heart-o"></i>
                                                                    Add to Wish List
                                                                </a>
                                                                <a class="add-to-compare" href="#" data-toggle="tooltip" data-placement="top" title="Add to compare">
                                                                    <i class="fa fa-signal"></i>
                                                                    Add to compare
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single blog end -->
                                        <?php }?>
                                    <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_local_item;
}
if ($__foreach_item_1_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_item;
}
?>
                                </div>
                            </div>
                        </div>
                        <!-- End Tab Bar -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- shop page area end -->

<!-- ours-brand-area start-->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:shared/brands.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- ours-brand-area end-->

<!-- Recent Blogs section -->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:shared/recentBlogs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- recent-post-area end-->

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
