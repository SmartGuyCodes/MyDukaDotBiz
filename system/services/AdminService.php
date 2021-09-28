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

//require_once __ROOT__ . "/system/apis/dompdf-master/autoload.inc.php";

Class AdminService extends BaseService{
    public $conn;

    function __construct () {
        parent::__construct();

        $db = $this->dbConnection();
        $this->conn = $db;
    }

    /**
     * @param $sku
     * @param $pnumber
     * @param $title
     * @param $price
     * @param $overview
     * @param $features
     * @param $specs
     * @param $includes
     * @param $category
     * @param $subcategory
     * @param $childcategory
     * @param $imgData
     * @param $stock
     * @return PDOStatement
     */
    protected function insertProduct($sku, $pnumber, $title, $brand, $price, $overview, $features, $specs, $includes, $category, $subcategory, $childcategory, $imgData, $stock, $bid){
        try{
            $stmt = $this->conn->prepare("INSERT INTO products (ProductSKU, ProductNumber, ProductName, ProductBrand, ProductPrice, ProductOverview, ProductFeatures, ProductSpecs, ProductIncludes, ProductCategoryID, subCategory, childCategory, ProductImage, ProductUpdateDate, ProductStock, bid)
                          VALUES(:sku, :pno, :pname, :pbrand, :price, :overview, :features, :specs, :includes, :pcat, :pSubCat, :pChildCat, :imgdata, now(), :stock, :bid)");
            $stmt->bindParam(":sku",$sku);
            $stmt->bindParam(":pno",$pnumber);
            $stmt->bindParam(":pname",$title);
            $stmt->bindParam(":pbrand",$brand);
            $stmt->bindParam(":price",$price);
            $stmt->bindParam(":overview",$overview);
            $stmt->bindParam(":features",$features);
            $stmt->bindParam(":specs",$specs);
            $stmt->bindParam(":includes",$includes);
            $stmt->bindParam(":pcat",$category);
            $stmt->bindParam(":pSubCat",$subcategory);
            $stmt->bindParam(":pChildCat", $childcategory);
            $stmt->bindParam(":imgdata",$imgData);
            $stmt->bindParam(":stock",$stock);
            $stmt->bindParam(":bid",$bid);
            $stmt->execute();

            return $stmt;
        }
        catch(PDOException $e){
            die('Product insertion error: ' .$e->getMessage());
        }
    }

    /**
     * Insert Bid Product
     */
    protected function insertBidProduct($sku, $pnumber, $title, $brand, $price, $overview, $features, $specs, $includes, $category, $subcategory, $childcategory, $imgData, $stock, $bid, $bidStartPrice, $bidStartTime, $bidEndTime){
        try{
            $sql = "INSERT INTO products
                        (ProductSKU, ProductNumber, ProductName, ProductBrand, ProductPrice, ProductOverview, ProductFeatures, ProductSpecs,
                        ProductIncludes, ProductCategoryID, subCategory, childCategory, ProductImage, ProductUpdateDate, ProductStock,
                        bid, bidStartPrice, bidStartTime, bidEndTime)
                    VALUES
                          (:sku, :pno, :pname, :pbrand, :price, :overview, :features, :specs, :includes, :pcat, :pSubCat, :pChildCat, :imgdata, now(), :stock,
                          :bid, :bidStartPrice, :bidStartTime, :bidEndTime)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":sku",$sku);
            $stmt->bindParam(":pno",$pnumber);
            $stmt->bindParam(":pname",$title);
            $stmt->bindParam(":pbrand",$brand);
            $stmt->bindParam(":price",$price);
            $stmt->bindParam(":overview",$overview);
            $stmt->bindParam(":features",$features);
            $stmt->bindParam(":specs",$specs);
            $stmt->bindParam(":includes",$includes);
            $stmt->bindParam(":pcat",$category);
            $stmt->bindParam(":pSubCat",$subcategory);
            $stmt->bindParam(":pChildCat", $childcategory);
            $stmt->bindParam(":imgdata",$imgData);
            $stmt->bindParam(":stock",$stock);
            $stmt->bindParam(":bid",$bid);
            $stmt->bindParam(":bidStartPrice",$bidStartPrice);
            $stmt->bindParam(":bidStartTime",$bidStartTime);
            $stmt->bindParam(":bidEndTime",$bidEndTime);
            $stmt->execute();

            return $stmt;
        }
        catch(PDOException $e){
            die('Product insertion error: ' .$e->getMessage());
        }
    }

    /**
     * Editing product profile without image upload
     *
     * @param $pId
     * @param $sku
     * @param $owner
     * @param $pNo
     * @param $title
     * @param $price
     * @param $newPrice
     * @param $overview
     * @param $features
     * @param $specs
     * @param $includes
     * @param $category
     * @param $subcategory
     * @param $childcategory
     * @param $stock
     * @param $deal
     * @param $feat
     * @param $clearance
     * @return PDOStatement
     */
    protected function editProduct($pId, $sku, $owner, $pNo, $title, $brand,  $price, $newPrice, $overview, $features, $specs, $includes, $category, $subcategory, $childcategory, $stock, $deal, $feat, $clearance){
        try{
            $sql ="UPDATE
                     products
                   SET
                     ProductSKU = :sku, ProductOwner = :powner, ProductNumber = :pnumber, ProductName = :pname, ProductBrand = :pbrand,
                     ProductPrice = :pprice, ProductNewPrice = :newprice, ProductOverview = :overview, ProductFeatures = :features,
                     ProductSpecs = :specs, ProductIncludes = :includes, ProductCategoryID = :pcat,
                     subCategory = :pSubCat, childCategory = :pChildCat, ProductStock = :stock,
                     featured = :feature, deal = :deal, clearance = :clear, ProductNewUpdate = now()
                   WHERE
                     ProductID = :pId";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":sku",$sku);
            $stmt->bindParam(":powner",$owner);
            $stmt->bindParam(":pnumber",$pNo);
            $stmt->bindParam(":pname",$title);
            $stmt->bindParam(":pbrand",$brand);
            $stmt->bindParam(":pprice",$price);
            $stmt->bindParam(":newprice",$newPrice);
            $stmt->bindParam(":overview",$overview);
            $stmt->bindParam(":features",$features);
            $stmt->bindParam(":specs",$specs);
            $stmt->bindParam(":includes",$includes);
            $stmt->bindParam(":pcat",$category);
            $stmt->bindParam(":pSubCat",$subcategory);
            $stmt->bindParam(":pChildCat", $childcategory);
            $stmt->bindParam(":stock",$stock);
            $stmt->bindParam(":deal",$deal);
            $stmt->bindParam(":feature",$feat);
            $stmt->bindParam(":clear",$clearance);
            $stmt->bindParam(":pId", $pId);
            $stmt->execute();

            return $stmt;
        }
        catch(PDOException $e){
            die('Product insertion error: ' .$e->getMessage());
        }
    }

    /**
     * Editing product profile without image upload
     *
     * @param $pId
     * @param $sku
     * @param $owner
     * @param $pNo
     * @param $title
     * @param $price
     * @param $newPrice
     * @param $overview
     * @param $features
     * @param $specs
     * @param $includes
     * @param $category
     * @param $subcategory
     * @param $childcategory
     * @param $stock
     * @param $deal
     * @param $feat
     * @param $clearance
     * @param $imgData
     *
     * @return PDOStatement
     */
    protected function editProductWithImg($pId, $sku, $owner, $pNo, $title, $brand, $price, $newPrice, $overview, $features, $specs, $includes, $category, $subcategory, $childcategory, $stock, $deal, $feat, $clearance, $imgData){
        try{
            $sql ="UPDATE
                     products
                   SET
                     ProductSKU = :sku, ProductOwner = :powner, ProductNumber = :pnumber, ProductName = :pname,, ProductBrand = :pbrand,
                     ProductPrice = :pprice, ProductNewPrice = :newprice, ProductOverview = :overview, ProductFeatures = :features,
                     ProductSpecs = :specs, ProductIncludes = :includes, ProductCategoryID = :pcat,
                     subCategory = :pSubCat, childCategory = :pChildCat, ProductStock = :stock,
                     featured = :feature, deal = :deal, clearance = :clear, ProductImage = :img, ProductNewUpdate = now()
                   WHERE
                     ProductID = :pId";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":sku",$sku);
            $stmt->bindParam(":powner",$owner);
            $stmt->bindParam(":pnumber",$pNo);
            $stmt->bindParam(":pname",$title);
            $stmt->bindParam(":pbrand",$brand);
            $stmt->bindParam(":pprice",$price);
            $stmt->bindParam(":newprice",$newPrice);
            $stmt->bindParam(":overview",$overview);
            $stmt->bindParam(":features",$features);
            $stmt->bindParam(":specs",$specs);
            $stmt->bindParam(":includes",$includes);
            $stmt->bindParam(":pcat",$category);
            $stmt->bindParam(":pSubCat",$subcategory);
            $stmt->bindParam(":pChildCat", $childcategory);
            $stmt->bindParam(":stock",$stock);
            $stmt->bindParam(":deal",$deal);
            $stmt->bindParam(":feature",$feat);
            $stmt->bindParam(":clear",$clearance);
            $stmt->bindParam(":img",$imgData);
            $stmt->bindParam(":pId", $pId);
            $stmt->execute();

            return $stmt;
        }
        catch(PDOException $e){
            die('Product insertion error: ' .$e->getMessage());
        }
    }


    /**
     * Fetch all products in the db
     */
    public function getProducts(){
        try{
            $sql = "SELECT * FROM products";
            $stmt = $this->runQuery($sql);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $results;
        }
        catch(PDOException $e){
            die("Error: " .$e->getMessage());
        }
    }

    /*
     * Get featured products
     */
    public function getFeaturedProducts(){
        try{
            $sql = "SELECT * FROM products WHERE featured = 1";
            $stmt = $this->runQuery($sql);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $results;
        }
        catch(PDOException $e){
            die("Error: " .$e->getMessage());
        }
    }

    /*
     * Get deals
     */
    public function getDeals(){
        try{
            $sql = "SELECT * FROM products WHERE deal = 1";
            $stmt = $this->runQuery($sql);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $results;
        }
        catch(PDOException $e){
            die("Error: " .$e->getMessage());
        }
    }

    /*
     * Get clearance
     */
    public function getClearance(){
        try{
            $sql = "SELECT * FROM products WHERE clearance = 1";
            $stmt = $this->runQuery($sql);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $results;
        }
        catch(PDOException $e){
            die("Error: " .$e->getMessage());
        }
    }

    public function countProducts(){
        return count($this->getProducts());
    }

    public function deleteProductById($pId){
        try{
            $sql = "DELETE FROM products WHERE ProductID = :pId";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":pId", $pId);
            $stmt->execute();

            return $stmt;
        }catch(PDOException $e){
            die('Product Deletion error: ');
        }
    }

    /**
     * Fetch users in the db
     */
    public function getUsers(){
        try{
            $sql = "SELECT * FROM users";
            $stmt = $this->runQuery($sql);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $results;
        }
        catch(PDOException $e){
            die("Error: " .$e->getMessage());
        }
    }

    public function countUsers(){
        return count($this->getUsers());
    }

    /**
     * Fetch users in the db
     */
    public function getOrders(){
        try{
            $sql = "SELECT * FROM orders";
            $stmt = $this->runQuery($sql);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $results;
        }
        catch(PDOException $e){
            die("Error: " .$e->getMessage());
        }
    }

    public function countOrders(){
        return count($this->getOrders());
    }

    /**
     * Fetch users in the db
     */
    public function getPayments(){
        try{
            $sql = "SELECT * FROM payment";
            $stmt = $this->runQuery($sql);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $results;
        }
        catch(PDOException $e){
            die("Error: " .$e->getMessage());
        }
    }

    public function countPayments(){
        return count($this->getPayments());
    }

    public function adminExists($mail){
        try{
            $stmt = $this->conn->prepare("SELECT * FROM admin WHERE email=:email_id");
            $stmt->execute(array(":email_id"=>$mail));
            $admin = $stmt->fetch(PDO::FETCH_ASSOC);

            return $admin;
        }
        catch(PDOException $e){
            die("Error: " .$e->getMessage());
        }
    }

    public function insertStaff($names, $pwd, $mail, $url, $phone, $role){
        try{
            $sql = "insert into admin(names, email, password, url, phone, role)
                    values (:jina, :mail, :pwd, :url, :phone, :role)";
            $stmt = $this->runQuery($sql);
            $stmt->bindParam(':jina', $names);
            $stmt->bindParam(':mail', $mail);
            $stmt->bindParam(':pwd', $pwd);
            $stmt->bindParam(':url', $url);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':role', $role);

            $result = $stmt->execute();
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }
        return $result;
    }

    public function getAdministrators(){
        try{
            $sql = "SELECT * FROM admin";
            $stmt = $this->runQuery($sql);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $results = $e->getMessage();
        }

        return $results;
    }

    public function countAdmins(){
        return count($this->getAdministrators());
    }

    protected function loginAdmin($email, $upass){
        $stmt = $this->conn->prepare("SELECT * FROM admin WHERE email=:email_id");
        $stmt->execute(array(":email_id"=>$email));
        $admin = $stmt->fetch(PDO::FETCH_ASSOC);
        if($stmt->rowCount() > 0){
            if(password_verify($upass, $admin['password'])){
                $_SESSION[MD_ADMIN] = $admin['id'];
                return true;
            }
        }
    }

    protected function getCategoriesBySlug($slug){
        try{
            $sql = "SELECT * FROM category WHERE slug=:slug";
            $stmt = $this->runQuery($sql);
            $stmt->execute([':slug' => $slug]);
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $results = $e->getMessage();
        }

        return $results;
    }

    protected function insertSubCategory($title, $desc, $parent, $url){
        try{
            $sql = "INSERT INTO subcategory(title, description, parent, url)
                    VALUES(:title, :sdesc, :parent, :url)";
            $stmt = $this->runQuery($sql);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':sdesc', $desc);
            $stmt->bindParam(':parent', $parent);
            $stmt->bindParam(':url', $url);

            $result = $stmt->execute();
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }

    protected function getSubCategories($pId){
        try{
            $sql = "SELECT * FROM subcategory WHERE parent=:pid";
            $stmt = $this->runQuery($sql);
            $stmt->execute([':pid' => $pId]);
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $results = $e->getMessage();
        }

        return $results;
    }

    protected function getSubCategoryProfile($url){
        try{
            $sql = "SELECT * FROM subcategory WHERE url=:url";
            $stmt = $this->runQuery($sql);
            $stmt->execute([':url' => $url]);
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $results = $e->getMessage();
        }

        return $results;
    }

    /**
     * Insert new category
     *
     * @param $title
     * @param $decr
     * @param $parent
     * @param $slug
     * @return bool|null|string
     */
    function insertCategory($title, $decr, $parent, $slug){
        try{
            $sql = "insert into category(title, description, parent, slug)
                    values (:title, :descr, :parent, :slug)";
            $stmt = $this->runQuery($sql);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':descr', $decr);
            $stmt->bindParam(':parent', $parent);
            $stmt->bindParam(':slug', $slug);
            $result = $stmt->execute();
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }
        return $result;
    }

    protected function getCategories(){
        try{
            $sql = "SELECT * FROM category";
            $stmt = $this->runQuery($sql);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $results = $e->getMessage();
        }

        return $results;
    }

    public function countCategories(){
        return count($this->getCategories());
    }

    protected function getAllSubCategories(){
        try{
            $sql = "SELECT * FROM subcategory";
            $stmt = $this->runQuery($sql);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $results = $e->getMessage();
        }

        return $results;
    }

    protected function insertChildCategory($title, $desc, $parent, $url){
        try{
            $sql = "INSERT INTO childcategory(title, description, parent, url)
                    VALUES(:title, :sdesc, :parent, :url)";
            $stmt = $this->runQuery($sql);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':sdesc', $desc);
            $stmt->bindParam(':parent', $parent);
            $stmt->bindParam(':url', $url);

            $result = $stmt->execute();
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }

    protected function getChildCategoryByPid($pId){
        try{
            $sql = "SELECT * FROM childcategory WHERE parent=:pId";
            $stmt = $this->runQuery($sql);
            $stmt->execute([':pId' => $pId]);
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $results = $e->getMessage();
        }

        return $results;
    }

    protected function getChildCategories(){
        try{
            $sql = "SELECT * FROM childcategory ";
            $stmt = $this->runQuery($sql);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $results = $e->getMessage();
        }

        return $results;
    }

    protected function getProductsByCatUrl($url){
        try{
            #Get all the products in the db
            $stmt = $this->runQuery("SELECT * FROM products WHERE subCategory=:url");
            $stmt->execute([":url"=>$url]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }

    protected function getUrgentOrders(){
        try{
            #Get all the urgent orders in the db
            $stmt = $this->runQuery("SELECT * FROM urgent LIMIT 5");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }

    protected function getUrgentOrderById($id){
        try{
            $stmt = $this->runQuery("SELECT * FROM urgent WHERE id = :oId");
            $stmt->execute([':oId' => $id]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }

    protected function getLatestOrders(){
        try{
            #Get all the urgent orders in the db
            $stmt = $this->runQuery("SELECT * FROM orders LIMIT 5");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }

    protected function getProductById($pId){
        try{
            $stmt = $this->runQuery("SELECT * FROM products WHERE ProductID = :pId");
            $stmt->execute([':pId' => $pId]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }

    protected function getRoles(){
        try{
            $stmt = $this->runQuery("SELECT * FROM roles");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }

//    protected function html2PDF($html){
//        try{
//            $dompdf = new \Dompdf\Dompdf();
//            $dompdf->set_paper("A4");
//
//            //load the html content
//            $dompdf->load_html($html);
//            $dompdf->render();
//            $canvas = $dompdf->get_canvas();
//            $font = \Dompdf\FontMetrics::get_font("helvetica", "bold");
////            $canvas->page_text
//        }catch(ErrorException $e){
//            $result = $e->getMessage();
//        }
//        return $result;
//    }

    protected function insertBlog($title, $summary, $content, $img, $video = '', $tag, $topic, $author){
        try{
            $sql = "INSERT INTO blog (title, summary, content, img, video, tag, topic, author, created_at)
                    VALUES(:title, :summary, :content, :img, :video, :tag, :topic, :author, now())";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":title",$title);
            $stmt->bindParam(":summary",$summary);
            $stmt->bindParam(":content",$content);
            $stmt->bindParam(":img",$img);
            $stmt->bindParam(":video",$video);
            $stmt->bindParam(":tag",$tag);
            $stmt->bindParam(":topic",$topic);
            $stmt->bindParam(":author",$author);
            $stmt->execute();

            return $stmt;
        }
        catch(PDOException $e){
            die('Product insertion error: ' .$e->getMessage());
        }
    }

    #get all the blogs from the db
    public function getBlogs(){
        try{
            $stmt = $this->runQuery("SELECT * FROM blog");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }

    public function getBlogById($bID){
        try{
            $stmt = $this->runQuery("SELECT * FROM blog WHERE id = :bID");
            $stmt->execute([':bID' => $bID]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }

    public function editBlogWithImg($id, $title, $summary, $content, $img, $tag, $topic, $author){
        try{
            $sql = "UPDATE
                      blog
                    SET
                      title=:title, summary=:summary, content=:content, img=:img,
                      tag=:tag, topic=:topic, author=:author
                    WHERE
                      id =:bId";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":bId", $id);
            $stmt->bindParam(":title", $title);
            $stmt->bindParam(":summary", $summary);
            $stmt->bindParam(":content", $content);
            $stmt->bindParam(":img", $img);
            $stmt->bindParam(":tag", $tag);
            $stmt->bindParam(":topic", $topic);
            $stmt->bindParam(":author", $author);
            $stmt->execute();

            return $stmt;
        }catch(PDOException $e){
            die('Blog Edition error: ' .$e->getMessage());
        }
    }

    public function editBlog($id, $title, $summary, $content, $tag, $topic, $author){
        try{
            $sql = "UPDATE
                      blog
                    SET
                      title=:title, summary=:summary, content=:content, tag=:tag, topic=:topic, author=:author
                    WHERE
                      id =:bId";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":bId", $id);
            $stmt->bindParam(":title", $title);
            $stmt->bindParam(":summary", $summary);
            $stmt->bindParam(":content", $content);
            $stmt->bindParam(":tag", $tag);
            $stmt->bindParam(":topic", $topic);
            $stmt->bindParam(":author", $author);
            $stmt->execute();

            return $stmt;
        }catch(PDOException $e){
            die('Blog Edition error: ' .$e->getMessage());
        }
    }

    /*
     * Delete from view but not from db
     */
    public function disableBlog($bId, $activity){
        try{
            $sql = "UPDATE
                      blog
                    SET
                      inactive = :inactive
                    WHERE
                      id =:bId";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":bId", $bId);
            $stmt->bindParam(":inactive", $activity);
            $stmt->execute();

            return $stmt;
        }catch(PDOException $e){
            die('Deletion error: ');
        }
    }
}