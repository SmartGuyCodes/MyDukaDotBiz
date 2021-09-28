<?php
/* Smarty version 3.1.29-dev/14, created on 2021-04-09 11:37:25
  from "/var/www/html/dev.my-duka.com/system/templates/cart/modals.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29-dev/14',
  'unifunc' => 'content_60702055cac5f7_85550412',
  'file_dependency' => 
  array (
    '0f63e9eda90f6c2566cf0f16b1bc427eb263391c' => 
    array (
      0 => '/var/www/html/dev.my-duka.com/system/templates/cart/modals.tpl',
      1 => 1474008064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60702055cac5f7_85550412 ($_smarty_tpl) {
?>
<div class="modal fade" tabindex="-1" role="dialog" id="cart-modal">
    <div class="modal-dialog modal-sm"  style="width: 50%; margin-top: 100px;">
        <div class="modal-content">
            <div id="cart-modal-header-wrapper" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 id="cart-modal-header" class="modal-title">
                    Dear Customer, Your item has been added to your Shopping Cart!
                </h4>
            </div>
            <div class="modal-body">
                <li class="product-info row pop-deals-info">
                    <div class="p-left col-md-4 product-img-wrap dropdown-menu-shipping-cart-img">
                        <img id="cart-img" src="">
                    </div>
                    <div class="p-right col-md-8">
                        <p id="cart-name" class="p-name">

                        </p>
                        <p id="cart-price" class="p-rice">

                        </p>
                        <p id="cart-qty" class="p-rice">

                        </p>
                    </div>
                </li>
            </div>
            <div class="modal-footer pop-btn-row">
                <div class="status"></div>
                <a id="popcheckout" onclick="window.location.href = '/cart/checkout'" data-dismiss="modal" class="button btn-cart btn btn-green btn-big">
                    GO TO CHECKOUT
                </a>
                <button id="popcontinue" onclick="location.reload();" data-dismiss="modal" class="btn btn-gray btn-big" type="button">
                    CONTINUE SHOPPING
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div id="buy-now-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="plan-info" aria-hidden="true">
    <div class="modal-dialog modal-full-screen">
        <div class="modal-content" style="width: 105% !important; margin-top: 130px !important;">
            <div class="modal-header">
                <button type="button" class="close"
                        data-dismiss="modal" aria-hidden="true">
                    <i class="fa fa-remove"></i>
                </button>
            </div>
            <div class="modal-body">
                <!-- /# content goes here -->
            </div>
        </div>
    </div>
</div><?php }
}
