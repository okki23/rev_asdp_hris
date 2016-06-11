<?php
/* Smarty version 3.1.29, created on 2016-06-04 05:43:17
  from "C:\xampp\htdocs\asdp\application\views\templates\orm_edit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57524e550a8b72_77640529',
  'file_dependency' => 
  array (
    '71efa4eb925155900c0f911b9a2c13dd9a6e6d04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\asdp\\application\\views\\templates\\orm_edit.tpl',
      1 => 1465011793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57524e550a8b72_77640529 ($_smarty_tpl) {
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
assets/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
assets/themes/icon.css">
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
assets/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
assets/jquery.easyui.min.js"><?php echo '</script'; ?>
>

</head>	
	
	
		<div class="ftitle">Setting Organization</div>
		<form action="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
orm/update" method="post" novalidate>
		<input type=hidden name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
			<div class="fitem" style="font-size:10px;">
				<label style="width:120px;">Company:</label>
				<input name="company" value="<?php echo $_smarty_tpl->tpl_vars['kdcp']->value;?>
" data-options="prompt:'Company Code'" class="easyui-textbox">
			</div>
			<div class="fitem" style="font-size:10px;">
				<label style="width:120px;">Organization:</label>
				<input name="code" value="<?php echo $_smarty_tpl->tpl_vars['kode']->value;?>
" data-options="prompt:'Code'" class="easyui-textbox" required="true"> - <input data-options="prompt:'Name'" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="easyui-textbox" required>
			</div>
			<div class="fitem" style="font-size:10px;">
				<label style="width:120px;">Area:</label>
				<!--<input name="area" class="easyui-textbox" value="<?php echo $_smarty_tpl->tpl_vars['area']->value;?>
">-->
				<select class="easyui-combobox" name="area" style="width:120px;">
				<?php if ($_smarty_tpl->tpl_vars['area']->value == "D") {?>
				<option value="">Pilih</option>
                <option value="D" selected=selected>Darat</option>
                <option value="L">Laut</option>
				<?php } elseif ($_smarty_tpl->tpl_vars['area']->value == "L") {?>
				<option value="">Pilih</option>
                <option value="D" >Darat</option>
                <option value="L" selected=selected>Laut</option>
				<?php } else { ?>
				<option value="">Pilih</option>
                <option value="D">Darat</option>
                <option value="L">Laut</option>
				<?php }?>
            </select>
			</div>
			<div class="fitem" style="font-size:10px;">
				<label style="width:120px;">Parent Code:</label>
				<input name="parentname" value="<?php echo $_smarty_tpl->tpl_vars['parentcode']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['parentname']->value;?>
" class="easyui-textbox" readonly style="width:250px;">
				<input type=hidden name="parentcode" value="<?php echo $_smarty_tpl->tpl_vars['parentcode']->value;?>
">
				<!--<input id="cc" style="width:320px;" class="easyui-combobox" name="parentcode" data-options="prompt:'Parent Code',valueField:'code',textField:'name',url:'<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
orm/datacombo'" >-->
				</div>
			</div>
			<div class="fitem" style="font-size:10px;">
				<label style="width:120px;">Periode:</label>
            <input style="width:100px;" name="datestart" value="<?php echo $_smarty_tpl->tpl_vars['datenow']->value;?>
" class="easyui-datebox" > - 
            <input style="width:100px;" name="dateend" value="<?php echo $_smarty_tpl->tpl_vars['enddate']->value;?>
" class="easyui-datebox" >
			</div>
			<button type="submit" class="easyui-linkbutton c6" iconCls="icon-ok">Save</button>
		</form>
	
	<style type="text/css">
		#fm{
			margin:0;
			padding:10px 30px;
		}
		.ftitle{
			font-size:14px;
			font-weight:bold;
			padding:5px 0;
			margin-bottom:10px;
			border-bottom:1px solid #ccc;
		}
		.fitem{
			margin-bottom:5px;
		}
		.fitem label{
			display:inline-block;
			width:80px;
		}
		.fitem input{
			width:160px;
		}
	</style>
	<?php echo '<script'; ?>
>	
$.fn.datebox.defaults.formatter = function(date){
		var y = date.getFullYear();
		var m = date.getMonth()+1;
		var d = date.getDate();
		return (d<10?('0'+d):d)+'-'+(m<10?('0'+m):m)+'-'+y;
	};
	$.fn.datebox.defaults.parser = function(s){
		if (!s) return new Date();
		var ss = s.split('-');
		var d = parseInt(ss[0],10);
		var m = parseInt(ss[1],10);
		var y = parseInt(ss[2],10);
		if (!isNaN(y) && !isNaN(m) && !isNaN(d)){
			return new Date(y,m-1,d);
		} else {
			return new Date();
		}
	};
<?php echo '</script'; ?>
>			<?php }
}
