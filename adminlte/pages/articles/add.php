<?php
include_once( "../../../bootstrap.php" );
$title = isset($_REQUEST['title'])?$_REQUEST['title']:"";
$content = isset($_REQUEST['content'])?$_REQUEST['content']:"";
$category = isset($_REQUEST['category'])?$_REQUEST['category']:0;
$publish = isset($_REQUEST['publish'])?$_REQUEST['publish']:0;
$id = -1;
$log = "";
if(trim($title)!="" && trim($content)!=""){
    $db = new MysqliDb($MYSQL_SERVER, $MYSQL_USER, $MYSQL_PASS, $MYSQL_DB);
    $db->setPrefix ('');
    $data = Array (
        "content" => $content,
        "title" => $title,
        "category" => $category,
        "create_time" => time(),
        "create_uid" => $_SESSION["uid"],
        "update_time" => time(),
        "update_uid" => $_SESSION["uid"],
        "publish" => $publish
    );
    $id = $db->insert('article', $data);
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