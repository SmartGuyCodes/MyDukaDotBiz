{include file="admin/head.tpl"}
<body class="bg-1">

<!-- Wrap all page content here -->
<div id="wrap">
    <!-- Make page fluid -->
    <div class="row">
        <!--Left bar-->
        {include file="admin/sidebar.tpl"}

        <!-- Page content -->
        <div id="content" class="col-md-12">
            {Include file="admin/title.tpl"}

            <!-- content main container -->
            <div class="main">
                <!-- row -->
                <div class="row">

                    <!-- col 12 -->
                    <div class="col-md-12"><!-- tile -->
                        <section class="tile color transparent-black">
                            <!-- tile header -->
                            <div class="tile-header">
                                <h1><strong>New</strong> Category</h1>
                                <div class="controls">
                                    <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                            <!-- /tile header -->

                            <!-- tile body -->
                            <div class="tile-body">
                                <form id="add-duka-category" action="/{$globals.admin.add_category}" method="post" enctype="multipart/form-data" class="form-horizontal" role="form" parsley-validate id="basicvalidations">
                                    <div class="form-group">
                                        <label for="fullname" class="col-sm-2 control-label">Title *</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="title" class="form-control" id="fullname" parsley-trigger="change" parsley-required="true" parsley-minlength="4" parsley-validation-minlength="1">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="description" class="col-sm-2 control-label">Description *</label>
                                        <div class="col-sm-10">
                                            <textarea id="description" name="description" class="form-control chosen-select chosen-transparent" rows="5" id="comment"  parsley-trigger="change" parsley-required="true" parsley-minlength="4" parsley-validation-minlength="1">

                                            </textarea>
                                        </div>
                                    </div>

                                    {if !empty($categories)}
                                        <div class="form-group">
                                            <label for="parent" class="col-sm-2 control-label">Parent </label>
                                            <div class="col-sm-10">
                                                <select id="parent" class="form-control" name="parent">
                                                    {foreach $categories as $category}
                                                        <option value="{$category.id}">{$category.title}</option>
                                                    {/foreach}
                                                </select>
                                            </div>
                                        </div>
                                    {/if}

                                    <div class="form-group form-footer">
                                        <div class="col-sm-offset-4 col-sm-8">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </div>
                                    </div>
                                </form>

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
<!-- jquery latest version -->
<script src="{$cdn}js/vendor/jquery-1.12.0.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{$cdn}admin/assets/js/vendor/bootstrap/bootstrap.min.js"></script>
{*<script src="../../google-code-prettify.googlecode.com/svn/loader/run_prettifyf793.js?lang=css&amp;skin=sons-of-obsidian"></script>*}
<script type="text/javascript" src="{$cdn}admin/assets/js/vendor/mmenu/js/jquery.mmenu.min.js"></script>
<script type="text/javascript" src="{$cdn}admin/assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="{$cdn}admin/assets/js/vendor/nicescroll/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="{$cdn}admin/assets/js/vendor/animate-numbers/jquery.animateNumbers.js"></script>
<script type="text/javascript" src="{$cdn}admin/assets/js/vendor/videobackground/jquery.videobackground.js"></script>
<script type="text/javascript" src="{$cdn}admin/assets/js/vendor/blockui/jquery.blockUI.js"></script>

<script src="{$cdn}admin/assets/js/vendor/tabdrop/bootstrap-tabdrop.min.js"></script>
<script src="{$cdn}admin/assets/js/vendor/chosen/chosen.jquery.min.js"></script>
<script src="{$cdn}admin/assets/js/vendor/parsley/parsley.min.js"></script>
<script src="{$cdn}admin/assets/js/vendor/wizard/jquery.bootstrap.wizard.min.js"></script>

<script src="{$cdn}admin/assets/js/minimal.min.js"></script>
<script src="{$cdn}admin/assets/lib/sweet-alert/dist/sweetalert.min.js"></script>
<script src="{$cdn}admin/assets/js/admin.js"></script>
</body>
</html>
