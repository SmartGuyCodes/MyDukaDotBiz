<?php
/*~
.----------------------------------------------------------------------------.
|  Mission: Code Business Ideas Into Realities                               |
|   Version: 0.1                                                             |
|----------------------------------------------------------------------------|
|     Admin: Charles Evans Ogego Otieno (project admininistrator)            |
|   Authors: C.E.O Otieno (codeartist254) codeartist254@gmail.com            |
|          : trulance247@gmail.com                                                                |
|          :                                   |
| Copyright (c) 2013-2015, C.E.O Otieno. All Rights Reserved.                |
| ---------------------------------------------------------------------------|
|   License:                                                                 |
| This program is distributed in the hope that it will be useful - WITHOUT   |
| ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or      |
| FITNESS FOR A PARTICULAR PURPOSE.                                          |
|                                                                            |
| THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"|
| AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE  |
| IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE |
| ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE  |
| LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR        |
| CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF       |
| SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS   |
| INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN    |
| CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)    |
| ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE |
| POSSIBILITY OF SUCH DAMAGE.                                                |
|----------------------------------------------------------------------------|
| I offer a number of paid services :                                        |
| - Web Hosting on highly optimized fast and secure servers                  |
| - Technology Consulting                                                    |
| - Outsourcing (highly qualified programmers and graphic designers)         |
'----------------------------------------------------------------------------'
*/

interface Controller{
    #RTB
    const BIDS_SHOW_ALL = 'bids/all';
    const BIDS_SHOW_BY_PRODUCT = 'bids/auction-bids/';
    const BIDS_SHOW_PROFILE = 'bids/profile/';
    const BID_WINNER = 'bids/winner/';

    #system access
    const ACCESS_MAIN = 'access/';
    const USER_LOGOUT = 'access/logout';
    const USER_REG = 'user/register';
    const USER_LOG = 'user/login';
    
    #about myDUKA
    const MYDUKA_ABOUT_US = 'about/';

    #user
    const USER_DASHBOARD = 'user/dashboard';
    const USER_ACCOUNT_CHANGES = 'user/modify-account';
    const USER_WISHLIST = 'user/wishlist';
    const USER_UPDATE_INFO = 'user/update-info/';

    #todo: Continue from here!!
    const USER_ORDERS = 'user/orders';
    const USER_PERSONAL_INFO = 'user/personal_info';
    const USER_ADDRESS_BOOK = 'user/adres_book';
    const USER_PRODUCTS = 'user/products';
    const USER_MESSAGES = 'user/msgs';
    const USER_GUEST_CHECKOUT = 'user/guest';

    #products
    const PRODUCT_NEW = 'products/new/';
    const PRODUCT_ADD = 'products/add';
    const PRODUCTS_SHOW = 'products/show';
    const PRODUCT_PROFILE = 'products/profile/';
    const PRODUCT_CATEGORY = 'products/category/';
    const PRODUCT_SUB_CATEGORY = 'products/sub-category/';
    const PRODUCT_MINI_CATEGORY = 'products/mini-category/';
    const PRODUCT_WEEKLY_FEATURED = 'products/featured-products';
    const PRODUCT_CLEARANCE = 'products/clearance-products';
    const PRODUCTS_BRANDS = 'products/brands';

    #Review
    const PRODUCT_NEW_REVIEW = 'review/add/'; #Record the user who adds the rating
    const PRODUCT_AVERAGE_REVIEWS = 'review/average';

    #cart
    const CART_ADD = 'cart/add';
    const CART_CHECKOUT = 'cart/checkout';
    const CART_OPTION = 'cart/option';
    const CART_UPDATE = 'cart/update';
    const CART_REMOVE = 'cart/remove';
    const CART_ADD_TO_WISHLIST = 'cart/add-wish/';
    const CART_COUNT_WISHES = 'cart/count-wish/';
    const CART_BUY_NOW_MODAL = 'cart/buy-now-modal/';
    const CART_BID_NOW_MODAL = 'cart/bid-now-modal/';
    const CART_BID_NOW = 'cart/bid-now/';
    const CART_URGENT_BUY = 'cart/urgent-buy/';
    const CART_CHECKOUT_OPTIONS = 'cart/checkout-options';

    #orders
    const ORDER_CHECKOUT = 'order/checkout';
    const ORDER_CHECKOUT_AS_GUEST = 'order/checkout-as-guest';
    const ORDER_CHECKOUT_BY_REGISTERING = 'order/checkout-by-reg';
    const ORDER_CHECKOUT_BY_LOGIN = 'order/checkout-by-login';
    const ORDER_PAYMENT_DETAILS = 'order/payment-details';
    const ORDER_CONFIRM = 'order/confirm/';

    #Remember to save then get user id before proceeding with the order billing info
    const ORDER_SAVE = 'order/save/';
    const ORDER_SHIPPING_INFO = 'order/shipping';
    const ORDER_SHIPPING_PROCESSOR = 'order/pshipping';

    #payments
    const PAYMENT = 'payments/main/';
    const PAYMENT_MPESA = 'payments/mpesa';
    const PAYMENT_CASH_ON_DELIVERY = 'payments/cod/';
    const PAYMENT_REDIRECT = 'payments/redirect/';
    const PAYMENT_PAYPAL_PAGE = 'payments/paypal/';
    const PAYMENT_PAYPAL_PAY = 'payments/paypal-pay/';

    //search
    const SEARCH_PRODUCT = 'search/item/';
    const SEARCH_DISPLAY = 'search/results';

    //art and design pages
    const ART_N_DESIGN_MAIN = 'art';

    //news
    const SEND_NEWSLETTER = 'newsletter/subscribe';

    //soon
    const COMING_SOON_PAGE = 'soon/main';

    //career
    const CAREER_LANDING_PAGE = 'career/';
    const CAREER_NEW_JOB = 'career/new';
    const CAREER_ADD_JOB = 'career/add'; //later on add id of the admin who posts this new job
    const CAREER_JOB_PROFILE = 'career/profile/';

    //support
    const SUPPORT_MYDUKA = 'support';
    const SUPPORT_ABOUT_MYDUKA = 'support/aboutus';
    const SUPPORT_PAYMENT_POLICY = 'support/payment-policy';
    const SUPPORT_RETURN_POLICY = 'support/return-policy';
    const SUPPORT_PRIVACY_POLICY = 'support/privacy';
    const SUPPORT_SHIPPING_POLICY = 'support/shipping-policy';
    const SUPPORT_MYDUKA_TERMS = 'support/terms';
    const SUPPORT_MYDUKA_COOKIES = 'support/cookies';
    const SUPPORT_MYDUKA_CONTACT = 'support/contact';
    const SUPPORT_MYDUKA_CONTACT_US = 'support/submit-contact';
    #TODO: FAQ Page
    const SUPPORT_MYDUKA_FAQ = 'support/faq';

    //blogs
    const BLOG_MAIN_PAGE = 'blog/main';
    const BLOG_PROFILE_PAGE = 'blogs/profile/';

    //admin
    const MYDUKA_ADMIN = 'sudo/';
    const ADMIN_NEW_PRODUCT = 'sudo/new-product';
    const ADMIN_ADD_PRODUCT = 'sudo/add-product';
    const ADMIN_SHOW_PRODUCT = 'sudo/show-products';
    const ADMIN_FEATURED_PRODUCTS = 'sudo/featured-products';
    const ADMIN_DEALS = 'sudo/deals';
    const ADMIN_CLEARANCE = 'sudo/clearance';
    const ADMIN_PRODUCT_PROFILE = 'sudo/product-profile/';
    const ADMIN_EDIT_PRODUCT_PROFILE = 'sudo/edit-profile';
    const ADMIN_DELETE_PRODUCT = 'sudo/delete-product/';
    const ADMIN_SHOW_ORDERS = 'sudo/show-orders';
    const ADMIN_SHOW_URGENT_ORDERS = 'sudo/urgent-orders';
    const ADMIN_DISPLAY_ORDER_RECEIPT = 'sudo/order-receipt/';
    const ADMIN_NEW_CATEGORY = 'sudo/new-category';
    const ADMIN_ADD_CATEGORY = 'sudo/add-category';
    const ADMIN_SHOW_CATEGORIES = 'sudo/show-categories';
    const ADMIN_CATEGORY_PROFILE = 'sudo/category-profile/';
    const ADMIN_ADD_SUB_CATEGORY = 'sudo/add-sub-category';
    const ADMIN_SUB_CATEGORY_PROFILE = 'sudo/category-profile-details/';
    const ADMIN_ADD_CHILD_CATEGORY = 'sudo/add-child-category';
    //Blog Management System
    const ADMIN_DISPLAY_BLOGS = 'sudo/display-blogs';
    const ADMIN_NEW_BLOG = 'sudo/new-blog';
    const ADMIN_ADD_BLOG = 'sudo/add-blog';
    const ADMIN_BLOG_PROFILE = 'sudo/blog-profile/';
    const ADMIN_UPDATE_BLOG = 'sudo/update-blog/';
    const ADMIN_DELETE_BLOG = 'sudo/delete-blog/';

    //Admin Merchant Mngt System
    const ADMIN_NEW_MERCHANT = 'sudo/new-merchant'; //Consider to add id of the admin to records

    /**
     * Abstract function for execution on all controllers!
     */
    public function run();
}