
<style>
    /* CSS for Credit Card Payment form */
    .credit-card-box .panel-title {
        display: inline;
        font-weight: bold;
    }
    .credit-card-box .form-control.error {
        border-color: red;
        outline: 0;
        box-shadow: inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(255,0,0,0.6);
    }
    .credit-card-box label.error {
        font-weight: bold;
        color: red;
        padding: 2px 8px;
        margin-top: 2px;
    }
    .credit-card-box .payment-errors {
        font-weight: bold;
        color: red;
        padding: 2px 8px;
        margin-top: 2px;
    }
    .credit-card-box label {
        display: block;
        font-weight: bold;
        color: #0D7478;
    }
    /* The old "center div vertically" hack */
    .credit-card-box .display-table {
        display: table;
    }
    .credit-card-box .display-tr {
        display: table-row;
    }
    .credit-card-box .display-td {
        display: table-cell;
        vertical-align: middle;
        width: 100%;
    }
    /* Just looks nicer */
    .credit-card-box .panel-heading img {
        min-width: 180px;
    }
    .card-list-radio ul li{
        display: inline;
        padding:0 2em 0 0;
        margin-left: 0;
    }
</style>

<!-- CREDIT CARD FORM STARTS HERE -->
<div style="margin-top: 30px;" class="panel panel-default credit-card-box">
    <div class="panel-heading display-table" >
        <div class="row display-tr" >
            <h3 class="panel-title display-td" style="color: #fff; font-weight: bold;"><i class="fa fa-paypal"></i> {$title}</h3>
            <div class="display-td" >
                <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
            </div>
        </div>
    </div>
    <div class="panel-body">
        <form role="form" id="paypal-pay-form" method="POST" action="/{$globals.payments.paypal_pay|cat:($order)}" enctype="multipart/form-data">
            <div class="row">
                <div class="col-xs-6">
                    <div class="form-group">
                        <label for="cardNumber">FIRST NAME</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="cardFirstName" placeholder="Card First Name" required autofocus/>
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="form-group">
                        <label for="cardNumber">LAST NAME</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="cardLastName" placeholder="Card Last Name" required autofocus/>
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="form-group">
                        <label for="cardNumber">CARD NUMBER</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="cardNumber" placeholder="eg. 0011 2233 4455 6677" required autofocus/>
                            <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="form-group">
                        <label for="cardNumber">
                            CARD CVV(<span data-toggle="tooltip" data-placement="top" title="Card Verification Value" style="">What is this?</span>)
                        </label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="cardCVV" placeholder="eg. 395" required autofocus/>
                            <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="cardNumber">CARD TYPE</label>
                        <div class="input-group card-list-radio">
                            <ul>
                                <li>
                                    <input checked="checked" name="cardType" value="visa" type="radio">
                                    <i style="color: #0D7478;" class="fa fa-4x fa-cc-visa"></i>
                                </li>
                                <li>
                                    <input name="cardType" value="mastercard" type="radio">
                                    <i style="color: #0D7478;" class="fa fa-4x fa-cc-mastercard"></i>
                                </li>
                                <li>
                                    <input checked="checked" name="cardType" value="visa" type="radio">
                                    <i style="color: #0D7478;" class="fa fa-4x fa-cc-amex"></i>
                                </li>
                                <li>
                                    <input name="cardType" value="mastercard" type="radio">
                                    <i style="color: #0D7478;" class="fa fa-4x fa-cc-discover"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <div class="form-group">
                        <label for="cardExpiryMonth"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> MONTH</label>
                        <input type="text" class="form-control" name="cardExpiryMonth" placeholder="MM" required />
                    </div>
                </div>
                <div class="col-xs-6 col-md-6 pull-right">
                    <div class="form-group">
                        <label for="cardExpiryYear"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> YEAR</label>
                        <input type="text" class="form-control" name="cardExpiryYear" placeholder="YYYY" required />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button id="paypal-submit-btn" style="background: #0D7478; border: 1px solid #0D7478;" class="subscribe btn btn-success btn-lg btn-block" type="submit">
                        <i class="fa fa-paypal"></i> PAY WITH PAYPAL
                    </button>
                </div>
            </div>
            <div class="row" style="display:none;">
                <div class="col-xs-12">
                    <p class="payment-errors"></p>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- CREDIT CARD FORM ENDS HERE -->

{literal}
    <script type="application/javascript">
        (function($){
            $('#paypal-pay-form').submit(function(e) {
                $('#paypal-submit-btn').attr('value', 'Please wait...');
                e.preventDefault();
                var $form = $( this),
                        cardFirstName = $form.find( "input[name='cardFirstName']" ).val(),
                        cardLastName = $form.find( "input[name='cardLastName']" ).val(),
                        cardNumber = $form.find( "input[name='cardNumber']" ).val(),
                        cardCVV = $form.find( "input[name='cardCVV']" ).val(),
                        cardType = $form.find( "input[name='cardType']" ).val(),
                        cardExpiryMonth = $form.find( "input[name='cardExpiryMonth']" ).val(),
                        cardExpiryYear = $form.find( "input[name='cardExpiryYear']" ).val(),
                        url = $form.attr( "action" );
                $.ajax({
                    url: url,
                    data: {
                        cFName: cardFirstName,
                        cLName: cardLastName,
                        cNumber: cardNumber,
                        cCVV: cardCVV,
                        cType: cardType,
                        cExpMonth: cardExpiryMonth,
                        cExpYear: cardExpiryYear
                    },
                    dataType: 'json',
                    type: 'POST',
                    error: function(data) {
                        alert(data.msg);
                        //window.location = '/payments/failed';
                    },
                    success: function(data) {
                        alert(data.msg);
                        //window.location = '/payments/success/' + data.msg;
                    }
                });
            });
        })(jQuery);
    </script>
{/literal}
