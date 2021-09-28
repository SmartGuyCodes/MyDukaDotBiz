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
                                <h1><strong>My Duka</strong> {$title} </h1>
                                <div class="controls">
                                    <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                            <!-- /tile header -->

                            <!-- tile body -->
                            <div class="tile-body color blue rounded-corners">
                                <div class="table-responsive">
                                    <table  class="table table-datatable table-custom" id="urgentOrdersDataTable">
                                        <thead>
                                        <tr>
                                            <th class="sort-alpha">Client Name</th>
                                            <th class="sort-alpha">Client Phone</th>
                                            <th class="sort-amount">Client Email</th>
                                            <th class="sort-amount">Client Location</th>
                                            <th class="sort-amount">Product Name</th>
                                            <th class="sort-amount">Product Image</th>
                                            <th class="sort-amount">Time</th>
                                            <th class="sort-amount">View</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {foreach $urgent_orders as $u_order}
                                            {if !empty($u_order.ClientName) && !empty($u_order.ClientPhone) && !empty($u_order.ClientEmail) && !empty($u_order.ClientLocation)}
                                                <tr class="odd gradeX">
                                                <td>{$u_order.ClientName}</td>
                                                <td>{$u_order.ClientPhone}</td>
                                                <td>{$u_order.ClientEmail}</td>
                                                <td>{$u_order.ClientLocation}</td>
                                                <td>{$u_order.ProductName}</td>
                                                <td>
                                                    <img id="pimg" src="{$uploads|cat:($u_order.ProductImg)}" width="50" height="50">
                                                </td>
                                                <td class="text-center">{$u_order.created_at}</td>
                                                <td class="text-center">
                                                    <a style="color: #000 !important;" href="/{$globals.admin.order_receipt|cat:($u_order.id)}">
                                                        Details
                                                    </a>
                                                </td>
                                            </tr>
                                            {/if}
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
