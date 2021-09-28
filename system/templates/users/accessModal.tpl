<!--Register and Login Modal-->
<div class="modal fade bs-modal-sm" id="nav-login-dialog" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" style="width: 200%;margin: 0 auto;padding: 10%;">
            <br>
            <div class="bs-example bs-example-tabs">
                <ul id="myTab" class="nav nav-tabs">
                    <li class="active"><a href="#signin" data-toggle="tab">Sign In</a></li>
                    <li class=""><a href="#signup" data-toggle="tab">Register</a></li>
                    <li class=""><a href="#why" data-toggle="tab">Why?</a></li>
                </ul>
            </div>
            <div class="modal-body">
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade in" id="why">
                        <p>We need this information so that you can receive access to the site and its content. Rest assured your information will not be sold, traded, or given to anyone.</p>
                        <p><br> Please contact <a href="mailto:customercare@myduka.biz">customercare@myduka.biz</a> for any other inquiries.</p>
                    </div>
                    <div class="tab-pane fade active in" id="signin">
                        <form class="form-horizontal" id="user-log-form" action="/{$globals.user.login}" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="mail">Email</label>
                                <input id="mail" class="form-control" type="text" name="mail"/>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password</label>
                                <input id="pwd" class="form-control" type="password" name="pwd"/>
                            </div>
                            <div class="status"></div>
                            <button id="konto-loguj-bnt" class="btn btn-success form-control access-btn" type="submit">Sign in</button>
                            {*<input  value="Sign In" />*}
                        </form>
                    </div>
                    <div class="tab-pane fade" id="signup">
                        <form class="form-horizontal" id="user-reg-form" action="/{$globals.user.register}" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input id="fname" class="form-control" type="text" name="fname"/>
                            </div>
                            <div class="form-group">
                                <label for="lname">Last Name</label>
                                <input id="lname" class="form-control" type="text" name="lname"/>
                            </div>
                            <div class="form-group">
                                <label for="mail">Email</label>
                                <input id="mail" class="form-control" type="text" name="mail"/>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password</label>
                                <input id="pwd" class="form-control" type="password" name="pwd"/>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input id="phone" class="form-control" type="text" name="phone"/>
                            </div>
                            <div class="status"></div>
                            <button id="konto-rejestruj-btn" class="btn btn-success form-control access-btn" type="submit">Create Account</button>
                            {*<input value="" />*}
                            <div class="form-group">
                                <p>
                                    By selecting Register, I agree I've read and accept the myDUKA <a href="">User Agreement</a>,
                                    I'm at least 18 years old, plus I consent to the <a href="">processing of my data</a> - opens in
                                    a new window or tab - and to receiving marketing communications from myDUKA Dot Biz.
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <center>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </center>
            </div>
        </div>
    </div>
</div>
<!--./End-->