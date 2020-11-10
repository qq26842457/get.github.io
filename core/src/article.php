<?php
header('Content-type:text/json;char-set:utf-8;');
require_once("../lib/common.php");
$route=filter("func");
switch($route){
	case "add_art":add_art();break;
	case "load":load();break;
	default:
	break;
}

function load(){
$key=filter("key"); 
if(strlen($key)!=10){
echo false;return;
}
$l=F($key);
$data=$l->get();
echo json_encode($data);
}
function prohtml($key){
	$tpl=T();
	$a=F($key);
	$data=$a->get(); 
	$tpl->assign("data",$data["content"]); 
	$name=date("Y-m-d-H-i-s",$key).".html";
	$tpl->MakeHtmlFile($name,"article.html");
}

function add_art(){ 
	$from=filter("edit"); 
	$key=filter("key") ? filter("key"): time();
	$l=F("list");
	$t=F("tag");
	//文章模型数据
	$art["title"]=$from["title"];
	$art["author"]=$from["author"];
	$art["from"]=$from["from"];
	$art["body"]=$from["body"]; 
	$art["tag"]=$from["tag"];
	//列表模型数据
	$list["title"]=$from["title"];
	$list["author"]=$from["author"];
	$list["from"]=$from["from"]; 
	$list["key"]=$key; 
	//标签模型数据 
	$gettag=explode(",",$from["tag"]);
	foreach($gettag as $k => $v){
		$val=$t->get($v);
		$val=$val."$key,";
		$t->saveo($v,$val);
	}

	$a=F($key);
	$a->saveo("content",$art);

	$l->saveo($key,$list);
	prohtml($key);
	echo json_encode(array("status"=>"1"));
}
?>