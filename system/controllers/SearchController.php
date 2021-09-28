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

Class SearchController extends SearchService implements Controller{
    function __construct(){
        parent::__construct();
    }

    /**
     * General product search
     *
     * @return array|null|string
     */
    public function searchProduct(){
        $results = null;

        $url = $_SERVER["REQUEST_URI"];
        $url = explode("/", $url);
        $url = explode("?", $url[2]);
        $url = explode("=", $url[1]);

        $key = $url[1];

        $results = $this->searchItem($key);

        header('Content-type: application/json');
        echo json_encode($results);
    }

    private function displaySearch(){
        $searchItem = trim(filter_input(INPUT_POST, 'search-item'));
        $cart = $_SESSION['cartProducts'];
        $total = 0;
        foreach($cart as $key => $cartItem){
            $price = $cartItem['price'];
            $qty = $cartItem['qty'];
            $subTotal = $price * $qty;
            $total = $subTotal + $total;
        }
        $results =$this->searchItem($searchItem);
//        echo'<pre>'; print_r($results); die;

        $this->assign('total', $total);
        $this->assign('mycart', $cart);
        $this->assign('uId', $_SESSION[MD_OWNER]);
        $this->assign('search_item', $searchItem);
        $this->assign('products', $results);
        $this->assign('title', 'Search Results');
        $this->display('search/main.tpl');
    }

    function run(){
        $qry = isset($_REQUEST['query']) ? trim(filter_input(INPUT_GET, 'query')) : NULL;
        switch($qry){
            case 'item':
                $this->searchProduct();
                break;
            case 'results':
                $this->displaySearch();
                break;
            default:
                die('Search query error 404');
                break;
        }
    }
}