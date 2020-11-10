<?php
header('Content-type:text/json;char-set:utf-8;');
require_once("../lib/common.php");
$route=filter("func");
switch($route){
	case "getlist":getlist();break;
	case "del":del();break;
	default:
	break;
}
function getlist(){
	$page=filter("page");
	$page=empty($page)?0:$page;
	$c=F("list"); 
	$list=$c->get();
	$len=count($list);
	$page=$page*15;
	$page=$page<$len?$page:ceil($len/15);
	$end=$page+15;
	$end=$end>$len?$len:$end; 
	$data["data"]=array_slice($list,$page,$end);
	$data["count"]=$len;
	echo json_encode($data);
}
function del(){
	$key=filter("key");
	$c=F("list"); 
	unlink(FILE."/".$key.".php");
	echo $list=$c->delete($key);

}
?>