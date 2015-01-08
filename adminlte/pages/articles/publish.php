<?php
include_once( "../../../bootstrap.php" );
$id = isset($_REQUEST['id'])?$_REQUEST['id']:0;
$publish = isset($_REQUEST['publish'])?$_REQUEST['publish']:"";
$log = "N";
$dc = 0;
$d = false;
if(is_numeric($id) && $id>0 && trim($publish)!=""){
    $db = new MysqliDb($MYSQL_SERVER, $MYSQL_USER, $MYSQL_PASS, $MYSQL_DB);
    $db->setPrefix ('');
    $data = Array ( "publish" => (1-$publish) );
    $db->where ('id', $id);
    $d = $db->update('article', $data);
    if($d)
        $dc = $db->count;
    else
        $log = $db->getLastError();

}

$return = array();
$return['error'] = $log;
$return["data"] = $dc;
$return["sql"] = $db->getLastQuery();
if($d){
    $return['status'] = "OK";
}else{
    $return['status'] = "ERROR";
}
echo json_encode($return);
//  END FILE: PUBLISH.PHP