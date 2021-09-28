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
                                <h1><strong>My Duka</strong> Products </h1>
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
                                            <th class="sort-alpha">#</th>
                                            <th class="sort-alpha">Title</th>
                                            <th class="sort-amount">Summary</th>
                                            <th class="sort-amount">Publication Date</th>
                                            <th class="sort-amount">
                                                View
                                            </th>
                                            <th class="sort-amount">
                                                Delete
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {foreach $blogs as $blog}
                                            {if $blog.inactive eq 0}
                                                <tr class="odd gradeX">
                                                    <td><input type="checkbox"></td>
                                                    <td>{$blog.title}</td>
                                                    <td>{$blog.summary}</td>
                                                    <td>{$blog.created_at}</td>
                                                    <td>
                                                        <a href="/{$globals.admin.blog_profile|cat:($blog.id)}">
                                                            Details
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="/{$globals.admin.delete_blog|cat:($blog.id)}">
                                                            Delete
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
