<?php
/* Smarty version 3.1.29, created on 2016-05-03 11:45:09
  from "C:\xampp2\htdocs\CodeIgniter-3.0.6\application\views\templates\signin.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57287325c7a314_59633012',
  'file_dependency' => 
  array (
    '441383680c52e6501c14dbfc5b91814a6d61d7be' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\CodeIgniter-3.0.6\\application\\views\\templates\\signin.tpl',
      1 => 1462268699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_57287325c7a314_59633012 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/londinium-theme.css" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/icons.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">

<?php echo '<script'; ?>
 type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/charts/sparkline.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/uniform.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/select2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/inputmask.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/autosize.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/inputlimit.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/listbox.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/multiselect.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/validate.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/tags.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/switch.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/uploader/plupload.full.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/uploader/plupload.queue.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/wysihtml5/wysihtml5.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/wysihtml5/toolbar.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/interface/daterangepicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/interface/fancybox.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/interface/moment.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/interface/jgrowl.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/interface/datatables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/interface/colorpicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/interface/fullcalendar.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/interface/timepicker.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/application.js"><?php echo '</script'; ?>
>

</head>

<body class="full-width page-condensed">

	<!-- Navbar -->
	<div class="navbar navbar-inverse" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-right">
				<span class="sr-only">Toggle navbar</span>
				<i class="icon-grid3"></i>
			</button>
			<a class="navbar-brand" style="margin-top:-4px;" href="#"><img src="images/logo.png" alt="Cost Control Project "></a>
		</div>

		<ul class="nav navbar-nav navbar-right collapse">
			
			
		</ul>
	</div>
	<!-- /navbar -->

	<!-- Login wrapper -->
	<div class="login-wrapper">
    	<form action="auth/login" role="form" method="POST">
			<div class="popup-header">
				<a href="http://www.veriarinal.com/sianew/manual/PanduanPendaftaranSkripsiOnline.pdf" class="pull-left"><i class="icon-user-plus"></i></a>
				<span class="text-semibold">User Login</span>
				<div class="btn-group pull-right">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cogs"></i></a>
                    <ul class="dropdown-menu icons-right dropdown-menu-right">
						<!--<li><a href="#"><i class="icon-people"></i> Change user</a></li>-->
						<li><a href="#"><i class="icon-info"></i> Forgot password?</a></li>
						<li><a href="http://www.veriarinal.com/www/daftar.html"><i class="icon-support"></i> Create Account</a></li>
						<!--<li><a href="#"><i class="icon-wrench"></i> Settings</a></li>-->
                    </ul>
				</div>
			</div>
			<div class="well">
				<div class="form-group has-feedback">
					<label>Username</label>
					<input type="text" class="form-control" placeholder="Username" name="username" required>
					<i class="icon-users form-control-feedback"></i>
				</div>

				<div class="form-group has-feedback">
					<label>Password</label>
					<input type="password" class="form-control" placeholder="Password" name="password" required>
					<i class="icon-lock form-control-feedback"></i>
				</div>

				<div class="row form-actions">
					<div class="col-xs-6">
						<div class="checkbox checkbox-success">
						<label>
							<input type="checkbox" class="styled">
							Remember me
						</label>
						</div>
					</div>

					<div class="col-xs-6">
						<button type="submit" class="btn btn-warning pull-right"><i class="icon-menu2"></i> Sign in</button>
					</div>
				</div>
			</div>
    	</form>
	</div>  
	<!-- /login wrapper -->
	
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
