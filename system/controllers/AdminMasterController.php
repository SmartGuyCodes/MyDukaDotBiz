<?php

/**
 * Created by PhpStorm.
 * User: Trulance247
 * Date: 05/20/2016
 * Time: 9:44 AM
 */
class AdminMasterController extends AdminService implements Controller{
    function __construct(){
        parent::__construct();
    }

    private function showDashboard(){
//        echo'<pre>'; print_r(); die;
        $this->assign('blogs', count($this->getBlogs()));
        $this->assign('categories', count($this->getCategories()));
        $this->assign('urgents', count($this->getUrgentOrders()));
        $this->assign('recent_orders', $this->getLatestOrders());
        $this->assign('urgent_orders', $this->getUrgentOrders());
        $this->assign('title', 'Dashboard');
        $this->assign('products', $this->countProducts());
        $this->assign('users', $this->countUsers());
        $this->assign('categories', $this->countCategories());
        $this->assign('orders', $this->countOrders());
        $this->assign('payments', $this->countPayments());
        $this->assign('staff', $this->countAdmins());
        $this->display('admin/dashboard.tpl');
    }

    private function newProduct(){
        $sku = Utils::skuGenerator();
        $products = $this->getProducts();
        foreach($products as $product => $value){
            $skuArray = array($value['ProductSKU']);
            if(!in_array($sku, $skuArray))
                $sku = Utils::skuGenerator();
        }
//        echo'<pre>'; print_r(Utils::skuGenerator()); die;
        $this->assign('children', $this->getChildCategories());
        $this->assign('subs', $this->getAllSubCategories());
        $this->assign('cats', $this->getCategories());
        $this->assign('sku', $sku);
        $this->assign('title', 'New Product');
        $this->display('admin/newProduct.tpl');
    }

    private function addProduct(){
//        echo'<pre>'; print_r($_REQUEST); die;
        $result = [];

        $psku   = trim(filter_input(INPUT_POST, 'sku'));
        $pNo   = trim(filter_input(INPUT_POST, 'productNumber'));
        $pname  = trim(filter_input(INPUT_POST, 'name'));
        $brand = trim(filter_input(INPUT_POST, 'productBrand'));
        $pprice = trim(filter_input(INPUT_POST, 'price'));
        $poverview= trim(filter_input(INPUT_POST, 'overview'));
        $pfeatures= trim(filter_input(INPUT_POST, 'features'));
        $pspecs= trim(filter_input(INPUT_POST, 'specs'));
        $pincludes= trim(filter_input(INPUT_POST, 'includes'));
        $pcat   = trim(filter_input(INPUT_POST, 'category'));
        $psubcat   = trim(filter_input(INPUT_POST, 'sub-category'));
        $pchildcat   = trim(filter_input(INPUT_POST, 'child-category'));
        $pqty   = trim(filter_input(INPUT_POST, 'qty'));
        $bid = trim(filter_input(INPUT_POST, 'bid-option'));

        #Bidding Realtime Bidding System Registration point
        if($bid === 'on'){
            $bid = 1;
        }
        else{
            $bid = 0;
        }
        $bidStartPrice = trim(filter_input(INPUT_POST, 'bidStartPrice'));
        $bidStartTime = trim(filter_input(INPUT_POST, 'bidStartTime'));
        $bidEndTime = trim(filter_input(INPUT_POST, 'bidEndTime'));

        #consider real time bidding here later on
        $path = "uploads/";
        $validFormats = ["jpg", "JPG", "png", "PNG", "gif", "GIF", "bmp", "BMP"];

        #product image stuff!s
        $name = $_FILES['photo']['name'];

        if(strlen($name)){
            list($txt, $exti) = explode(".", $name); #error with this fucking shit!!!!
            $ext = pathinfo($name,PATHINFO_EXTENSION);
            if(in_array($ext, $validFormats)){
                $actualImageName = time() .substr($txt, 5).".".$ext;
                $tmp = $_FILES['photo']['tmp_name'];
                if(move_uploaded_file($tmp, $path.$actualImageName)){
                    if($bid !== 1){
                        $this->insertProduct($psku, $pNo, $pname, $brand, $pprice, $poverview, $pfeatures, $pspecs, $pincludes, $pcat, $psubcat, $pchildcat, $actualImageName, $pqty, 0);
                    }
                    else{
                        $this->insertBidProduct($psku, $pNo, $pname, $brand, $pprice, $poverview, $pfeatures, $pspecs, $pincludes, $pcat, $psubcat, $pchildcat, $actualImageName, $pqty, $bid, $bidStartPrice, $bidStartTime, $bidEndTime);

                    }
                    //echo "success!";die;
                    //$result['msg'] = 'Product successfully submitted';
                    header('Location: ' . MD_D . 'sudo/new-product');
                    exit;
                }
                else{
                    echo 'Image uploading failed!'; die;
                    //$result['msg'] = 'Image uploading failed!';
                }
            }
            else{
                echo 'Invalid image file format!'; die;
                //$result['msg'] = 'Invalid image file format!';
            }
        }
        else{
            $result['msg'] = "Please select the product image";
        }

        header('Location: ' . MD_D . 'sudo/new-product');
        exit;
    }

    private function showProducts(){
        $this->assign('products', $this->getProducts());
        $this->assign('title', 'Inventory');
        $this->display('admin/allProducts.tpl');
    }

    private function showFeaturedProducts(){
        $this->assign('products', $this->getFeaturedProducts());
        $this->assign('title', 'Featured Products');
        $this->display('admin/allProducts.tpl');
    }

    private function showDeals(){
        $this->assign('products', $this->getDeals());
        $this->assign('title', 'Deals');
        $this->display('admin/allProducts.tpl');
    }

    private function showClearance(){
        $this->assign('products', $this->getClearance());
        $this->assign('title', 'Clearance');
        $this->display('admin/allProducts.tpl');
    }

    private function productProfile(){
        $this->assign('type', 'profileEditor');
        $this->assign('product', $this->getProductById(trim(filter_input(INPUT_GET, 'info'))));
        $this->assign('children', $this->getChildCategories());
        $this->assign('subs', $this->getAllSubCategories());
        $this->assign('cats', $this->getCategories());
        $this->assign('title', 'Product Profile');
        $this->display('admin/productProfile.tpl');
    }

    private function updateProfile(){
        $result = [];

        $pId = trim(filter_input(INPUT_POST, 'pId'));
        $owner = trim(filter_input(INPUT_POST, 'merchant'));
        $psku   = trim(filter_input(INPUT_POST, 'sku'));
        $pNo   = trim(filter_input(INPUT_POST, 'productNumber'));
        $pname  = trim(filter_input(INPUT_POST, 'name'));
        $brand = trim(filter_input(INPUT_POST, 'productBrand'));
        $pprice = trim(filter_input(INPUT_POST, 'price'));
        $newPrice = trim(filter_input(INPUT_POST, 'new-price'));
        $poverview= trim(filter_input(INPUT_POST, 'overview'));
        $pfeatures= trim(filter_input(INPUT_POST, 'features'));
        $pspecs= trim(filter_input(INPUT_POST, 'specs'));
        $pincludes= trim(filter_input(INPUT_POST, 'includes'));
        $pcat   = trim(filter_input(INPUT_POST, 'category'));
        $psubcat   = trim(filter_input(INPUT_POST, 'sub-category'));
        $pchildcat   = trim(filter_input(INPUT_POST, 'child-category'));
        $pqty   = trim(filter_input(INPUT_POST, 'qty'));

        #temporarily sort the price issue
        if(empty($newPrice)){
            $newPrice = $pprice;
        }

        #sort the deal and weekly
        $deal = trim(filter_input(INPUT_POST, 'deal'));
        if($deal === 'on'){
            $deal = 1;
        }elseif($deal === 'off'){
            $deal = 0;
        }

        $feature = trim(filter_input(INPUT_POST, 'feature'));
        if($feature === 'on'){
            $feature = 1;
        }elseif($feature === 'off'){
            $feature = 0;
        }

        $clear = trim(filter_input(INPUT_POST, 'clear'));
        if($clear === 'on'){
            $clear = 1;
        }elseif($clear === 'off'){
            $clear = 0;
        }

        #consider real time bidding here later on

        #product image stuff!
        $name = $_FILES['photo']['name'];

//        if we add a new product photo
        if(empty($name)){
            if($this->editProduct($pId, $psku, $owner, $pNo, $pname, $brand, $pprice, $newPrice, $poverview, $pfeatures, $pspecs, $pincludes, $pcat, $psubcat, $pchildcat, $pqty, $deal, $feature, $clear)){
                $result['msg'] = 'Product successfully edited';
            }
        }elseif(isset($name)){
            $path = 'uploads/';
            $validFormats = ["jpg", "JPG", "png", "PNG", "gif", "GIF", "bmp", "BMP"];
            if (strlen($name)) {
                list($txt, $ext) = explode(".", $name);
                if (in_array($ext, $validFormats)) {
                    $actualImageName = time() . substr($txt, 5) . "." . $ext;
                    $tmp = $_FILES['photo']['tmp_name'];
                    if (move_uploaded_file($tmp, $path . $actualImageName)) {
                        $this->editProductWithImg($pId, $psku, $owner, $pNo, $pname, $brand, $pprice, $newPrice, $poverview, $pfeatures, $pspecs, $pincludes, $pcat, $psubcat, $pchildcat, $pqty, $deal, $feature, $clear, $actualImageName);
                        $result['msg'] = 'Product is successfully uploaded and the Product is successfully edited';
                    } else {
                        $result['msg'] = 'Image uploading failed!';
                    }
                } else {
                    $result['msg'] = 'Invalid image file format!';
                }
            } else {
                $result['msg'] = "Please select the product image";
            }
        }

        header('Location: ' . MD_D . 'sudo/product-profile/' . $pId);
        exit;
//        header('Content-type: application/json');
//        echo json_encode($result);
    }

    public function removeProduct(){
        if($this->deleteProductById(trim(filter_input(INPUT_GET, 'info')))){
            header('Location: ' . MD_D . 'sudo/');
            exit;
        }
        else{
            die('Error deleting product!');
        }
    }

    private function showOrders(){
        $this->assign('orders', $this->getOrders());
        $this->assign('title', 'Orders');
        $this->display('admin/orders.tpl');
    }

    private function showUrgentOrders(){
//        echo'<pre>'; print_r($this->getUrgentOrders()); die;
        $this->assign('urgent_orders', $this->getUrgentOrders());
        $this->assign('title', 'Urgent Orders');
        $this->display('admin/urgentOrders.tpl');
    }

    private function displayUrgentOrderReceipt(){
        $order = $this->getUrgentOrderById(trim(filter_input(INPUT_GET, 'info')));
//        echo'<pre>'; print_r($this->getProductById($order['ProductID'])); die;
        $product = $this->getProductById($order['ProductID']);
        $shipping = Utils::getNumerals($order['ClientLocation']);
        $total = $shipping[0] + $product['ProductPrice'];

        $this->assign('total', $total);
        $this->assign('shipping', $shipping[0]);
        $this->assign('product', $product);
        $this->assign('urgent', $order);
        $this->assign('title', 'Order Receipt');
        $this->display('admin/orderReceipt.tpl');
    }

    private function newCategory(){
        $this->assign('categories', $this->getCategories());
        $this->assign('title', 'New Category');
        $this->display('admin/newCategory.tpl');
    }

    private function addCategory(){
        $result = [];

        $title = trim(filter_input(INPUT_POST, 'title'));
        $description = trim(filter_input(INPUT_POST, 'description'));
        $parent = trim(filter_input(INPUT_POST, 'parent'));
        $slug = $this->generateSlug($title);

        if($this->insertCategory($title, $description, $parent, $slug)){
            $result['msg'] = 'success';
        }
        else{
            $result['msg'] = 'error';
        }
        header('Content-type: application/json');
        echo json_encode($result);
    }

    #now display all the categories
    private function showCategories(){
        $this->assign('categories', $this->getCategories());
        $this->assign('title', 'Categories');
        $this->display('admin/allCategories.tpl');
    }

    #category display
    private function categoryProfile(){
        $parent = $this->getCategoriesBySlug(trim(filter_input(INPUT_GET, 'info')));
        $subs = $this->getSubCategories($parent['id']);

        $this->assign('subs', $subs);
        $this->assign('category', $parent);
        $this->assign('title', 'Sub-Category');
        $this->display('admin/categoryProfile.tpl');
    }

    #add sub category
    private function addSubCategory(){
        $result = [];

        $title = trim(filter_input(INPUT_POST, 'title'));
        $parent = trim(filter_input(INPUT_POST, 'parent'));
        $desc = trim(filter_input(INPUT_POST, 'description'));
        $url = $this->generateSlug($title);

        if($this->insertSubCategory($title, $desc, $parent, $url)){
            $result['msg'] = 'Sub-category successfully added';
        }
        else{
            $result['msg'] = 'error adding ' .$title. 'sub-category';
        }

        header('Content-type: application/json');
        $this->getJsonResponse($result);
    }

    #Sub category details
    private function subCategoryDetails(){
        $category = $this->getSubCategoryProfile(trim(filter_input(INPUT_GET, 'info')));
        $this->assign('children', $this->getChildCategoryByPid($category['id']));
        $this->assign('title', 'Sub-Category');
        $this->assign('category', $category);
        $this->display('admin/subCategory.tpl');
    }

    #add child category
    private function addChildCategory(){
        $result = [];

        $title = trim(filter_input(INPUT_POST, 'title'));
        $parent = trim(filter_input(INPUT_POST, 'parent'));
        $desc = trim(filter_input(INPUT_POST, 'description'));
        $url = $this->generateSlug($title);

        if($this->insertChildCategory($title, $desc, $parent, $url)){
            $result['msg'] = 'Child-category successfully added';
        }
        else{
            $result['msg'] = 'error adding ' .$title. 'child-category';
        }

        header('Content-type: application/json');
        $this->getJsonResponse($result);
    }

    private function newBlog(){
        $this->assign('title', 'New Blog');
        $this->display('admin/newBlog.tpl');
    }

    private function addBlog(){
        $title = trim(filter_input(INPUT_POST, 'title'));
        $summary = trim(filter_input(INPUT_POST, 'summary'));
        $content = trim(filter_input(INPUT_POST, 'content'));
        $tag = trim(filter_input(INPUT_POST, 'tag'));
        $topic = trim(filter_input(INPUT_POST, 'topic'));
        $author = trim(filter_input(INPUT_POST, 'author'));
        $result = [];
//        echo "<pre>"; print_r($_REQUEST); die;

        $name = $_FILES['photo']['name'];
        $path = 'uploads/';
        $validFormats = ["jpg", "JPG", "png", "PNG", "gif", "GIF", "bmp", "BMP"];
        if (strlen($name)) {
            list($txt, $ext) = explode(".", $name);
            if (in_array($ext, $validFormats)) {
                $actualImageName = time() . substr($txt, 5) . "." . $ext;
                $tmp = $_FILES['photo']['tmp_name'];
                if (move_uploaded_file($tmp, $path . $actualImageName)) {
                    $this->insertBlog($title, $summary, $content, $actualImageName, '', $tag, $topic, $author);
//                    header('Location: ' . MD_D . 'sudo/');
//                    exit;
                        $result['msg'] = 'Blog has been successfully added.';
                } else {
//                    die('Image uploading failed!');
                        $result['msg'] = 'Image uploading failed!';
                }
            } else {
//                die('Invalid image file format!');
                    $result['msg'] = 'Invalid image file format!';
            }
        } else {
//            die('Please select the product image');
                $result['msg'] = "Please select the product image";
        }


        header('Content-type: application/json');
        echo json_encode($result);
    }

    private function showAllBlogs(){
        $this->assign('blogs', $this->getBlogs());
        $this->assign('title', 'Blogs');
        $this->display('admin/allBlogs.tpl');
    }

    private function showBlogProfile(){
        $this->assign('blog', $this->getBlogById(trim(filter_input(INPUT_GET, 'info'))));
        $this->assign('title', 'Blog Profile');
        $this->display('admin/blogProfile.tpl');
    }

    private function updateBlog(){
        $id = trim(filter_input(INPUT_GET, 'info'));
        $title = trim(filter_input(INPUT_POST, 'title'));
        $summary = trim(filter_input(INPUT_POST, 'summary'));
        $content = trim(filter_input(INPUT_POST, 'content'));
        $tag = trim(filter_input(INPUT_POST, 'tag'));
        $topic = trim(filter_input(INPUT_POST, 'topic'));
        $author = trim(filter_input(INPUT_POST, 'author'));
        $result = [];


        $name = $_FILES['photo']['name'];

//        if we add a new product photo
        if(empty($name)){
            if($this->editBlog($id, $title, $summary, $content, '', '', $tag, $topic, $author)){
//            $result['msg'] = 'success';
                header('Location: ' . MD_D . 'sudo/blog-profile/' . $id);
                exit;
            }
        }elseif(isset($name)){
            $path = 'uploads/';
            $validFormats = ["jpg", "JPG", "png", "PNG", "gif", "GIF", "bmp", "BMP"];
            if (strlen($name)) {
                list($txt, $ext) = explode(".", $name);
                if (in_array($ext, $validFormats)) {
                    $actualImageName = time() . substr($txt, 5) . "." . $ext;
                    $tmp = $_FILES['photo']['tmp_name'];
                    if (move_uploaded_file($tmp, $path . $actualImageName)) {
                        $this->editBlogWithImg($id, $title, $summary, $content, $actualImageName, $tag, $topic, $author);
                        header('Location: ' . MD_D . 'sudo/blog-profile/' . $id);
                        exit;
//                        $result['msg'] = '';
                    } else {
                        die('Image uploading failed!');
//                        $result['msg'] = 'Image uploading failed!';
                    }
                } else {
                    die('Invalid image file format!');
//                    $result['msg'] = 'Invalid image file format!';
                }
            } else {
                die('Please select the product image');
//                $result['msg'] = "Please select the product image";
            }
        }

//        header('Content-type: application/json');
//        echo json_encode($result);
    }

    private function deleteBlog(){
        $bId = trim(filter_input(INPUT_GET, 'info'));
        $activity = 1;
        if($this->disableBlog($bId, $activity)){
            header('Location: ' . MD_D . 'sudo/');
            exit;
        }
        else{
            die('Error deleting blog');
        }
    }

    //Merchant's Module
    private function newMerchant(){
        $this->assign('title', 'New Merchant');
        $this->display('admin/newMerchant.tpl');
    }

    function run(){
        $q = trim(filter_input(INPUT_GET, 'query'));
        switch(isset($q) ? $q : null){
            case NULL:
                $this->showDashboard();
                break;
            case 'new-product':
                $this->newProduct();
                break;
            case 'add-product':
                $this->addProduct();
                break;
            case 'show-products':
                $this->showProducts();
                break;
            case 'featured-products':
                $this->showFeaturedProducts();
                break;
            case 'deals':
                $this->showDeals();
                break;
            case 'clearance':
                $this->showClearance();
                break;
            case 'product-profile':
                $this->productProfile();
                break;
            case 'edit-profile':
                $this->updateProfile();
                break;
            case 'delete-product':
                $this->removeProduct();
                break;
            case 'show-orders':
                $this->showOrders();
                break;
            case 'urgent-orders':
                $this->showUrgentOrders();
                break;
            case 'order-receipt':
                $this->displayUrgentOrderReceipt();
                break;
            case 'new-category':
                $this->newCategory();
                break;
            case 'add-category':
                $this->addCategory();
                break;
            case 'show-categories':
                $this->showCategories();
                break;
            case 'category-profile':
                $this->categoryProfile();
                break;
            case 'add-sub-category':
                $this->addSubCategory();
                break;
            case 'category-profile-details':
                $this->subCategoryDetails();
                break;
            case 'add-child-category':
                $this->addChildCategory();
                break;
            case 'display-blogs':
                $this->showAllBlogs();
                break;
            case 'new-blog':
                $this->newBlog();
                break;
            case 'add-blog':
                $this->addBlog();
                break;
            case 'blog-profile':
                $this->showBlogProfile();
                break;
            case 'update-blog':
                $this->updateBlog();
                break;
            case 'delete-blog':
                $this->deleteBlog();
                break;
            case 'new-merchant':
                $this->newMerchant();
                break;
            default:
                die('Admin error 404');
                break;
        }
    }
}