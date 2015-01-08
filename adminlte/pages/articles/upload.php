<?php
include_once( "../../../bootstrap.php" );

$callback = $_REQUEST["CKEditorFuncNum"];
$upload = $_FILES["upload"];

$ext = "";
switch($upload["type"]){
    case "image/jpeg":
        $ext = ".jpg";
        break;
    default:
}

$name = $_SESSION['uid'].(microtime(true)*10000);

if(!file_exists(PATH_BASE."/images")){
    mkdir(PATH_BASE."/images");
}

if(!file_exists(PATH_BASE."/images/article")){
    mkdir(PATH_BASE."/images/article");
}

$path = PATH_BASE."/images/article/".date("Ymd");

if(!file_exists($path)){
    mkdir($path);
}

$full_name = $path."/".$name.$ext;

$url_path = "/images/article/".date("Ymd")."/".$name.$ext;

if(move_uploaded_file($upload["tmp_name"], $full_name)){
    echo '<script type="text/javascript">window.parent.CKEDITOR.tools.callFunction('.$callback.',"'.''.$url_path.'","")</script>';
}