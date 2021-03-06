<!DOCTYPE html>
<html>
<head>
    <title>MyDuka - {$title}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />

    <link rel="icon" type="image/ico" href="{$cdn}admin/assets/images/favicon.ico" />
    <!-- Bootstrap -->
    <link href="{$cdn}admin/assets/css/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="{$cdn}admin/assets/css/vendor/bootstrap-checkbox.css">

    <link href="{$cdn}admin/assets/css/minimal.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="bg-1">

<!-- Wrap all page content here -->
<div id="wrap">

    <!-- Make page fluid -->
    <div class="row">

        <!-- Page content -->
        <div id="content" class="col-md-12 full-page error">

            <div class="search">
                <input type="text" class="form-control" placeholder="Search...">
            </div><!-- /input-group -->


            <div class="inside-block">

                {*<img src="{$cdn}admin/assets/images/logo-big.png" alt class="logo">*}
                <i class="fa fa-5x fa-opencart"></i>
                <h1 class="error">Error <strong>404</strong></h1>
                <p class="lead"><span class="overline">something's</span> not right here</p>
                <p>the page you are looking for cannot be found</p>

                <div class="controls">
                    <button class="btn btn-cyan"><i class="fa fa-refresh"></i> Try Again</button>
                    <button class="btn btn-greensea"><i class="fa fa-home"></i> Return to home</button>
                    <button class="btn btn-red"><i class="fa fa-envelope"></i> Contact Support</button>
                </div>

            </div>


        </div>
        <!-- /Page content -->

    </div>

</div>
<!-- Wrap all page content end -->

</body>
</html>
      