<?php
/* Smarty version 3.1.29-dev/14, created on 2021-04-09 12:18:14
  from "/var/www/html/dev.my-duka.com/system/templates/admin/newProduct.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29-dev/14',
  'unifunc' => 'content_607029e60f23a2_47408375',
  'file_dependency' => 
  array (
    '18019b76260d20cb77ffff8a86b36e5e817ac138' => 
    array (
      0 => '/var/www/html/dev.my-duka.com/system/templates/admin/newProduct.tpl',
      1 => 1474008064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/head.tpl' => 1,
    'file:admin/sidebar.tpl' => 1,
    'file:admin/title.tpl' => 1,
    'file:admin/rightbar.tpl' => 1,
    'file:admin/scripts.tpl' => 1,
  ),
),false)) {
function content_607029e60f23a2_47408375 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body class="bg-1">


<!-- Wrap all page content here -->
<div id="wrap">
    <!-- Make page fluid -->
    <div class="row">
        <!--Left bar-->
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <!-- Page content -->
        <div id="content" class="col-md-12">
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


            <!-- content main container -->
            <div class="main">
                <!-- row -->
                <div class="row">
                    <!-- col 12 -->
                    <div class="col-md-12"><!-- tile -->
                        <section class="tile color transparent-black">
                            <!-- tile body -->
                            <div class="tile-body">
                                <div style="margin: 5%;">
                                    <form id="new-product-form" action="/<?php echo $_smarty_tpl->tpl_vars['globals']->value['admin']['add_product'];?>
" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <?php if ($_smarty_tpl->tpl_vars['type']->value == 'profile') {?>
                                                <h3><?php echo $_smarty_tpl->tpl_vars['product']->value['ProductName'];?>
 Details</h3>
                                            <?php } else { ?>
                                                <h3>New Product Description</h3>
                                            <?php }?>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Product Code[SKU]</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="sku" value="<?php echo $_smarty_tpl->tpl_vars['sku']->value;?>
" readonly>
                                            <input type="hidden" name="pId" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['ProductID'];?>
"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Product Number</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="merchant">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Product Owner[Merchant]</label>
                                            <input type="text" class="form-control validate[required]" id="exampleInputEmail1" name="productNumber">
                                        </div>

                                        <div class="form-group">
                                            <label>Product Image</label>
                                            <?php if ($_smarty_tpl->tpl_vars['type']->value == 'profile') {?>
                                                <div class="row">
                                                    <div class="col-xs-6 col-md-3">
                                                        <a href="#" class="thumbnail">
                                                            <img src="uploads.myduka.biz/<?php echo $_smarty_tpl->tpl_vars['product']->value['ProductImage'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['ProductName'];?>
">
                                                        </a>
                                                    </div>
                                                </div>
                                                <i class="fa fa-upload"></i><input type="file" name="photo"  class="validate[required]">
                                                <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/><!--Handy in not allowing to large docs to be uploaded -->
                                            <?php } else { ?>
                                                <i class="fa fa-upload"></i><input type="file" name="photo"  class="validate[required]">
                                                <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/><!--Handy in not allowing to large docs to be uploaded -->
                                            <?php }?>
                                        </div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control validate[required]" name="name"  placeholder="Product Name" <?php if (!isset($_smarty_tpl->tpl_vars['type'])) $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['type']->value = 'profile') {?> value="<?php echo $_smarty_tpl->tpl_vars['product']->value['ProductName'];?>
" <?php }?> >
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Product Brand</label>
                                            <input type="text" class="form-control validate[required]" id="exampleInputEmail1" name="productBrand">
                                        </div>

                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" class="form-control validate[required]" placeholder="Product Price" name="price" <?php if (!isset($_smarty_tpl->tpl_vars['type'])) $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['type']->value = 'profile') {?>  value="<?php echo $_smarty_tpl->tpl_vars['product']->value['ProductPrice'];?>
" <?php }?>>
                                        </div>

                                        <div class="form-group">
                                            <label>Overview</label>
                                            <input id="overview" class="form-control" name="overview">
                                        </div>

                                        <div class="form-group">
                                            <label>Features</label>
                                            <textarea id="feat" class="form-control" name="features"  >
                                                <?php if (!isset($_smarty_tpl->tpl_vars['type'])) $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['type']->value = 'profile') {?> <?php echo $_smarty_tpl->tpl_vars['product']->value['ProductFeatures'];
}?>
                                            </textarea>
                                            
                                                <?php echo '<script'; ?>
>
                                                    CKEDITOR.replace( 'feat' );
                                                <?php echo '</script'; ?>
>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Specifications</label>
                                            <textarea id="specs" class="form-control" name="specs">
                                                <?php if (!isset($_smarty_tpl->tpl_vars['type'])) $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['type']->value = 'profile') {?> <?php echo $_smarty_tpl->tpl_vars['product']->value['ProductSpecs'];?>
 <?php }?>
                                            </textarea>
                                            
                                                <?php echo '<script'; ?>
>
                                                    CKEDITOR.replace( 'specs' );
                                                <?php echo '</script'; ?>
>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>What's included</label>
                                            <textarea id="incs" class="form-control" name="includes">
                                                <?php if ($_smarty_tpl->tpl_vars['type']->value == 'profile') {?> <?php echo $_smarty_tpl->tpl_vars['product']->value['ProductIncludes'];?>
 <?php }?>
                                            </textarea>
                                            
                                                <?php echo '<script'; ?>
>
                                                    CKEDITOR.replace( 'incs' );
                                                <?php echo '</script'; ?>
>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Product Category</label>
                                            <select id="category" name="category"  class="form-control validate[required]">
                                                <?php if ($_smarty_tpl->tpl_vars['type']->value == 'profile') {?>
                                                    <option><?php echo $_smarty_tpl->tpl_vars['product']->value['ProductCategoryID'];?>
</option>
                                                <?php } else { ?>
                                                    <option>--Select category--</option>
                                                <?php }?>
                                                <?php
$_from = $_smarty_tpl->tpl_vars['cats']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_cat_0_saved_item = isset($_smarty_tpl->tpl_vars['cat']) ? $_smarty_tpl->tpl_vars['cat'] : false;
$_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['cat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
$__foreach_cat_0_saved_local_item = $_smarty_tpl->tpl_vars['cat'];
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['title'];?>
</option>
                                                <?php
$_smarty_tpl->tpl_vars['cat'] = $__foreach_cat_0_saved_local_item;
}
if ($__foreach_cat_0_saved_item) {
$_smarty_tpl->tpl_vars['cat'] = $__foreach_cat_0_saved_item;
}
?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Product Sub-Category</label>
                                            <select id="sub-category" name="sub-category"  class="form-control validate[required]">
                                                <?php if ($_smarty_tpl->tpl_vars['type']->value == 'profile') {?>
                                                    <option><?php echo $_smarty_tpl->tpl_vars['product']->value['subCategory'];?>
</option>
                                                <?php } else { ?>
                                                    <option>--Select Sub-category--</option>
                                                <?php }?>
                                                <?php
$_from = $_smarty_tpl->tpl_vars['subs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_sub_1_saved_item = isset($_smarty_tpl->tpl_vars['sub']) ? $_smarty_tpl->tpl_vars['sub'] : false;
$_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['sub']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->_loop = true;
$__foreach_sub_1_saved_local_item = $_smarty_tpl->tpl_vars['sub'];
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['sub']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['sub']->value['title'];?>
</option>
                                                <?php
$_smarty_tpl->tpl_vars['sub'] = $__foreach_sub_1_saved_local_item;
}
if ($__foreach_sub_1_saved_item) {
$_smarty_tpl->tpl_vars['sub'] = $__foreach_sub_1_saved_item;
}
?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Product Child Category</label>
                                            <select id="child-category" name="child-category"  class="form-control validate[required]">
                                                <?php if ($_smarty_tpl->tpl_vars['type']->value == 'profile') {?>
                                                    <option><?php echo $_smarty_tpl->tpl_vars['product']->value['childCategory'];?>
</option>
                                                <?php } else { ?>
                                                    <option>--Select child category--</option>
                                                <?php }?>
                                                <?php
$_from = $_smarty_tpl->tpl_vars['children']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_child_2_saved_item = isset($_smarty_tpl->tpl_vars['child']) ? $_smarty_tpl->tpl_vars['child'] : false;
$_smarty_tpl->tpl_vars['child'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['child']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
$__foreach_child_2_saved_local_item = $_smarty_tpl->tpl_vars['child'];
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['child']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['child']->value['title'];?>
</option>
                                                <?php
$_smarty_tpl->tpl_vars['child'] = $__foreach_child_2_saved_local_item;
}
if ($__foreach_child_2_saved_item) {
$_smarty_tpl->tpl_vars['child'] = $__foreach_child_2_saved_item;
}
?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Product Quantity</label>
                                            <input type="number" name="qty" class="form-control validate[required]" <?php if (!isset($_smarty_tpl->tpl_vars['type'])) $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['type']->value = 'profile') {?> value="<?php echo $_smarty_tpl->tpl_vars['product']->value['ProductStock'];?>
" <?php }?>/>
                                        </div>
                                        <div class="checkbox">
                                           <h4>Would you like to add this product into the My Duka Dot Biz Bidding System?</h4>
                                           <div style="">
                                               <input type="checkbox" name="bid-option" id="choice-dollar">
                                               <label for="choice-dollar" style="color: #000 !important;">Sure.</label>

                                               <div class="reveal-if-active">
                                                   <div class="row">
                                                       <div class="col-sm-6">
                                                           <h5>Starting Price</h5>
                                                           <input type="text" name="bidStartPrice" class="form-control validate[required]" <?php if (!isset($_smarty_tpl->tpl_vars['type'])) $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['type']->value = 'profile') {?> value="<?php echo $_smarty_tpl->tpl_vars['product']->value['bidStartPrice'];?>
" <?php }?>/>
                                                       </div>
                                                       <div class="col-sm-6">
                                                           <div class="row">
                                                               <div class="col-sm-6">
                                                                   <h5>From</h5>
                                                                   <input type="text" id="from" name="bidStartTime">
                                                               </div>
                                                               <div class="col-sm-6">
                                                                   <h5>to</h5>
                                                                   <input type="text" id="to" name="bidEndTime">
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                        </div>
                                        <input type="hidden" name="approved" value="0"/>
                                        <input type="hidden" name="live" value="0"/>
                                        <div class="status"></div>
                                        <button type="submit" class="btn btn-lg btn-greensea form-control">
                                                Submit
                                        </button>
                                    </form>
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

        <!--Right menu-->
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/rightbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
    <!-- Make page fluid-->
</div>
<!-- Wrap all page content end -->

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <?php echo '<script'; ?>
 type="text/javascript">
        (function ($) {
            "use strict";
            $('#new-product-form').on('submit', function() {
            //Add new product
            $.validationEngine('attach');

            $.ajaxForm({
                data: $(this).serialize(),
                dataType: 'json',
                resetForm: false, //change this on production
                beforeSubmit: function () {
                    //get the CKEditor instances
                    for (instance in CKEDITOR.instances) {
                        CKEDITOR.instances[instance].updateElement();
                    }
                },
                'success': function (data) {
                    if (data.msg == 'Product successfully submitted') {
                        alert(data.msg);
//                        window.location = '/sudo/new-products';
                    }
                    else if (data.msg == 'Image uploading failed!') {
                        alert(data.msg);
                    }
                    else if (data.msg == 'Image file is too small!') {
                        alert(data.msg);
                    }
                    else if (data.msg == 'Invalid image file format!') {
                        alert(data.msg);
                    }
                    else if (data.msg == 'Please select the product image') {
                        alert(data.msg);
                    }
                }
            });
        }
        }(jQuery);
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript">
        var FormStuff = {
            init: function() {
                this.applyConditionalRequired();
                this.bindUIActions();
            },
            bindUIActions: function() {
                $("input[type='checkbox']").on("change", this.applyConditionalRequired);
            },
            applyConditionalRequired: function() {
                $(".require-if-active").each(function() {
                    var el = $(this);
                    if ($(el.data("require-pair")).is(":checked")) {
                        el.prop("required", true);
                    } else {
                        el.prop("required", false);
                    }
                });
            }
        };
        FormStuff.init();

    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        $( function() {
            var dateFormat = "yy-mm-dd",
                    from = $( "#from" )
                            .datepicker({
                                defaultDate: "+1w",
                                changeMonth: true,
                                numberOfMonths: 3
                            })
                            .on( "change", function() {
                                to.datepicker( "option", "minDate", getDate( this ) );
                            }),
                    to = $( "#to" ).datepicker({
                                defaultDate: "+1w",
                                changeMonth: true,
                                numberOfMonths: 3
                            })
                            .on( "change", function() {
                                from.datepicker( "option", "maxDate", getDate( this ) );
                            });

            function getDate( element ) {
                var date;
                try {
                    date = $.datepicker.parseDate( dateFormat, element.value );
                } catch( error ) {
                    date = null;
                }

                return date;
            }


        } );
    <?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
