<?php 
    error_reporting( 0 );
    date_default_timezone_set("Asia/chongqing");
    include "Uploader.class.php"; 
	
	$Path = "../../../git/upload/"; 
	
    $config = array(
        "savePath" => $Path ,             //存储文件夹
        "maxSize" => 1000 ,                   //允许的文件最大尺寸，单位KB
        "allowFiles" => array( ".gif" , ".png" , ".jpg" , ".jpeg" , ".bmp" )  //允许的文件格式
    ); 
    
    $config[ "savePath" ] = $Path;
    $up = new Uploader( "upfile" , $config );
    $type = $_REQUEST['type'];
    $callback=$_GET['callback'];

    $info = $up->getFileInfo(); 
    if($callback) {
        echo '<script>'.$callback.'('.json_encode($info).')</script>';
    } else {
        echo json_encode($info);
    }
