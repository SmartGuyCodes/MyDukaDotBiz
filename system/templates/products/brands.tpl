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
                        <div class="left-sidebar-title">
                            <ul class="page-menu">
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    <a class="active" href="#">{$title}</a>
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
                                {*<div class="sorter hidden-sm hidden-xs">*}
                                {*<div class="sort-by">*}
                                {*<label>Sort By:</label>*}
                                {*<select>*}
                                {*<option value="position">Default</option>*}
                                {*<option value="name">Name (A - Z)</option>*}
                                {*<option value="price">Name (Z - A)</option>*}
                                {*<option value="price">Price (Low > High)</option>*}
                                {*<option value="price">Price (High > Low)</option>*}
                                {*<option value="price">Rating (Highest)</option>*}
                                {*<option value="price">Rating (Lowest)</option>*}
                                {*<option value="price">Model (A - Z)</option>*}
                                {*<option value="price">Model (Z - A)</option>*}
                                {*</select>*}
                                {*</div>*}
                                {*</div>*}
                            </div>

                            {*<div class="toolbar">*}
                            {*<div class="pager-list hidden-xs">*}
                            {*<div class="limiter">*}
                            {*<label>Show</label>*}
                            {*<select>*}
                            {*<option value="9">9</option>*}
                            {*<option value="25">25</option>*}
                            {*<option value="50">50</option>*}
                            {*<option value="75">75</option>*}
                            {*<option value="100">100</option>*}
                            {*</select>*}
                            {*</div>*}
                            {*</div>*}
                            {*<div class="pages">*}
                            {*<ol>*}
                            {*<li class="current">1</li>*}
                            {*<li><a href="#">2</a></li>*}
                            {*<li><a href="#">></a></li>*}
                            {*<li><a href="#">>|</a></li>*}
                            {*</ol>*}
                            {*</div>*}
                            {*</div>*}
                        </div>
                        <!-- End Tab Bar -->

                        <!-- Tab Content -->
                        <div class="tab-content">
                            <div id="shop-grid" class="tab-pane active" role="tabpanel">
                                <div class="row">
                                    {foreach $products as $item}
                                        <!-- single-product start -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            {include file="products/item.tpl"}
                                        </div>
                                        <!-- single-product end -->
                                    {/foreach}
                                </div>
                            </div>
                            <div id="shop-list" class="tab-pane shop-list" role="tabpanel">
                                <div class="row">
                                    {foreach $products as $item}
                                        {if !empty($item.ProductBrand)}
                                            <!-- single blog start -->
                                            <div class="product-single">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="product-img">
                                                        {if $item.ProductStock <= 0}
                                                            <span class="new">Out of Stock</span>
                                                        {/if}
                                                        {if $item.ProductNewPrice < $item.ProductPrice && $item.ProductNewPrice neq 0}
                                                            <span class="new">
                                                                -{math assign="$percentage" equation="(x / y) * 100" x= ($item.ProductPrice - $item.ProductNewPrice) y = $item.ProductPrice format="%.0f"}%
                                                            </span>
                                                        {/if}
                                                        <a href="/{$globals.products.profile|cat:($item.ProductID)}">
                                                            <img class="primary-img" src="{$uploads|cat:($item.ProductImage)}" alt="{$item.ProductName}" />
                                                            <img class="secondary-img" src="{$uploads|cat:($item.ProductImage)}" alt="{$item.ProductName}" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="product-details">
                                                        <div class="product-content">
                                                            <h1><a href="/{$globals.products.profile|cat:($item.ProductID)}"><strong>{$item.ProductBrand|upper}</strong></a></h1>
                                                            <h2><a href="/{$globals.products.profile|cat:($item.ProductID)}"><strong>{$item.ProductName|truncate:40}</strong></a></h2>
                                                            <div class="pro-price">
                                                                {if $item.ProductNewPrice < $item.ProductPrice && $item.ProductNewPrice neq 0}
                                                                    <span class="new-price">KES.{$item.ProductNewPrice|number_format:2:".":","}</span>
                                                                    <span class="old-price">KES.{$item.ProductPrice|number_format:2:".":","}</span>
                                                                {else}
                                                                    <span class="new-price">KES. {$item.ProductPrice|number_format:2:".":","}</span>
                                                                {/if}
                                                            </div>
                                                            {*<div class="pro-rating">*}
                                                            {*<img src="{$cdn}img/rating/rating.png" alt="" />*}
                                                            {*</div>*}
                                                        </div>
                                                        <div class="product-reveiw">
                                                            {$item.ProductOverview}
                                                            <a class="readmore" href="/{$globals.products.profile|cat:($item.ProductID)}">Read more</a>
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
                                        {/if}
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
{include file="shared/recentBlogs.tpl"}
<!-- recent-post-area end-->

{include file="shared/footer.tpl"}