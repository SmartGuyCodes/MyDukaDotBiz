<table class="table table-bordered">
    <thead>
    <tr>
        <td class="text-center">Image</td>
        <td class="text-center">Product Name</td>
        {*<td class="text-center">Brand</td>*}
        <td class="text-center">Quantity</td>
        <td class="text-center">Unit Price</td>
        <td class="text-center">Total</td>
        {if $title neq 'Shipping and Payment Details'}
            <td class="text-center">Remove</td>
        {/if}
    </tr>
    </thead>
    {foreach $mycart as $item}
        <tr>
            <td class="text-center">
                <a href="/{$globals.products.profile|cat:($item.id)}">
                    <img width="100" height="100" src="{$uploads}{$item.image}" alt="{$item.name}" />
                    <input type="hidden" value="{$item.image}" name="item-img[]">
                </a>
            </td>
            <td class="text-center">
                <a href="#">{$item.name} - {$item.details}</a>
                <input type="hidden" name="item-name" value="{$item.name}">
                <input type="hidden" value="{$item.details}" name="item-descr[]">
            </td>
            <td class="text-center">
                <div class="input-group" style="max-width: 200px; margin: 0px auto;">
                    {if $title eq 'Shipping and Payment Details'}
                        <p>{$item.qty}</p>
                        <input type="hidden" value="{$item.price}" name="item-price[]">
                        <input type="hidden" value="{$item.qty}" name="item-qty[]">
                    {else}
                        <input class="form-control table-shopping-qty cart-variant--quantity_input" type="number" id="demo" min="1" max="100" step="1" name="itemQty[{$item.id}]" value="{$item.qty}">
                    {/if}
                </div>
            </td>
            <td class="text-center">
                KSH. <input style="border: none !important; " type="text" name="unitPrice[{$item.id}]" class="unit-price" value='{$item.price|number_format:2:".":","}' id="price_item_" readonly/>
            </td>
            <td class="text-center">
                KSH. {math equation="(x*y)" x=$item.price y=$item.qty}
            </td>
            {if $title neq 'Shipping and Payment Details'}
                <td class="text-center">
                    <a class="fa fa-close table-shopping-remove remove-item" href="/{$globals.cart.remove}" data-code="{$item.id}"></a>
                </td>
            {/if}
        </tr>
    {/foreach}
</table>