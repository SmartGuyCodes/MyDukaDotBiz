{include file="shared/head.tpl"}

<!-- cart area start-->
<div class="cart-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form id="confirm-order" enctype="multipart/form-data" method="post" action="/{$globals.cart.update}">
                    <div class="left-sidebar-title">
                        <ul class="page-menu">
                            <li><a href="/">Home</a></li>
                            <li><a class="active" href="/{$globals.cart.checkout}">Shopping Cart</a></li>
                        </ul>
                    </div>
                    <div class="page-title">
                        <h1>Shopping Cart</h1>
                    </div>
                    <div class="cart-table">
                        <div class="table-responsive">
                            {include file="modals/orderTbl.tpl"}
                        </div>
                    </div>
                    <h2>What would you like to do next?</h2>
                    <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
                    <!-- Panel Gropup -->
                    <div class="panel-group col-lg-6" id="accordion">
                        <!-- Panel Default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="check-title">
                                    <a data-toggle="collapse" class="active" data-parent="#accordion" href="#checkut1">
                                        Use Coupon Code
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="checkut1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    {*<label class="col-sm-2 control-label" for="input-coupon">Enter your coupon here</label>*}
                                    <div class="input-group">
                                        <input id="input-coupon" class="form-control" type="text" placeholder="Enter your coupon here" value="" name="coupon">
                                        <span class="input-group-btn">
                                            <button class="custom-button" value="submit" type="button">
                                                <span>Apply Coupon</span>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Panel Default -->
                        <!-- Panel Default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="check-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#checkut2">
                                        Use Gift Voucher
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="checkut2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    {*<label class="col-sm-2 control-label" for="input-coupon">Enter your gift voucher code here</label>*}
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="Enter your gift voucher code here" value="" name="coupon">
                                        <span class="input-group-btn">
                                            <button class="custom-button" value="submit" type="button">
                                                <span>Apply Voucher</span>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Panel Default -->
                    </div>
                    <!-- End Panel Gropup -->
                    <div class="cart-bottom-table col-lg-6">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td class="text-center"><strong>Total:</strong></td>
                                <td class="text-center">
                                    <span id="cart-totalia">
                                        KSH.
                                        <input id="grandTotal"  name="totalAmount" type="text" value="{$total|number_format:2:".":","}" readonly>
                                    </span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-button">
                        <div class="pull-left">
                            <a href="/" class="btn btn-primary custom-button">
                                <span>Continue Shopping</span>
                            </a>
                            {*<button class="custom-button" value="submit" type="submit">*}
                            {*</button>*}
                        </div>
                        <div class="pull-right">
                            <button class="custom-button" value="submit" type="submit">
                                <span>Update</span>
                            </button>
                            {if isset($uId)}
                                <a id="checkout-button" href="/{$globals.order.payment_details}/{$orderID}" class="btn btn-success custom-button">
                                    <i class="fa fa-money"></i>
                                    Checkout
                                </a>
                            {else}
                                <a href="/{$globals.cart.checkout_options}" class="btn btn-success custom-button" data-toggle="modal" data-target="#checkout-options-modal">
                                    <i class="fa fa-money"></i>
                                    Checkout
                                </a>
                                {include file="modals/checkoutOptions.tpl"}
                            {/if}
                            {*<a href="/{$globals.payments.paypal_page|cat:($orderID)}" class="btn btn-primary" data-toggle="modal" data-target="#paypal-payment-modal">*}
                                {*<i class="fa fa-paypal"></i>*}
                                {*PayPal Checkout*}
                            {*</a>*}

                            <!-- Modal HTML -->
                            <div id="paypal-payment-modal" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <!-- Content will be loaded here from "remote.php" file -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- cart area end-->

<!-- ours-brand-area start-->
{include file="shared/brands.tpl"}
<!-- ours-brand-area end-->

<!-- Recent Blogs section -->
{include file="shared/recentBlogs.tpl"}
<!-- recent-post-area end-->

{include file="shared/footer.tpl"}
