<!-- footer start-->
<footer>
    <!-- footer-top-area start -->
    <div class="footer-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12">
                    <div class="footer-top-icon">
                        <a href="https://www.facebook.com/myDUKA.bizOnlineShoppingKE/" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/my-duka-dot-biz" target="_blank">
                            <i class="fa fa-linkedin"></i>
                        </a>
                        <a href="https://twitter.com/myDuka_biz" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-12">
                    <div class="newslletter">
                        <h3 class="hidden-sm hidden-xs">Send newslletter</h3>
                        <form action="#">
                            <div class="stay-us">
                                <input type="text" placeholder="Email">
                                <button class="custom-button" type="submit">
                                    <span>Subscribe</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-top-area end -->

    <!-- footer-middle-area start-->
    <div class="footer-middle-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="footer-menu">
                        <h2 class="footer-menu-title">Information</h2>
                        <ul>
                            <li><a href="/{$globals.support.privacy_policy}">Privacy Policy</a></li>
                            <li><a href="/{$globals.support.terms}">Terms & Conditions</a></li>
                            <li><a href="/{$globals.support.payment_policy}">Payment Policy</a></li>
                            <li><a href="/{$globals.support.shipping_policy}">Shipping Policy</a></li>
                            <li><a href="/{$globals.support.return_policy}">Return and Refund Policy</a></li>
                            <li><a href="/{$globals.support.cookies}">Cookie Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="footer-menu">
                        <h2 class="footer-menu-title">My Account</h2>
                        <ul>
                            {if isset($uId)}
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Order History</a></li>
                                <li><a href="#">Wish List</a></li>
                                <li><a href="#">Newsletter</a></li>
                                {*<li><a href="#">MyPay</a></li>*}
                            {else}
                                <li><a  data-toggle="modal" data-target=".bs-modal-sm">Register</a></li>
                                <li><a  data-toggle="modal" data-target=".bs-modal-sm">Login</a></li>
                            {/if}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 hidden-sm col-xs-12">
                    <div class="footer-menu">
                        <h2 class="footer-menu-title">About us</h2>
                        <ul>
                            <li><a href="/{$globals.support.aboutus}" target="_blank">About My-Duka Dot Biz Ltd.</a></li>
                            {*<li><a href="#">Customer Care(How we work)</a></li>*}
                            <li><a href="/{$globals.blogs.main}" target="_blank">Blogs</a></li>
                            <li><a href="/{$globals.support.contact}" target="_blank">Contact Us</a></li>
                            <!--<li><a href="#">Our Partners</a></li>-->
                            <!--<li><a href="#">Brands</a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="footer-contact">
                        <h2 class="footer-menu-title">Contact Us</h2>
                        <ul>
                            <li>
                                <i class="fa fa-map-marker"> </i>
                                © My-Duka.Biz™ Jamry Flats Suite 79, Wanyee Road Nairobi, Kenya.
                            </li>
                            <li>
                                <i class="fa fa-phone"> </i>
                                +254 708 786 372 <br>
                                +254 791 036 6665
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"> </i>
                                customercare@my-duka.biz<br>
                                info@my-duka.biz
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-middle-area end-->

    <!-- footer-bottom-area start-->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="copyright">
                        <p>
                            Copyright &copy; 2021
                            <a target="_blank" href=""> My-Duka Dot Biz™</a>
                            All Rights Reserved
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="payment">
                        <img src="{$cdn}img/mDPay.png" alt="" />
                        <img src="{$cdn}img/mpesa.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom-area end-->
</footer>
<!--footer end-->
{include file="shared/scripts.tpl"}
{include file="modals/bidNowModal.tpl"}
</body>
</html>
