<?php
/* Smarty version 3.1.29, created on 2016-05-21 08:06:55
  from "C:\xampp\htdocs\asdp\application\views\templates\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573ffaff305120_96015916',
  'file_dependency' => 
  array (
    '75d95befbe0db49b4def3d5f573a3c92966ac4d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\asdp\\application\\views\\templates\\header.tpl',
      1 => 1463731624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_573ffaff305120_96015916 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<link rel="stylesheet" type="text/css" href="../assets/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="../assets/themes/icon.css">
	<?php echo '<script'; ?>
 type="text/javascript" src="../assets/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="../assets/jquery.easyui.min.js"><?php echo '</script'; ?>
>
</head>
<?php echo '<script'; ?>
>
		function addTab(title, url){
			if ($('#tt').tabs('exists', title)){
				$('#tt').tabs('select', title);
			} else {
				var content = '<iframe scrolling="auto" frameborder="0"  src="'+url+'" style="width:100%;height:100%;"></iframe>';
				$('#tt').tabs('add',{
					title:title,
					content:content,
					closable:true
				});
			}
		}
	<?php echo '</script'; ?>
>
<!--
			<li class="user dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown">
					<img src="http://placehold.it/300">
					<span><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span>
					<i class="caret"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-right icons-right">
					<li><a href="password.php"><i class="icon-key"></i> Change Password</a></li>
					<li><a href=".."><i class="icon-exit"></i> Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>-->
	<!-- /navbar --><?php }
}
