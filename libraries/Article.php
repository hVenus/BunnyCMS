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

}