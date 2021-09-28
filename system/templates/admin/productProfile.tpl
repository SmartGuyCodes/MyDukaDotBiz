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
                                    <form id="edit-product-form" action="/{$globals.admin.edit_profile}" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <h3>{$product.ProductName} Details</h3>
                                        </div>
                                        <div class="form-group">
                                            <img width="940" height="" src="{$uploads|cat:($product.ProductImage)}" alt="{$product.ProductName}" title="{$product.ProductName}" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Product Code[SKU]</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="sku" value="{$product.ProductSKU}" readonly>
                                            {* {if $type eq 'profile'} *}
                                            <input type="hidden" name="pId" value="{$product.ProductID}"/>
                                            <input type="hidden" name="type" value="edit" />
                                            {* {/if} *}
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Product Owner[Merchant]</label>
                                            <input type="text" value="{$product.ProductOwner}" class="form-control" id="exampleInputEmail1" name="merchant">
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
                                                <i class="fa fa-upload"></i><input type="file" name="photo"  class="">
                                                <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/><!--Handy in not allowing to large docs to be uploaded -->
                                            {else}
                                                <i class="fa fa-upload"></i><input type="file" name="photo"  class="">
                                                <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/><!--Handy in not allowing to large docs to be uploaded -->
                                            {/if}
                                        </div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name"  placeholder="Product Name" value="{$product.ProductName}"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Product Brand</label>
                                            <input type="text" class="form-control validate[required]" id="exampleInputEmail1" name="productBrand" value="{$product.ProductBrand}">
                                        </div>

                                        <div class="form-group">
                                            <label>Overview</label>
                                            <input id="overview" class="form-control" name="overview" value="{$product.ProductOverview}">
                                        </div>

                                        <div class="form-group">
                                            <label>Features</label>
                                                <textarea id="feat" class="form-control" name="features"  >
                                                    {$product.ProductFeatures}
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
                                                    {$product.ProductSpecs}
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
                                                    {$product.ProductIncludes}
                                                    {*{if $type eq 'profile'}  {/if}*}
                                                </textarea>
                                            {literal}
                                                <script>
                                                    CKEDITOR.replace( 'incs' );
                                                </script>
                                            {/literal}
                                        </div>
                                        <div class="form-group">
                                            <label>Product Category</label>
                                            <select name="category"  class="form-control">
                                                <option>{$product.ProductCategoryID}</option>
                                                {foreach $cats as $cat}
                                                    <option value="{$cat.slug}">{$cat.title}</option>
                                                {/foreach}
                                                {*{if $type eq 'profile'}*}
                                                    {**}
                                                {*{else}*}
                                                    {*<option>--Select category--</option>*}
                                                {*{/if}*}
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Product Sub-Category</label>
                                            <select name="sub-category"  class="form-control">
                                                {*{if $type eq 'profile'}*}
                                                    {**}
                                                {*{else}*}
                                                    {*<option>--Select Sub-category--</option>*}
                                                {*{/if}*}
                                                <option>{$product.subCategory}</option>
                                                {foreach $subs as $sub}
                                                    <option value="{$sub.url}">{$sub.title}</option>
                                                {/foreach}
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Product Child Category</label>
                                            <select name="child-category"  class="form-control">
                                                {*{if $type eq 'profile'}*}
                                                    {**}
                                                {*{else}*}
                                                    {*<option>--Select child category--</option>*}
                                                {*{/if}*}
                                                <option>{$product.childCategory}</option>
                                                {foreach $children as $child}
                                                    <option value="{$child.url}">{$child.title}</option>
                                                {/foreach}
                                            </select>
                                        </div>

                                        <section>
                                            <legend>NEW OFFER OPTIONS</legend>
                                            <div class="form-group">
                                                <label>Product Quantity</label>
                                                <input type="number" name="qty" class="form-control" value="{$product.ProductStock}" {*if $type = 'profile'}  {/if*}/>
                                            </div>
                                            <div class="form-group">
                                                <input id="deal" type="checkbox"  name="deal" class="" {if $product.deal eq 1}checked{/if}>
                                                <label for="deal">Add to Deal</label>
                                            </div>
                                            <div class="form-group">
                                                <input id="feature" type="checkbox" name="feature" class="" {if $product.featured eq 1}checked{/if}>
                                                <label for="feature">Add to Weekly Feature</label>
                                            </div>
                                            <div class="form-group">
                                                <input id="feature" type="checkbox" name="clear" class="" {if $product.clearance eq 1}checked{/if}>
                                                <label for="feature">Add to Clearance</label>
                                            </div>
                                            <div class="form-group">
                                                <label>Old Price</label>
                                                {if $product.ProductNewUpdate > $product.ProductUpdateDate}
                                                    <input type="text" class="form-control" placeholder="Product Price" name="price" value="{$product.ProductNewPrice}">
                                                {else}
                                                    <input type="text" class="form-control" placeholder="Product Price" name="price" value="{$product.ProductPrice}">
                                                {/if}
                                            </div>
                                            <div id="new-price" class="form-group">
                                                <label>New Price</label>
                                                <input type="text" class="form-control" placeholder="New Product Price" name="new-price">
                                            </div>
                                        </section>

                                        <div class="status"></div>
                                        <button type="submit" class="btn btn-lg btn-greensea form-control">
                                            Update
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
        $('#edit-product-form').on('submit', function() {
            //Add new product
            $.validationEngine('attach');

            $.ajaxForm({
                data: $(this).serialize(),
                dataType: 'json',
                resetForm: false, //change this on production
//                beforeSubmit: function () {
//                    //get the CKEditor instances
//                    for (instance in CKEDITOR.instances) {
//                        CKEDITOR.instances[instance].updateElement();
//                    }
//                },
                'success': function (data) {
                    if (data.msg == 'Product successfully submitted' || data.msg == 'Product is successfully uploaded and the Product is successfully edited') {
                        alert(data.msg);
                        window.location = '/sudo/new-product';
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
    </script>
{/literal}
</body>
</html>
