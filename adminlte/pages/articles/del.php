<?php
include_once( "../../../bootstrap.php" );
$id = isset($_REQUEST['id'])?$_REQUEST['id']:0;

$log = "N";
$dc = 0;
$d = false;
if(is_numeric($id) && $id>0){
    $db = new MysqliDb($MYSQL_SERVER, $MYSQL_USER, $MYSQL_PASS, $MYSQL_DB);
    $db->setPrefix ('');
    $db->where ('id', $id);
    $d = $db->delete('article');
}

$return = array();

$return["data"] = $dc;
$return["sql"] = $db->getLastQuery();
if($d){
    $return['status'] = "OK";
}else{
    $return['status'] = "ERROR";
}
echo json_encode($return);
//  END FILE: DEL.PHP