<?php
/* Smarty version 3.1.29-dev/14, created on 2021-04-09 20:11:10
  from "/var/www/html/dev.my-duka.com/system/templates/cart/buy.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29-dev/14',
  'unifunc' => 'content_607098be5b0bb8_98476319',
  'file_dependency' => 
  array (
    'f4c4203b5ba475ffe98206189f78837de6545a80' => 
    array (
      0 => '/var/www/html/dev.my-duka.com/system/templates/cart/buy.tpl',
      1 => 1474008064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607098be5b0bb8_98476319 ($_smarty_tpl) {
?>
<div id="content">
    <div id="wrapper">
        <form style="margin: 0 auto; width: 500px;" id="one-click-buy" action="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['cart']['urgent_buy']).(($_smarty_tpl->tpl_vars['pId']->value));?>
" method="post" enctype="multipart/form-data">
            <legend style="text-align: center !important;">Buy now with one click</legend>
            <fieldset>
                <legend>1. Client Details</legend>
                <p>
                    <label for="cname">Your name*</label>
                    <input class="form-control" id="cname" name="cname" placeholder="Bemupa Mumbo" type="text" autocomplete="off" />
                </p>
                <p>
                    <label for="cphone">Phone*</label>
                    <input class="form-control" id="cphone" name="cphone" placeholder="0712 345 678" type="text" AUTOCOMPLETE=OFF />
                </p>
                <p>
                    <label for="cemail">Email*</label>
                    <input class="form-control" id="cemail" name="cemail" placeholder="mail@gmail.com" type="email" AUTOCOMPLETE=OFF />
                </p>
                <p>
                    <label>Shipping Location*</label>
                    <select class="input form-control validate[required]" tabindex="112" name="clocation">
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
                </p>
            </fieldset>

            <fieldset>
                <legend>2. Product Details</legend>
                <p>
                    
                    <img id="pimg" src="<?php echo ($_smarty_tpl->tpl_vars['uploads']->value).(($_smarty_tpl->tpl_vars['product']->value['ProductImage']));?>
" width="300" height="300">
                    <input type="hidden" name="pimg" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['ProductImage'];?>
">
                </p>
                <p>
                    
                    <strong><?php echo $_smarty_tpl->tpl_vars['product']->value['ProductName'];?>
</strong>
                    <input id="pname" name="pname" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['ProductName'];?>
" type="hidden"/>
                    <input id="pname" name="pdesc" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['ProductOverview'];?>
" type="hidden"/>
                </p>
                <p>
                    <label for="pname">Product Quantity</label>
                    <input class="form-control" id="pname" name="pqty" value="1" type="number"/>
                </p>
                <p>
                    
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['ProductNewPrice'] < $_smarty_tpl->tpl_vars['product']->value['ProductPrice'] && $_smarty_tpl->tpl_vars['product']->value['ProductNewPrice'] != 0) {?>
                        <strong>KES. <?php echo number_format($_smarty_tpl->tpl_vars['product']->value['ProductNewPrice'],2,".",",");?>
</strong>
                        <strong><strike style="color: #000000;">KES.<?php echo number_format($_smarty_tpl->tpl_vars['product']->value['ProductPrice'],2,".",",");?>
</strike></strong>
                    <?php } else { ?>
                        <strong>KES. <?php echo number_format($_smarty_tpl->tpl_vars['product']->value['ProductPrice'],2,".",",");?>
</strong>
                    <?php }?>
                    <strong></strong>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['ProductNewPrice'] < $_smarty_tpl->tpl_vars['product']->value['ProductPrice'] && $_smarty_tpl->tpl_vars['product']->value['ProductNewPrice'] != 0) {?>
                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['ProductNewPrice'];?>
" name="pprice"/>
                    <?php } else { ?>
                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['ProductPrice'];?>
" name="pprice"/>
                    <?php }?>
                    
                </p>
            </fieldset>

            
            

            

            <div class="status"></div>
            <p class="submit">
                <button id="registerButton" type="submit" class="form-control btn btn-success">Submit</button>
            </p>
        </form>
    </div>
</div>

    <?php echo '<script'; ?>
 type="text/javascript">
        //Buy now one-click-buy
        $('#one-click-buy').ajaxForm({
            data: $(this).serialize(),
            dataType: 'json',
            'resetForm': true,
            beforeSubmit: function() {
                $('.status').css('background', 'red').innerHTML = "YOUR URGENT ORDER IS BEING PROCESSED.";
            },
            'success': function(data){
                if(data.msg == 'Your order has been received. Our manager will contact you as soon as possible.'){
                    $('.status').css('display', 'block').html('<p class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Processing order...</p>');
                    $('#buy-now-modal').modal('hide');
                }
            },
            'error': function(data){
                if(data.msg == 'Error.Try again.'){
                    $('.status').css('display', 'block').html('<p class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>An error has occurred</p>');
                }
            }
        });
    <?php echo '</script'; ?>
>
<?php }
}
