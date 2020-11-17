<?php
//header('Content-type:text/json;char-set:utf-8;');
require_once("../lib/common.php");
$route=filter("func");
switch($route){
	case "index":index();break; 
	case "list":list_();break;  
	case "see":see();break; 
	default:
	break;
}
function index(){
	$a=F("setting");
	$data=$a->get("about");
	$tpl=T();
	$tpl->assign("data",$data); 
	$tpl->MakeHtmlFile("index.html","index.html");
	header("location: ".SHOWAPP);
}
function list_(){
	$a=F("setting");
	$data=$a->get("about");
	$l=F("list");
	$list=$l->get();
	foreach($list as $k=>$v){
		$list[$k]["url"]=article($v["key"]);
	}
	$tpl=T();
	//ตนะ๒ลเัต krsort ธ๙พÝผüร๛ตนะ๒ลละ๒
    krsort($list);
	$tpl->assign("data",$data); 
	$tpl->assign("list",$list); 
	$tpl->MakeHtmlFile("list.html","list.html");
	header("location: ".SHOWAPP."/list.html");
}

function article($key){ 
	$tpl=T();

	$a=F("setting");
	$data=$a->get("about");
	$a=F($key);
	$article=$a->get(); 
	$tpl->assign("data",$data); 
	$tpl->assign("article",$article["content"]); 
	$name=date("Y-m-d-H-i-s",$key).".html";
	$tpl->MakeHtmlFile($name,"article.html"); 
	return $name;
}

function see(){
	$key=filter("key"); 
	$tpl=T(); 
	$a=F("setting");
	$data=$a->get("about");
	$a=F($key);
	$article=$a->get(); 
	$tpl->assign("data",$data); 
	$tpl->assign("article",$article["content"]); 
	$name=date("Y-m-d-H-i-s",$key).".html";
	$tpl->MakeHtmlFile($name,"article.html"); 
	header("location: ".SHOWAPP."/".$name);
}
 
?>