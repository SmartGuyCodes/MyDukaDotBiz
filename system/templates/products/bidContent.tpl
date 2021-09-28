<div class="product-img">
    {if $item.ProductStock <= 0}
        <span class="new">Out of Stock</span>
    {/if}
    {if $item.ProductNewPrice < $item.ProductPrice && $item.ProductNewPrice neq 0}
        <span class="new">
                    -{math assign="$percentage" equation="(x / y) * 100" x= ($item.ProductPrice - $item.ProductNewPrice) y = $item.ProductPrice format="%.2f"}%
                </span>
    {/if}
    <a href="/{$globals.products.profile|cat:($item.ProductID)}">
        <img class="primary-img" src="{$uploads|cat:($item.ProductImage)}" alt="{$item.ProductName}" />
        <img class="secondary-img" src="{$uploads|cat:($item.ProductImage)}" alt="{$item.ProductName}" />
    </a>
</div>
<div class="product-content">
    <h3><a href="/{$globals.products.profile|cat:($item.ProductID)}"><strong>{$item.ProductBrand|upper}</strong></a></h3>
    <h5><a href="/{$globals.products.profile|cat:($item.ProductID)}"><strong>{$item.ProductName|truncate:30}</strong></a></h5>
    <div class="pro-price">
        {if $item.ProductNewPrice < $item.ProductPrice && $item.ProductNewPrice neq 0}
            <span class="new-price">KSH.{$item.ProductNewPrice|number_format:2:".":","}</span>
            <span class="old-price">KSH.{$item.ProductPrice|number_format:2:".":","}</span>
        {else}
            <span class="new-price">KSH. {$item.ProductPrice|number_format:2:".":","}</span>
        {/if}
    </div>
    {*<div class="pro-rating">*}
    {*<img src="{$cdn}img/rating/rating.png" alt="" />*}
    {*</div>*}
</div>
<div class="action">
    <div class="add-to-cart">
        {*Add to cart form here*}
        <form class="add-to-cart" action="/{$globals.cart.add}" enctype="multipart/form-data">
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
            <input class="produkt-ilosc" type="number" value="1" name="qty"/>
            {if $page neq 'profile'}</br> {elseif $section eq 'scroller'} </br> {/if}
            <button id="add-cart-btn" type="submit" class="btn btn-success {*btn-circle*}">
                <i class="fa fa-2x fa-cart-plus"></i>
                Add to cart
            </button>
            <a href="/{$globals.cart.buy_now_modal|cat:($item.ProductID)}" rel="modal" class="{*buy-now btn btn-primary*}">
                <i style="margin-left: 0px;" class="fa fa-2x fa-shopping-cart"></i>
                Buy now
            </a>
            <hr>
            {*<a href="#"  data-toggle="modal" data-target="#bid-now-modal"><i class="fa fa-gavel"></i> Bid Now</a>*}
            {if $item.bid neq null || $item.bid eq 1}
                <a href="/{$globals.cart.bid_now_modal|cat:($item.ProductID)}" rel="modal" class="{*buy-now btn btn-primary*}">
                    <i style="margin-left: 0px;" class="fa fa-2x fa-gavel"></i>
                    Bid now
                </a>
                <a style="margin-top: 20px !important;" href="#" class="highest-bid"><i class="fa fa-money"></i> Highest Bid: KShs. <span>
                                {$item.bidStartPrice|number_format:2:".":","}
                            </span>
                </a>
                {*<p class="bid-countdown"></p>*}
                <p id="note" class="note"></p>
                {*<div class="clock" style="margin: 2em;"></div>*}
            {/if}
        </form>
    </div>
    {*<div class="add-to-link">*}
    {*<a class="add-to-wishlist" href="#" *}{*data-toggle="tooltip" data-placement="top" title="Add to Wish List"*}{*>*}
    {*<i class="fa fa-heart-o"></i>*}
    {*Add to Wish List*}
    {*</a>*}
    {*<a class="add-to-compare" href="#" data-toggle="tooltip" data-placement="top" title="Add to compare">*}
    {*<i class="fa fa-signal"></i>*}
    {*Add to compare*}
    {*</a>*}
    {*</div>*}
</div>