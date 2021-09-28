{include file="admin/head.tpl"}
<body class="bg-1">
{* {include file="shared/preloader.tpl"} *}

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
                    <div class="col-md-12"><!-- tile -->
                        <section class="tile color transparent-black">
                            <!-- tile body -->
                            <div class="tile-body">
                                <div style="margin: 5%;">
                                    <form id="new-product-form" action="/{$globals.admin.add_product}" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            {if $type eq 'profile'}
                                                <h3>{$product.ProductName} Details</h3>
                                            {else}
                                                <h3>New Product Description</h3>
                                            {/if}
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Product Code[SKU]</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="sku" value="{$sku}" readonly>
                                            <input type="hidden" name="pId" value="{$product.ProductID}"/>
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
                                            {if $type eq 'profile'}
                                                <div class="row">
                                                    <div class="col-xs-6 col-md-3">
                                                        <a href="#" class="thumbnail">
                                                            <img src="uploads.myduka.biz/{$product.ProductImage}" alt="{$product.ProductName}">
                                                        </a>
                                                    </div>
                                                </div>
                                                <i class="fa fa-upload"></i><input type="file" name="photo"  class="validate[required]">
                                                <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/><!--Handy in not allowing to large docs to be uploaded -->
                                            {else}
                                                <i class="fa fa-upload"></i><input type="file" name="photo"  class="validate[required]">
                                                <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/><!--Handy in not allowing to large docs to be uploaded -->
                                            {/if}
                                        </div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control validate[required]" name="name"  placeholder="Product Name" {if $type = 'profile'} value="{$product.ProductName}" {/if} >
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Product Brand</label>
                                            <input type="text" class="form-control validate[required]" id="exampleInputEmail1" name="productBrand">
                                        </div>

                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" class="form-control validate[required]" placeholder="Product Price" name="price" {if $type = 'profile'}  value="{$product.ProductPrice}" {/if}>
                                        </div>

                                        <div class="form-group">
                                            <label>Overview</label>
                                            <input id="overview" class="form-control" name="overview">
                                        </div>

                                        <div class="form-group">
                                            <label>Features</label>
                                            <textarea id="feat" class="form-control" name="features"  >
                                                {if $type = 'profile'} {$product.ProductFeatures}{/if}
                                            </textarea>
                                            {literal}
                                                <script>
                                                    CKEDITOR.replace( 'feat' );
                                                </script>
                                            {/literal}
                                        </div>

                                        <div class="form-group">
                                            <label>Specifications</label>
                                            <textarea id="specs" class="form-control" name="specs">
                                                {if $type = 'profile'} {$product.ProductSpecs} {/if}
                                            </textarea>
                                            {literal}
                                                <script>
                                                    CKEDITOR.replace( 'specs' );
                                                </script>
                                            {/literal}
                                        </div>

                                        <div class="form-group">
                                            <label>What's included</label>
                                            <textarea id="incs" class="form-control" name="includes">
                                                {if $type eq 'profile'} {$product.ProductIncludes} {/if}
                                            </textarea>
                                            {literal}
                                                <script>
                                                    CKEDITOR.replace( 'incs' );
                                                </script>
                                            {/literal}
                                        </div>

                                        <div class="form-group">
                                            <label>Product Category</label>
                                            <select id="category" name="category"  class="form-control validate[required]">
                                                {if $type eq 'profile'}
                                                    <option>{$product.ProductCategoryID}</option>
                                                {else}
                                                    <option>--Select category--</option>
                                                {/if}
                                                {foreach $cats as $cat}
                                                    <option value="{$cat.slug}">{$cat.title}</option>
                                                {/foreach}
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Product Sub-Category</label>
                                            <select id="sub-category" name="sub-category"  class="form-control validate[required]">
                                                {if $type eq 'profile'}
                                                    <option>{$product.subCategory}</option>
                                                {else}
                                                    <option>--Select Sub-category--</option>
                                                {/if}
                                                {foreach $subs as $sub}
                                                    <option value="{$sub.url}">{$sub.title}</option>
                                                {/foreach}
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Product Child Category</label>
                                            <select id="child-category" name="child-category"  class="form-control validate[required]">
                                                {if $type eq 'profile'}
                                                    <option>{$product.childCategory}</option>
                                                {else}
                                                    <option>--Select child category--</option>
                                                {/if}
                                                {foreach $children as $child}
                                                    <option value="{$child.url}">{$child.title}</option>
                                                {/foreach}
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Product Quantity</label>
                                            <input type="number" name="qty" class="form-control validate[required]" {if $type = 'profile'} value="{$product.ProductStock}" {/if}/>
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
                                                           <input type="text" name="bidStartPrice" class="form-control validate[required]" {if $type = 'profile'} value="{$product.bidStartPrice}" {/if}/>
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
        {include file="admin/rightbar.tpl"}
    </div>
    <!-- Make page fluid-->
</div>
<!-- Wrap all page content end -->

{include file="admin/scripts.tpl"}
{literal}
    <script type="text/javascript">
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
    </script>

    <script type="text/javascript">
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

    </script>

    <script>
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
    </script>
{/literal}
</body>
</html>
