<?php
require("../config.php");
var_dump($_SESSION);
if(!isset($_SESSION["uid"]) || $_SESSION["uid"]<=0){
    //header("Location: login.php");
}

$db = new MysqliDb ($MYSQL_SERVER, $MYSQL_USER, $MYSQL_PASS, $MYSQL_DB);

$db->setPrefix ('');

$users = $db->get('user', 10);

var_dump($users);
?>
<!DOCTYPE html>
<html>
<head>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
<h2>Hello</h2>
</body>
</html>