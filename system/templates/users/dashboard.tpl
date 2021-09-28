{include file="shared/head.tpl"}

<!-- Dashboard Area start-->
<div class="wishlist-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="left-sidebar-title">
                    <ul class="page-menu">
                        <li><a href="/">Home</a></li>
                        <li><a class="active" href="/{$globals.user.dashboard}">My Account</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            {include file="users/sidebar.tpl"}
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <!-- Payment Method -->
                <div class="page-title">
                    <h1>My Account</h1>
                </div>
                <div class="payment-method">
                    <!-- Panel Gropup -->
                    <div class="panel-group" id="accordion">
                        <!-- Panel Default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="check-title">
                                    <a data-toggle="collapse" class="active" data-parent="#accordion" href="#checkut1">
                                        Edit your account information
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="checkut1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12">
                                            <form class="account-form" id="user-account-dashboard" action="/{$globals.user.modify_acc}" method="post" enctype="multipart/form-data">
                                                <h1>My Account Information</h1>
                                                <h5>Your Personal Details</h5>
                                                <div class="submit-review">
                                                    <div class="my-account-form">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-2 col-sm-12 col-xs-12">
                                                                    <label>First Name</label>
                                                                </div>
                                                                <div class="col-md-10 col-sm-12 col-xs-12">
                                                                    <input type="text" class="form-control" required="required" placeholder="First Name" name="fname" value="{$user.UserFirstName}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-2 col-sm-12 col-xs-12">
                                                                    <label>Last Name</label>
                                                                </div>
                                                                <div class="col-md-10 col-sm-12 col-xs-12">
                                                                    <input type="text" class="form-control" required="required" placeholder="Last Name" name="lname" value="{$user.UserLastName}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-2 col-sm-12 col-xs-12">
                                                                    <label>E-Mail</label>
                                                                </div>
                                                                <div class="col-md-10 col-sm-12 col-xs-12">
                                                                    <input type="email" class="form-control" required="required" placeholder="E-Mail" name="email" value="{$user.UserEmail}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-2 col-sm-12 col-xs-12">
                                                                    <label>Telephone</label>
                                                                </div>
                                                                <div class="col-md-10 col-sm-12 col-xs-12">
                                                                    <input type="email" class="form-control" required="required" placeholder="Telephone" name="phone" value="{$user.UserPhone}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-goroup form-group-button">
                                                            <div class="status"></div>
                                                            <button class="btn custom-button" type="submit"><span>Change</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Panel Default -->
                        <!-- Panel Default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="check-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#checkut2">
                                        Change your password
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="checkut2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12">
                                            <form class="account-form">
                                                <h1>Change Password</h1>
                                                <h5>Your Password</h5>
                                                <div class="submit-review">
                                                    <div class="my-account-form">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-2 col-sm-12 col-xs-12">
                                                                    <label>Password</label>
                                                                </div>
                                                                <div class="col-md-10 col-sm-12 col-xs-12">
                                                                    <input type="email" class="form-control" required="required" placeholder="password">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-2 col-sm-12 col-xs-12">
                                                                    <label>Password Confirm</label>
                                                                </div>
                                                                <div class="col-md-10 col-sm-12 col-xs-12">
                                                                    <input type="email" class="form-control" required="required" placeholder="password confirm">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-goroup form-group-button">
                                                            <button class="btn custom-button" type="submit"><span>Continue</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Panel Default -->
                    </div>
                    <!-- End Panel Gropup -->
                </div>
                <!-- End Payment Method -->
            </div>
        </div>
    </div>
</div>
<!-- Dashboard Area end-->

<!-- ours-brand-area start-->
{include file="shared/brands.tpl"}
<!-- ours-brand-area end-->

<!-- Recent Blogs section -->
{include file="shared/recentBlogs.tpl"}
<!-- recent-post-area end-->

{include file="shared/footer.tpl"}