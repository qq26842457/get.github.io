<?php
/* Smarty version 3.1.30, created on 2016-08-12 09:50:57
  from "E:\code\phpweb\blog\git\tpl\list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ad2b8159ba86_37405178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '617981811abc63832b0a1371024b2bb67596b086' => 
    array (
      0 => 'E:\\code\\phpweb\\blog\\git\\tpl\\list.html',
      1 => 1470966649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ad2b8159ba86_37405178 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $_smarty_tpl->tpl_vars['data']->value["name"];?>
</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- stylesheet css -->
	<link rel="stylesheet" href="../theme/css/bootstrap.min.css">
	<link rel="stylesheet" href="../theme/css/font-awesome.min.css">
	<link rel="stylesheet" href="../theme/css/templatemo-blue.css">
</head>
<body data-spy="scroll" data-target=".navbar-collapse">
<style>
#list{
margin:40px auto;
	display:block;
}
#list li{
color:#999;
line-height:24px;
list-style-type:none;
}
#list li a{
color:#666;
font-size:20px; 
text-decoration:none;
}
#list li a:hover{
color:#3366CC;
}

#list li small{
float:right;
color:#999;
font-size:16px; 
}
</style>
<!-- preloader section -->
<div class="preloader">
	<div class="sk-spinner sk-spinner-wordpress">
       <span class="sk-inner-circle"></span>
     </div>
</div>

<!-- header section -->
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<img src="../theme/images/tm-easy-profile.jpg" class="img-responsive img-circle tm-border" alt="templatemo easy profile">
				<hr>
				<h1 class="tm-title bold shadow"><?php echo $_smarty_tpl->tpl_vars['data']->value["name"];?>
</h1>
				<h1 class="white bold shadow"><?php echo $_smarty_tpl->tpl_vars['data']->value["email"];?>
</h1>
			</div>
		</div>
	</div>
</header>

<!-- about and skills section -->
<section class="container">
	<div class="row">
		<div class="col-md-8 col-sm-12">
			<div class="about">
				<h3 class="accent">文章列表</h3> 
				
				<ul id="list" class="list-group"> 
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?> 
				<li class="list-group-item"><a href="<?php echo $_smarty_tpl->tpl_vars['val']->value["url"];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value["title"];?>
</a><small><?php echo $_smarty_tpl->tpl_vars['val']->value["url"];?>
</small></li>
					
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</li>
			</div>
		</div>
		<div class="col-md-4 col-sm-12">
			<div class="skills">
				<h2 class="white">Skills</h2>
				<strong>PHP MySQL</strong>
				<span class="pull-right">80%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-primary" role="progressbar" 
                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
					</div>
				<strong>html/css</strong>
				<span class="pull-right">85%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-primary" role="progressbar" 
                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
					</div>
				<strong>js</strong>
				<span class="pull-right">75%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-primary" role="progressbar" 
                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
					</div>
					
			</div>
		</div>
	</div>
</section>

 
<!-- footer section -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<p>Copyright &copy; 2016.yangakw All rights reserved. </p>
				<ul class="social-icons">
					<li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-google-plus"></a></li>
					<li><a href="#" class="fa fa-twitter"></a></li>
					<li><a href="#" class="fa fa-dribbble"></a></li>
					<li><a href="#" class="fa fa-github"></a></li>
					<li><a href="#" class="fa fa-behance"></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>

<!-- javascript js -->	
<?php echo '<script'; ?>
 src="../theme/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../theme/js/bootstrap.min.js"><?php echo '</script'; ?>
>	
<?php echo '<script'; ?>
 src="../theme/js/jquery.backstretch.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../theme/js/custom.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
