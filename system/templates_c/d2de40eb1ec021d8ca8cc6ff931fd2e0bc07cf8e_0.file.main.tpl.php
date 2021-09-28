<?php
/* Smarty version 3.1.29-dev/14, created on 2021-04-09 12:15:22
  from "/var/www/html/dev.my-duka.com/system/templates/blogs/main.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29-dev/14',
  'unifunc' => 'content_6070293ac4c365_59486059',
  'file_dependency' => 
  array (
    'd2de40eb1ec021d8ca8cc6ff931fd2e0bc07cf8e' => 
    array (
      0 => '/var/www/html/dev.my-duka.com/system/templates/blogs/main.tpl',
      1 => 1474008064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:shared/head.tpl' => 1,
    'file:shared/brands.tpl' => 1,
    'file:shared/footer.tpl' => 1,
  ),
),false)) {
function content_6070293ac4c365_59486059 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- blog area start-->
<div class="blog-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="left-sidebar-title">
                    <ul class="page-menu">
                        <li><a href="/">Home</a></li>
                        <li><a class="active" href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['blogs']['main'];?>
">Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
$_from = $_smarty_tpl->tpl_vars['blogs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_blog_0_saved_item = isset($_smarty_tpl->tpl_vars['blog']) ? $_smarty_tpl->tpl_vars['blog'] : false;
$_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['blog']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->_loop = true;
$__foreach_blog_0_saved_local_item = $_smarty_tpl->tpl_vars['blog'];
?>
                <div class="single-blog col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="single-blog-img">
                            <img src="<?php echo ($_smarty_tpl->tpl_vars['uploads']->value).(($_smarty_tpl->tpl_vars['blog']->value['img']));?>
" alt="<?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
" />
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <div class="single-blog-info">
                            <p><?php echo $_smarty_tpl->tpl_vars['blog']->value['summary'];?>
</p>
                            <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['blogs']['profile']).(($_smarty_tpl->tpl_vars['blog']->value['id']));?>
">Read more ...</a>
                        </div>
                    </div>
                </div>
            <?php
$_smarty_tpl->tpl_vars['blog'] = $__foreach_blog_0_saved_local_item;
}
if ($__foreach_blog_0_saved_item) {
$_smarty_tpl->tpl_vars['blog'] = $__foreach_blog_0_saved_item;
}
?>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="page-serial hidden-xs">
                    Showing 1 to 5 of 8 (2 Pages)
                </div>

                <div class="pages">
                    <ol>
                        <li class="current">1</li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">></a>
                        </li>
                        <li>
                            <a href="#">>|</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog area end-->

<!-- ours-brand-area start-->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:shared/brands.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- ours-brand-area end-->

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
