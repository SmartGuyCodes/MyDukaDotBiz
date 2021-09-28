<?php
/* Smarty version 3.1.29-dev/14, created on 2021-04-09 12:15:35
  from "/var/www/html/dev.my-duka.com/system/templates/blogs/profile.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29-dev/14',
  'unifunc' => 'content_60702947ea6012_27236303',
  'file_dependency' => 
  array (
    '297b6ddff90a50484757cc7927beb8c2ea2f71a5' => 
    array (
      0 => '/var/www/html/dev.my-duka.com/system/templates/blogs/profile.tpl',
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
function content_60702947ea6012_27236303 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- blog detials area start -->
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
                            <a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['blogs']['main'];?>
">Blogs</a>
                        </li>
                        <li>
                            <a class="active" href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['blogs']['profile']).(($_smarty_tpl->tpl_vars['blog']->value['id']));?>
#"><?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            
                <!-- Left Sidebar-->
                
                    
                        
                            
                                
                            
                            
                                
                                    
                                    
                                    
                                
                            
                        
                        
                            
                                
                            
                            
                                
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                
                            
                        
                        
                            
                                
                            
                            
                                
                                    
                                    
                                    
                                
                            
                        
                    
                
            
            <div class="col-lg-9 col-md-9 col-sm-9">
                <div class="single-latest-blog">
                    <div class="latest-blog-img">
                        <img alt="<?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
" src="<?php echo ($_smarty_tpl->tpl_vars['uploads']->value).(($_smarty_tpl->tpl_vars['blog']->value['img']));?>
">
                    </div>
                    <div class="latest-blog-content">
                        <h3><?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
</h3>
                        <div class="meta">
                            <span class="post-category">in <a href="#"><?php echo $_smarty_tpl->tpl_vars['blog']->value['topic'];?>
</a></span>
                            <span class="meta-border">|</span>
                            <span class="time"><i class="fa fa-clock-o"></i> <?php echo $_smarty_tpl->tpl_vars['blog']->value['created_at'];?>
</span>
                        </div>
                        <p>
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['blog']->value['content'];
$_tmp1=ob_get_clean();
echo $_tmp1;?>

                        </p>
                        <?php if (!empty($_smarty_tpl->tpl_vars['blog']->value['tag'])) {?>
                            <blockquote>
                                <p><?php echo $_smarty_tpl->tpl_vars['blog']->value['tag'];?>
</p>
                            </blockquote>
                        <?php }?>
                    </div>
                </div>
                <div class="social-sharing">
                    <h3>Share this post</h3>
                    <div class="sharing-icon">
                        <a title="" data-toggle="tooltip" href="#" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a title="" data-toggle="tooltip" href="#" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                        <a title="" data-toggle="tooltip" href="#" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a>
                        <a title="" data-toggle="tooltip" href="#" data-original-title="Google-plus"><i class="fa fa-google-plus"></i></a>
                        <a title="" data-toggle="tooltip" href="#" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="author-info">
                    <div class="author-avatar"><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
img/avatar.png"></div>
                    <div class="author-description">
                        <h2>About the Author: <a href="#">
                                <?php if (!empty($_smarty_tpl->tpl_vars['blog']->value['author'])) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['blog']->value['author'];?>

                                <?php } else { ?>
                                    admin
                                <?php }?>
                                </a></h2>
                        <p>
                            <?php if (!empty($_smarty_tpl->tpl_vars['blog']->value['author'])) {?>
                                <?php echo $_smarty_tpl->tpl_vars['blog']->value['author'];?>
  is a Shopping Expert at My Duka Dot Biz.
                            <?php } else { ?>
                                admin is a Shopping Expert at My Duka Dot Biz.
                            <?php }?>
                        </p>
                    </div>
                </div>
                <div class="single-post-comments">
                    <div class="comments-area">
                        <div class="comments-heading">
                            <h3>6 comments</h3>
                        </div>
                        <div class="comments-list">
                            <ul>
                                <li>
                                    <div class="comments-details">
                                        <div class="comments-list-img">
                                            <img alt="" src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
img/blog/selim.jpg">
                                        </div>
                                        <div class="comments-content-wrap">
												<span>
													<b><a href="#">admin</a></b>
													Post author
													<span class="post-time">October 6, 2014 at 1:38 am</span>
													<a href="#">Reply</a>
												</span>
                                            <p>just a nice post</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="threaded-comments">
                                    <div class="comments-details">
                                        <div class="comments-list-img">
                                            <img alt="" src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
img/blog/rony.jpg">
                                        </div>
                                        <div class="comments-content-wrap">
												<span>
													<b><a href="#">demo</a></b>
													Post author
													<span class="post-time">October 6, 2014 at 2:25 pm</span>
													<a href="#">Reply</a>
												</span>
                                            <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="comments-details">
                                        <div class="comments-list-img">
                                            <img alt="" src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
img/blog/selim.jpg">
                                        </div>
                                        <div class="comments-content-wrap">
												<span>
													<b><a href="#">admin</a></b>
													Post author
													<span class="post-time">October 6, 2014 at 3:18 pm </span>
													<a href="#">Reply</a>
												</span>
                                            <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel mauris. Aenean at justo dolor. Fusce ac sapien bibendum, scelerisque libero nec</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="threaded-comments">
                                    <div class="comments-details">
                                        <div class="comments-list-img">
                                            <img alt="" src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
img/blog/rony.jpg">
                                        </div>
                                        <div class="comments-content-wrap">
												<span>
													<b><a href="#">demo</a></b>
													Post author
													<span class="post-time">October 6, 2014 at 4:25 pm</span>
													<a href="#">Reply</a>
												</span>
                                            <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="comments-details">
                                        <div class="comments-list-img">
                                            <img alt="" src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
img/blog/selim.jpg">
                                        </div>
                                        <div class="comments-content-wrap">
												<span>
													<b><a href="#">admin</a></b>
													Post author
													<span class="post-time">October 6, 2014 at 6:18 pm </span>
													<a href="#">Reply</a>
												</span>
                                            <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel mauris. Aenean at justo dolor. Fusce ac sapien bibendum, scelerisque libero nec</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="threaded-comments">
                                    <div class="comments-details">
                                        <div class="comments-list-img">
                                            <img alt="" src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
img/blog/rony.jpg">
                                        </div>
                                        <div class="comments-content-wrap">
												<span>
													<b><a href="#">demo</a></b>
													Post author
													<span class="post-time">October 6, 2014 at 7:25 pm</span>
													<a href="#">Reply</a>
												</span>
                                            <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="comment-respond">
                        <h3 class="comment-reply-title">Leave a Reply </h3>
                        <span class="email-notes">Your email address will not be published. Required fields are marked *</span>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <input class="form-control" type="text" placeholder="Name" value="" name="email">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">E-Mail</label>
                                        <input class="form-control" type="text" placeholder="E-Mail" value="" name="email">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Website</label>
                                        <input class="form-control" type="text" placeholder="Website" value="" name="website">
                                    </div>
                                </div>
                                <div class="col-md-12 comment-form-comment">
                                    <div class="form-group">
                                        <label class="control-label">Website</label>
                                        <textarea class="form-control" required="required" rows="5"></textarea>
                                    </div>
                                    <button class="custom-button" value="submit" type="submit">
                                        <span>Post Comment</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog detials area end -->

<!-- ours-brand-area start-->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:shared/brands.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- ours-brand-area end-->

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
