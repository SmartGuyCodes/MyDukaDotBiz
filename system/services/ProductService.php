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

Class ProductService extends UserService{
    function __construct () {
        parent::__construct();
    }

    /**
     * @param $sku
     * @param $title
     * @param $price
     * @param $overview
     * @param $features
     * @param $specs
     * @param $includes
     * @param $category
     * @param $subcategory
     * @param $childcategory
     * @param $imgId
     * @param $stock
     * @return PDOStatement
     */
    protected function insertProduct($sku, $title, $price, $overview, $features, $specs, $includes, $category, $subcategory, $childcategory, $mime, $imgData, $stock){
        try{
            $stmt = $this->conn->prepare(
                "INSERT INTO products
                        (ProductSKU, ProductName, ProductPrice, ProductOverview, ProductFeatures,
                        ProductSpecs, ProductIncludes, ProductCategoryID, subCategory, childCategory,
                        mime, imgData, ProductUpdateDate, ProductStock)
                VALUES(:sku, :pname, :price, :overview, :features, :specs, :includes, :pcat, :pSubCat,
                :pChildCat, :mime, :imgdata, now(), :stock)");
            $stmt->bindParam(":sku",$sku);
            $stmt->bindParam(":pname",$title);
            $stmt->bindParam(":price",$price);
            $stmt->bindParam(":overview",$overview);
            $stmt->bindParam(":features",$features);
            $stmt->bindParam(":specs",$specs);
            $stmt->bindParam(":includes",$includes);
            $stmt->bindParam(":pcat",$category);
            $stmt->bindParam(":pSubCat",$subcategory);
            $stmt->bindParam(":pChildCat", $childcategory);
            $stmt->bindParam(":mime",$mime);
            $stmt->bindParam(":imgdata",$imgData, PDO::PARAM_LOB);
            $stmt->bindParam(":stock",$stock);
            $stmt->execute();

            return $stmt;
        }
        catch(PDOException $e){
            die('Product insertion error: ' .$e->getMessage());
        }
    }

    /**
     * @param $id
     * @return array|string
     */
    public function getProductsById($id){
        try{
            $sql = "SELECT * FROM products WHERE ProductID=:uID";
            $stmt = $this->runQuery($sql);
            $stmt->execute([':uID' => $id]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }

    /**
     * @param $name
     * @return array|string
     */
    public function getProductsByName($name){
        try{
            $sql = "SELECT * FROM products WHERE ProductName=:uName";
            $stmt = $this->runQuery($sql);
            $stmt->execute([':uName' => $name]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }

    /**
     * @param $id
     * @return mixed|string
     */
    protected function getProductById($id){
        try{
            $sql = "SELECT * FROM products WHERE ProductID=:pID";
            $stmt = $this->runQuery($sql);
            $stmt->execute([':pID' => $id]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }

    /**
     * @param $uID
     * @return array|string
     */
    protected function getProductsByuId($uID){
        try{
            $sql = "SELECT * FROM products WHERE ProductOwnerId=:uID";
            $stmt = $this->runQuery($sql);
            $stmt->execute([':uID' => $uID]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }

    /**
     * @return array|string
     */
    public function getProducts(){
        try{
            #Get all the products in the db
            $stmt = $this->runQuery("SELECT * FROM products");
            $stmt->execute(["uId"=>$_SESSION[MD_OWNER]]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }

    /**
     * Get 12 weekly features
     *
     * @return array|string
     */
    protected function getFeatured(){
        try{
            #Get all the products in the db
            $stmt = $this->runQuery("SELECT * FROM products WHERE featured = 1 ORDER BY RAND()");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }

    /**
     * Get all weekly features
     *
     * @return array|string
     */
    protected function getAllFeatured(){
        try{
            #Get all the products in the db
            $stmt = $this->runQuery("SELECT * FROM products WHERE featured = 1 ORDER BY RAND()");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }

    /**
     * Get clearance 12 Items
     *
     * @return array|string
     */
    protected function getClearance(){
        try{
            #Get all the products in the db
            $stmt = $this->runQuery("SELECT * FROM products WHERE clearance = 1 ORDER BY RAND()");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }

    /**
     * Get clearance all Items
     *
     * @return array|string
     */
    protected function getAllClearance(){
        try{
            #Get all the products in the db
            $stmt = $this->runQuery("SELECT * FROM products WHERE clearance = 1 ORDER BY RAND()");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }

    /**
     * Get clearance 12 Items
     *
     * @return array|string
     */
    protected function getMyDukaClearance(){
        try{
            #Get all the products in the db
            $stmt = $this->runQuery("SELECT * FROM products");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }

    /**
     * @return array|string
     */
    protected function getProductByPrice(){ //$price
        try{
            #Get all the products in the db
            $stmt = $this->runQuery("SELECT * FROM products ORDER BY RAND() LIMIT 16 "); //WHERE ProductPrice = :price
            $stmt->execute(); //[":price" => $price]
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }

    protected function getProductsByDeal($deal){
        try{
            #Get all the products in the db
            $stmt = $this->runQuery("SELECT * FROM products WHERE deal = :deal ORDER BY RAND()"); //WHERE ProductPrice = :price
            $stmt->execute([":deal" => $deal]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }

    /**
     * @param $query
     * @return array|null|string
     */
    public function searchProducts($query){
        try{
            $sql = "SELECT ProductID, ProductSKU, ProductName FROM products WHERE ProductName LIKE :pName";
            $stmt = $this->runQuery($sql);
            $stmt->bindValue(':pName', '%' .$query. '%', PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetchAll();
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }

    /**
     * @param $slug
     * @return array|string
     */
    public function getCategoryItems($slug){
        try {
            $sql = "Select
                      products.*
                    From
                      products Inner Join
                      category
                    On products.ProductCategoryID = category.slug
                    WHERE category.slug = :name";
            $stmt = $this->runQuery($sql);
            $stmt->execute([':name' => $slug]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e) {
            $result = $e->getMessage();
        }

        return $result;
    }

    /**
     * @param $slug
     * @return array|string
     */
    public function getEightCategoryItems($slug){
        try {
            $sql = "Select
                      products.*
                    From
                      products Inner Join
                      category
                    On products.ProductCategoryID = category.slug
                    WHERE category.slug = :name
                    ORDER BY RAND()
                    LIMIT 6";
            $stmt = $this->runQuery($sql);
            $stmt->execute([':name' => $slug]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e) {
            $result = $e->getMessage();
        }

        return $result;
    }

    /**
     * @param $slug
     * @return array|string
     */
    public function getLandingCategoryItems($slug){
        try {
            $sql = "Select
                      products.*
                    From
                      products Inner Join
                      category
                    On products.ProductCategoryID = category.slug
                    WHERE category.slug = :name
                    ORDER BY RAND()";
            $stmt = $this->runQuery($sql);
            $stmt->execute([':name' => $slug]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e) {
            $result = $e->getMessage();
        }

        return $result;
    }

    /**
     * @param $slug
     * @return array|string
     */
    public function getSixCategoryItems($slug){
        try {
            $sql = "Select
                      products.*
                    From
                      products Inner Join
                      category
                    On products.ProductCategoryID = category.slug
                    WHERE category.slug = :name
                    LIMIT 6";
            $stmt = $this->runQuery($sql);
            $stmt->execute([':name' => $slug]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e) {
            $result = $e->getMessage();
        }

        return $result;
    }

    /**
     * @param $url
     * @return array|string
     */
    public function getProductsByChild($url){ //, $id
        try {
            $stmt = $this->runQuery("SELECT * FROM products WHERE childCategory=:url ORDER BY RAND() LIMIT 4");
            $stmt->execute([':url' => $url]); //, ':id' => $id
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e) {
            $result = $e->getMessage();
        }

        return $result;
    }

    /**
     * @param $cat
     * @return array|string
     */
    public function getProductFamily($cat){ //, $id
        try {
            $stmt = $this->runQuery("SELECT * FROM products WHERE productCategoryID=:cat ORDER BY RAND()");
            $stmt->execute([':cat' => $cat]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e) {
            $result = $e->getMessage();
        }

        return $result;
    }

    /**
     * @param $url
     * @return array|string
     */
    public function getProductsByCatUrl($url){
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

    /**
     * @param $brand
     * @return array|string
     */
    public function getProductsByBrand($brand){
        try{
            #Get all the products in the db
            $stmt = $this->runQuery("SELECT * FROM products WHERE ProductBrand=:brand LIMIT 4");
            $stmt->execute([":brand"=>$brand]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }

    /**
     * @return array|string
     */
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

    /**
     * @param $sub
     * @return array|string
     */
    protected function getProductsSubCategory($sub){
        try{
            $sql = "SELECT * FROM products WHERE subCategory = :sub";
            $stmt = $this->runQuery($sql);
            $stmt->execute([':sub' => $sub]);
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $results = $e->getMessage();
        }

        return $results;
    }

    /**
     * @param $sub
     * @return array|string
     */
    protected function getSixProductsSubCategory($sub){
        try{
            $sql = "SELECT * FROM products WHERE subCategory = :sub ORDER BY RAND()";
            $stmt = $this->runQuery($sql);
            $stmt->execute([':sub' => $sub]);
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $results = $e->getMessage();
        }

        return $results;
    }

    /**
     * @param $child
     * @return array|string
     */
    protected function getChildProduct($child){
        try{
            $sql = "SELECT * FROM products WHERE childCategory = :child";
            $stmt = $this->runQuery($sql);
            $stmt->execute([':child' => $child]);
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $results = $e->getMessage();
        }

        return $results;
    }

    /**
     * @param $slug
     * @return mixed
     */
    protected function getCatBySlug($slug){
        try{
            $sql = "SELECT * FROM category WHERE slug = :slug";
            $stmt = $this->runQuery($sql);
            $stmt->execute([':slug' => $slug]);
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $results = $e->getMessage();
        }

        return $results['id'];
    }

    /**
     * @param $parent
     * @return array|string
     */
    protected function getChildCategories($parent){
        try{
            $sql = "SELECT * FROM childcategory WHERE category = :parent";
            $stmt = $this->runQuery($sql);
            $stmt->execute([':parent' => $parent]);
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $results = $e->getMessage();
        }

        return $results;
    }

    /**
     * @param $id
     * @return array|string
     */
    protected function getChildById($id){
        try{
            $sql = "SELECT * FROM childcategory WHERE id = :id";
            $stmt = $this->runQuery($sql);
            $stmt->execute([':id' => $id]);
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $results = $e->getMessage();
        }

        return $results;
    }

    /**
     * @param $uId
     * @param $pId
     * @param $pName
     * @param $price
     * @return PDOStatement
     */
    protected function insertWish($uId, $pId, $pName, $price){
        try{
            $stmt = $this->conn->prepare("INSERT INTO `wishlist`(`userID`, `productID`, `productName`, `productPrice`, `created_at`) "
                    . "                   VALUES(:uId, :pId, :pName, :price, now())");
            $stmt->bindParam(":uId",$uId);
            $stmt->bindParam(":pId",$pId);
            $stmt->bindParam(":pName",$pName);
            $stmt->bindParam(":price",$price);
            $stmt->execute();

            return $stmt;
        }
        catch(PDOException $e){
            die('Product insertion error: ' .$e->getMessage());
        }
    }

    /**
     * @return array|string
     */
    protected function getAllWishes(){
        try{
            $sql = "SELECT * FROM wishlist";
            $stmt = $this->runQuery($sql);
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $results = $e->getMessage();
        }

        return $results;
    }

    /**
     * @param $uId
     * @return array|string
     */
    protected function getWishlist($uId){
        try{
            $sql = "SELECT * FROM wishlist WHERE userID = :uId";
            $stmt = $this->runQuery($sql);
            $stmt->execute([':uId' => $uId]);
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $results = $e->getMessage();
        }

        return $results;
    }

    /**
     * @param $uId
     * @param $pId
     * @return array|string
     */
    protected function wishExists($uId, $pId){
        try{
            $sql = "SELECT id, userID, productID, productName, productPrice, created_at"
                    . "FROM wishlist WHERE userID =:uId AND productID =:pId";
            $stmt = $this->runQuery($sql);
            $stmt->execute([':uId' => $uId]);
            $stmt->execute([':pId' => $pId]);
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            echo'<pre>'; print_r($results); die;
        }
        catch(PDOException $e){
            $results = $e->getMessage();
        }

        return $results;
    }

    /**
     * @param $pId
     * @param $pname
     * @param $pimg
     * @param $pprice
     * @param $cname
     * @param $cemail
     * @param $cphone
     * @param $clocation
     * @param $pQty
     * @return PDOStatement
     */
    protected function insertUrgentOrder($pId, $pname, $pimg, $pprice, $cname, $cemail, $cphone, $clocation, $pQty){
        try{
            $stmt = $this->conn->prepare("
                INSERT INTO urgent
                  (ProductID, ProductImg, ProductName, ProductPrice, ClientName, ClientEmail, ClientPhone, ClientLocation, ProductQty)
                VALUES
                  (:pId, :pImg, :pName, :pPrice, :cName, :cMail, :cPhone, :cLocation, :pQty)
            ");
            $stmt->bindParam(":pId",$pId);
            $stmt->bindParam(":pName",$pname);
            $stmt->bindParam(":pImg",$pimg);
            $stmt->bindParam(":pPrice",$pprice);
            $stmt->bindParam(":cName",$cname);
            $stmt->bindParam(":cMail",$cemail);
            $stmt->bindParam(":cPhone",$cphone);
            $stmt->bindParam(":cLocation",$clocation);
            $stmt->bindParam(":pQty",$pQty);
            $stmt->execute();

            return $stmt;
        }
        catch(PDOException $e){
            die("Urgent product insertion error: " .$e->getMessage());
        }
    }

    /**
     * @param $pId
     * @param $uId
     * @param $rating
     * @return PDOStatement
     */
    protected function insertReview($pId, $uId = '', $rating){
        try{
            $stmt = $this->conn->prepare("INSERT INTO `productrating`(`product_id`, `user_id`, `rating_number`)
                                          VALUES (:pId, :uId, :rating)");
            $stmt->bindParam(":pId",$pId);
            $stmt->bindParam(":uId",$uId);
            $stmt->bindParam(":rating",$rating);
            $stmt->execute();

            return $stmt;
        }
        catch(PDOException $e){
            die("Ratings insertion error: " .$e->getMessage());
        }
    }

    protected function updateProductById($pId, $rating){
        try{
            $stmt = $this->conn->prepare( "UPDATE products SET ProductReview=':rating' where ProductID =':pId'");
            $stmt->bindParam(":rating", $rating);
            $stmt->bindParam(":pId", $pId);
            $stmt->execute();

            return $stmt;
        }catch(PDOException $e){
            die('Rating insertion error: ' .$e->getMessage());
        }
    }
}