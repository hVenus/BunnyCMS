<?php
include_once( "../../../bootstrap.php" );
$category = isset($_REQUEST['category'])?$_REQUEST['category']:"";
$parent = isset($_REQUEST['parent'])?$_REQUEST['parent']:-1;
$id = -1;
$log = "";
if(trim($category)!="" && is_numeric($parent) && $parent>=0){
    $db = new MysqliDb($MYSQL_SERVER, $MYSQL_USER, $MYSQL_PASS, $MYSQL_DB);
    $db->setPrefix ('');
    $data = Array ("category" => $category,
        "parent" => $parent
    );
    $id = $db->insert('category', $data);
    $log = $db->getLastError();
}

$return = array();
$return["data"] = $id;
$return["mysql"] = $log;
if($id>0){
    $return['status'] = "OK";
}else{
    $return['status'] = "ERROR";
}
echo json_encode($return);
//  END FILE: ADD.PHP