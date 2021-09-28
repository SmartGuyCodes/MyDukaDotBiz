<?php
/*~
.----------------------------------------------------------------------------.
|  Mission: Code Business Ideas Into Realities                               |
|   Version: 0.1                                                             |
|----------------------------------------------------------------------------|
|     Admin: Charles Evans Ogego Otieno (project admininistrator)            |
|   Authors: C.E.O Otieno (trulance247)                                      |
|          : trulance247@gmail.com                                           |                     |
|          :                                                                 |
| Copyright (c) 2013-2016, C.E.O Otieno. All Rights Reserved.                |
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
 Class BidService extends ProductService{
    function __construct(){
        parent::__construct();

        #Define other default functionality for this class here
    }

     /**
      * @param $productId
      * @param $name
      * @param $email
      * @param $phone
      * @param $bidPrice
      * @return PDOStatement
      */
     public function addBid($productId, $name, $email, $phone, $bidPrice){
         try{
             $sql = "INSERT INTO bid (pID, bidderName, bidderEmail, bidderPhone, bidderPrice)
                    VALUES (:pid, :bName, :bEmail, :bPhone, :bPrice)";
             $stmt = $this->conn->prepare($sql);
             $stmt->bindParam(":pid", $productId);
             $stmt->bindParam(":bName", $name);
             $stmt->bindParam(":bEmail", $email);
             $stmt->bindParam(":bPhone", $phone);
             $stmt->bindParam(":bPrice", $bidPrice);
             $stmt->execute();

             return $stmt;
         }
         catch(PDOException $e){
             die("Bid submission error: " .$e->getMessage());
         }
     }

     /**
      * GET ALL AUCTIONS
      *
      * @return array|string
      */
     public function getAuctions(){
         $result = [];
         try{
             $stmt = $this->runQuery("SELECT * FROM products WHERE bid=1");
             $stmt->execute();
             $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
         }
         catch(PDOException $e){
             $result = $e->getMessage();
         }

         return $result;
     }

     /**
      * GET PRODUCT BY ID
      *
      * @param $pId
      * @return array|string
      */
     public function getBidsByProductID($pId){
         $result = [];
         try{
             $stmt = $this->runQuery("SELECT * FROM bid WHERE pID=:pID");
             $stmt->execute([':pID' => $pId]);
             $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
         }
         catch(PDOException $e){
             $result = $e->getMessage();
         }

         return $result;
     }

     /**
      * @param $bidId
      * @return array|string
      */
     public function getBidDetails($bidId){
         $result = [];
         try{
             $stmt = $this->runQuery("SELECT * FROM bid WHERE id=:bID");
             $stmt->execute([':bID' => $bidId]);
             $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
         }
         catch(PDOException $e){
             $result = $e->getMessage();
         }

         return $result;
     }
 }