<div id="checkout-options-tabs">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#guest-checkout" aria-controls="guest-checkout" role="tab" data-toggle="tab">Checkout as Guest</a></li>
        <li role="presentation"><a href="#register-checkout" aria-controls="register-checkout" role="tab" data-toggle="tab">Register</a></li>
        <li role="presentation"><a href="#login-checkout" aria-controls="login-checkout" role="tab" data-toggle="tab">Login</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="guest-checkout">
            <form id="guest-checkout-form" action="/{$globals.order.checkout_as_guest}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                     <label>E-mail</label>
                    <input class="form-control validate[required, custom[email]]" type="text" name="guest-mail" placeholder="Guest email"/>
                </div>
                <input id="guestCheckoutBtn" class="btn btn-primary" type="submit" value="Checkout" />
            </form>
        </div>
        <div role="tabpanel" class="tab-pane" id="register-checkout">
            <h3 class="widget-title">In order for us to complete your purchase we would like to know a little more about you. Kindly Sign up to continue.</h3>
            <form id="checkout-reg-form" action="/{$globals.user.register}" enctype="multipart/form-data">
                <div class="form-group">
                    <label>First</label>
                    <input class="form-control validate[required]" name="fname" type="text" placeholder="Your first name name"/>
                </div>
                <div class="form-group">
                    <label>Surname</label>
                    <input class="form-control validate[required]" name="lname" type="text" placeholder="Your surname name"/>
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input class="form-control validate[required, custom[email]]" type="text" name="email" placeholder="Your email address"/>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input class="form-control validate[required]" type="text" name="phone" placeholder="Your phone number"/>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" name="pwd"  placeholder="**********"/>
                    <input type="hidden" class="form-control validate[required]" name="type" value="registration">
                </div>
                <div class="checkbox">
                    <p>
                        By selecting Register, I agree I've read and accept the <a href="#" target="_blank">myDUKA User Agreement</a>, I'm at least 18 years old, plus I consent to the <a href="#" target="_blank">processing of my data</a> - opens in a new window or tab - and to receiving marketing communications from myDUKA Dot Biz.
                    </p>
                    {* <label>
                        <input class="i-check" type="checkbox" name="newsletter"/>Sign Up to the Newsletter</label> *}
                </div>
                <input id="createAccBtn" class="btn btn-primary" type="submit" value="Create Account" />
            </form>
        </div>
        <div role="tabpanel" class="tab-pane" id="login-checkout">
            <form class="checkout-form product-form"  id="checkout-log-form" action="/{$globals.user.login}" enctype="multipart/form-data">
                <h2>Returning Customer</h2>
                <div class="submit-review">
                    <p>I am a returning customer</p>
                    <div class="account-form">
                        <div class="form-group">
                            <label class="control-label" for="input-email">E-Mail</label>
                            <input id="input-email" class="form-control" type="text" placeholder="E-Mail" value="" name="email">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="input-password">Password</label>
                            <input id="input-password" class="form-control" type="password" placeholder="Password" value="" name="password">
                            {*<a href="#">Forgotten Password</a>*}
                        </div>
                    </div>
                </div>
                <div class="user-bottom">
                    <button id="loginBtn" class="custom-button" type="button"><span>login</span></button>
                </div>
            </form>
        </div>
    </div>

</div>

{literal}
    <script type="application/javascript">
        (function($){
            "use strict";

            $('#guest-checkout-form').submit(function(e) {
                e.preventDefault();
                var $form = $(this), guestMail = $form.find( "input[name='guest-mail']" ).val(), url = $form.attr( "action" );
                $.ajax({
                    url: url,
                    data: {
                        guestMail: guestMail
                    },
                    dataType: 'json',
                    success: function(data) {
                        if(data.msg != 'Sorry our bots could not register you as a guest.Contact us here: support@myduka.biz'){
                            window.location = '/order/payment-details/' + data.msg;
                        }
                        else if(data.msg = 'EMAIL EXISTS.'){
                            alert(data.msg);
                        }
                        else {
                            alert('Sorry our bots could not register you as a guest.Contact us here: support@myduka.biz')
                        }
                    },
                    type: 'POST'
                });
            });
        })(jQuery);
    </script>
{/literal}