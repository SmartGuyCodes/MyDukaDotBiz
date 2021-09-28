<!DOCTYPE html>
<html>
<head>
    <title>MyDUKA.Biz™ - Back Office Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />

    <link rel="icon" type="image/ico" href="{$cdn}favicon.ico" />
    <!-- Bootstrap -->
    <link href="{$cdn}admin/assets/css/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{$cdn}admin/assets/css/vendor/bootstrap-checkbox.css">

    <link rel="stylesheet" href="{$cdn}assets/lib/jQuery-Validation-Engine/css/validationEngine.jquery.css" type="text/css"/>

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
        <div id="content" class="col-md-12 full-page login">
            <div class="inside-block">
                <!--<img src="{$cdn}admin/assets/images/logo-big.png" alt class="logo">-->
                <i class="fa fa-5x fa-opencart" style="color: #ffffff;"></i>
                <h1><strong>Welcome</strong> Administrator</h1>
                <h5>MyDuka.Biz™ Admin</h5>

                <form id="admin-form-signin" class="form-signin" action="/{$globals.access.login}" enctype="multipart/form-data">
                    <section>
                        <div class="input-group">
                            <input type="email" class="form-control validate[required,custom[email]]" name="umail" placeholder="Email">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        </div>
                        <div class="input-group">
                            <input type="password" class="form-control validate[required]" name="password" placeholder="Password">
                            <div class="input-group-addon"><i class="fa fa-key"></i></div>
                        </div>
                    </section>
                    <section class="controls">
                        <button class="form-control btn btn-primary" type="submit"><i class="fa fa-lock"></i> Sign in</button>
                    </section>
                </form>
            </div>
        </div>
        <!-- /Page content -->
    </div>
</div>
<!-- Wrap all page content end -->

<!--Scripts-->
<script src="{$cdn}components/jquery/jquery-1.12.0.min.js"></script>
<script src="{$cdn}components/jquery/jquery-migrate-1.2.1.min.js"></script>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="{$cdn}assets/lib/bootstrap/js/bootstrap.min.js"></script>

<script src="{$cdn}components/jquery-ui-1.11.4/jquery-ui.min.js"></script>

<script src="{$cdn}assets/lib/jQuery-Validation-Engine/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
</script>
<script src="{$cdn}assets/lib/jQuery-Validation-Engine/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
</script>
<script src="{$cdn}assets/lib/sweet-alert/dist/sweetalert.min.js"></script>
<script src="{$cdn}admin/assets/js/login.js"></script>
</body>
</html>
      