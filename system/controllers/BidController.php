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

Class BidController extends BidService implements Controller{
    function __construct (){
        parent::__construct();
    }

    public function showAllAuctions(){
        $cart = $_SESSION['cartProducts'];
        $total = 0;
        foreach($cart as $cartItem){
            $price = $cartItem['price'];
            $qty = $cartItem['qty'];
            $subTotal = $price * $qty;
            $total = $subTotal + $total;
        }
        $products = $this->getAuctions();

        $this->assign('total', $total);
        $this->assign('mycart', $cart);
        $this->assign('uId', $_SESSION[MD_OWNER]);
        $this->assign('page', 'Bids');
        $this->assign('title', 'My Duka Dot Biz Auction');
        $this->assign('products', $products);
        $this->display('bids/main.tpl');
    }

    public function showAuctionBids(){
        $bidPrices = [];
        $q = trim(filter_input(INPUT_GET, 'info'));
        $bids = $this->getBidsByProductID($q);
        foreach($bids as $key => $val) {
            $p = $val['bidderPrice'];
            $bidPrices[]=$p;
        }
        $this->assign('highestBid', max($bidPrices));
        $this->assign('bids', $bids);
        $this->display('bids/bidsTbl.tpl');
    }

    public function bidProfile(){
        echo'<pre>'; print_r($_REQUEST); die;
    }

    public function getWinningBid(){
        #today's date
        $today = new DateTime();
        echo'<pre>'; print_r($today); die;
        #get product's bidEndTime

        #compare the dates

        #if the bidEndTime < today,

        #get the highest bid

        #send winning bid alert to the auction admin

        #then send the winner a congrats mail

        #finally, change the bid status to zero
    }

    function run(){
        $q = trim(filter_input(INPUT_GET, 'query'));
        switch(isset($q) ? $q : NULL){
            case 'all':
                $this->showAllAuctions();
                break;
            case 'auction-bids':
                $this->showAuctionBids();
                break;
            case 'profile':
                $this->bidProfile();
                break;
            case 'winner':
                $this->getWinningBid();
                break;
            default:
                die("Bidding query Error 404: Page Not Found");
                break;
        }
    }
}