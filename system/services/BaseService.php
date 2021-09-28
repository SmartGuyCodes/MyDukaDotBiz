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
require_once __ROOT__ . "/smarty/libs/Smarty.class.php";

Class BaseService extends Smarty{
    //Create a user interface to automatically load this part
    private $DBhost = DBHOST;
    private $DBname = DBNAME;
    private $DBuser = DBUSER;
    private $DBpwd  = DBPWD;

    public $conn;

    /**
     * BaseService constructor.
     */
    function __construct () {
        parent::__construct();

        #connect to the db
        $this->dbConnection();

        #is logged in?
        if(isset($_SESSION[MD_OWNER])){
            $uId = $_SESSION[MD_OWNER];
            $user = $this->getUserByID($uId);
            
            $this->assign('userID', $uId);
            $this->assign('username', $user['UserFirstName']);
            $this->assign('userSession', $uId);
        }

        #now smarty inits
        $this->template_dir = __SYS__ . '/templates/';
        $this->compile_dir = __SYS__ . '/templates_c/';
        $this->cache_dir = __SYS__ . '/cache/';
        $this->config_dir = __SYS__ . '/configs/';

        #diable caching
        $this->caching = false;

        #killing debugging
        $this->debugging = false;

        #path to cdn
        $this->assign("cdn", CDN, false);

        #path to domain
        $this->assign("domain", MD_D, false);

        #uploads url
        $this->assign('uploads', DUKA_UPLOADS);
        
        #timeout shit and stuff!
        $this->mydukaTimeOut();

        #get latest blog
        $this->assign('latestNews', $this->getLatestBlogs());


        #check if user is logged in
        $this->assign('uId', $_SESSION[MD_OWNER]);

        #copyrights
        $this->assign('copyright', Utils::myDukaCopyright());

        $this->assign('globals', array(
            'bids' => [
                'all' => Controller::BIDS_SHOW_ALL,
                'auction_bids' => Controller::BIDS_SHOW_BY_PRODUCT,
                'profile' => Controller::BIDS_SHOW_PROFILE,
                'winner' => Controller::BID_WINNER
            ],
            'access' => [
                'main' => Controller::ACCESS_MAIN,
                'logout' => Controller::USER_LOGOUT
            ],
            'about' => [
                'main' => Controller::MYDUKA_ABOUT_US
            ],
            'user' => [
                'register' => Controller::USER_REG,
                'login' => Controller::USER_LOG,
                'dashboard' => Controller::USER_DASHBOARD,
                'modify_acc' => Controller::USER_ACCOUNT_CHANGES,
                'wishlist' => Controller::USER_WISHLIST,
                'orders' => Controller::USER_ORDERS,
                'update_info' => Controller::USER_UPDATE_INFO,
                #todo: Continue from here!
                'personalInfo' => Controller::USER_PERSONAL_INFO,
                'adresBook' => Controller::USER_ADDRESS_BOOK,
                'products' => Controller::USER_PRODUCTS,
                'msgs' => Controller::USER_MESSAGES,
                'guest' => Controller::USER_GUEST_CHECKOUT
            ],
            'products' => [
                'new' => Controller::PRODUCT_NEW,
                'add' => Controller::PRODUCT_ADD,
                'show' => Controller::PRODUCTS_SHOW,
                'profile' => Controller::PRODUCT_PROFILE,
                'category' => Controller::PRODUCT_CATEGORY,
                'sub_sub_category' => Controller::PRODUCT_SUB_CATEGORY,
                'mini_category' => Controller::PRODUCT_MINI_CATEGORY,
                'weekly_featured' => Controller::PRODUCT_WEEKLY_FEATURED,
                'clearance_products' => Controller::PRODUCT_CLEARANCE,
                'brands' => Controller::PRODUCTS_BRANDS
            ],
            'cart' => [
                'add' => Controller::CART_ADD,
                'checkout' => Controller::CART_CHECKOUT,
                'option' => Controller::CART_OPTION,
                'update' => Controller::CART_UPDATE,
                'remove' => Controller::CART_REMOVE,
                'add_wish' => Controller::CART_ADD_TO_WISHLIST,
                'count_wish' => Controller::CART_COUNT_WISHES,
                'buy_now_modal' => Controller::CART_BUY_NOW_MODAL,
                'urgent_buy' => Controller::CART_URGENT_BUY,
                'checkout_options' => Controller::CART_CHECKOUT_OPTIONS,
                'bid_now_modal' => Controller::CART_BID_NOW_MODAL,
                'bid_now' => Controller::CART_BID_NOW
            ],
            'order' => [
                'checkout' => Controller::ORDER_CHECKOUT,
                'checkout_as_guest' => Controller::ORDER_CHECKOUT_AS_GUEST,
                'checkout_by_reg' => Controller::ORDER_CHECKOUT_BY_REGISTERING,
                'checkout_by_login' => Controller::ORDER_CHECKOUT_BY_LOGIN,
                'save' => Controller::ORDER_SAVE,
                'payment_details' => Controller::ORDER_PAYMENT_DETAILS,
                'confirm' => Controller::ORDER_CONFIRM,
                'shipping_info' => Controller::ORDER_SHIPPING_INFO,
                'shipping' => Controller::ORDER_SHIPPING_PROCESSOR
            ],
            'payments' => [
                'mpesa' => Controller::PAYMENT_MPESA,
                'cod' => Controller::PAYMENT_CASH_ON_DELIVERY,
                'main' => Controller::PAYMENT,
                'paypal_page' => Controller::PAYMENT_PAYPAL_PAGE,
                'paypal_pay' => Controller::PAYMENT_PAYPAL_PAY
            ],
            'search' => [
                'product' =>Controller::SEARCH_PRODUCT,
                'display' =>Controller::SEARCH_DISPLAY
            ],
            'support' => [
                'main' => Controller::SUPPORT_MYDUKA,
                'aboutus' => Controller::SUPPORT_ABOUT_MYDUKA,
                'payment_policy' => Controller::SUPPORT_PAYMENT_POLICY,
                'return_policy' => Controller::SUPPORT_RETURN_POLICY,
                'privacy_policy' => Controller::SUPPORT_PRIVACY_POLICY,
                'shipping_policy' => Controller::SUPPORT_SHIPPING_POLICY,
                'terms' => Controller::SUPPORT_MYDUKA_TERMS,
                'cookies' => Controller::SUPPORT_MYDUKA_COOKIES,
                'contact' => Controller::SUPPORT_MYDUKA_CONTACT,
                'contact_us' => Controller::SUPPORT_MYDUKA_CONTACT_US,
                #TODO: FAQ Page
                'faq' => Controller::SUPPORT_MYDUKA_FAQ
            ],
            'blogs' => [
                'main' => Controller::BLOG_MAIN_PAGE,
                'profile' => Controller::BLOG_PROFILE_PAGE
            ],
            'review' => [
                'add' => Controller::PRODUCT_NEW_REVIEW,
                'average' => Controller::PRODUCT_AVERAGE_REVIEWS
            ],
            'admin' => [
                'main' => Controller::MYDUKA_ADMIN,
                'new_product' => Controller::ADMIN_NEW_PRODUCT,
                'add_product' => Controller::ADMIN_ADD_PRODUCT,
                'show_products' => Controller::ADMIN_SHOW_PRODUCT,
                'featured_products' => Controller::ADMIN_FEATURED_PRODUCTS,
                'deals' => Controller::ADMIN_DEALS,
                'clearance' => Controller::ADMIN_CLEARANCE,
                'product_profile' => Controller::ADMIN_PRODUCT_PROFILE,
                'edit_profile' => Controller::ADMIN_EDIT_PRODUCT_PROFILE,
                'delete_product' => Controller::ADMIN_DELETE_PRODUCT,
                'show_orders' => Controller::ADMIN_SHOW_ORDERS,
                'urgent_orders' => Controller::ADMIN_SHOW_URGENT_ORDERS,
                'order_receipt' => Controller::ADMIN_DISPLAY_ORDER_RECEIPT,
                'new_category' => Controller::ADMIN_NEW_CATEGORY,
                'add_category' => Controller::ADMIN_ADD_CATEGORY,
                'show_categories' => Controller::ADMIN_SHOW_CATEGORIES,
                'category_profile_details' => Controller::ADMIN_CATEGORY_PROFILE,
                'add_sub_category' => Controller::ADMIN_ADD_SUB_CATEGORY,
                'sub_category_profile' => Controller::ADMIN_SUB_CATEGORY_PROFILE,
                'add_child_category' => Controller::ADMIN_ADD_CHILD_CATEGORY,
                'display_blogs' => Controller::ADMIN_DISPLAY_BLOGS,
                'new_blog' => Controller::ADMIN_NEW_BLOG,
                'add_blog' => Controller::ADMIN_ADD_BLOG,
                'blog_profile' => Controller::ADMIN_BLOG_PROFILE,
                'update_blog' => Controller::ADMIN_UPDATE_BLOG,
                'delete_blog' => Controller::ADMIN_DELETE_BLOG,
                'new_merchant' => Controller::ADMIN_NEW_MERCHANT
            ]
        ));
    }
    
    /**
     * Handle session timeout
     */
    private function mydukaTimeOut(){
        // timeout should be 30 minutes
        $inactive = 1800;
        ini_set('session.gc_maxlifetime', $inactive); // set the session max lifetime to 2 hours
        
        if (isset($_SESSION[MD_OWNER]) && (time() - $_SESSION['timer'] > $inactive)) {
            // last request was more than 30 mins
            session_unset();     // unset $_SESSION variable for this page
            session_destroy();   // destroy session data
        }
        $_SESSION['timer'] = time(); // Update session
    }

    /**
     * @return null|PDO
     */
    public function dbConnection(){
        $this->conn = null;
        try{
            //$this->conn = new PDO('mysql:host=159.203.43.192; port=3306; dbname=mydukabi', 'root', 'admin2016!');
//            $db_ext = new PDO( 'mysql: host=xxx.xxx.xxx.xxx; dbname=THE_DB_NAME', 'THE_USER_NAME', 'THE_USER_PASS' );
            $this->conn = new PDO("mysql:host=" . $this->DBhost .";port=3306; dbname=" . $this->DBname, $this->DBuser, $this->DBpwd);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            echo "Connection error: " . $e->getMessage();
        }
        return $this->conn;
    }

    /**
     * @param $sql
     * @return PDOStatement
     */
    public function runQuery($sql){
        $stmt = $this->conn->prepare($sql);
        return $stmt;
    }

    /**
     * @return string
     */
    public function lastID(){
        $stmt = $this->conn->lastInsertId();
        return $stmt;
    }

    /**
     * @param $uID
     * @return mixed|null|string
     */
    function getUserByID($uID){
        try{
            $sql = "SELECT * FROM users WHERE UserID=:uID";
            $stmt = $this->runQuery($sql);
            $stmt->execute([':uID' => $uID]);
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $results = $e->getMessage();
        }

        return $results;
    }


    /**
     * @param $adminID
     * @return mixed|string
     */
    function getAdminByID($adminID){
        try{
            $sql = "SELECT * FROM admin WHERE id=:uID";
            $stmt = $this->runQuery($sql);
            $stmt->execute([':uID' => $adminID]);
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $results = $e->getMessage();
        }

        return $results;
    }

    /**
     * dump & die!
     * @param $v
     * @return mixed
     */
    public function dd($v){
        echo'<pre>';
        $result = print_r($v);
        return $result;
        die;
    }

    /**
     * Generate a random number!
     *
     * @param int $digits
     * @return float
     */
    public function getRand($digits = 4) {
        $exp = (intval($digits) < 3 ? 3 : $digits) - 1;
        $min = pow(10, $exp);
        $max = ($min * 10) - 1;
        $number = floatval(mt_rand($min, $max));

        return $number;
    }

    /**
     * @param $result
     * @return string
     */
    public function getJsonResponse($result){
        return json_encode($result);
    }

    /**
     * Create a SEO friendly slug
     *
     * @param $value
     * @return mixed
     */
    public function generateSlug($value) {
        // Convert all dashes to hyphens
        $value = str_replace('—', '-', $value);
        $value = str_replace('‒', '-', $value);
        $value = str_replace('―', '-', $value);

        // Convert underscores and spaces to hyphens
        $value = str_replace('_', '-', $value);
        $value = str_replace(' ', '-', $value);

        // Convert all accented latin-1 supplement characters to their non-accented counterparts
        // Characters are taken from https://en.wikipedia.org/wiki/Latin-1_Supplement_(Unicode_block)
        $accents   = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ',  'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ',  'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ð', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'þ', 'ÿ');
        $noAccents = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 'B', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'o', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'p', 'y');

        $value = str_replace($accents, $noAccents, $value);

        // Remove everything except 0-9, a-z, A-Z and hyphens
        $value = preg_replace('/[^A-Za-z0-9-]+/', '', $value);

        // Make lowercase - no need for this to be multi-byte since there are only 0-9, a-z, A-Z and hyphens left in the string
        $value = strtolower($value);

        // Only allow single hyphens
        do {
            $value = str_replace('--', '-', $value);
        }
        while (mb_substr_count($value, '--') > 0);

        return $value;
    }

    /**
     * Prettyfying url
     *
     * @return array
     */
    function parse_path() {
        $path = array();
        if (isset($_SERVER['REQUEST_URI'])) {
            $request_path = explode('?', $_SERVER['REQUEST_URI']);

            $path['base'] = rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/');
            $path['call_utf8'] = substr(urldecode($request_path[0]), strlen($path['base']) + 1);
            $path['call'] = utf8_decode($path['call_utf8']);
            if ($path['call'] == basename($_SERVER['PHP_SELF'])) {
                $path['call'] = '';
            }
            $path['call_parts'] = explode('/', $path['call']);

            $path['query_utf8'] = urldecode($request_path[1]);
            $path['query'] = utf8_decode(urldecode($request_path[1]));
            $vars = explode('&', $path['query']);
            foreach ($vars as $var) {
                $t = explode('=', $var);
                $path['query_vars'][$t[0]] = $t[1];
            }
        }
        return $path;
    }

    // Generate Guid
    public function NewGuid() {
        $s = strtoupper(md5(uniqid(rand(),true)));
        $guidText =
            'MD' . '-' .
            substr($s,8,4) . '-';
//            substr($s,12,4). '-' .
//            substr($s,16,4). '-' .
//            substr($s,20);
        return $guidText;
    }
// End Generate Guid

    #image optimization
    public function compressImage($src, $destination, $quality){
        $info = getimagesize($src);

        if($info['mime'] == 'image/jpeg'){
            $image = imagecreatefromjpeg($src);
        }
        elseif($info['mime'] == 'image/gif'){
            $image = imagecreatefromgif($src);
        }
        elseif($info['mime'] == 'image/png'){
            $image = imagecreatefrompng($src);
        }
        imagejpeg($image, $destination, $quality);

        return $destination;
    }

    /**
     * Ref: http://www.cs.cmu.edu/~dpelleg/bin/360.html
     * The Shark Search Algorithm
     *
     * @param $initialNode
     * @param $width
     * @param $depth
     * @param $size
     */
    #Get the input parameters
    // public function sharkSearch($initialNode, $width, $depth, $size, $timeLimit){
    //     #Set the depth of the initial node as some D and insert into an empty list
    //     $D = $depth;
    //     list() = $D;

    //     #while the list is not empty, and the number of processed nodes is less than S, and the time limit is not reached
    //     $nodes = []; #This are the processed nodes
    //     $time = ''; #get current time
    //     while(!empty($D) && $nodes < $size && $time < $timeLimit){
    //         #i. Pop the first node from the list and make it the current node
    //         $elemList = array_shift($D);
    //         $initialNode = $elemList;
    //     }
    // }

    /**
    * Get The Latest 5 Blogs
    */
    public function getLatestBlogs(){
        try{
            $stmt = $this->runQuery("SELECT * FROM blog LIMIT 4");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }
}