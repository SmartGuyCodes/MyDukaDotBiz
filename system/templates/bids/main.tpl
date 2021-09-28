{include file="shared/head.tpl"}

<!-- shop page area start -->
<div class="shop-product-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                {*<div class="shop-page-banner">*}
                {*<img src="{$cdn}img/banner/shop-page-banner.png" alt="" />*}
                {*</div>*}
                <div class="shop-product-view">
                    <!-- Shop Product Tab Area -->
                    <div class="shop-tab-area">
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
                                    {foreach $products as $item}
                                        <!-- single-product start -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            {include file="products/bid.tpl"}
                                        </div>
                                        <!-- single-product end -->
                                    {/foreach}
                                </div>
                            </div>
                            <div id="shop-list" class="tab-pane shop-list" role="tabpanel">
                                <div class="row">
                                    {foreach $products as $item}
                                        {include file="products/bid.tpl"}
                                    {/foreach}
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
{include file="shared/brands.tpl"}
<!-- ours-brand-area end-->

<!-- Recent Blogs section -->
{*{include file="shared/recentBlogs.tpl"}*}
<!-- recent-post-area end-->

{include file="shared/footer.tpl"}