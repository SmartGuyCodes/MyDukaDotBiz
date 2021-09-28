<?php
/* Smarty version 3.1.29-dev/14, created on 2021-04-09 11:59:41
  from "/var/www/html/dev.my-duka.com/system/templates/support/return.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29-dev/14',
  'unifunc' => 'content_6070258db128b6_14346912',
  'file_dependency' => 
  array (
    '2005beed3e779a434fcbb676d2528e09edb71829' => 
    array (
      0 => '/var/www/html/dev.my-duka.com/system/templates/support/return.tpl',
      1 => 1474008064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:shared/head.tpl' => 1,
    'file:shared/support_sidebar.tpl' => 1,
    'file:shared/brands.tpl' => 1,
    'file:shared/recentBlogs.tpl' => 1,
    'file:shared/footer.tpl' => 1,
  ),
),false)) {
function content_6070258db128b6_14346912 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- Return and Refund Policy start-->
<div class="shop-product-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="left-sidebar-title">
                    <ul class="page-menu">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['support']['aboutus'];?>
">About Us</a>
                        </li>
                        <li>
                            <a class="active" href="#">My Duka Dot Biz Return & Refund Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
                <!-- Left Sidebar-->
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:shared/support_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
            <div class="col-lg-9 col-md-9 col-sm-9">
                <div class="single-latest-blog">
                    <div class="latest-blog-content">
                        <h1>Return and Refund Policy</h1>
                        <hr>
                        <div class="meta">
                            <span class="post-category">We Deal in</span>
                            <span class="post-category"><a href="#">Fashion</a></span>
                            <span class="meta-border">|</span>
                            <span class="post-category"><a href="#">Electronics</a></span>
                            <span class="meta-border">|</span>
                            <span class="post-category"><a href="#">General Merchandise</a></span>
                            <span class="meta-border">|</span>
                            <span class="post-category"><a href="#">eCommerce</a></span>
                            <span class="meta-border">|</span>
                            <span class="post-category"><a href="#">mCommerce</a></span>
                            <span class="meta-border">|</span>
                            <span class="post-category"><a href="#">Mobile and Tablets</a></span>
                            <!--<span class="meta-border">|</span>-->
                            <span class="post-category">Since</span>
                            <span class="time"><i class="fa fa-clock-o"></i> Oct, 2015</span>
                        </div>

                        <h3 style="color: #0D7478 !important;">How to return a product?</h3>

                        <p>
                            Do you need to return a product? Before returning an item, please check our Returns & Refunds Policy on the Product Page to make sure your item is eligible for return.
                        </p>

                        <h4><strong>Returns are easy. Simply follow the 7 steps stated below:</strong></h4>
                        <ol>
                            <li>Check if your products meet all requirements</li>
                            <li>Login to your account. Go to "My Order" and click "Return"</li>
                            <li>Fill return form</li>
                            <li>Pack items</li>
                            <li>Arrange the product retrieval with myDUKA.</li>
                            <li>Your return will go through Quality check</li>
                            <li>If validated you will get refunded</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end-->

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
