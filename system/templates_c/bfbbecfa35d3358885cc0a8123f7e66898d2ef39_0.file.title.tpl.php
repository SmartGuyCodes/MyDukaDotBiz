<?php
/* Smarty version 3.1.29-dev/14, created on 2021-04-09 12:17:30
  from "/var/www/html/dev.my-duka.com/system/templates/admin/title.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29-dev/14',
  'unifunc' => 'content_607029bab0ce00_24717379',
  'file_dependency' => 
  array (
    'bfbbecfa35d3358885cc0a8123f7e66898d2ef39' => 
    array (
      0 => '/var/www/html/dev.my-duka.com/system/templates/admin/title.tpl',
      1 => 1474008064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607029bab0ce00_24717379 ($_smarty_tpl) {
?>
<!-- page header -->
<div class="pageheader">
    <h2>
        <i class="fa fa-plus"></i>
        <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

    </h2>
    <div class="breadcrumbs">
        <ol class="breadcrumb">
            <li>You are here</li>
            <li><a href="">MyDuka.Biz</a></li>
            <li class="active"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</li>
        </ol>
    </div>
</div>
<!-- /page header --><?php }
}
