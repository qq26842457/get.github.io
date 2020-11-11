<?php
/* Smarty version 3.1.30, created on 2020-11-11 02:45:00
  from "E:\vblog\git\tpl\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5fab502c95cf20_41520223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6a28877efdd46a9a8141af21de8340240e58222' => 
    array (
      0 => 'E:\\vblog\\git\\tpl\\index.html',
      1 => 1605062694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fab502c95cf20_41520223 (Smarty_Internal_Template $_smarty_tpl) {
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
				<h3 class="accent"><?php echo $_smarty_tpl->tpl_vars['data']->value["name"];?>
</h3>
				<h2><?php echo $_smarty_tpl->tpl_vars['data']->value["email"];?>
</h2>
				<p>
				<?php echo $_smarty_tpl->tpl_vars['data']->value["intro"];?>

				</p>
				<div class="row">
					<div class="col-md-offset-8 col-md-4">
						<a href="list.html" class="btn btn-large btn-success">查看文章</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-12">
			<div class="skills">
				<h2 class="white">Skills</h2>
				<strong>PHP MySQL</strong>
				<span class="pull-right">95%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-primary" role="progressbar" 
                        aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
					</div>
				<strong>html/css</strong>
				<span class="pull-right">92%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-primary" role="progressbar" 
                        aria-valuenow="92" aria-valuemin="0" aria-valuemax="100" style="width: 92%;"></div>
					</div>
				<strong>js</strong>
				<span class="pull-right">93%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-primary" role="progressbar" 
                        aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style="width: 93%;"></div>
					</div>
					
			</div>
		</div>
	</div>
</section>

 <section class="container">
	<div class="row">
		<div class="col-md-8 col-sm-12">
			<div class="education">
				<h2 class="white">经历</h2>
					<div class="education-content">
						<h4 class="education-title accent"></h4>

							<?php echo $_smarty_tpl->tpl_vars['data']->value["module1"];?>

					</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-12">
			<div class="languages">
				<h2>Languages</h2>
					<ul>
						<li>html / css</li>
						<li>js / jquery</li>
						<li>php / thinkphp laravel</li>
						<li>db / mysql oracle</li>
					</ul>
			</div>
		</div>
	</div>
</section>


<section class="container">
	<div class="row">
		<div class="col-md-4 col-sm-12">
			<div class="contact">
				<h2>Contact</h2>
					<p><i class="fa fa-map-marker"></i> 宇宙某个角落</p>
					<!--<p><i class="fa fa-phone"></i> 136****0619</p>-->
					<p><i class="fa fa-envelope"></i> 372664268@qq.com</p>
					<p><i class="fa fa-globe"></i> www.tvpop.xyz</p>
			</div>
		</div>
		<div class="col-md-8 col-sm-12">
			<div class="experience">
				<h2 class="white">职场语录</h2>
					<div class="experience-content">

						<?php echo $_smarty_tpl->tpl_vars['data']->value["module2"];?>

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
				<p>Copyright &copy; 2020 All rights reserved. </p>
				<!--<ul class="social-icons">-->
					<!--<li><a href="#" class="fa fa-facebook"></a></li>-->
                    <!--<li><a href="#" class="fa fa-google-plus"></a></li>-->
					<!--<li><a href="#" class="fa fa-twitter"></a></li>-->
					<!--<li><a href="#" class="fa fa-dribbble"></a></li>-->
					<!--<li><a href="#" class="fa fa-github"></a></li>-->
					<!--<li><a href="#" class="fa fa-behance"></a></li>-->
				<!--</ul>-->
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
