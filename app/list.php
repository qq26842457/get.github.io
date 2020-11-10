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
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">文章列表</strong> / <small>list</small></div>
    </div>

    <!-- <div class="am-g">
      <div class="am-u-sm-12 am-u-md-6">
        <div class="am-btn-toolbar">
          <div class="am-btn-group am-btn-group-xs">
            <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 新增</button>
            <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 保存</button>
            <button type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 审核</button>
            <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button>
          </div>
        </div>
      </div>
      <div class="am-u-sm-12 am-u-md-3">
        <div class="am-form-group">
          <select data-am-selected="{btnSize: 'sm'}">
            <option value="option1">所有类别</option>
            <option value="option2">IT业界</option>
            <option value="option3">数码产品</option>
            <option value="option3">笔记本电脑</option>
            <option value="option3">平板电脑</option>
            <option value="option3">只能手机</option>
            <option value="option3">超极本</option>
          </select>
        </div>
      </div>
      <div class="am-u-sm-12 am-u-md-3">
        <div class="am-input-group am-input-group-sm">
          <input type="text" class="am-form-field">
          <span class="am-input-group-btn">
            <button class="am-btn am-btn-default" type="button">搜索</button>
          </span>
        </div>
      </div>
    </div>
  -->
  <div class="am-g">
    <div class="am-u-sm-12">
      <form class="am-form">
        <table class="am-table am-table-striped am-table-hover table-main">
          <thead>
            <tr>
              <th class="table-check"><input type="checkbox" /></th><th class="table-id">ID</th><th class="table-title">标题</th><th class="table-type">类别</th><th class="table-author am-hide-sm-only">作者</th><th class="table-date am-hide-sm-only">修改日期</th><th class="table-set">操作</th>
            </tr>
          </thead>
          <tbody>




          <!--   <tr>
            <td><input type="checkbox" /></td>
            <td>1</td>
            <td><a href="#">Business management</a></td>
            <td>default</td>
            <td class="am-hide-sm-only">测试1号</td>
            <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
            <td>
              <div class="am-btn-toolbar">
                <div class="am-btn-group am-btn-group-xs">
                  <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                  <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button>
                  <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                </div>
              </div>
            </td>
          </tr>
           -->

          </tbody>
        </table>
        <div class="am-cf">
          共 <span id="count"></span>条记录
          <div class="am-fr">
            <ul class="am-pagination">
              <li ><a href="#" id="left">«</a></li>
              <li class="am-active"><a href="#" id="now">1</a></li> 
              <li><a href="#" id="left">»</a></li>
            </ul>
          </div>
        </div>
        <hr />
        <p>文件数据保存到本地</p>
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
  url:"../core/src/list.php", 
  GET:function(name) {

    　　var reg = new RegExp("(^|\\?|&)"+ name +"=([^&]*)(\\s|&|$)", "i");

    　　if (reg.test(location.href))

      　　return unescape(RegExp.$2.replace(/\+/g, " "));

    　　return "";

  },
  load:function(){ 
    var page=this.GET("page")!=undefined ?this.GET("page"):0 ; 

    var url=this.url;
    var me=this;
    $.post(this.url,{"func":"getlist","page":page},function(d,e){
      var count=d.count;
      $("#count").html(count);
      
      data=d.data;
      $.each(data,function(k,v){
        $("tbody").append(me.tplhtml(v));

      });
    });
  } ,
  del:function(k){
    if(confirm("确认删除编号"+k+"的数据吗")){ 
        me=$(this);
        $.post(this.url,{"func":"del","key":k},function(d,e){
          location.reload();
        });
    }
  },
  tplhtml:function(d){  
    var s='<tr><td><input type="checkbox" /></td><td>'+d.key+'</td>';
    s+='<td><a href="form.php?key='+d.key+'">'+d.title+'</a></td>';
    s+='<td>'+d.from+'</td>';
    s+='<td class="am-hide-sm-only">'+d.author+'</td>';
    s+='<td class="am-hide-sm-only">'+this.getLocalTime(d.key)+'</td><td>'; 
    s+='<div class="am-btn-toolbar">';
    s+='<div class="am-btn-group am-btn-group-xs">';
    s+='<a href="form.php?key='+d.key+'" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</a>';
    s+='<a  onClick="app.del('+d.key+')" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</a>';
    s+='<a target="_blank" href="../core/src/tpl.php?func=see&key='+d.key+'"  class="am-btn am-btn-default am-btn-xs am-text-info"><span class="am-icon-trash-o"></span> 预览</a>';
    s+='</div>  </div>  </td></tr>';
    return s; 
  },
  getLocalTime:function (nS) {  
      return new Date(parseInt(nS) * 1000).toLocaleString().replace(/:\d{1,2}$/,' ');  
  }
}; 
$(function(){ 
  app.load(); 
});
</script>
</body>
</html>
