<?php
/* Smarty version 3.1.29-dev/14, created on 2021-04-09 12:07:15
  from "/var/www/html/dev.my-duka.com/system/templates/cart/checkout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29-dev/14',
  'unifunc' => 'content_60702753bf65e7_96367659',
  'file_dependency' => 
  array (
    'a339c6e16c70a4a3a182609b9f026afc77a75aa1' => 
    array (
      0 => '/var/www/html/dev.my-duka.com/system/templates/cart/checkout.tpl',
      1 => 1474008064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:shared/head.tpl' => 1,
    'file:modals/orderTbl.tpl' => 1,
    'file:modals/checkoutOptions.tpl' => 1,
    'file:shared/brands.tpl' => 1,
    'file:shared/recentBlogs.tpl' => 1,
    'file:shared/footer.tpl' => 1,
  ),
),false)) {
function content_60702753bf65e7_96367659 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- cart area start-->
<div class="cart-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form id="confirm-order" enctype="multipart/form-data" method="post" action="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['cart']['update'];?>
">
                    <div class="left-sidebar-title">
                        <ul class="page-menu">
                            <li><a href="/">Home</a></li>
                            <li><a class="active" href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['cart']['checkout'];?>
">Shopping Cart</a></li>
                        </ul>
                    </div>
                    <div class="page-title">
                        <h1>Shopping Cart</h1>
                    </div>
                    <div class="cart-table">
                        <div class="table-responsive">
                            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:modals/orderTbl.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
                                        <input id="grandTotal"  name="totalAmount" type="text" value="<?php echo number_format($_smarty_tpl->tpl_vars['total']->value,2,".",",");?>
" readonly>
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
                            
                            
                        </div>
                        <div class="pull-right">
                            <button class="custom-button" value="submit" type="submit">
                                <span>Update</span>
                            </button>
                            <?php if (isset($_smarty_tpl->tpl_vars['uId']->value)) {?>
                                <a id="checkout-button" href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['order']['payment_details'];?>
/<?php echo $_smarty_tpl->tpl_vars['orderID']->value;?>
" class="btn btn-success custom-button">
                                    <i class="fa fa-money"></i>
                                    Checkout
                                </a>
                            <?php } else { ?>
                                <a href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['cart']['checkout_options'];?>
" class="btn btn-success custom-button" data-toggle="modal" data-target="#checkout-options-modal">
                                    <i class="fa fa-money"></i>
                                    Checkout
                                </a>
                                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:modals/checkoutOptions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <?php }?>
                            
                                
                                
                            

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
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:shared/brands.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- ours-brand-area end-->

<!-- Recent Blogs section -->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:shared/recentBlogs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- recent-post-area end-->

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
