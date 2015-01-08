<?php
include_once( "../../../bootstrap.php" );
$id = isset($_REQUEST['id'])?$_REQUEST['id']:0;
$title = isset($_REQUEST['title'])?$_REQUEST['title']:"";
$content = isset($_REQUEST['content'])?$_REQUEST['content']:"";
$category = isset($_REQUEST['category'])?$_REQUEST['category']:0;
$publish = isset($_REQUEST['publish'])?$_REQUEST['publish']:0;
$log = "N";
$dc = 0;
$d = false;
if(is_numeric($id) && $id>0 && trim($title)!="" && trim($content)!=""){
    $db = new MysqliDb($MYSQL_SERVER, $MYSQL_USER, $MYSQL_PASS, $MYSQL_DB);
    $db->setPrefix ('');
    $data = Array (
        "content" => $content,
        "title" => $title,
        "category" => $category,
        "update_time" => time(),
        "update_uid" => $_SESSION["uid"],
        "publish" => $publish
    );
    $db->where ('id', $id);
    $d = $db->update('article', $data);
    if($d)
        $dc = $db->count;
    else
        $log = $db->getLastError();

}

$return = array();
$return["post"] = $_POST;
$return["data"] = $dc;
$return["mysql"] = $log;
if($d){
    $return['status'] = "OK";
}else{
    $return['status'] = "ERROR";
}
echo json_encode($return);
//  END FILE: UPDATE.PHP