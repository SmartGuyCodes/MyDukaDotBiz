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
                                    <form id="add-new-blog" action="/{$globals.admin.add_blog}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="form-group">
                                            <label>Blog Image</label>
                                                <i class="fa fa-upload"></i>
                                                <input type="file" name="photo"  class="validate[required]">
                                                <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
                                                <!--Handy in not allowing to large docs to be uploaded -->
                                        </div>

                                        <div class="form-group">
                                            <label for="title" class="col-sm-2 control-label">Title *</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="title" class="form-control" id="fullname" parsley-trigger="change" parsley-required="true" parsley-minlength="4" parsley-validation-minlength="1">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="title" class="col-sm-2 control-label">Summary *</label>
                                            <div class="col-sm-10">
                                                <textarea id="text-summary" name="summary" class="form-control">

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
                                                    <input type="text" name="tag"  class="" placeholder="Tags">
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" name="topic" placeholder="Topic" class="">
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" name="author" placeholder="Author" class="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="content" class="col-sm-2 control-label">Blog Content *</label>
                                            <div class="col-sm-10">
                                                <textarea id="text-content" name="content" class="form-control">

                                                </textarea>
                                                {literal}
                                                    <script>
                                                        CKEDITOR.replace( 'text-content' );
                                                    </script>
                                                {/literal}
                                            </div>
                                        </div>

                                        <div class="status"></div>
                                        <button type="submit" class="btn btn-lg btn-greensea form-control  form-footer">
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
        $("#add-new-blog").submit(function(e){//user clicks form submit button

            // Get some values from elements on the page and then prepare the form for ajax post
            var $form = $(this),
                    title = $form.find( "input[name='title']" ).val(),
                    summary = $form.find( "input[name='summary']" ).val(),
                    tag = $form.find( "input[name='tag']" ).val(),
                    topic = $form.find( "input[name='topic']" ).val(),
                    author = $form.find( "input[name='author']" ).val(),
                    content = $form.find( "input[name='content']" ).val(),
                    url = $form.attr( "action" );

            $.ajax({
                url: url,
                data: {
                    title: title,
                    summary: summary,
                    tag: tag,
                    topic: topic,
                    author: author,
                    content: content
                },
                error: function(data) {
                    alert(data.msg);
                    location.reload();
                    //$('.status').css('display', 'block').html('<p class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>An error has occurred</p>');
                    //$('#status').css('display', 'block').html('<p class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>An error has occurred</p>');
                },
                dataType: 'json',
                success: function(data) {
                    alert(data.msg);
                    //$('.status').css('display', 'block').html('<p class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Item has been added to your wishlist :-)</p>');
                    //$('.status').css('display', 'block').html('<p class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Item has been added to your wishlist :-)</p>');
                },
                type: 'POST'
            });

//            $.ajax({
//                        url: url,
//                        type: "POST",
//                        datType: 'json',
//                        data: formData
//                    })
//                    .success(function(data){
//                        if(data.msg == 'success'){
//                            swal({
//                                title: "Success!",
//                                text: "New Blog has been added!",
//                                type: "success",
//                                confirmButtonText: "Ok",
//                                closeOnConfirm:	true
//                            });
//                            window.location = '/sudo/new-blog'
//                        }
//                        else if(data.msg == 'error'){
//                            swal({
//                                title: "Error!",
//                                text: "Error adding new Blog.",
//                                type: "error",
//                                confirmButtonColor: "#FF0000",
//                                confirmButtonText: "Error!",
//                                closeOnConfirm:	true
//                            });
//                            location.reload();
//                        }
//                    });
//            e.preventDefault();
        });
    </script>
{/literal}
</body>
</html>
