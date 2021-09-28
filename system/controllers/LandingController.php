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

Class LandingController extends ProductService implements Controller{
    function __construct () {
        parent::__construct();
    }

    public function showLanding(){
        $cart = $_SESSION['cartProducts'];
        $total = 0;
        foreach($cart as $cartItem){
            $price = $cartItem['price'];
            $qty = $cartItem['qty'];
            $subTotal = $price * $qty;
            $total = $subTotal + $total;
        }

//        echo'<pre>'; print_r($this->getClearance()); die;
        $this->assign('page', 'landing');
        $this->assign('deals', ($this->getProductsByDeal(1)));
        $this->assign('clearance', ($this->getClearance()));
        $this->assign('featured', ($this->getFeatured()));
        $this->assign('products', $this->getProducts());

        $this->assign('home', $this->getLandingCategoryItems('home-and-living'));
        $this->assign('body_care', $this->getLandingCategoryItems('body-care'));
        $this->assign('fashion', $this->getLandingCategoryItems('fashion'));
        $this->assign('kids', $this->getLandingCategoryItems('kids'));
        $this->assign('computers_gaming', $this->getLandingCategoryItems('computers-and-gaming'));
        $this->assign('tvs_audio', $this->getLandingCategoryItems('tvs-and-audio'));
        $this->assign('mobile_tablets', $this->getLandingCategoryItems('mobile-and-tablets'));
        $this->assign('apple', $this->getLandingCategoryItems('apple'));

        $this->assign('cats', $this->getCategories());
        $this->assign('active', 'home');
        $this->assign('title', 'Best online Shopping');
        $this->assign('total', $total);
        $this->assign('mycart', $cart);
        $this->assign('uId', $_SESSION[MD_OWNER]);
        $this->assign('products', $this->getProducts());
        $this->display('landing/main.tpl');
    }

    function run(){
        $q = isset($_REQUEST['query']) ? trim(filter_input(INPUT_GET, 'query')) : NULL;
        switch($q){
            case '':
            case 'main':
                $this->showLanding();
                break;
            case 'dashboard':
                $this->showLanding();
                break;
            case 'checkout':
                $orderctrl = new OrderController();
                $orderctrl->checkout();
                break;
            default:
                die("Landing query Error 404: Page Not Found");
                break;
        }
    }
}