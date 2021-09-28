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
                                <h1><strong>My Duka</strong> Categories </h1>
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
                                            <th class="sort-alpha">tit</th>
                                            <th class="sort-amount">Description</th>
                                            <th>Since</th>
                                            <th>View</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {foreach $categories as $cat}
                                            <tr class="odd gradeX">
                                                <td>{$cat.title}</td>
                                                <td>{$cat.description}</td>
                                                <td class="text-center">{$cat.created_at}</td>
                                                <td class="text-center">
                                                    <a href="/{$globals.admin.category_profile_details|cat:($cat.slug)}" style="color: #000;">Details</a>
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
<!-- jquery latest version -->
<script src="{$cdn}js/vendor/jquery-1.12.0.min.js"></script>
{*<script src="{$cdn}components/jquery/jquery-1.12.0.min.js"></script>*}
{*<script src="{$cdn}components/jquery/jquery-migrate-1.2.1.min.js"></script>*}
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{$cdn}admin/assets/js/vendor/bootstrap/bootstrap.min.js"></script>
{*<script src="../../google-code-prettify.googlecode.com/svn/loader/run_prettifyf793.js?lang=css&amp;skin=sons-of-obsidian"></script>*}
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

{literal}
    <script>
        $(function(){
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
