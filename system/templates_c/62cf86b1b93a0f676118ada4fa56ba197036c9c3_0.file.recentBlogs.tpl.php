<?php
/* Smarty version 3.1.29-dev/14, created on 2021-04-09 11:58:58
  from "/var/www/html/dev.my-duka.com/system/templates/shared/recentBlogs.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29-dev/14',
  'unifunc' => 'content_60702562dccb94_39091699',
  'file_dependency' => 
  array (
    '62cf86b1b93a0f676118ada4fa56ba197036c9c3' => 
    array (
      0 => '/var/www/html/dev.my-duka.com/system/templates/shared/recentBlogs.tpl',
      1 => 1474008064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60702562dccb94_39091699 ($_smarty_tpl) {
?>
<div class="recent-post-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h3>Recent Blogs</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="recent-post-crousel indicator-style">
                <?php
$_from = $_smarty_tpl->tpl_vars['latestNews']->value;
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
                    <div class="post-single">
                        <div class="post-img">
                            <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['blogs']['profile']).(($_smarty_tpl->tpl_vars['blog']->value['id']));?>
">
                                <img height="100" src="<?php echo ($_smarty_tpl->tpl_vars['uploads']->value).(($_smarty_tpl->tpl_vars['blog']->value['img']));?>
" alt="<?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
" />
                            </a>
                        </div>
                        <div class="post-content">
                            <div class="content-heading">
                                <h3><a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['blogs']['profile']).(($_smarty_tpl->tpl_vars['blog']->value['id']));?>
"><?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
</a></h3>
                            </div>
                            
                                
                                    
                                
                            
                            <div class="content-comment">
									<span class="entry-date">
                                    <?php echo $_smarty_tpl->tpl_vars['blog']->value['created_at'];?>

									</span>
									<span class="entry-comment">
										<i class="fa fa-user"></i>
										<?php echo $_smarty_tpl->tpl_vars['blog']->value['author'];?>
 - myDukaExpert
									</span>
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
            </div>
        </div>
    </div>
</div><?php }
}
