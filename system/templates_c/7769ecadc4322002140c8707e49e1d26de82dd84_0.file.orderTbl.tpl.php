<?php
/* Smarty version 3.1.29-dev/14, created on 2021-04-09 12:07:15
  from "/var/www/html/dev.my-duka.com/system/templates/modals/orderTbl.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29-dev/14',
  'unifunc' => 'content_60702753e22545_37324816',
  'file_dependency' => 
  array (
    '7769ecadc4322002140c8707e49e1d26de82dd84' => 
    array (
      0 => '/var/www/html/dev.my-duka.com/system/templates/modals/orderTbl.tpl',
      1 => 1474008064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60702753e22545_37324816 ($_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once '/var/www/html/dev.my-duka.com/smarty/libs/plugins/function.math.php';
?>
<table class="table table-bordered">
    <thead>
    <tr>
        <td class="text-center">Image</td>
        <td class="text-center">Product Name</td>
        
        <td class="text-center">Quantity</td>
        <td class="text-center">Unit Price</td>
        <td class="text-center">Total</td>
        <?php if ($_smarty_tpl->tpl_vars['title']->value != 'Shipping and Payment Details') {?>
            <td class="text-center">Remove</td>
        <?php }?>
    </tr>
    </thead>
    <?php
$_from = $_smarty_tpl->tpl_vars['mycart']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
        <tr>
            <td class="text-center">
                <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['profile']).(($_smarty_tpl->tpl_vars['item']->value['id']));?>
">
                    <img width="100" height="100" src="<?php echo $_smarty_tpl->tpl_vars['uploads']->value;
echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" />
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" name="item-img[]">
                </a>
            </td>
            <td class="text-center">
                <a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['item']->value['details'];?>
</a>
                <input type="hidden" name="item-name" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
">
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['details'];?>
" name="item-descr[]">
            </td>
            <td class="text-center">
                <div class="input-group" style="max-width: 200px; margin: 0px auto;">
                    <?php if ($_smarty_tpl->tpl_vars['title']->value == 'Shipping and Payment Details') {?>
                        <p><?php echo $_smarty_tpl->tpl_vars['item']->value['qty'];?>
</p>
                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
" name="item-price[]">
                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['qty'];?>
" name="item-qty[]">
                    <?php } else { ?>
                        <input class="form-control table-shopping-qty cart-variant--quantity_input" type="number" id="demo" min="1" max="100" step="1" name="itemQty[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['qty'];?>
">
                    <?php }?>
                </div>
            </td>
            <td class="text-center">
                KSH. <input style="border: none !important; " type="text" name="unitPrice[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
]" class="unit-price" value='<?php echo number_format($_smarty_tpl->tpl_vars['item']->value['price'],2,".",",");?>
' id="price_item_" readonly/>
            </td>
            <td class="text-center">
                KSH. <?php echo smarty_function_math(array('equation'=>"(x*y)",'x'=>$_smarty_tpl->tpl_vars['item']->value['price'],'y'=>$_smarty_tpl->tpl_vars['item']->value['qty']),$_smarty_tpl);?>

            </td>
            <?php if ($_smarty_tpl->tpl_vars['title']->value != 'Shipping and Payment Details') {?>
                <td class="text-center">
                    <a class="fa fa-close table-shopping-remove remove-item" href="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['cart']['remove'];?>
" data-code="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"></a>
                </td>
            <?php }?>
        </tr>
    <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
</table><?php }
}
