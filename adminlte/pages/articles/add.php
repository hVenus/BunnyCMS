<?php
include_once( "../../../bootstrap.php" );
$title = isset($_REQUEST['title'])?$_REQUEST['title']:"";
$content = isset($_REQUEST['content'])?$_REQUEST['content']:"";
$category = isset($_REQUEST['category'])?$_REQUEST['category']:0;
$publish = isset($_REQUEST['publish'])?$_REQUEST['publish']:0;
$publish_time = isset($_REQUEST['publish_time'])?$_REQUEST['publish_time']:0;
$id = -1;
$log = "";
if(trim($title)!="" && trim($content)!=""){
    $db = new MysqliDb($MYSQL_SERVER, $MYSQL_USER, $MYSQL_PASS, $MYSQL_DB);
    $db->setPrefix ('');
    if($publish_time==0){
        $publish_time_s = time();
    }else{
        $publish_time_s = strtotime($publish_time);
    }

    $data = Array (
        "content" => $content,
        "title" => $title,
        "category" => $category,
        "create_time" => $publish_time_s,
        "create_uid" => $_SESSION["uid"],
        "update_time" => $publish_time_s,
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