<?php

class CategoryService extends UserService{
    function __construct(){
        parent::__construct();
    }

	public function getCategoryItem($slug){
		$result = null;
		try{
			$sql = "SELECT * FROM category WHERE slug=:slug";
            $stmt = $this->runQuery($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		catch(PDOException $e){
			$result = $e->getMessage();
		}
		
		return $result;
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
        $result = null;
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
}