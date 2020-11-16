<?php
define("CORE",dirname(dirname(__FILE__)));
define("FILE",dirname(dirname(__FILE__)) . "/data/");
define("GIT",dirname(dirname(dirname(__FILE__))) . "/git/"); 
define("SHOWAPP","../../git/app");
date_default_timezone_set("Asia/Shanghai");

require_once(CORE . "/class/fileCache.class.php");
require_once(CORE . "/class/mcrypt.class.php");



function F($model){
	$model=FILE . $model .".php"; 
	$class=new fileCache($model);
	return $class;
}

function T(){
require_once(CORE . "/lib/smart/Smarty.class.php");
$smarty = new Smarty; 
$smarty -> template_dir = GIT."/tpl"; //模板存放目录 
$smarty -> compile_dir = GIT."/tpl/cache"; //编译目录 
$smarty -> show_dir = GIT."/app"; //编译目录 
$smarty -> left_delimiter = "{{"; //左定界符 
$smarty -> right_delimiter = "}}"; //右定界符 
//$smarty->force_compile = true;
//$smarty->debugging = true;
//$smarty->caching = true;
//$smarty->cache_lifetime = 120;
return $smarty;
}
//过滤函数 
function filter($k){
	if(!isset($_REQUEST["func"])){
		echo "access deny";exit();
	}
	return $_REQUEST[$k];
}


 
?>