{include file="shared/head.tpl"}

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
                            <a href="/{$globals.blogs.main}">Blogs</a>
                        </li>
                        <li>
                            <a class="active" href="/{$globals.blogs.profile|cat:($blog.id)}#">{$blog.title}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            {*<div class="col-lg-3 col-md-3 col-sm-3">*}
                <!-- Left Sidebar-->
                {*<div class="left-sidebar">*}
                    {*<div class="left-layout">*}
                        {*<div class="single-layout">*}
                            {*<div class="layout-title">*}
                                {*<h4>Category</h4>*}
                            {*</div>*}
                            {*<div class="layout-list">*}
                                {*<ul>*}
                                    {*<li><a href="#">Fashion & Beauty 1 (14)</a></li>*}
                                    {*<li><a href="#">Fashion & Beauty 2 (14)</a></li>*}
                                    {*<li><a href="#">Fashion & Beauty 3 (15)</a></li>*}
                                {*</ul>*}
                            {*</div>*}
                        {*</div>*}
                        {*<div class="single-layout">*}
                            {*<div class="layout-title">*}
                                {*<h4>color</h4>*}
                            {*</div>*}
                            {*<div class="layout-list">*}
                                {*<ul>*}
                                    {*<li><a href="#">Black (15)</a></li>*}
                                    {*<li><a href="#">Blue (15)</a></li>*}
                                    {*<li><a href="#">Brown (12)</a></li>*}
                                    {*<li><a href="#">Pink (12)</a></li>*}
                                    {*<li><a href="#">Red (11)</a></li>*}
                                    {*<li><a href="#">White (15)</a></li>*}
                                    {*<li><a href="#">Yellow (12)</a></li>*}
                                {*</ul>*}
                            {*</div>*}
                        {*</div>*}
                        {*<div class="single-layout">*}
                            {*<div class="layout-title">*}
                                {*<h4>Manufacturer</h4>*}
                            {*</div>*}
                            {*<div class="layout-list">*}
                                {*<ul>*}
                                    {*<li><a href="#">Adidas (15)</a></li>*}
                                    {*<li><a href="#">Chanel (16)</a></li>*}
                                    {*<li><a href="#">Dolce (16)</a></li>*}
                                {*</ul>*}
                            {*</div>*}
                        {*</div>*}
                    {*</div>*}
                {*</div>*}
            {*</div>*}
            <div class="col-lg-9 col-md-9 col-sm-9">
                <div class="single-latest-blog">
                    <div class="latest-blog-img">
                        <img alt="{$blog.title}" src="{$uploads|cat:($blog.img)}">
                    </div>
                    <div class="latest-blog-content">
                        <h3>{$blog.title}</h3>
                        <div class="meta">
                            <span class="post-category">in <a href="#">{$blog.topic}</a></span>
                            <span class="meta-border">|</span>
                            <span class="time"><i class="fa fa-clock-o"></i> {$blog.created_at}</span>
                        </div>
                        <p>
                            {{$blog.content}}
                        </p>
                        {if !empty($blog.tag)}
                            <blockquote>
                                <p>{$blog.tag}</p>
                            </blockquote>
                        {/if}
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
                    <div class="author-avatar"><img alt="" src="{$cdn}img/avatar.png"></div>
                    <div class="author-description">
                        <h2>About the Author: <a href="#">
                                {if !empty($blog.author)}
                                    {$blog.author}
                                {else}
                                    admin
                                {/if}
                                </a></h2>
                        <p>
                            {if !empty($blog.author)}
                                {$blog.author}  is a Shopping Expert at My Duka Dot Biz.
                            {else}
                                admin is a Shopping Expert at My Duka Dot Biz.
                            {/if}
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
                                            <img alt="" src="{$cdn}img/blog/selim.jpg">
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
                                            <img alt="" src="{$cdn}img/blog/rony.jpg">
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
                                            <img alt="" src="{$cdn}img/blog/selim.jpg">
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
                                            <img alt="" src="{$cdn}img/blog/rony.jpg">
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
                                            <img alt="" src="{$cdn}img/blog/selim.jpg">
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
                                            <img alt="" src="{$cdn}img/blog/rony.jpg">
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
{include file="shared/brands.tpl"}
<!-- ours-brand-area end-->

{include file="shared/footer.tpl"}