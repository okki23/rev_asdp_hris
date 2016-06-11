<?php
/* Smarty version 3.1.29, created on 2016-06-06 05:28:06
  from "C:\xampp\htdocs\asdp\application\views\templates\home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5754edc6c7edf7_30264315',
  'file_dependency' => 
  array (
    '0724329792f2859494788ef654686b5206696b4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\asdp\\application\\views\\templates\\home.tpl',
      1 => 1465048368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:topmenu.tpl' => 1,
    'file:rightmenu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5754edc6c7edf7_30264315 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '136605754edc6bfca63_21335586';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
$(document).ready(function() {
    var panels = $('#menu').accordion('panels');
    $.each(panels, function() {
        this.panel('collapse');
    });
});

<?php echo '</script'; ?>
>
	<body>
	<div class="easyui-layout" data-options="fit:'true'">
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:topmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:rightmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		
		<div data-options="region:'west',split:true,hideCollapsedContent:false" title="Main Menu" style="width:210px;">
			<div id="menu" class="easyui-accordion" data-options="fit:true,border:false">
				<div title="Master" style="padding:10px;" data-options="selected:false" >
				<div class="easyui-panel" style="padding:5px">
			<ul class="easyui-tree" >
                   <!-- <li><a href="#" onclick="addTab('Pegawai','<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
pegawai')">Pegawai</a></li>-->
			</ul>
			</div>
				</div>
				<div title="Organization Management" style="padding:10px;">
					<ul class="easyui-tree" >
                    <li><a href="#" onclick="addTab('Organization Management','<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
orm')">Organization Management</a></li>
					</ul>
				</div>
				<div title="Personal Administration" style="padding:10px;">
					<ul class="easyui-tree" >
                    <li><a href="#" onclick="addTab('Employee Management','<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
pegawai')">Employee Management</a></li>
					</ul>
				</div>
				<div title="Key Performance Indicator (KPI)"  style="padding:10px;">
					<!--<a href="#" class="easyui-linkbutton" onclick="addTab('jquery','http://jquery.com/')">jquery</a>-->
				</div>
				<div title="Competency" style="padding:10px">
					<!--<a href="#" class="easyui-linkbutton" onclick="addTab('easyui','http://jeasyui.com/')">easyui</a>-->
				</div>
			</div>
		</div>
		<div data-options="region:'center',title:'Dashboard',iconCls:'icon-ok'">
			<div id="tt" class="easyui-tabs" data-options="fit:true,border:false,plain:false" >
		<div title="Home">
		</div>
	</div>
		</div>

	       <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		   
		   <?php }
}
