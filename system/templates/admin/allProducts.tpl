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
                                <h1><strong>My Duka</strong> Products </h1>
                                <div class="controls">
                                    <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                            <!-- /tile header -->

                            <!-- tile body -->
                            <div class="tile-body color blue rounded-corners">
                                <div class="table-responsive">
                                    <table  class="table table-datatable table-custom" id="staffDataTable">
                                        <thead>
                                        <tr>
                                            <th class="sort-alpha">SKU</th>
                                            <th class="sort-alpha">Name</th>
                                            <th class="sort-amount">Price</th>
                                            <th class="sort-amount">Category</th>
                                            <th class="sort-amount">View</th>
                                            <th class="sort-amount">Time</th>
                                            <th class="sort-amount">Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {foreach $products as $product}
                                            <tr class="odd gradeX">
                                                <td>#{$product.ProductSKU}</td>
                                                <td>{$product.ProductName}</td>
                                                <td>{$product.ProductPrice}</td>
                                                <td class="text-center">{$product.ProductCategoryID}</td>
                                                <td class="text-center">
                                                    <a style="color: #000" style="color: #fff !important;" href="/{$globals.admin.product_profile|cat:($product.ProductID)}">{*/{$globals.products.profile|cat:($product.ProductID)}*}
                                                        Profile
                                                    </a>
                                                </td>
                                                <td>{$product.ProductUpdateDate}</td>
                                                <td class="text-center">
                                                    <a style="color: #000" href="/{$globals.admin.delete_product|cat:($product.ProductID)}">{*/{$globals.products.profile|cat:($product.ProductID)}*}
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        {/foreach}
                                        </tbody>
                                    </table>
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
