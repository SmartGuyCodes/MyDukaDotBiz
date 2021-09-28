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
| ANY WARRANTY; without even the implied warranty of MERCAHNTABILITY or      |
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

class ProductController extends ProductService implements Controller{
    function __construct () {
        parent::__construct();
    }

    protected function newProduct(){
        #categories
        $this->assign('cats', $this->getCategories());

        #auto generate SKU for the product to be created here
        $this->assign('uId', trim(filter_input(INPUT_GET, 'info')));
        $this->assign('sku', Utils::skuGenerator());
        $this->display('products/new.tpl');
    }

    protected function addProduct(){
        $result = [];

        $psku   = trim(filter_input(INPUT_POST, 'sku'));
        $pname  = trim(filter_input(INPUT_POST, 'name'));
        $pprice = trim(filter_input(INPUT_POST, 'price'));
        $poverview= trim(filter_input(INPUT_POST, 'overview'));
        $pfeatures= trim(filter_input(INPUT_POST, 'features'));
        $pspecs= trim(filter_input(INPUT_POST, 'specs'));
        $pincludes= trim(filter_input(INPUT_POST, 'includes'));
        $pcat   = trim(filter_input(INPUT_POST, 'category'));
        $psubcat   = trim(filter_input(INPUT_POST, 'sub-category'));
        $pchildcat   = trim(filter_input(INPUT_POST, 'child-category'));
        $pqty   = trim(filter_input(INPUT_POST, 'qty'));

        #consider real time bidding here later on

        $path = UPLOADS;
        $validFormats = ["jpg", "JPG", "png", "PNG", "gif", "GIF", "bmp", "BMP"];

        #product image stuff!
        $name = $_FILES['photo']['name'];
        $id = 1;
        $type = $_FILES['photo']['tmp_name'];
        $filePointer = fopen($_FILES['photo']['tmp_name'], 'rb'); //rb - read, binary
        if(strlen($name)){
            $this->insertProduct($psku, $pname, $pprice, $poverview, $pfeatures, $pspecs, $pincludes, $pcat, $psubcat, $pchildcat, $type, $filePointer, $pqty);
        }

//        if(strlen($name)){
//            list($txt, $ext) = explode(".", $name);
//            if(in_array($ext, $validFormats)){
//                $actualImageName = time() .substr($txt, 5).".".$ext;
//                $tmp = $_FILES['photo']['tmp_name'];
//                $movedImg = move_uploaded_file($tmp, $path.$actualImageName);
//                $insertedPrdct = $this->insertProduct($psku, $pname, $pprice, $poverview, $pfeatures, $pspecs, $pincludes, $pcat, $psubcat, $pchildcat, $actualImageName, $pqty);
//                if($movedImg && $insertedPrdct){
//                    $result['msg'] = 'Product successfully submitted';
//                }
//                else{
//                    $result['msg'] = 'Image uploading failed!';
//                }
//            }
//            else{
//                $result['msg'] = 'Invalid image file format!';
//            }
//        }
//        else{
//            $result['msg'] = "Please select the product image";
//        }

        header('Content-type: application/json');
        echo json_encode($result);
    }

    public function viewCategory(){
        $cart = $_SESSION['cartProducts'];
        $total = 0;
        foreach($cart as $cartItem){
            $price = $cartItem['price'];
            $qty = $cartItem['qty'];
            $subTotal = $price * $qty;
            $total = $subTotal + $total;
        }
        $category = trim(filter_input(INPUT_GET, 'info'));
        $products = $this->getCategoryItems($category);
        #now get the id of the category
        $cat = $this->getCatBySlug($category);
        $children = $this->getChildCategories($cat);

        $this->assign('page', filter_input(INPUT_GET, 'info'));
        $this->assign('type', filter_input(INPUT_GET, 'query'));
        $this->assign('children', $children);
        $this->assign('cats', $this->getCategories());
        $this->assign('total', $total);
        $this->assign('mycart', $cart);
        $this->assign('uId', $_SESSION[MD_OWNER]);
        $this->assign('page', $category);
        $this->assign('title', str_replace("-", " ", $category));
        $this->assign('products', $products);
        $this->display('products/category.tpl');
    }

    public function  viewProfile(){
        $cart = $_SESSION['cartProducts'];
        $user = $this->getUserByID($_SESSION[MD_OWNER]);
        $total = 0;
        foreach($cart as $key => $cartItem){
            $price = $cartItem['price'];
            $qty = $cartItem['qty'];
            $subTotal = $price * $qty;
            $total = $subTotal + $total;
        }
        
        $pId = trim(filter_input(INPUT_GET, 'info'));
        $product = $this->getProductById($pId);
        $cUrl = $product['childCategory'];
        $brand = $product['ProductBrand'];
        $relations = $this->getProductsByChild($cUrl);
        $brandFamily = $this->getProductsByBrand($brand);
        $brandTitle = str_replace("-", " ", $brand);

        $catID = $product['ProductCategoryID'];
        $category = str_replace("-", " ", $catID);
        $family = $this->getProductFamily($catID);

        $subCatID = $product['subCategory'];
        $subCat = str_replace("-", " ", $subCatID);

        $subCatChildID = $product['childCategory'];
        $child = str_replace("-", " ", $subCatChildID);

        $this->assign('auction', 'yes');
        $this->assign('section', 'scroller');
        $this->assign('brand_family', $brandFamily);
        $this->assign('brand_family_title', $brandTitle);
        $this->assign('family', $family);
        $this->assign('categoryID', $catID);
        $this->assign('child', $child);
        $this->assign('subCat', $subCat);
        $this->assign('cat', $category);
        $this->assign('page', 'profile');
        $this->assign('active', 'profile');
        $this->assign('pId', $pId);
        $this->assign('share', 'true');
        $this->assign('products', $this->getProducts());
        $this->assign('categroyID',  $catID);
        $this->assign('subCategroy',  $subCatID);
        $this->assign('childCategory',  $subCatChildID);
        $this->assign('item', $product);
        $this->assign('title', 'Product Profile');
        $this->assign('childRelations', $relations);//$this->getProductsByChild($cUrl, $pId)
        $this->assign('cats', $this->getCategories());
        $this->assign('total', $total);
        $this->assign('orderID', $pId);
        $this->assign('user', $user);
        $this->assign('mycart', $cart);
        $this->assign('product', trim(filter_input(INPUT_GET, 'info')));
        $this->assign('uId', $_SESSION[MD_OWNER]);
        $this->assign('item',  $product);
        $this->display('products/profile.tpl');
    }

    public function showSubCategory(){
        $sub = trim(filter_input(INPUT_GET, 'info'));
        $cart = $_SESSION['cartProducts'];
        $user = $this->getUserByID($_SESSION[MD_OWNER]);
        $total = 0;
        foreach($cart as $cartItem){
            $price = $cartItem['price'];
            $qty = $cartItem['qty'];
            $subTotal = $price * $qty;
            $total = $subTotal + $total;
        }
//        ProductCategoryID
        $products = $this->getProductsSubCategory($sub);
        foreach($products as $key => $value){
            $category = $value['ProductCategoryID'];
        }

        $this->assign('type', $_REQUEST['query']);
        $this->assign('products', $this->getProductsSubCategory($sub));
        $this->assign('title', str_replace("-", " ", $_REQUEST['info']));
        $this->assign('cat', $category);
        $this->assign('category', str_replace("-", " ", $category));
        $this->assign('cats', $this->getCategories());
        $this->assign('total', $total);
        $this->assign('orderID', trim(filter_input(INPUT_GET, 'info')));
        $this->assign('user', $user);
        $this->assign('mycart', $cart);
        $this->assign('uId', $_SESSION[MD_OWNER]);
        $this->display('products/subCategory.tpl');
    }

    public function showChildProducts(){
        $child = trim(filter_input(INPUT_GET, 'info'));
        $cart = $_SESSION['cartProducts'];
        $user = $this->getUserByID($_SESSION[MD_OWNER]);
        $total = 0;
        foreach($cart as $cartItem){
            $price = $cartItem['price'];
            $qty = $cartItem['qty'];
            $subTotal = $price * $qty;
            $total = $subTotal + $total;
        }
//        ProductCategoryID
        $products = $this->getChildProduct($child);
        $category = '';
        $subCategory = '';
        $childCategory = '';
        foreach($products as $key => $value){
            $category = $value['ProductCategoryID'];
            $subCategory = $value['subCategory'];
            $childCategory = $value['childCategory'];
        }

//        echo'<pre>'; print_r($products); die;

        $this->assign('category', str_replace("-", " ", $category));
        $this->assign('subCategroy', str_replace("-", " ", $subCategory));
        $this->assign('childCategory', str_replace("-", " ", $childCategory));
        $this->assign('cat', $category);
        $this->assign('subCat', $subCategory);
        $this->assign('childCat', $childCategory);


        $this->assign('type', $_REQUEST['query']);
        $this->assign('products', $products);
        $this->assign('title', str_replace("-", " ", $_REQUEST['info']));
        $this->assign('cats', $this->getCategories());
        $this->assign('total', $total);
        $this->assign('orderID', trim(filter_input(INPUT_GET, 'info')));
        $this->assign('user', $user);
        $this->assign('mycart', $cart);
        $this->assign('uId', $_SESSION[MD_OWNER]);
        $this->display('products/childCategory.tpl');
    }

    public function showWeeklyFeatures(){
        $child = trim(filter_input(INPUT_GET, 'info'));
        $cart = $_SESSION['cartProducts'];
        $user = $this->getUserByID($_SESSION[MD_OWNER]);
        $total = 0;
        foreach($cart as $cartItem){
            $price = $cartItem['price'];
            $qty = $cartItem['qty'];
            $subTotal = $price * $qty;
            $total = $subTotal + $total;
        }

        $this->assign('type', $_REQUEST['query']);
        $this->assign('items', $this->getChildProduct($child));
        $this->assign('items', $this->getAllFeatured());
        $this->assign('title', 'Weekly Features');
        $this->assign('cats', $this->getCategories());
        $this->assign('total', $total);
        $this->assign('orderID', trim(filter_input(INPUT_GET, 'info')));
        $this->assign('user', $user);
        $this->assign('mycart', $cart);
        $this->assign('uId', $_SESSION[MD_OWNER]);
        $this->display('products/weeklyFeatured.tpl');
    }

    public function showClearance(){
        $child = trim(filter_input(INPUT_GET, 'info'));
        $cart = $_SESSION['cartProducts'];
        $user = $this->getUserByID($_SESSION[MD_OWNER]);
        $total = 0;
        foreach($cart as $cartItem){
            $price = $cartItem['price'];
            $qty = $cartItem['qty'];
            $subTotal = $price * $qty;
            $total = $subTotal + $total;
        }

        $this->assign('type', $_REQUEST['query']);
        $this->assign('items', $this->getChildProduct($child));
        $this->assign('items', $this->getAllClearance());
        $this->assign('title', 'My Duka Clearance');
        $this->assign('cats', $this->getCategories());
        $this->assign('total', $total);
        $this->assign('orderID', trim(filter_input(INPUT_GET, 'info')));
        $this->assign('user', $user);
        $this->assign('mycart', $cart);
        $this->assign('uId', $_SESSION[MD_OWNER]);
        $this->display('products/weeklyFeatured.tpl');
    }

    public function  reviewProduct(){

    }

    public function  starRateProduct(){

    }

    public function showAllBrands(){
        $child = trim(filter_input(INPUT_GET, 'info'));
        $cart = $_SESSION['cartProducts'];
        $user = $this->getUserByID($_SESSION[MD_OWNER]);
        $total = 0;
        foreach($cart as $cartItem){
            $price = $cartItem['price'];
            $qty = $cartItem['qty'];
            $subTotal = $price * $qty;
            $total = $subTotal + $total;
        }

//        echo'<pre>'; print_r($category); die;
        $this->assign('title', 'Brands');
        $this->assign('total', $total);
        $this->assign('orderID', $child);
        $this->assign('user', $user);
        $this->assign('mycart', $cart);
        $this->assign('uId', $_SESSION[MD_OWNER]);
        $this->display('products/brands.tpl');
    }

    function run(){
        $qry = trim(filter_input(INPUT_GET, 'query'));
        switch(isset($qry) ? $qry : null){
            case 'new':
                $this->newProduct();
                break;
            case 'add':
                $this->addProduct();
                break;
            case 'profile':
                $this->viewProfile();
                break;
            case 'category':
                $this->viewCategory();
                break;
            case 'sub-category':
                $this->showSubCategory();
                break;
            case 'mini-category':
                $this->showChildProducts();
                break;
            case 'featured-products':
                $this->showWeeklyFeatures();
                break;
            case 'clearance-products':
                $this->showClearance();
                break;
            case 'review':
                $this->reviewProduct();
                break;
            case 'rate':
                $this->starRateProduct();
                break;
            case 'brands':
                $this->showAllBrands();
                break;
            default:
                die('Product query error 404: Page not found');
                break;
        }
    }
}