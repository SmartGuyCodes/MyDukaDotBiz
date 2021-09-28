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
                                    <form id="update-blog-profile" action="/{$globals.admin.update_blog|cat:($blog.id)}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="form-group">
                                            <img width="840" height="420" src="{$uploads|cat:($blog.img)}" alt="{$blog.title}" title="{$blog.title}" />
                                        </div>
                                        {*TODO: Image & Video to be placed here*}
                                        <div class="form-group">
                                            <label for="content" class="col-sm-2 control-label">Background Image *</label>
                                            <div class="col-sm-10 row">
                                                <div class="col-sm-6">
                                                    <i class="fa fa-upload"></i><input type="file" name="photo"  class="">
                                                    <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/><!--Handy in not allowing to large docs to be uploaded -->
                                                </div>
                                                <div class="col-sm-6">
                                                    {*TODO:How to upload videos to db*}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="title" class="col-sm-2 control-label">Title *</label>
                                            <div class="col-sm-10">
                                                <input value="{$blog.title}" type="text" name="title" class="form-control" id="fullname" parsley-trigger="change" parsley-required="true" parsley-minlength="4" parsley-validation-minlength="1">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="title" class="col-sm-2 control-label">Summary *</label>
                                            <div class="col-sm-10">
                                                <textarea id="text-summary" name="summary" class="form-control">
                                                    {$blog.summary}
                                                </textarea>
                                                {literal}
                                                    <script>
                                                        CKEDITOR.replace( 'text-summary' );
                                                    </script>
                                                {/literal}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="content" class="col-sm-2 control-label"> </label>
                                            <div class="col-sm-10 row">
                                                <div class="col-sm-4">
                                                    <input value="{$blog.tag}" type="text" name="tag"  class="" placeholder="Tags">
                                                </div>
                                                <div class="col-sm-4">
                                                    <input value="{$blog.topic}" type="text" name="topic" placeholder="Topic" class="">
                                                </div>
                                                <div class="col-sm-4">
                                                    <input value="{$blog.author}" type="text" name="author" placeholder="Author" class="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="content" class="col-sm-2 control-label">Blog Content *</label>
                                            <div class="col-sm-10">
                                                <textarea id="text-content" name="content" class="form-control">
                                                    {$blog.content}
                                                </textarea>
                                                {literal}
                                                    <script>
                                                        CKEDITOR.replace( 'text-content' );
                                                    </script>
                                                {/literal}
                                            </div>
                                        </div>

                                        <div class="form-group form-footer">
                                            <div class="col-sm-offset-4 col-sm-8">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button type="reset" class="btn btn-default">Reset</button>
                                            </div>
                                        </div>
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
        $('#update-blog-profile').on('submit', function() {
            alert('Wait!');
            for ( instance in CKEDITOR.instances ) {
                CKEDITOR.instances[instance].updateElement();
            }
            //Add new product
            //$.validationEngine('attach');

            $.ajaxForm({
                data: $(this).serialize(),
                dataType: 'json',
                resetForm: false, //change this on production
//                'beforeSubmit': function () {
//                    //get the CKEditor instances
//                    for (instance in CKEDITOR.instances) {
//                        CKEDITOR.instances[instance].updateElement();
//                    }
//                },
                'success': function (data) {
                    if (data.msg == 'success') {
                        alert(data.msg);
                        window.location = '/sudo/display-blogs';
                    }
                    else if (data.msg == 'error') {
                        alert(data.msg);
                    }
                }
            });
        }
    </script>
{/literal}
</body>
</html>
