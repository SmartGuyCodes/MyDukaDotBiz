{include file="shared/head.tpl"}

<!-- Dashboard Area start-->
<div class="wishlist-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="left-sidebar-title">
                    <ul class="page-menu">
                        <li><a href="/">Home</a></li>
                        <li><a class="active" href="/{$globals.user.dashboard}">My Account</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            {include file="users/sidebar.tpl"}
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="page-title">
                    <h1>My Wish List</h1>
                </div>
                <div class="cart-table">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td class="text-center">Image</td>
                                <td class="text-left">Product Name</td>
                                <td class="text-left">Model</td>
                                <td class="text-right">Stock</td>
                                <td class="text-center">Unit Price</td>
                                <td class="text-center">Action</td>
                            </tr>
                            </thead>
                            <tr>
                                <td class="text-center"><a href="#"><img src="{$cdn}img/wishlist/1.png" alt="" /></a></td>
                                <td class="text-left"><a href="#">Aenean qua</a></td>
                                <td class="text-left">SAM1</td>
                                <td class="text-right">In Stock</td>
                                <td class="text-right">
                                    <b>$159.00</b>
                                    <s>$199.99</s>
                                </td>
                                <td class="text-right">
                                    <button class="btn btn-primary" title="" data-toggle="tooltip" onclick="cart.add('49');" type="button" data-original-title="Add to Cart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </button>
                                    <a class="btn btn-danger" title="" data-toggle="tooltip" href="" data-original-title="Remove">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="#"><img src="{$cdn}img/wishlist/2.png" alt="" /></a></td>
                                <td class="text-left"><a href="#">cubilia Cura</a></td>
                                <td class="text-left">Product 3</td>
                                <td class="text-right">In Stock</td>
                                <td class="text-right">
                                    <b>$80.00</b>
                                    <s>$100.00</s>
                                </td>
                                <td class="text-right">
                                    <button class="btn btn-primary" title="" data-toggle="tooltip" onclick="cart.add('49');" type="button" data-original-title="Add to Cart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </button>
                                    <a class="btn btn-danger" title="" data-toggle="tooltip" href="" data-original-title="Remove">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dashboard Area end-->

<!-- ours-brand-area start-->
{include file="shared/brands.tpl"}
<!-- ours-brand-area end-->

<!-- Recent Blogs section -->
{include file="shared/recentBlogs.tpl"}
<!-- recent-post-area end-->

{include file="shared/footer.tpl"}