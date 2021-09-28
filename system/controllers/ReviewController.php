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

class ReviewController extends ProductService implements Controller{
    function __construct(){
        parent::__construct();
    }

    public function addReview(){
        #get userID(this can be null for now as we still acquire users), productID, ratingNumber
        $pId = trim(filter_input(INPUT_GET, 'info'));
        $rating = trim(filter_input(INPUT_POST, 'rating'));

        #TODO: calculate points
        #$av = ($rating/5) * 10;

        #store all the new data in the productrating table store the rating number average in the product table where product id = pId
        if($this->insertReview($pId, '', $rating) && $this->updateProductById($pId, $rating)){
            $result['msg'] = 'Thanks for reviewing this item.';
        }

        #return success msg to the user once done
        header('Content-type: application/json');
        echo json_encode($result);
    }

    public function showAverageReview(){
        echo'<pre>'; print_r($_REQUEST); die;
    }

    function run(){
        $qry = trim(filter_input(INPUT_GET, 'query'));
        switch(isset($qry) ? $qry : null){
            case 'add':
                $this->addReview();
                break;
            case 'average':
                $this->showAverageReview();
                break;
            default:
                die('Review Query Error 404');
            break;
        }
    }
}