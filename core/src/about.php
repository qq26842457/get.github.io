<?php
header('Content-type:text/json;char-set:utf-8;');
require_once("../lib/common.php");
$route=filter("func");
switch($route){
	case "about":about();break; 
	case "editsub":editsub();break; 
	default:
	break;
}
function about(){ 
	$a=F("setting");
	$data=$a->get("about");
	echo json_encode($data);
}
function editsub(){
	$form=filter("form");  
	$a=F("setting");
	$data=$a->saveo("about",$form); 
	echo 11;
}

?>