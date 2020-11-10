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
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">个人资料</strong> / <small>Personal information</small></div>
    </div>

    <hr/>

    <div class="am-g">

      <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8">
       
      
      </div>

      <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
        <form class="am-form am-form-horizontal">
          <div class="am-form-group">
            <label for="user-name" class="am-u-sm-3 am-form-label">姓名 / Name</label>
            <div class="am-u-sm-9">
              <input type="text" id="user-name" placeholder="姓名 / Name">
              <small>输入你的名字，让我们记住你。</small>
            </div>
          </div>

          <div class="am-form-group">
            <label for="user-email" class="am-u-sm-3 am-form-label">电子邮件 / Email</label>
            <div class="am-u-sm-9">
              <input type="email" id="user-email" placeholder="输入你的电子邮件 / Email">
              <small>邮箱你懂得...</small>
            </div>
          </div>

          <div class="am-form-group">
            <label for="user-phone" class="am-u-sm-3 am-form-label">电话 / Telephone</label>
            <div class="am-u-sm-9">
              <input type="text" id="user-phone" placeholder="输入你的电话号码 / Telephone">
            </div>
          </div>

          <div class="am-form-group">
            <label for="user-QQ" class="am-u-sm-3 am-form-label">QQ</label>
            <div class="am-u-sm-9">
              <input type="text" id="user-QQ" placeholder="输入你的QQ号码">
            </div>
          </div>

          <div class="am-form-group">
            <label for="user-weibo" class="am-u-sm-3 am-form-label">微博 / Twitter</label>
            <div class="am-u-sm-9">
              <input type="text" id="user-weibo" placeholder="输入你的微博 / Twitter">
            </div>
          </div>

          <div class="am-form-group">
            <label for="user-intro" class="am-u-sm-3 am-form-label">简介 / Intro</label>
            <div class="am-u-sm-9">
              <textarea class="" rows="5" id="user-intro" placeholder="输入个人简介"></textarea>
              <small>250字以内写出你的一生...</small>
            </div>
          </div>
		  
		     <div class="am-form-group">
            <label for="user-intro" class="am-u-sm-3 am-form-label">模块 / Module1</label>
            <div class="am-u-sm-9">
              <textarea class="" rows="5" id="user-module1" placeholder="输入"></textarea>
            </div>
          </div>
		  
		     <div class="am-form-group">
            <label for="user-intro" class="am-u-sm-3 am-form-label">模块 / Module2</label>
            <div class="am-u-sm-9">
              <textarea class="" rows="5" id="user-module2" placeholder="输入"></textarea>
            </div>
          </div>
		  
		     <div class="am-form-group">
            <label for="user-intro" class="am-u-sm-3 am-form-label">模块 / Module3</label>
            <div class="am-u-sm-9">
              <textarea class="" rows="5" id="user-module3" placeholder="输入"></textarea>
            </div>
          </div>
		  

          <div class="am-form-group">
            <div class="am-u-sm-9 am-u-sm-push-3">
              <button type="button" class="am-btn am-btn-primary" onClick="app.editsub()">保存修改</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- content end -->

</div>

<a class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>
 

 <?php 
require_once("footer.php");
 ?>

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
<script>
app={
	load:function(){
		$.post(this.url,{"func":"about"},function(d,e){ 
			var data=d; 
			$("#user-name").val(data.name);
			$("#user-phone").val(data.phone);
			$("#user-email").val(data.email);
			$("#user-QQ").val(data.QQ);
			$("#user-weibo").val(data.weibo);
			$("#user-intro").val(data.intro);
			$("#user-module1").val(data.module1);
			$("#user-module2").val(data.module2);
			$("#user-module3").val(data.module3);
		});
	},
	url:"../core/src/about.php",
	editsub:function(){
		var form={
			"name":$("#user-name").val(),
			"phone":$("#user-phone").val(),
			"email":$("#user-email").val(),
			"weibo":$("#user-weibo").val(),
			"QQ":$("#user-QQ").val(),
			"intro":$("#user-intro").val(),
			"module1":$("#user-module1").val(),
			"module2":$("#user-module2").val(),
			"module3":$("#user-module3").val(),
		};
		$.post(this.url,{"func":"editsub","form":form},function(){
			location.reload(true);
		});
	}
	
};
$(function(){
	app.load();
});
</script>
</body>
</html>
