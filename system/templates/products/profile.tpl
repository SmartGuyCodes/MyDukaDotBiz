{include file="shared/head.tpl"}

<!-- single page area start-->
<div class="single-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="left-sidebar-title">
                    <ul class="page-menu">
                        <li><a href="/">Home</a></li>
                        <li><a href="/{$globals.products.category}{$categoryID}">{$cat}</a></li>
                        <li><a href="/{$globals.products.sub_sub_category}{$subCategroy}">{$subCat}</a></li>
                        <li><a href="/{$globals.products.mini_category}{$childCategory}">{$child}</a></li>
                        <li><a class="active" href="/{$globals.products.profile|cat:($item.ProductID)}">{$item.ProductName}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="zoomWrapper">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="mobile">
                            <div class="single-pro-tab-img">
                                <img class="zoom1" src="{$uploads|cat:($item.ProductImage)}" data-zoom-image="{$uploads|cat:($item.ProductImage)}" alt="{$item.ProductName}" title="{$item.ProductName}">
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="camera">
                            <div class="single-pro-tab-img">
                                 <img class="zoom1" src="{$uploads|cat:($item.ProductImage)}" data-zoom-image="{$uploads|cat:($item.ProductImage)}" alt="{$item.ProductName}" title="{$item.ProductName}">
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="headphone">
                            <div class="single-pro-tab-img">
                                 <img class="zoom1" src="{$uploads|cat:($item.ProductImage)}" data-zoom-image="{$uploads|cat:($item.ProductImage)}" alt="{$item.ProductName}" title="{$item.ProductName}">
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="watch">
                            <div class="single-pro-tab-img">
                                 <img class="zoom1" src="{$uploads|cat:($item.ProductImage)}" data-zoom-image="{$uploads|cat:($item.ProductImage)}" alt="{$item.ProductName}" title="{$item.ProductName}">
                            </div>
                        </div>
                    </div>
                    <!-- Nav tabs -->
                    <ul class="single-pro-tab" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#mobile" aria-controls="mobile" role="tab" data-toggle="tab">
                                <img class="zoom1" src="{$uploads|cat:($item.ProductImage)}" data-zoom-image="{$uploads|cat:($item.ProductImage)}" alt="{$item.ProductName}" title="{$item.ProductName}">
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#camera" aria-controls="camera" role="tab" data-toggle="tab">
                                <img class="zoom1" src="{$uploads|cat:($item.ProductImage)}" data-zoom-image="{$uploads|cat:($item.ProductImage)}" alt="{$item.ProductName}" title="{$item.ProductName}">
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#headphone" aria-controls="headphone" role="tab" data-toggle="tab">
                                <img class="zoom1" src="{$uploads|cat:($item.ProductImage)}" data-zoom-image="{$uploads|cat:($item.ProductImage)}" alt="{$item.ProductName}" title="{$item.ProductName}">
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#watch" aria-controls="watch" role="tab" data-toggle="tab">
                                <img class="zoom1" src="{$uploads|cat:($item.ProductImage)}" data-zoom-image="{$uploads|cat:($item.ProductImage)}" alt="{$item.ProductName}" title="{$item.ProductName}">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-6">
                <div class="product-details">
                    <div class="product-content">
                        <h2>
                            <a href="/{$globals.products.profile|cat:($item.ProductID)}"><strong>{$item.ProductName|truncate:40}</strong></a>
                        </h2>
                        {*<div class="pro-rating">*}
                            {*<img src="{$cdn}img/rating/rating.png" alt="" />*}
                            {*<span>*}
                                {*<a class="reviewtab">0 reviews</a>*}
                                {*/*}
                                {*<a class="reviewtab">Write a review</a>*}
                            {*</span>*}
                        {*</div>*}
                        <div class="pro-price">
                            {if $item.ProductNewPrice < $item.ProductPrice && $item.ProductNewPrice neq 0}
                                <span class="new-price">KSH.{$item.ProductNewPrice|number_format:2:".":","}</span>
                                <span class="old-price">KSH.{$item.ProductPrice|number_format:2:".":","}</span>
                            {else}
                                <span class="new-price">KSH. {$item.ProductPrice|number_format:2:".":","}</span>
                            {/if}
                        </div>
                        <div class="pro-price">
                            {if $item.ProductNewPrice < $item.ProductPrice && $item.ProductNewPrice neq 0}
                                <span class="product-offer">
                                    -{math assign="$percentage" equation="(x / y) * 100" x= ($item.ProductPrice - $item.ProductNewPrice) y = $item.ProductPrice format="%.0f"}% Offer
                                </span>
                            {/if}
                        </div>
                    </div>
                    <div class="product-reveiw">
                        {$item.ProductOverview}
                    </div>
                    <div class="product-details-list">
                        <ul>
                            <li>brand:<a href="#">{$item.ProductBrand}</a></li>
                            <li>Product Code:<span>{$item.ProductSKU}</span></li>
                            {*<li>Reward Points:<span>200</span></li>*}
                            {if $item.ProductStock <= 0}
                                <li>Availability: <span class="new">Out of Stock</span></li>
                            {else}
                                <li>Availability:<span>In Stock</span></li>
                            {/if}
                        </ul>
                    </div>
                    <div class="action">
                        <form class="add-to-cart" action="/{$globals.cart.add}" enctype="multipart/form-data">
                            <div class="cart-plus-minus">
                                    <input type="hidden" value="{$item.ProductImage}" name="image"/>
                                    <input type="hidden" value="{$item.ProductID}" name="id"/>
                                    <input type="hidden" value="{$item.ProductSKU}" name="sku"/>
                                    {if $item.ProductNewPrice < $item.ProductPrice && $item.ProductNewPrice neq 0}
                                        <input type="hidden" value="{$item.ProductNewPrice}" name="price"/>
                                    {else}
                                        <input type="hidden" value="{$item.ProductPrice}" name="price"/>
                                    {/if}
                                    <div class="loading" style="display: none;">Loading&#8230;</div>
                                    <input type="hidden" value="{$item.ProductName}" name="name"/>
                                    <input type="hidden" value="{$item.ProductOverview}" name="details"/>
                                    <input type="number" value="1" name="qty"/>
                            </div>
                            <div class="add-to-cart">
                                <button id="add-cart-btn" type="submit" class="btn btn-success {*btn-circle*}">
                                    <i class="fa fa-2x fa-cart-plus"></i>
                                    Add to cart
                                </button>
                                <a href="/{$globals.cart.buy_now_modal|cat:($item.ProductID)}" rel="modal" class="{*buy-now btn btn-primary*}">
                                    <i style="margin-left: 0px;" class="fa fa-2x fa-shopping-cart"></i>
                                    Buy now
                                </a>
                                <hr>
                                <div class="able-option">
                                    {if $item.bid neq null || $item.bid eq 1}
                                        <div class="row">
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-9">
                                                <a href="/{$globals.cart.bid_now_modal|cat:($item.ProductID)}" rel="modal" class="{*buy-now btn btn-primary*}">
                                                    <i style="margin-left: 0" class="fa fa-2x fa-gavel"></i>
                                                    Bid now
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                {*<p id="highest-bid" class="highest-bid">*}
                                                    {*<i class="fa fa-money"></i> Starting Bid: KShs.*}
                                                {*<span>*}
                                                    {*<strong>{$item.bidStartPrice|number_format:2:".":","}</strong>*}
                                                {*</span>*}
                                                {*</p>*}
                                                <p id="note" class="note" data-countdown="{$item.bidEndTime}"></p>
                                            </div>
                                        </div>
                                    {/if}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 hidden-sm">
                <div class="single-product-right">
                    <div class="row">
                        <div class="single-product-crousel">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-heading">
                                            <h3 class="related-by-brand">{$brand_family_title} Products</h3>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                <div class="best-seller-single">
                                    {foreach $brand_family as $relative}
                                        {if $relative.ProductID neq $pId}
                                            <div class="product-single">
                                                <div class="product-img">
                                                    <a href="/{$globals.products.profile|cat:($relative.ProductID)}">
                                                        <img class="primary-img" src="{$uploads|cat:($relative.ProductImage)}" alt="{$relative.ProductName|truncate:30}" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <h2><a href="/{$globals.products.profile|cat:($relative.ProductID)}">{$relative.ProductName|truncate:20}</a></h2>
                                                    <div class="pro-price">
                                                        {if $relative.ProductNewPrice < $relative.ProductPrice && $relative.ProductNewPrice neq 0}
                                                            <span class="new-price">KSH.{$relative.ProductNewPrice|number_format:2:".":","}</span>
                                                            <span class="old-price">KSH.{$relative.ProductPrice|number_format:2:".":","}</span>
                                                        {else}
                                                            <span class="new-price">KSH. {$relative.ProductPrice|number_format:2:".":","}</span>
                                                        {/if}
                                                    </div>
                                                    <div class="pro-price">
                                                        {if $item.ProductNewPrice < $item.ProductPrice && $item.ProductNewPrice neq 0}
                                                            <span class="product-offer">
                                                                -{math assign="$percentage" equation="(x / y) * 100" x= ($item.ProductPrice - $item.ProductNewPrice) y = $item.ProductPrice format="%.0f"}% Offer
                                                            </span>
                                                        {/if}
                                                    </div>
                                                </div>
                                            </div>
                                        {/if}
                                    {/foreach}
                                    <div class="bestseller-style"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-heading">
                                            <h3 class="related-by-brand">{$child} Products</h3>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                <div class="best-seller-single">
                                    {foreach $childRelations as $relative}
                                        {if $relative.ProductID neq $pId}
                                            <div class="product-single">
                                                <div class="product-img">
                                                    <a href="/{$globals.products.profile|cat:($relative.ProductID)}">
                                                        <img class="primary-img" src="{$uploads|cat:($relative.ProductImage)}" alt="{$relative.ProductName|truncate:30}" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <h2><a href="/{$globals.products.profile|cat:($relative.ProductID)}">{$relative.ProductName|truncate:20}</a></h2>
                                                    <div class="pro-price">
                                                        {if $relative.ProductNewPrice < $relative.ProductPrice && $relative.ProductNewPrice neq 0}
                                                            <span class="new-price">KSH.{$relative.ProductNewPrice|number_format:2:".":","}</span>
                                                            <span class="old-price">KSH.{$relative.ProductPrice|number_format:2:".":","}</span>
                                                        {else}
                                                            <span class="new-price">KSH. {$relative.ProductPrice|number_format:2:".":","}</span>
                                                        {/if}
                                                    </div>
                                                    <div class="pro-price">
                                                        {if $item.ProductNewPrice < $item.ProductPrice && $item.ProductNewPrice neq 0}
                                                            <span class="product-offer">
                                                                -{math assign="$percentage" equation="(x / y) * 100" x= ($item.ProductPrice - $item.ProductNewPrice) y = $item.ProductPrice format="%.0f"}% Offer
                                                            </span>
                                                        {/if}
                                                    </div>
                                                </div>
                                            </div>
                                        {/if}
                                    {/foreach}
                                    <div class="bestseller-style"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <div class="product-description-tab" id="product-profile-tabs">
                    <!-- tab bar -->
                    <ul class="nav nav-tabs" role="tablist" id="profile-tabs">
                        <li class="active"><a href="#product-overview" data-toggle="tab">Overview</a></li>
                        <li><a href="#product-features" data-toggle="tab">Features</a></li>
                        <li><a href="#product-specs" data-toggle="tab">Specifications</a></li>
                        {if $item.bid eq 1}
                            <li><a href="#product-bids" data-toggle="tab" data-url="/{$globals.bids.auction_bids|cat:($item.ProductID)}">Bids</a></li>
                        {/if}
                        {if isset($uId)}
                            <li><a href="#product-rev" data-toggle="tab">Reviews (0)</a></li>
                        {/if}
                    </ul>
                    <!-- Tab Content -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="product-overview">
                            <p>
                                {$item.ProductOverview}
                            </p>
                        </div>
                        <div class="tab-pane" id="product-features">
                            <p>
                                {$item.ProductFeatures}
                            </p>
                        </div>
                        <div class="tab-pane" id="product-specs">
                            <p>
                                {$item.ProductSpecs}
                            </p>
                        </div>
                        <div class="tab-pane" id="product-bids">
                            {*{include file="bids/"}*}
                        </div>
                        {if isset($uId)}
                            <div class="tab-pane" id="product-rev">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <p>There are no reviews for this product.</p>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="product-rev-right">
                                            <h2>Write a review</h2>
                                            <div class="porduct-rev-right-form">
                                                <form action="#" class="product-form">
                                                    <div class="form-group">
                                                        <label>Your Name</label>
                                                        <input type="text" class="form-control" required="required">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Your Review</label>
                                                        <textarea class="form-control" rows="5" required="required"></textarea>
                                                        <div class="help-block">
                                                            <span class="text-danger">Note:</span>
                                                            HTML is not translated!
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Rating</label>
                                                        Bad
                                                        <input type="radio" value="1" name="rating"/>
                                                        <input type="radio" value="2" name="rating"/>
                                                        <input type="radio" value="3" name="rating"/>
                                                        <input type="radio" value="4" name="rating"/>
                                                        <input type="radio" value="5" name="rating"/>
                                                        Good
                                                    </div>
                                                    <div class="form-goroup form-group-button">
                                                        <button class="custom-button" type="submit" value="submit"><span>Continue</span></button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        {/if}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- single page area end-->

<!-- features-product-area start-->
<div class="features-product-area shop-page-features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    {if $auction eq 'yes'}
                        <h3>OTHER AUCTION PRODUCTS</h3>
                    {else}
                        <h3>{$cat} Products</h3>
                    {/if}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="features-crousel indicator-style">
                {if $auction eq 'yes'}
                    {foreach $products as $item}
                        {if $item.bid eq 1}
                            {if $item.ProductID neq $pId}
                                {include file="products/bid.tpl"}
                            {/if}
                        {/if}
                    {/foreach}
                {else}
                    {foreach $family as $item}
                        {if $item.ProductID neq $pId}
                            {include file="products/item.tpl"}
                        {/if}
                    {/foreach}
                {/if}
            </div>
        </div>
    </div>
</div>
<!-- features-product-area end-->

<!-- ours-brand-area start-->
{include file="shared/brands.tpl"}
<!-- ours-brand-area end-->

<!-- Recent Blogs section -->
{*{include file="shared/recentBlogs.tpl"}*}
<!-- recent-post-area end-->

{include file="shared/footer.tpl"}