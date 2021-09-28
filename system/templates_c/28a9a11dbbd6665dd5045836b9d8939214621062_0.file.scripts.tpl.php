<?php
/* Smarty version 3.1.29-dev/14, created on 2021-06-24 08:03:37
  from "/var/www/html/dev.my-duka.com/system/templates/shared/scripts.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29-dev/14',
  'unifunc' => 'content_60d4203983e9f5_17126396',
  'file_dependency' => 
  array (
    '28a9a11dbbd6665dd5045836b9d8939214621062' => 
    array (
      0 => '/var/www/html/dev.my-duka.com/system/templates/shared/scripts.tpl',
      1 => 1624514613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d4203983e9f5_17126396 ($_smarty_tpl) {
?>

    <!-- all js here -->
    <!-- jquery latest version -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
js/vendor/jquery-1.12.0.min.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
js/vendor/jquery.form.js"><?php echo '</script'; ?>
>
    <!-- bootstrap js -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- nivo slider js-->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
lib/js/jquery.nivo.slider.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
lib/home.js" type="text/javascript"><?php echo '</script'; ?>
>
    <!-- owl.carousel js -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
js/owl.carousel.min.js"><?php echo '</script'; ?>
>
    <!-- meanmenu js -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
js/jquery.meanmenu.js"><?php echo '</script'; ?>
>
    <!-- jquery-ui js -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
js/jquery-ui.min.js"><?php echo '</script'; ?>
>
    
    <!-- elevateZoom js -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
js/jquery.elevateZoom-3.0.8.min.js"><?php echo '</script'; ?>
>
    <!-- wow js -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
js/wow.min.js"><?php echo '</script'; ?>
>
    <!-- plugins js -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
js/plugins.js"><?php echo '</script'; ?>
>

    
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
lib/jquery.countdown-2.2.0/jquery.countdown.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>

    <!-- main js -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
js/main.js"><?php echo '</script'; ?>
>

    <!--Start of Tawk.to Script-->
    
    <!--End of Tawk.to Script-->

    <?php if ($_smarty_tpl->tpl_vars['title']->value == 'Contact Us') {?>
    <!-- Google Map js -->
        
            <?php echo '<script'; ?>
>
                function initMap() {
                    var myLatLng = {lat: -1.301234, lng: 36.753701};

                    var map = new google.maps.Map(document.getElementById('contactCenter'), {
                        zoom: 18,
                        center: myLatLng
                    });

                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map,
                        title: 'My Duka Dot Biz Call Center'
                    });
                }
            <?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqu67uZ1blIWAIwxvRS5NEnQFNksfz_wU&callback=initMap"><?php echo '</script'; ?>
>
        

    <?php }
}
}
