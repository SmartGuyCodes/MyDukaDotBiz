{include file="shared/head.tpl"}

<!-- blog area start-->
<div class="blog-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="left-sidebar-title">
                    <ul class="page-menu">
                        <li><a href="/">Home</a></li>
                        <li><a class="active" href="/{$globals.blogs.main}">Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            {foreach $blogs as $blog}
                <div class="single-blog col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="single-blog-img">
                            <img src="{$uploads|cat:($blog.img)}" alt="{$blog.title}" />
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <div class="single-blog-info">
                            <p>{$blog.summary}</p>
                            <a href="/{$globals.blogs.profile|cat:($blog.id)}">Read more ...</a>
                        </div>
                    </div>
                </div>
            {/foreach}

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
{include file="shared/brands.tpl"}
<!-- ours-brand-area end-->

{include file="shared/footer.tpl"}