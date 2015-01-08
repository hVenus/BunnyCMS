<?php
/**
 * 自动加载方法
 * ·class
 * ·funciton
 *
 */


/**
 * autoload method
 * @param $class
 */
function loaderClass($class){
    $file = PATH_BASE."/libraries/";
    $file = $file.$class.'.php';
    if(is_file($file)){
        require_once($file);
    }else{
        die("class not exist.".$file);
    }
}
spl_autoload_register('loaderClass');
