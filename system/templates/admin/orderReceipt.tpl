{include file="admin/head.tpl"}
<body class="bg-1">

<!-- Wrap all page content here -->
<div id="wrap">
    <!-- Make page fluid -->
    <div class="row">
        <!--Left bar-->
        {include file="admin/sidebar.tpl"}

        <!-- Page content -->
        <div id="content" class="col-md-12">
            {include file="admin/title.tpl"}

            <!-- content main container -->
            <div class="main">
                <!-- row -->
                <div class="row">
                    <!-- col 12 -->
                    <div class="col-md-12">
                        <!-- tile -->
                        <section class="tile transparent">
                            <!-- tile header -->
                            <div class="tile-header transparent">
                                <h1><strong>My Duka</strong> {$title} </h1>
                                <div class="controls">
                                    <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                            <!-- /tile header -->

                            <!-- tile body -->
                            <div class="tile-body color blue rounded-corners">
                                <div class="container order-receipt-wrapper">
                                    <div class="row">
                                        <div class="span4 col-md-6">
                                            <img src="{$cdn}logo.png" class="img-rounded logo">
                                            <address>
                                                <strong>My Duka Dot Biz Limited,</strong><br>
                                                Jampark Plaza Suite 14,<br>
                                                Ngong' Road Nairobi,<br>
                                                {*P.O Box <br>*}
                                                Nairobi, Kenya<br>
                                            </address>
                                        </div>
                                        <div class="span4 well col-md-6">
                                            <table class="invoice-head">
                                                <tbody>
                                                    <tr>
                                                        <td class="pull-right"><strong>Customer Name#</strong></td>
                                                        <td>{$urgent.ClientName}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pull-right"><strong>Customer Email#</strong></td>
                                                        <td>{$urgent.ClientEmail}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pull-right"><strong>Customer Phone#</strong></td>
                                                        <td>{$urgent.ClientPhone}</td>
                                                    </tr>
                                                    {*<tr>*}
                                                        {*<td class="pull-right"><strong>Invoice #</strong></td>*}
                                                        {*<td>{$invoiveNo}</td>*}
                                                    {*</tr>*}
                                                    <tr>
                                                        <td class="pull-right"><strong>Date</strong></td>
                                                        <td>{$urgent.created_at}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="span8">
                                            <h2>Invoice</h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="span8 well invoice-body">
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>Item</th>
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th>Quantity</th>
                                                    <th>Price(KES.)</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><img width="100" height="100" src="{$uploads|cat:($product.ProductImage)}" class="img-rounded logo"></td>
                                                    <td>{$product.ProductName}</td>
                                                    <td>{$product.ProductOverview}</td>
                                                    <td>{$urgent.ProductQty}</td>
                                                    <td>{$product.ProductPrice|number_format:2:".":","}</td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td><strong>Shipping(KES.)</strong></td>
                                                    <td><strong>{$shipping|number_format:2:".":","}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td><strong>Total(KES.)</strong></td>
                                                    <td><strong>{$total|number_format:2:".":","}</strong></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="span8 well invoice-thank">
                                            <h5 style="text-align:center; text-transform: uppercase;">Thank You For Your Continued Support of my duka dot biz</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="span3">
                                            <strong>Phone:</strong> <a style="color: #000000 !important;" href="tel: +254 728 373 233"> +254 728 373 233</a>
                                        </div>
                                        <div class="span3">
                                            <strong>Email:</strong> <a style="color: #000000 !important;" href="customercare@myduka.biz">customercare@myduka.biz</a>
                                        </div>
                                        <div class="span3">
                                            <strong>Website:</strong> <a style="color: #000000 !important;" href="https://www.myduka.biz">www.myduka.biz</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /tile body -->
                        </section>
                        <!-- /tile -->
                    </div>
                    <!-- /col 12 -->
                </div>
                <!-- /row -->
            </div>
            <!-- /content container -->
        </div>
        <!-- Page content end -->

        <!--Right bar-->
        {include file="admin/rightbar.tpl"}
    </div>
    <!-- Make page fluid-->
</div>
<!-- Wrap all page content end -->

{include file="admin/scripts.tpl"}
</body>
</html>
