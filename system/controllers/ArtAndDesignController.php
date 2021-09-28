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


class ArtAndDesignController extends CategoryService implements Controller{
    function __construct(){
        parent::__construct();
    }

    private function showMain(){
        $productsrv = new ProductService();
        $cart = $_SESSION['cartProducts'];
        $total = 0;
        foreach($cart as $key => $cartItem){
            $price = $cartItem['price'];
            $qty = $cartItem['qty'];
            $subTotal = $price * $qty;
            $total = $subTotal + $total;
        }

        $this->assign('title', 'Art');
        $this->assign('total', $total);
        $this->assign('mycart', $cart);
        $this->assign('uId', $_SESSION[MD_OWNER]);

        $this->assign('items', $productsrv->getCategoryItems('art'));
        $this->assign('active', 'art');
        $this->assign('title', 'Art');
        $this->display('category/main.tpl');
    }
    
    #show drawings and paintings subcategories
    public function showSubCategory($sub){        
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

        $this->assign('items', $productsrv->getCategoryItems('art'));
        $this->assign('active', 'art');
        $this->assign('title', 'Art');
        $this->assign('sub', $sub);
        $this->display('category/subCategory.tpl');
    }
            
    function run(){
        $qry = isset($_REQUEST['query']) ? trim(filter_input(INPUT_GET, 'query')) : NULL;
        switch($qry){
            case  NULL:
            case 'main':
                $this->showMain();
                break;
            case 'drawings':
                $this->showSubCategory($_REQUEST['info']);
                break;
            case 'paintings':
                $this->showSubCategory($_REQUEST['info']);
                break;
            default:
                die('Art and design 404 Error');
                break;
        }
    }
}