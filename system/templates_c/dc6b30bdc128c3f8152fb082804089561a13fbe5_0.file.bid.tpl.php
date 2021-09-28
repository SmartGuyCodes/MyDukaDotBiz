<?php
/* Smarty version 3.1.29-dev/14, created on 2021-04-09 12:14:31
  from "/var/www/html/dev.my-duka.com/system/templates/cart/bid.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29-dev/14',
  'unifunc' => 'content_60702907382460_00261357',
  'file_dependency' => 
  array (
    'dc6b30bdc128c3f8152fb082804089561a13fbe5' => 
    array (
      0 => '/var/www/html/dev.my-duka.com/system/templates/cart/bid.tpl',
      1 => 1474008064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60702907382460_00261357 ($_smarty_tpl) {
?>
<div id="content">
    <div id="wrapper">
        <form style="margin: 0 auto; width: 500px;" id="one-click-bid" action="/<?php echo ($_smarty_tpl->tpl_vars['globals']->value['cart']['bid_now']).(($_smarty_tpl->tpl_vars['pId']->value));?>
" method="post" enctype="multipart/form-data">
            <legend style="text-align: center !important;">Bid now with one click</legend>
            <fieldset>
                <p><label for="cname"><strong>REMEMBER: </strong>Your bid should be higher than the current highest bid**</label></p>
                <p id="note" class="note" data-countdown="<?php echo $_smarty_tpl->tpl_vars['product']->value['bidEndTime'];?>
"></p>
                <legend><i class="fa fa-money"></i> Highest Bid:  KShs. <?php if ($_smarty_tpl->tpl_vars['highestBid']->value == 0 || $_smarty_tpl->tpl_vars['highestBid']->value == 0.00) {
echo number_format($_smarty_tpl->tpl_vars['product']->value['bidStartPrice'],2,".",",");
} else {
echo number_format($_smarty_tpl->tpl_vars['highestBid']->value,2,".",",");
}?></legend>
                <p>
                    <label for="cname">Your name*</label>
                    <input class="form-control" id="bname" name="bname" placeholder="Bemupa Mumbo" type="text" autocomplete="off" />
                </p>
                <p>
                    <label for="cphone">Phone*</label>
                    <input class="form-control" id="bphone" name="bphone" placeholder="0712 345 678" type="text" AUTOCOMPLETE=OFF />
                </p>
                <p>
                    <label for="cemail">Email*</label>
                    <input class="form-control" id="bemail" name="bemail" placeholder="mail@gmail.com" type="email" AUTOCOMPLETE=OFF />
                </p>
                <p>
                    <label for="cemail">My Bid:*</label>
                    <input class="form-control" id="bidPrice" name="bidPrice" value="<?php echo $_smarty_tpl->tpl_vars['highestBid']->value;?>
" placeholder="2000" type="text" AUTOCOMPLETE=OFF />
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
        $('#one-click-bid').ajaxForm({
            data: $(this).serialize(),
            dataType: 'json',
//            'resetForm': true,
            beforeSubmit: function() {
                $('.status').css('display', 'block').html('<p class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>YOUR BID IS BEING PROCESSED....</p>');
            },
            'success': function(data){
                if(data.msg == 'Your bid has been received.'){
                    $('.status').css('display', 'block').html('<p class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Processing order...</p>');
                    $('#buy-now-modal').modal('hide');
                }
                else if(data.msg == 'Error. Your bid is lower than the highest bid.') {
                    $('.status').css('display', 'block').html('<p class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Sorry. Your bid is lower than the highest bid.</p>');
                }
                else if(data.msg == 'Error. Your bid cannot be equal to the highest bid.') {
                    $('.status').css('display', 'block').html('<p class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Sorry. Your bid cannot be equal to the highest bid.</p>');
                }
                else if(data.msg == 'Success. Check your mail for confirmation.') {
                    $('.status').css('display', 'block').html('<p class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Success. Check your mail for confirmation.</p>');
                }
            },
            'error': function(data){
                if(data.msg == 'Error.Try again.'){
                    $('.status').css('display', 'block').html('<p class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>An error has occurred</p>');
                }
            }
        });

        //RTB Data Binder
        $('[data-countdown]').each(function(){
            var $this = $(this), finalDate = $(this).data('countdown');
            $this.countdown(finalDate, function(e){
                $this.html('Tik tak: ' + e.strftime('%w Week(s) %d Day(s) %H:%M:%S') + ' remaining to the end of this auction.');
            });
        });
    <?php echo '</script'; ?>
>
<?php }
}
