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
                                    <form id="new-merchant-form" action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Merchant Name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Merchant Location</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="location">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Merchant Mail</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="mail">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Merchant Phone</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="phone">
                                        </div>
                                        <input type="hidden" name="approved" value="0"/>
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
                        window.location = '/sudo/new-products';
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
