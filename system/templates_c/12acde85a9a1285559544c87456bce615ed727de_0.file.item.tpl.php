<?php
/* Smarty version 3.1.29-dev/14, created on 2021-04-09 11:37:25
  from "/var/www/html/dev.my-duka.com/system/templates/products/item.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29-dev/14',
  'unifunc' => 'content_60702055e84cc0_45796635',
  'file_dependency' => 
  array (
    '12acde85a9a1285559544c87456bce615ed727de' => 
    array (
      0 => '/var/www/html/dev.my-duka.com/system/templates/products/item.tpl',
      1 => 1474008064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60702055e84cc0_45796635 ($_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once '/var/www/html/dev.my-duka.com/smarty/libs/plugins/function.math.php';
if (!is_callable('smarty_modifier_truncate')) require_once '/var/www/html/dev.my-duka.com/smarty/libs/plugins/modifier.truncate.php';
if (!empty($_smarty_tpl->tpl_vars['item']->value['ProductBrand'])) {?>
    <div class="product-single single-item">
        
        <div class="product-img">
            
            <?php if ($_smarty_tpl->tpl_vars['item']->value['ProductStock'] <= 0) {?>
                <span class="new">Out of Stock</span>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['ProductNewPrice'] < $_smarty_tpl->tpl_vars['item']->value['ProductPrice'] && $_smarty_tpl->tpl_vars['item']->value['ProductNewPrice'] != 0) {?>
                <span class="new">
                    -<?php echo smarty_function_math(array('assign'=>((string)$_smarty_tpl->tpl_vars['percentage']->value),'equation'=>"(x / y) * 100",'x'=>($_smarty_tpl->tpl_vars['item']->value['ProductPrice']-$_smarty_tpl->tpl_vars['item']->value['ProductNewPrice']),'y'=>$_smarty_tpl->tpl_vars['item']->value['ProductPrice'],'format'=>"%.2f"),$_smarty_tpl);?>
%
                </span>
            <?php }?>
            <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['profile']).(($_smarty_tpl->tpl_vars['item']->value['ProductID']));?>
">
                <img class="primary-img" src="<?php echo ($_smarty_tpl->tpl_vars['uploads']->value).(($_smarty_tpl->tpl_vars['item']->value['ProductImage']));?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['ProductName'];?>
" />
                <img class="secondary-img" src="<?php echo ($_smarty_tpl->tpl_vars['uploads']->value).(($_smarty_tpl->tpl_vars['item']->value['ProductImage']));?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['ProductName'];?>
" />
            </a>
        </div>
        <div class="product-content">
            <h3><a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['profile']).(($_smarty_tpl->tpl_vars['item']->value['ProductID']));?>
"><strong><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['item']->value['ProductBrand'], 'UTF-8');?>
</strong></a></h3>
            <h5><a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['products']['profile']).(($_smarty_tpl->tpl_vars['item']->value['ProductID']));?>
"><strong><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value['ProductName'],30);?>
</strong></a></h5>
            <div class="pro-price">
                <?php if ($_smarty_tpl->tpl_vars['item']->value['ProductNewPrice'] < $_smarty_tpl->tpl_vars['item']->value['ProductPrice'] && $_smarty_tpl->tpl_vars['item']->value['ProductNewPrice'] != 0) {?>
                    <span class="new-price">KSH.<?php echo number_format($_smarty_tpl->tpl_vars['item']->value['ProductNewPrice'],2,".",",");?>
</span>
                    <span class="old-price">KSH.<?php echo number_format($_smarty_tpl->tpl_vars['item']->value['ProductPrice'],2,".",",");?>
</span>
                <?php } else { ?>
                    <span class="new-price">KSH. <?php echo number_format($_smarty_tpl->tpl_vars['item']->value['ProductPrice'],2,".",",");?>
</span>
                <?php }?>
            </div>
            
            
            
        </div>
        <div class="action">
            <div class="add-to-cart">
                
                <form class="add-to-cart" action="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['cart']['add'];?>
" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['ProductImage'];?>
" name="image"/>
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['ProductID'];?>
" name="id"/>
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['ProductSKU'];?>
" name="sku"/>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['ProductNewPrice'] < $_smarty_tpl->tpl_vars['item']->value['ProductPrice'] && $_smarty_tpl->tpl_vars['item']->value['ProductNewPrice'] != 0) {?>
                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['ProductNewPrice'];?>
" name="price"/>
                    <?php } else { ?>
                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['ProductPrice'];?>
" name="price"/>
                    <?php }?>
                    <div class="loading" style="display: none;">Loading&#8230;</div>
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['ProductName'];?>
" name="name"/>
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['ProductOverview'];?>
" name="details"/>
                    <input class="produkt-ilosc" type="number" value="1" name="qty"/>
                    <?php if ($_smarty_tpl->tpl_vars['page']->value != 'profile') {?></br> <?php } elseif ($_smarty_tpl->tpl_vars['section']->value == 'scroller') {?> </br> <?php }?>
                    <button id="add-cart-btn" type="submit" class="btn btn-success ">
                        <i class="fa fa-2x fa-cart-plus"></i>
                        Add to cart
                    </button>
                    <a href="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['cart']['buy_now_modal']).(($_smarty_tpl->tpl_vars['item']->value['ProductID']));?>
" rel="modal" class="">
                        <i style="margin-left: 0px;" class="fa fa-2x fa-shopping-cart"></i>
                        Buy now
                    </a>
                </form>
            </div>
            
                
                    
                    
                
                
                
                
                
            
        </div>
    </div>
<?php }
}
}
