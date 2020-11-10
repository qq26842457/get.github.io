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
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">文章</strong> / <small>form</small></div>
    </div>

    <div class="am-tabs am-margin" data-am-tabs>

      <ul class="am-tabs-nav am-nav am-nav-tabs">

        <li></li>
      </ul>
      <div class="am-tabs-bd">
        <!-- 正文    -->
        <div class="am-tab-panel am-fade" id="tab2">
          <form class="am-form">
            <div class="am-g am-margin-top">
              <div class="am-u-sm-4 am-u-md-2 am-text-right">
                文章标题
              </div>
              <div class="am-u-sm-8 am-u-md-4">
                <input type="text" name="title" class="am-input-sm">
              </div>
              <div class="am-hide-sm-only am-u-md-6">*必填</div>
            </div>

            <div class="am-g am-margin-top">
              <div class="am-u-sm-4 am-u-md-2 am-text-right">
                文章作者
              </div>
              <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                <input type="text" name="author" class="am-input-sm">
              </div>
            </div>

            <div class="am-g am-margin-top">
              <div class="am-u-sm-4 am-u-md-2 am-text-right">
                信息来源
              </div>
              <div class="am-u-sm-8 am-u-md-4">
                <input type="text" name="from" class="am-input-sm">
              </div>
              <div class="am-u-sm-12 am-u-md-6"> </div>
            </div>

            <div class="am-g am-margin-top">
              <div class="am-u-sm-4 am-u-md-2 am-text-right">
                标签
              </div>
              <div class="am-u-sm-8 am-u-md-4">
                <input type="text" name="tag" class="am-input-sm">
              </div>
          <div class="am-hide-sm-only am-u-md-6">*以，分开</div>
            </div>

            <div class="am-g am-margin-top-sm">
              <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
                内容描述
              </div>
              <div class="am-u-sm-12 am-u-md-10">
                <textarea rows="10" id="myEditor" name="body" placeholder="请使用富文本编辑插件"></textarea>
              </div>
            </div>

          </form>
        </div>
        <!-- 正文    --> 

      </div>
    </div>

    <div class="am-margin">
      <button type="button" onClick="app.add_art()" class="am-btn am-btn-primary am-btn-xs">提交保存</button>
      <button type="reset" class="am-btn am-btn-primary am-btn-xs">放弃保存</button>
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
var um = UM.getEditor('myEditor',{
	imageUrlPrefix:"/",
});
</script>
<script>

    app={
      url:"../core/src/article.php",
      key:0,
      GET:function(name) {

        　　var reg = new RegExp("(^|\\?|&)"+ name +"=([^&]*)(\\s|&|$)", "i");

        　　if (reg.test(location.href))

        　　return unescape(RegExp.$2.replace(/\+/g, " "));

        　　return "";

      },
      load:function(){ 
          var key=this.GET("key"); 
          if(key != undefined){
            var url=this.url;
            $.post(this.url,{"func":"load","key":key},function(d,e){
              var content=d.content;
              $("input[name='title']").val(content.title);
              $("input[name='author']").val(content.author);
              $("input[name='tag']").val(content.tag);
              $("input[name='from']").val(content.from);
              setTimeout(function(){
                um.setContent(content.body);
              },1000);
            });
          } 
      },
      add_art:function(){
          var from={
            "title":$("input[name='title']").val(),
            "author":$("input[name='author']").val(),
            "tag":$("input[name='tag']").val(),
            "from":$("input[name='from']").val(),
            "body":um.getContent(),
          };  
          if(!from.title || !from.author|| !from.tag|| !from.from|| !from.body){
            alert("补全内容");
            return false;
          }
          var key=(this.GET("key")==undefined)?0:this.GET("key");  
           $.post(this.url,{"func":"add_art","key":key,"edit":from},function(d,e){
              if(d.status){
                  alert("添加成功！");
                  location.href="list.php";
              }
            });
      },


    }; 
    $(function(){ 
      app.load(); 
    });
    </script>
  </body>
  </html>
