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

Class OrderService extends ProductService{
    function __construct () {
        parent::__construct();
    }

    public function orderTrackGenerator(){
        //some geeky simple code here brother ;-)
        $start = 'ORDER-';
        $characters = array_merge(range('A','Z'), range('0','9'));
        for ($i = 0; $i < 6; $i++) {
            $rand = mt_rand(0, count($characters)-1);
            $start .= $characters[$rand];
        }
        return $start;
    }

    protected function insertOrder($uId, $fname, $lname, $email, $phone, $orderDecr, $address, $city, $zip, $amount, $currency, $track, $delivery) {
        try{
            $sql = "INSERT INTO orders  (OrderUserID, fname, lname, OrderEmail, OrderPhone, OrderDescription, OrderShipAddress, OrderCity, OrderZip, OrderAmount, OrderCurrency, OrderTrackingNumber, OrderShipping)
                    VALUES(:uid, :fname, :lname, :mail, :phone, :orderDescr, :addr, :city, :zip, :amount, :curr, :track, :deli)";
            $stmt = $this->runQuery($sql);
            $stmt->bindParam(':uid', $uId);
            $stmt->bindParam(':fname', $fname);
            $stmt->bindParam(':lname', $lname);
            $stmt->bindParam(':mail', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':orderDescr', $orderDecr);
            $stmt->bindParam(':addr', $address);
            $stmt->bindParam(':city', $city);
            $stmt->bindParam(':zip', $zip);
            $stmt->bindParam(':amount', $amount);
            $stmt->bindParam(':curr', $currency);
            $stmt->bindParam(':track', $track);
            $stmt->bindParam(':deli', $delivery);
            $stmt->execute();

            $result = $this->lastID();
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }
        return $result;
    }

    protected function updateOrder($oId, $OrderEmail, $OrderZip, $OrderCity, $OrderPhone, $UserAltPhone = ''){
        try{
            $sql = "UPDATE orders SET OrderEmail=:omail, OrderZip=:oadres, OrderCity=:locate, OrderPhone=:phone1, UserAltPhone=:phone2
                    WHERE OrderID=:oId";
            $stmt = $this->runQuery($sql);
            $result = $stmt->execute([
                ":oId" => $oId,
                ":omail" => $OrderEmail,
                ":oadres" => $OrderZip,
                ":locate" => $OrderCity,
                ":phone1" => $OrderPhone,
                ":phone2" => $UserAltPhone
            ]);
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }
        return $result;
    }

    protected function updateOrderTracker($oId, $track){
        try{
            $sql = "UPDATE orders SET OrderTrackingNumber=:tracker
                    WHERE OrderID=:oId";
            $stmt = $this->runQuery($sql);
            $result = $stmt->execute([
                ":oId" => $oId,
                ":tracker" => $track,
            ]);
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }
        return $result;
    }

    protected function updateMpesaOrder($otrack, $pId){
        try{
            $sql = "UPDATE orders SET PaymentID=:pId
                    WHERE OrderTrackingNumber=:tracker";
            $stmt = $this->runQuery($sql);
            $result = $stmt->execute([
                ":pId" => $pId,
                ":tracker" => $otrack,
            ]);
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }
        return $result;
    }

    protected function updateOrderByTracker($tracker, $paymentRef){
        try{
            $sql = "UPDATE orders SET PayRefNo=:ref
                    WHERE OrderTrackingNumber=:track";
            $stmt = $this->runQuery($sql);
            $result = $stmt->execute([
                ":ref" => $paymentRef,
                ":track" => $tracker,
            ]);
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }
        return $result;
    }

    public function getOrderById($oID){
        try{
            $qry = "SELECT * FROM orders WHERE OrderID = :oId";
            $stmt = $this->runQuery($qry);
            $stmt->execute(array(":oId"=>$oID));
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }

    public function getOrderByTrack($tracker){
        try{
            $qry = "SELECT * FROM orders WHERE OrderTrackingNumber = :track";
            $stmt = $this->runQuery($qry);
            $stmt->execute(array(":track"=>$tracker));
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }

    public function getOrderByOID($id){
        try{
            $qry = "SELECT * FROM orders WHERE OrderID = :OID";
            $stmt = $this->runQuery($qry);
            $stmt->execute(array(":OID"=>$id));
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }

    public function getOrdersByUserId($uID){
        try{
            $qry = "SELECT * FROM orders WHERE OrderUserID = :uId";
            $stmt = $this->runQuery($qry);
            $stmt->execute(array(":uId"=>$uID));
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }

    protected function insertShopperCart($title, $img, $qty, $price, $shopper){ #to add sku later
        try{
            $qry = "INSERT INTO cartdetails(itemTitle, itemImg, itemQty, itemPrice, itemShopper, createdAt)
                    VALUES (:title, :img, :qty, :price, :shopper, now())";
            $stmt = $this->runQuery($qry);
//            $stmt->bindParam(':sku', $sku);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':img', $img);
            $stmt->bindParam(':qty', $qty);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':shopper', $shopper);
            $stmt->execute();

            $result = $this->lastID();
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }

    protected function getShoppersCartById($id){
        try{
            $qry = "SELECT * FROM cartdetails WHERE id = :cId";
            $stmt = $this->runQuery($qry);
            $stmt->execute(array(":cId"=>$id));
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }
}