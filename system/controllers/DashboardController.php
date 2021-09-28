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

class DashboardController extends AdminService implements Controller{
    function __construct(){
        parent::__construct();
    }

    private function showDashboard(){
        $productsrv = new ProductService();

        $products = $productsrv->getProducts();
        $users = $this->getUsers();

        $this->assign('title', 'Dashboard');
        $this->assign('products', count($products));
        $this->assign('users', count($users));
        $this->display('admin/dashboard.tpl');
    }

    private function showStaff(){
        $this->assign('admins', $this->getAdministrators());
        $this->assign('title', 'Staff/Administrators');
        $this->display('admin/staff.tpl');
    }

    private function newStaff(){
        $this->assign('title', 'New Staff');
        $this->display('admin/newStaff.tpl');
    }

    private function addStaff(){
        $result = [];

        $names = trim(filter_input(INPUT_POST, 'fullnames'));
        $mail = trim(filter_input(INPUT_POST, 'mail'));
        $pwd = trim(filter_input(INPUT_POST, 'pwd'));
        $url = trim(filter_input(INPUT_POST, 'url'));
        $phone = trim(filter_input(INPUT_POST, 'phone'));
        $pwdHash = password_hash($pwd, PASSWORD_DEFAULT);

        #send mail
        $MailService = new MailService;

        if(!$this->adminExists($mail)){
            if($this->insertStaff($names, $pwdHash, $mail, $url, $phone)){
                #mail details
                $this->assign('dukad', MD_D);
                $this->assign('user', $names);
                $this->assign('email', $mail);
                $this->assign('pwd', $pwd);
                $this->assign('emblem', 'www.myduka.biz/cdn/logo.png');
                $this->assign('copy', Utils::myDukaCopyright());
                $this->assign('address', DUKA_ADDRESS);
                $subject = 'My Duka Dot Biz Administrator Registration';
                $body = $this->fetch('emails/newAdmin.tpl');

                $altBody = "Order Confirmation";
                if($MailService->mydukaMailer($subject, $mail, $body, $altBody)){ //to create some loader to handle the waiting shit!
                    #then set UI message
                    $result['msg'] = 'success';
                }
                else{
                    #then set UI message
                    $result['msg'] = 'Error registering admin. Please contact the admin ASAP!';
                }
            }
            else{
                $result['msg'] = 'Error';
            }
        }
        else{
            $result['msg'] = 'Admin already exists';
        }
        header('Content-type: application/json');
        echo json_encode($result);
    }

    private function showUsers(){
        $this->assign('title', 'Users');
        $this->assign('users', $this->getUsers());
        $this->display('admin/users.tpl');
    }

    private function showProducts(){
        $productsrv = new ProductService();
        $this->assign('products', $productsrv->getProducts());
        $this->assign('title', 'Inventory');
        $this->display('admin/products.tpl');
    }

    private function newProduct(){
        $this->assign('children', $this->getChildCategories());
        $this->assign('subs', $this->getAllSubCategories());
        $this->assign('cats', $this->getCategories());
        $this->assign('sku', Utils::skuGenerator());
        $this->assign('title', 'New Product');
        $this->display('admin/newProduct.tpl');
    }

    private function newCategory(){
        $this->assign('categories', $this->getCategories());
        $this->assign('title', 'New Category');
        $this->display('admin/newCategory.tpl');
    }

    private function addCategory(){
        $result = [];
        $categorysrv = new CategoryService();

        $title = trim(filter_input(INPUT_POST, 'title'));
        $description = trim(filter_input(INPUT_POST, 'description'));
        $parent = trim(filter_input(INPUT_POST, 'parent'));
        $slug = $this->generateSlug($title);

        if($categorysrv->insertCategory($title, $description, $parent, $slug)){
            $result['msg'] = 'success';
        }
        else{
            $result['msg'] = 'error';
        }
        header('Content-type: application/json');
        echo json_encode($result);
    }

    private function showCategories(){
        $this->assign('categories', $this->getCategories());
        $this->assign('title', 'Categories');
        $this->display('admin/categories.tpl');
    }

    private function showCategoryProfile(){
        $parent = $this->getCategoriesBySlug($_REQUEST['info']);
        $subs = $this->getSubCategories($parent['id']);

        $this->assign('subs', $subs);
        $this->assign('category', $parent);
        $this->assign('title', 'Sub-Category');
        $this->display('admin/categoryProfile.tpl');
    }

    private function subCategoryDetails(){
        $category = $this->getSubCategoryProfile($_REQUEST['info']);
        $this->assign('children', $this->getChildCategoryByPid($category['id']));
        $this->assign('title', 'Sub-Category');
        $this->assign('category', $category);
        $this->display('admin/subCategoryProfile.tpl');
    }

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

    private function childProducts(){
        $productsrv = new ProductService();
        $this->assign('products', $productsrv->getProductsByCatUrl($_REQUEST['info']));
        $this->assign('title', 'Category Products');
        $this->display('admin/categoryProducts.tpl');
    }

    private function newBlog(){
        echo'<pre>'; print_r($_REQUEST); die;
    }

    private function showBlogs(){
        echo'<pre>'; print_r($_REQUEST); die;
    }

    private function blogProfile(){
        echo'<pre>'; print_r($_REQUEST); die;
    }

    private function showOrders(){

    }

    private function show404(){
        $this->display('admin/404.tpl');
    }

    function run(){
        $qry = isset($_REQUEST['query']) ? trim(filter_input(INPUT_GET, 'query')) : NULL;
        switch($qry){
            case 'dashboard':
                $this->showDashboard();
                break;
            case 'staff':
                $this->showStaff();
                break;
            case 'new-staff':
                $this->newStaff();
                break;
            case 'add-staff':
                $this->addStaff();
                break;
            case 'products':
                $this->showProducts();
                break;
            case 'new-product':
                $this->newProduct();
                break;
            case 'users':
                $this->showUsers();
                break;
            case 'orders':
                $this->showOrders();
                break;
            case 'new-category':
                $this->newCategory();
                break;
            case 'add-category':
                $this->addCategory();
                break;
            case 'categories':
                $this->showCategories();
                break;
            case 'category-profile':
                $this->showCategoryProfile();
                break;
            case 'add-sub-category':
                $this->addSubCategory();
                break;
            case 'sub-category-profile':
                $this->subCategoryDetails();
                break;
            case 'add-child-category':
                $this->addChildCategory();
                break;
            case 'child-products':
                $this->childProducts();
                break;
            case 'new-blog':
                $this->newBlog();
                break;
            case 'blogs':
                $this->showBlogs();
                break;
            case 'blog-profile':
                $this->blogProfile();
                break;
            default:
                $this->show404();
                break;
        }
    }
}