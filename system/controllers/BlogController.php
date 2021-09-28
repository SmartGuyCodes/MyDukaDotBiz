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


class BlogController extends UserService implements Controller{
    function __construct(){
        parent::__construct();
    }

    public function showMainPage(){
        $blogsrv = new AdminService();
        $productsrv = new ProductService();
        $cart = $_SESSION['cartProducts'];
        $total = 0;
        foreach($cart as $key => $cartItem){
            $price = $cartItem['price'];
            $qty = $cartItem['qty'];
            $subTotal = $price * $qty;
            $total = $subTotal + $total;
        }

        $this->assign('total', $total);
        $this->assign('mycart', $cart);
        $this->assign('uId', $_SESSION[MD_OWNER]);

//        echo'<pre>'; print_r($blogsrv->getBlogs()); die;
        $this->assign('blogs', $blogsrv->getBlogs());
        $this->assign('items', $productsrv->getCategoryItems('blogs'));
        $this->assign('active', 'blog');
        $this->assign('title', 'Blog');
        $this->display('blogs/main.tpl');
    }
    
    private function blogProfile(){
        $blogsrv = new AdminService();
        $productsrv = new ProductService();
        $cart = $_SESSION['cartProducts'];
        $total = 0;
        foreach($cart as $key => $cartItem){
            $price = $cartItem['price'];
            $qty = $cartItem['qty'];
            $subTotal = $price * $qty;
            $total = $subTotal + $total;
        }

//        echo'<pre>'; print_r($blogsrv->getBlogById(trim(filter_input(INPUT_GET, 'info')))); die;
        $this->assign('total', $total);
        $this->assign('mycart', $cart);
        $this->assign('uId', $_SESSION[MD_OWNER]);

        $this->assign('blog', $blogsrv->getBlogById(trim(filter_input(INPUT_GET, 'info'))));
        $this->assign('items', $productsrv->getCategoryItems('blogs'));
        $this->assign('active', 'blog');
        $this->assign('title', 'Blog');
//        $this->assign('sub', $sub);
        $this->display('blogs/profile.tpl');
    }

    function run(){
        // TODO: Implement run() method.
        $query = isset($_REQUEST['query']) ? trim(filter_input(INPUT_GET, 'query')) : NULL;
        switch($query){
            case NULL:
            case 'main':
                $this->showMainPage();
                break;
            case 'profile':
                $this->blogProfile();
                break;
            default:
                die('Blog query error 404');
                break;
        }
    }
}