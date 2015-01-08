<?php


class Category {
    private $db;

    public function __construct(){
        $this->db =  new MysqliDb (DB_SERVER, DB_USER, DB_PASS, DB_DB);
    }

    public function getCategorySelectorData($id=0){
        $this->db->join("category p", "p.id=a.parent", "LEFT");
        $this->db->where(" a.id != ".$id);
        $results = $this->db->get ("category a", null, "a.id, a.category, a.parent, p.category as parent_category");
        return $results;
    }

    public function getCategory($id){
        $category = $this->db->where("id", $id)->getOne ("category");
        return $category;
    }

    public function getCategoryChild($id){
        $category = $this->db->where("parent", $id)->get("category");
        return $category;
    }

    public function myCategoryTree( $id = 0, $l = 1 ){
        $return = array();
        $category = $this->db->where('parent', $id)->get("category");
        foreach($category as $cate){
            $return[] = array(
                "id"=>$cate["id"],
                "category"=>$cate["category"],
                "level" => $l,
            );
            if($this->hasChild($cate["id"])){
                $child =  $this->myCategoryTree($cate["id"], $l+1 );
                $return = array_merge($return, $child);
            }
        }
        return $return;
    }

    public function hasChild($id){
        $category = $this->db->where('parent', $id)->get("category");
        if($this->db->count>0){
            return true;
        }
        return false;
    }



}