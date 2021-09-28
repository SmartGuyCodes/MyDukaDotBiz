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
                    <div class="col-md-12">
                        <!-- tile -->
                        <section class="tile transparent">
                            <!-- tile header -->
                            <div class="tile-header transparent">
                                <h1><strong>My Duka</strong> {$category.title} </h1>
                                <div class="controls">
                                    <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                            <!-- /tile header -->

                            <div class="jumbotron bg-transparent-black-3">
                                <div class="container text-center">
                                    <h1>{$category.title}</h1>
                                    <p>{$category.description}</p>
                                    <a href="#add-sub-category" role="button" class="btn btn-red" data-toggle="modal">
                                        Add Sub-Category
                                    </a>

                                    <div class="modal fade" id="add-sub-category" tabindex="-1" role="dialog" aria-labelledby="modalConfirmLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Close</button>
                                                    <h3 class="modal-title" id="modalConfirmLabel"><strong>New Sub-Category</strong></h3>
                                                </div>
                                                <div class="modal-body">
                                                    <form role="form" id="new-sub-category" action="/{$globals.admin.add_sub_category}" method="post" enctype="multipart/form-data">
                                                        <div class="form-group">
                                                            <label for="placeholderInput">Title</label>
                                                            <input type="text" name="title" class="form-control" id="placeholderInput" placeholder="E.g Women's fashion">
                                                        </div>

                                                        <div class="form-group">
                                                            <input type="hidden" name="parent" value="{$category.id}" class="form-control">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Description</label>
                                                            <textarea name="description" class="form-control" rows="3"></textarea>
                                                        </div>

                                                        <div class="form-group">
                                                            <button class="btn btn-green" type="submit">Save changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-red" data-dismiss="modal" aria-hidden="true">Close</button>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </div>
                            </div>

                            <!-- tile header -->
                            <div class="tile-header transparent">
                                <h1><strong>{$category.title}</strong> Sub-Categories </h1>
                                <div class="controls">
                                    <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                            <!-- /tile header -->

                            <!-- tile body -->
                            <div class="tile-body color blue rounded-corners">
                                <div class="table-responsive">
                                    <table  class="table table-datatable table-custom" id="categoriesDataTable">
                                        <thead>
                                        <tr>
                                            <th class="sort-alpha">Title</th>
                                            <th class="sort-amount">Description</th>
                                            <th>Since</th>
                                            <th>View</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {foreach $subs as $sub}
                                            <tr class="odd gradeX">
                                                <td>{$sub.title}</td>
                                                <td>{$sub.description}</td>
                                                <td class="text-center">{$sub.created_at}</td>
                                                <td class="text-center">
                                                    <a href="/{$globals.admin.sub_category_profile|cat:($sub.url)}" style="color: #000;">Details</a>
                                                </td>
                                            </tr>
                                        {/foreach}
                                        </tbody>
                                    </table>
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

        <!--Right bar-->
        {include file="admin/rightbar.tpl"}
    </div>
    <!-- Make page fluid-->
</div>
<!-- Wrap all page content end -->

<section class="videocontent" id="video"></section>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{$cdn}js/vendor/jquery-1.12.0.min.js"></script>
{*<script src="{$cdn}components/jquery/jquery-migrate-1.2.1.min.js"></script>*}
{*<script type="text/javascript" src="{$cdn}assets/lib/form-master/jquery.form.js"></script>*}
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{$cdn}admin/assets/js/vendor/bootstrap/bootstrap.min.js"></script>
<script src="../../google-code-prettify.googlecode.com/svn/loader/run_prettifyf793.js?lang=css&amp;skin=sons-of-obsidian"></script>
<script type="text/javascript" src="{$cdn}admin/assets/js/vendor/mmenu/js/jquery.mmenu.min.js"></script>
<script type="text/javascript" src="{$cdn}admin/assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="{$cdn}admin/assets/js/vendor/nicescroll/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="{$cdn}admin/assets/js/vendor/animate-numbers/jquery.animateNumbers.js"></script>
<script type="text/javascript" src="{$cdn}admin/assets/js/vendor/videobackground/jquery.videobackground.js"></script>
<script type="text/javascript" src="{$cdn}admin/assets/js/vendor/blockui/jquery.blockUI.js"></script>\

<script src="{$cdn}admin/assets/js/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{$cdn}admin/assets/js/vendor/datatables/ColReorderWithResize.js"></script>
<script src="{$cdn}admin/assets/js/vendor/datatables/colvis/dataTables.colVis.min.js"></script>
<script src="{$cdn}admin/assets/js/vendor/datatables/tabletools/ZeroClipboard.js"></script>
<script src="{$cdn}admin/assets/js/vendor/datatables/tabletools/dataTables.tableTools.min.js"></script>
<script src="{$cdn}admin/assets/js/vendor/datatables/dataTables.bootstrap.js"></script>

<script src="{$cdn}admin/assets/js/vendor/chosen/chosen.jquery.min.js"></script>

<script src="{$cdn}admin/assets/js/minimal.min.js"></script>

<script src="{$cdn}admin/assets/js/admin.js"></script>
{literal}
    <script>
        $(function($){
            "use strict";

            // Add custom class to pagination div
            $.fn.dataTableExt.oStdClasses.sPaging = 'dataTables_paginate paging_bootstrap paging_custom';

            /****************************************************/
            /**************** ADVANCED DATATABLE ****************/
            /****************************************************/
            var oTable04 = $('#staffDataTable, #categoriesDataTable').dataTable({
                "sDom":
                "<'row'<'col-md-4'l><'col-md-4 text-center sm-left'T C><'col-md-4'f>r>"+
                "t"+
                "<'row'<'col-md-4 sm-center'i><'col-md-4'><'col-md-4 text-right sm-center'p>>",
                "oLanguage": {
                    "sSearch": ""
                },
                "oTableTools": {
                    "sSwfPath": "{$cdn}admin/assets/js/vendor/datatables/tabletools/swf/copy_csv_xls_pdf.swf",
                    "aButtons": [
                        "copy",
                        "print",
                        {
                            "sExtends":    "collection",
                            "sButtonText": 'Save <span class="caret" />',
                            "aButtons":    [ "csv", "xls", "pdf" ]
                        }
                    ]
                },
                "fnInitComplete": function(oSettings, json) {
                    $('.dataTables_filter input').attr("placeholder", "Search");
                },
                "oColVis": {
                    "buttonText": '<i class="fa fa-eye"></i>'
                }
            });

            $('.ColVis_MasterButton').on('click', function(){
                var newtop = $('.ColVis_collection').position().top - 45;

                $('.ColVis_collection').addClass('dropdown-menu');
                $('.ColVis_collection>li>label').addClass('btn btn-default')
                $('.ColVis_collection').css('top', newtop + 'px');
            });

            $('.DTTT_button_collection').on('click', function(){
                var newtop = $('.DTTT_dropdown').position().top - 45;
                $('.DTTT_dropdown').css('top', newtop + 'px');
            });

            //initialize chosen
            $('.dataTables_length select').chosen({disable_search_threshold: 10});
        })
    </script>
{/literal}
</body>
</html>
