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
                                    <a data-toggle="collapse" data-parent="#accordion" href="#checkut2">
                                        Step 1: Order Details
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="checkut2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <form id="confirm-order-form" action="/{$globals.order.confirm|cat:($orderID)}" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="billing-left">
                                                    <div class="billing-form form-up">
                                                        {*<div class="row">*}
                                                            {*<div class="col-xs-6 col-md-4">*}
                                                                {*<a href="#" class="thumbnail">*}
                                                                    {*<img src="https://unsplash.it/350/300?image=856" alt="{$user.UserLastName}">*}
                                                                {*</a>*}
                                                            {*</div>*}
                                                            {*<div class="col-xs-6 col-md-8">*}

                                                            {*</div>*}
                                                        {*</div>*}
                                                        <div class="form-group required">
                                                            <label>First Name</label>
                                                            <input class="form-control" type="text" placeholder="First Name" value="{$user.UserFirstName}" name="fname">
                                                        </div>
                                                        <div class="form-group required">
                                                            <label>Last Name</label>
                                                            <input class="form-control" type="text" placeholder="Last Name" value="{$user.UserLastName}" name="lname">
                                                        </div>
                                                        <div class="form-group required">
                                                            <label>E-Mail</label>
                                                            <input class="form-control" type="text" placeholder="E-Mail" value="{$user.UserEmail}" name="mail">
                                                        </div>
                                                        <div class="form-group required">
                                                            <label>Telephone</label>
                                                            <input class="form-control" type="text" placeholder="Telephone" value="{$user.UserPhone}" name="tel">
                                                        </div>
                                                        <div class="form-group required">
                                                            <label>Street</label>
                                                            <input class="form-control" type="text" placeholder="Street Address" value="{$user.UserZip}" name="street">
                                                        </div>
                                                        <div class="form-group required">
                                                            <label>Town/City</label>
                                                            <input class="form-control" type="text" placeholder="City or Town name" value="{$user.UserCity}" name="city">
                                                        </div>
                                                        {*<div class="form-group required">*}
                                                            {*<label>County</label>*}
                                                            {*<input class="form-control" type="text" placeholder="County name" value="{$user.UserState}" name="county">*}
                                                        {*</div>*}
                                                        <div class="form-group required">
                                                            <label>Address</label>
                                                            <input class="form-control" type="text" placeholder="Primary Postal address" value="{$user.UserAddress}" name="address">
                                                        </div>
                                                        <div class="form-group required">
                                                            <label>Address 2</label>
                                                            <input class="form-control" type="text" placeholder="Second Postal address" value="{$user.UserAddress2}" name="address2">
                                                            <input class="form-control" type="hidden" value="KES." name="currency">
                                                            <input class="form-control" type="hidden" value='{$items}' name="item-details">
                                                        </div>
                                                        <div class="form-group required">
                                                            <label><strong>Select your preferred delivery Location:</strong></label>
                                                            <select class="input form-control validate[required]" tabindex="112" name="delivery-location">
                                                                <option value="">Select Region</option>
                                                                <option value="Adams Arcade[200]">Adams Arcade-KES&nbsp;200</option>
                                                                <option value="Athi River[250]">Athi River-KES&nbsp;250</option>
                                                                <option value="Avenue park[200]">Avenue park -KES&nbsp;200</option>
                                                                <option value="Bungoma[350]">Bungoma-KES&nbsp;350</option>
                                                                <option value="Buruburu[150]">Buruburu-KES&nbsp;150</option>
                                                                <option value="Crossroad[150]">Crossroad-KES&nbsp;150</option>
                                                                <option value="Dagoretti[150]">Dagoretti-KES&nbsp;150</option>
                                                                <option value="Donholm[150]">Donholm-KES&nbsp;150</option>
                                                                <option value="Embakasi[200]">Embakasi -KES&nbsp;200</option>
                                                                <option value="Fedha[200]">Fedha-KES&nbsp;200</option>
                                                                <option value="Gachie[200]">Gachie-KES&nbsp;200</option>
                                                                <option value="Gigiri[150]">Gigiri -KES&nbsp;150</option>
                                                                <option value="Githurai[200]">Githurai-KES&nbsp;200</option>
                                                                <option value="Greenfield[200]">Greenfield-KES&nbsp;200</option>
                                                                <option value="Hardy[200]">Hardy -KES&nbsp;200</option>
                                                                <option value="Harlingam[150]">Harlingam-KES&nbsp;150</option>
                                                                <option value="Highridge[200]">Highridge-KES&nbsp;200</option>
                                                                <option value="Hill view[200]">Hill view-KES&nbsp;200</option>
                                                                <option value="Imara daima[200]">Imara daima -KES&nbsp;200</option>
                                                                <option value="Industrial Area[150]">Industrial Area-KES&nbsp;150</option>
                                                                <option value="Jacaranda[250]">Jacaranda-KES&nbsp;250</option>
                                                                <option value="Jogoo road[150]">Jogoo road-KES&nbsp;150</option>
                                                                <option value="Karen[150]">Karen-KES&nbsp;150</option>
                                                                <option value="Kasarani[200]">Kasarani-KES&nbsp;200</option>
                                                                <option value="Kiambu[200]">Kiambu-KES&nbsp;200</option>
                                                                <option value="Kijabe[500]">Kijabe-KES&nbsp;500</option>
                                                                <option value="Kilimani[150]">Kilimani -KES&nbsp;150</option>
                                                                <option value="Kinoo[150]">Kinoo-KES&nbsp;150</option>
                                                                <option value="Kisumu[450]">Kisumu-KES&nbsp;450</option>
                                                                <option value="Kitusuru[150]">Kitusuru-KES&nbsp;150</option>
                                                                <option value="Langata[150]">Langata-KES&nbsp;150</option>
                                                                <option value="Lavington[150]">Lavington-KES&nbsp;150</option>
                                                                <option value="Loresho[150]">Loresho -KES&nbsp;150</option>
                                                                <option value="Lower Kabete[150]">Lower Kabete-KES&nbsp;150</option>
                                                                <option value="Makadara[150]">Makadara-KES&nbsp;150</option>
                                                                <option value="Mbagathi[150]">Mbagathi-KES&nbsp;150</option>
                                                                <option value="Mlolongo[250]">Mlolongo -KES&nbsp;250</option>
                                                                <option value="Mombasa CBD[450]">Mombasa CBD-KES&nbsp;450</option>
                                                                <option value="Mombasa road[200]">Mombasa road-KES&nbsp;200</option>
                                                                <option value="Mountain view[200]">Mountain view-KES&nbsp;200</option>
                                                                <option value="Muthaiga[200]">Muthaiga-KES&nbsp;200</option>
                                                                <option value="Nairobi CBD[100]">Nairobi CBD-KES&nbsp;100</option>
                                                                <option value="Nairobi west[150]">Nairobi west -KES&nbsp;150</option>
                                                                <option value="Nakuru[350]">Nakuru -KES&nbsp;350</option>
                                                                <option value="Ngong road[150]">Ngong road-KES&nbsp;150</option>
                                                                <option value="Nyari[200]">Nyali-KES&nbsp;200</option>
                                                                <option value="Nyayo estate[200]">Nyayo estate-KES&nbsp;200</option>
                                                                <option value="Own Pick Up [0]">Own Pick Up- South C-KES&nbsp;0</option>
                                                                <option value="Pangani[150]">Pangani -KES&nbsp;150</option>
                                                                <option value="Parklands[150]">Parklands-KES&nbsp;150</option>
                                                                <option value="Racecourse[150]">Racecourse-KES&nbsp;150</option>
                                                                <option value="Ridgeways[150]">Ridgeways-KES&nbsp;150</option>
                                                                <option value="Riverside[200]">Riverside -KES&nbsp;200</option>
                                                                <option value="Rongai[250]">Rongai -KES&nbsp;250</option>
                                                                <option value="Runda[150]">Runda-KES&nbsp;150</option>
                                                                <option value="South C[150]">South C-KES&nbsp;150</option>
                                                                <option value="Spring valley[200]">Spring valley-KES&nbsp;200</option>
                                                                <option value="Statehouse road[200]">Statehouse road-KES&nbsp;200</option>
                                                                <option value="Syokimau[200]">Syokimau-KES&nbsp;200</option>
                                                                <option value="Tena[200]">Tena-KES&nbsp;200</option>
                                                                <option value="Thika[250]">Thika -KES&nbsp;250</option>
                                                                <option value="Umoja[150]">Umoja-KES&nbsp;150</option>
                                                                <option value="Upper hill[150]">Upper hill-KES&nbsp;150</option>
                                                                <option value="Upper kabete[150]">Upper kabete-KES&nbsp;150</option>
                                                                <option value="Westlands[150]">Westlands-KES&nbsp;150</option>
                                                                <option value="Woodley[200]">Woodley -KES&nbsp;200</option>
                                                                <option value="Ziwani[200]">Ziwani-KES&nbsp;200</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="table-responsive">
                                                    {include file="modals/orderTbl.tpl"}
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                        <tr>
                                                            <td class="text-center"><strong>Total:</strong></td>
                                                            <td class="text-center">
                                                            <span id="cart-totalia">
                                                                KSH.
                                                                <input id="grandTotal"  name="totalAmount" type="text" value="{$total}" readonly>
                                                            </span>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="billing-bottom">
                                                    <div class="status"></div>
                                                    <button class="custom-button" type="submit" value="submit"><span>CONFIRM YOUR ORDER</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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