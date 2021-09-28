{include file="shared/head.tpl"}

<!--Order payment details area start-->
<div class="checkout-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="left-sidebar-title">
                    <ul class="page-menu">
                        <li><a href="/">Home</a></li>
                        <li><a href="/{$globals.cart.checkout}">Checkout</a></li>
                        <li><a class="active" href="#">Payment Details</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Payment Method -->
                <div class="page-title">
                    <h1>Checkout</h1>
                </div>
                <div class="payment-method">
                    <!-- Panel Gropup -->
                    <div class="panel-group" id="accordion">
                        <!-- Panel Default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="check-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#checkut5">
                                        Step 2: Payment Options
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="checkut5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="col-lg-12">
                                        <p>Please select the preferred payment method to use on this order.</p>
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#cod" aria-controls="profile" role="tab" data-toggle="tab">Pay Cash On Delivery</a></li>
                                            <li role="presentation"><a href="#mpesa" aria-controls="profile" role="tab" data-toggle="tab">Mpesa</a></li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane" id="mpesa" style="background:#fff;margin:10px;">
                                                <div class="box">
                                                    <p>Send M-PESA <strong>Ksh.{math equation="$total + $shipping"} ({$total|number_format:2:".":","} + {$shipping} for delivery)</strong> to Till number <strong>750878</strong>. Submit the Confirmation Code below. </p>
                                                    <ol>
                                                        <li>Go to M-PESA on your phone</li>
                                                        <li>Select Payment Services option</li>
                                                        <li>Select Buy Goods And Services option</li>
                                                        <li>Enter <b>Business no. 750878</b></li>
                                                        <li>Leave the Account no. blank</li>
                                                        <li>Enter the Amount <b>Ksh.{math equation="$total + $shipping"}</b></li>
                                                        <li>Enter your M-PESA PIN and Send</li>
                                                        <li>You will receive a confirmation SMS from M-PESA with a Confirmation Code</li>
                                                        <li>After you receive the confirmation SMS, enter your phone number and the Confirmation Code</li>
                                                        <li>Click on Complete</li>
                                                    </ol>
                                                    <hr>
                                                    <form id="mpesa-payment-form" action="/{$globals.payments.mpesa}" method="post" enctype="multipart/form-data">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <input type="hidden" name="order-tracker" value="{$order}">
                                                                <input type="hidden" name="method" value="mpesa">
                                                                <input type="hidden" name="total" value="{$total}">
                                                                <input type="hidden" name="shipping" value="{$shipping}">
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="form-group">
                                                                    <label>Mpesa no.</label>
                                                                    <input class="form-control" type="text" name="mpesano"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2"></div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-8">
                                                                <div class="form-group">
                                                                    <label>M-Pesa Confirmation Code </label>
                                                                    <input class="form-control" type="text" name="mpesacode"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2"></div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-8">
                                                                <input id="mpesa-submit-btn" class="btn btn-lg btn-block btn-success" type="submit" value="Submit">
                                                            </div>
                                                            <div class="col-md-2"></div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                            <div role="tabpanel" class="tab-pane active" id="cod" style="background:#fff;margin:10px;">
                                                <div class="box">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <form id="cod-payment-form" action="/{$globals.payments.cod|cat:($order)}" method="post" enctype="multipart/form-data">
                                                                <p>
                                                                    Please note, that if you don't pay on delivery or within 48h after placing order the
                                                                    item will not be available for you anymore. Travel needs to be paid at least 48h before
                                                                    travel date. Please contact our customer relations team for any further enquiries.
                                                                </p>
                                                                <input type="hidden" name="order-tracker" value="{$order}">
                                                                <input type="hidden" name="method" value="cod">
                                                                <input type="hidden" name="amount" value="{$price}">
                                                                <input type="hidden" name="shipping" value="{$shipping}">
                                                                <input type="hidden" name="item" value="{$item}">
                                                                <input type="hidden" name="mail" value="{$mail}">
                                                                <input type="hidden" name="user" value="{$user}">
                                                                <input id="cod-submit-btn" class="btn btn-lg btn-block btn-success" type="submit" value="Submit">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Panel Default -->
                    </div>
                    <!-- End Panel Gropup -->
                </div>
                <!-- End Payment Method -->
            </div>
        </div>
    </div>
</div>
<!--Order payment details area end-->

<!-- ours-brand-area start-->
{include file="shared/brands.tpl"}
<!-- ours-brand-area end-->

<!-- Recent Blogs section -->
{include file="shared/recentBlogs.tpl"}
<!-- recent-post-area end-->

{include file="shared/footer.tpl"}