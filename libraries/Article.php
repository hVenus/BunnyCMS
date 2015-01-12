<?php

class Article {
    private $db;

    public function __construct(){
        $this->db =  new MysqliDb (DB_SERVER, DB_USER, DB_PASS, DB_DB);
    }

    public function getArticles($page=1, $per=25){
        $this->db->join("category p", "p.id=a.category", "LEFT");
        $start = ($page-1)*$per;
        $results = $this->db->get("article a", Array( $start, $per),  "a.*, p.category as category_name");
        return $results;
    }
    public function getArticleAll(){
        $this->db->join("category p", "p.id=a.category", "LEFT");
        $results = $this->db->get("article a", null,  "a.*, p.category as category_name");
        return $results;
    }

    public function getArticle($id){
        $this->db->join("category p", "p.id=a.category", "LEFT");
        $this->db->where("a.id", $id);
        $results = $this->db->getOne("article a",  "a.*, p.category as category_name");
        return $results;
    }

    public function getArticleByCategory($category, $per){
        $params = Array($category,$per);
        $results = $this->db->rawQuery("SELECT a.*, p.category as category_name FROM article a LEFT JOIN category p ON p.id = a.category WHERE a.category IN (".$category.") ORDER BY a.update_time DESC LIMIT ".$per);
        return $results;
    }

    public function getArticleByCategoryPage($category, $page, $per){
        $start = ($page-1)*$per;
        $params = Array($category,$per);
        $results = $this->db->rawQuery("SELECT a.*, p.category as category_name FROM article a LEFT JOIN category p ON p.id = a.category WHERE a.category IN (".$category.") ORDER BY a.update_time DESC LIMIT ".$start.", ".$per);
        return $results;
    }

    public function getArticleCount($publish = true){
        $count = 0;
        if($publish){
            $this->db->where("publish", 1);
            $results = $this->db->get("article");
            $count = $this->db->count;
        }
        return $count;
    }

    public function getImageArticle($category=0, $per=10){
        $result = array();
        if($category!=0){
            $this->db->where("category", $category);
        }
        $list = $this->db->orderBy("id", "desc")->get("article");
        $i = 0;
        foreach($list as $l){
            if($i>=10){
                break;
            }
            $image = Article::getImage($l["content"]);
            if($image!==false){
                $l["image"] = $image;
                $result[] = $l;
            }
            $i++;
        }
        return $result;
    }

    public static function getImage($article){
        $image = false;
        preg_match_all("/<img(.*)src=\"([^\"]+)\"[^>]+>/isU", $article, $matches);
        if(!empty($matches[2])){
            $image = $matches[2][0];
            if($image !== false){
                $image = $matches[2][0];
            }
        }
        return $image;

    }

}