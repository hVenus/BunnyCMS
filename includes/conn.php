<?php

function OpenConnection(){
    global $connection;
    global $MYSQL_SERVER;
    global $MYSQL_USER;
    global $MYSQL_PASS;
    global $MYSQL_DB;
    global $MYOA_DB_CHARSET;
    if ( !$connection ){
        if ( !function_exists( "mysql_pconnect" ) ){
            echo _( "PHP配置有误，不能调用Mysql函数库，请检查有关配置" );
            exit( );
        }
        $C = @mysql_pconnect( $MYSQL_SERVER, $MYSQL_USER, $MYSQL_PASS, MYSQL_CLIENT_COMPRESS );
    }else{
        return $connection;
    }
    mysql_query( "SET NAMES ".$MYOA_DB_CHARSET, $C );
    if ( !$C ){
        printerror( _( "不能连接到MySQL数据库，请检查：1、MySQL服务是否启动；2、MySQL被防火墙阻止；3、连接MySQL的用户名和密码是否正确。" ) );
        exit( );
    }
    $result = mysql_select_db( $MYSQL_DB, $C );
    if ( !$result ){
        $TIPS = _( "数据库 %s 不存在" );
        printerror( sprintf( $TIPS, $MYSQL_DB ) );
    }
    return $C;
}

function exequery( $C, $Q, $LOG = FALSE ){
    if ( !$LOG ){
        $POS = stripos( $Q, "union" );
        if ( $POS !== FALSE && stripos( $Q, "select", $POS ) !== FALSE ){
            exit( );
        }
        $POS = stripos( $Q, "into" );
        if ( $POS !== FALSE && ( stripos( $Q, "outfile", $POS ) !== FALSE || stripos( $Q, "dumpfile", $POS ) !== FALSE ) ){
            exit( );
        }
    }
    if ( gettype( $C ) != "resource" ){
        PrintError( _( "无效的数据库连接" )."<br><b>"._( "SQL语句:" )."</b> ".$Q, $LOG );
        return FALSE;
    }
    $cursor = @mysql_query( $Q, $C );
    if ( !$cursor ){
        PrintError( "<b>"._( "SQL语句:" )."</b> ".$Q, $LOG );
    }
    return $cursor;
}

function execQuery( $C, $Q ){
    if ( gettype( $C ) != "resource" ){
        return false;
    }
    $cursor = @mysql_query( $Q, $C );
    return $cursor;
}

function PrintError( $MSG, $LOG = FALSE ){
    global $SCRIPT_FILENAME;
    global $ROOT_PATH;
    echo "<fieldset style=\"line-height:150%;font-size:12px;\">";
    echo "<legend>&nbsp;请联系管理员&nbsp;</legend>";
    echo "<b>"._( "错误" )."#".mysql_errno( ).": </b> ".mysql_error( )."<br>";
    echo $MSG."<br>";
    echo "<b>"._( "文件：" )."</b>".$SCRIPT_FILENAME;
    if ( mysql_errno( ) == 1030 ){
        echo "<br>请联系管理员到 系统管理-数据库管理 中修复数据库解决。" ;
    }
    echo "</fieldset>";
    if ( $LOG ){
        if ( $LOG ){
            exit( );
        }
    }
}

if ( !$connection ){
    $connection = openconnection( );
}
?>