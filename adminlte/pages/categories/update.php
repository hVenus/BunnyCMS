<?php
include_once( "../../../bootstrap.php" );
$id = isset($_REQUEST['id'])?$_REQUEST['id']:0;
$category = isset($_REQUEST['category'])?$_REQUEST['category']:"";
$parent = isset($_REQUEST['parent'])?$_REQUEST['parent']:-1;
$log = "N";
$dc = 0;
$d = false;
if(is_numeric($id) && $id>0 && trim($category)!="" && is_numeric($parent) && $parent>=0){
    $db = new MysqliDb($MYSQL_SERVER, $MYSQL_USER, $MYSQL_PASS, $MYSQL_DB);
    $db->setPrefix ('');
    $data = Array ("category" => $category,
        "parent" => $parent
    );
    $db->where ('id', $id);
    $d = $db->update('category', $data);
    if ($d)
        $dc = $db->count;
    else
        $log = $db->getLastError();

}

$return = array();
$return["resp"] = array($id, $category, $parent);
$return["post"] = $_POST;
$return["data"] = $dc;
$return["mysql"] = $log;
if($d){
    $return['status'] = "OK";
}else{
    $return['status'] = "ERROR";
}
echo json_encode($return);
//  END FILE: ADD.PHP