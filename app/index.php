<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
  <link rel="icon" type="image/png" href="assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="assets/css/admin.css"> 
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->
<?php require_once("header.php");?>
<?php require_once("slider.php");?>
<!-- content start -->
<div class="admin-content">

  <div class="am-cf am-padding">
    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">统计</strong> / <small>account</small></div>
  </div>

  <div class="am-tabs am-margin" data-am-tabs>
   
    

      <!-- 统计信息 -->
<ul class="am-avg-sm-1 am-avg-md-4 am-margin am-padding am-text-center admin-content-list ">
      <li><a href="../core/src/tpl.php?func=index" class="am-text-success"  target="_blank">
	  <span class="am-icon-btn am-icon-file-text"></span><br>生成主页</a>
	  </li>
      <li><a href="../core/src/tpl.php?func=list" class="am-text-warning" target="_blank">
	  <span class="am-icon-btn am-icon-briefcase"></span><br>生成列表<br></a></li>
      <li><a href="#" class="am-text-danger"><span class="am-icon-btn am-icon-recycle"></span><br>昨日访问<br>80082</a></li>
      <li><a href="#" class="am-text-secondary"><span class="am-icon-btn am-icon-user-md"></span><br>在线用户<br>3000</a></li>
    </ul>

      <!-- 统计信息 -->
    
  </div>

  
   
</div>
<!-- content end -->

</div>

<a class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<?php require_once("footer.php");?>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/polyfill/rem.min.js"></script>
<script src="assets/js/polyfill/respond.min.js"></script>
<script src="assets/js/amazeui.legacy.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/amazeui.min.js"></script>
<!--<![endif]-->
<script src="assets/js/app.js"></script>



    <link href="um/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" charset="utf-8" src="um/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="um/umeditor.min.js"></script>
    <script type="text/javascript" src="um/lang/zh-cn/zh-cn.js"></script>
<script>
   var um = UM.getEditor('myEditor');
</script>
</body>
</html>
