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
            {include file="admin/title.tpl"}

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
                                <h1><strong>My Duka</strong> Orders </h1>
                                <div class="controls">
                                    <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                            <!-- /tile header -->

                            <!-- tile body -->
                            <div class="tile-body color blue rounded-corners">
                                <div class="table-responsive">
                                    <table  class="table table-datatable table-custom" id="staffDataTable">
                                        <thead>
                                        <tr>
                                            <th style="text-align: center;" width="150" class="sort-alpha">Client</th>
                                            <th style="text-align: center;" class="sort-alpha">Description</th>
                                            <th style="text-align: center;" width="150" class="sort-amount">Amount(KES.)</th>
                                            <th style="text-align: center;" width="150" class="sort-amount">Date Ordered</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {foreach $orders as $order}
                                            <tr class="odd gradeX">
                                                <td style="text-align: center;" width="200">{$order.fname} {$order.lname}</td>
                                                <td>{$order.OrderDescription}</td>
                                                <td style="text-align: center;" width="150" >{$order.OrderAmount|number_format:2:".":","}</td>
                                                <td class="text-center">{$order.OrderDate}</td>
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

{include file="admin/scripts.tpl"}
</body>
</html>
