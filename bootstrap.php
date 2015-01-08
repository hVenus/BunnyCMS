<?php
require("config.php");


$SITE_ROOT =  $_SERVER['HTTP_HOST'];

if(!defined("SITE_ROOT")){
    define("SITE_ROOT", "http://".$SITE_ROOT);
}


if(!defined("DB_SERVER")){
    define("DB_SERVER", $MYSQL_SERVER);
}
if(!defined("DB_USER")){
    define("DB_USER", $MYSQL_USER);
}
if(!defined("DB_PASS")){
    define("DB_PASS", $MYSQL_PASS);
}
if(!defined("DB_DB")){
    define("DB_DB", $MYSQL_DB);
}
if(!defined("DB_CHARSET")){
    define("DB_CHARSET", $MYOA_DB_CHARSET);
}