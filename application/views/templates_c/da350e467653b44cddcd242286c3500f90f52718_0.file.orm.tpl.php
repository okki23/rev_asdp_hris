<?php
/* Smarty version 3.1.29, created on 2016-06-05 14:58:17
  from "C:\xampp\htdocs\asdp\application\views\templates\orm.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575421e9419272_44172442',
  'file_dependency' => 
  array (
    'da350e467653b44cddcd242286c3500f90f52718' => 
    array (
      0 => 'C:\\xampp\\htdocs\\asdp\\application\\views\\templates\\orm.tpl',
      1 => 1465048604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_575421e9419272_44172442 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	
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
	<div id="toolbar">
		<!--<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="addTab('New Organization','orm/add')">New</a>-->
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="NewOrm()">New</a>
		 
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="EditOrm()">Edit</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="Destroy()">Delete</a>
		<a href="#" class="easyui-linkbutton" plain="true" onclick="progress()" iconCls="icon-reload">Refresh</a>
	</div>
	
        <div class="easyui-layout" data-options="fit:true,border:false" >
		
	<!--<div id="menu" region="west" split="false" hideCollapsedContent="false" title="Struktur Organization" style="width:30%;">-->
	<!--<div data-options="region:'west',split:true,hideCollapsedContent:false" title="Main Menu" style="width:210px;">-->
	<div data-options="region:'west',split:true,hideCollapsedContent:false" title="Struktur Organisasi" style="width:40%;">
	
        <table id="tbl" class="easyui-treegrid" data-options="fit:true,border:false" 
			url="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
orm/data"
			rownumbers="true"
			idField="code" treeField="name"
			toolbar="#toolbar" 
			fitColumns="false" singleSelect="true" >
		<thead>
			<tr>
				<th field="name" width="250">Name</th>
				<th field="code" width="100" align="left">Kode</th>
				<th field="area" width="50" align="center">Area</th>
				<!--<th field="total" width="150" align="right" formatter="formatDollar">Pusat/Cabang</th>-->
			</tr>
		</thead>
	</table>
    </div>
	<div data-options="region:'center',split:true,border:false" style="width:60%;">
    <div id="tt" class="easyui-tabs" fit="true">
		
	</div>
	</div>

	
	
	</div>
	
	<?php echo '<script'; ?>
 type="text/javascript">
	var editIndex = undefined;
		function progress(){
            var win = $.messager.progress({
                title:'Please waiting',
                msg:'Loading data...'
            });
            setTimeout(function(){
				$('#tbl').treegrid('reload');
                $.messager.progress('close');
            },1000)
			
        }
		function progress2(){
            var win = $.messager.progress({
                title:'Please waiting',
                msg:'Loading data...'
            });
            setTimeout(function(){
				//$('#tbl').treegrid('reload');
                $.messager.progress('close');
            },1000)
			
        }
		function NewOrm(){
			var row = $('#tbl').datagrid('getSelected');
			
			if (row){
				progress2()
				//var p = $('#tt').tabs('getTab', 0);  // get the first tab panel
				//p.panel('refresh');
				//progress();
				getTab('New Organization','orm/add/'+row.code);
				//url = 'update_user.php?id='+row.id;
			}else{
				$.messager.alert('Information','Silakan pilih data ditabel dulu');
			}
		}
		function EditOrm(){
			var row = $('#tbl').datagrid('getSelected');
			
			if (row){
				//var p = $('#tt').tabs('getTab', 0);  // get the first tab panel
				//p.panel('refresh');
				progress2();
				getTabs('Edit Organization','orm/edit/'+row.code);
				//url = 'update_user.php?id='+row.id;
			}else{
				$.messager.alert('Information','Silakan pilih data ditabel dulu');
			}
		}
		function getTab(title, url){
			if ($('#tt').tabs('exists', title)){
				$('#tt').tabs('select', title);
				$('#tt').tabs('close', title);
				progress2();
				NewOrm();
				//var p = $('#tt').tabs('getTab', 0);  // get the first tab panel
				//p.panel('refresh');
			} else {
				var content = '<iframe scrolling="auto" frameborder="0"  src="'+url+'" style="width:100%;height:100%;"></iframe>';
				$('#tt').tabs('add',{
					title:title,
					content:content,
					closable:true
				});
				
			}
		}
		function getTabs(title, url){
			if ($('#tt').tabs('exists', title)){
				$('#tt').tabs('select', title);
				$('#tt').tabs('close', title);
				progress2();
				EditOrm();
				//var p = $('#tt').tabs('getTab', 0);  // get the first tab panel
				//p.panel('refresh');
			} else {
				var content = '<iframe scrolling="auto" frameborder="0"  src="'+url+'" style="width:100%;height:100%;"></iframe>';
				$('#tt').tabs('add',{
					title:title,
					content:content,
					closable:true
				});
				
			}
		}
	function Destroy(){
			var row = $('#tbl').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','Are you sure you want to delete this record?',function(r){
					if (r){
						$.post('orm/delete/'+row.code,{code:row.code},function(result){
							progress()
								$.messager.show({	// show error message
									title: 'Information',
									msg: 'Delete Success'
								});
							//$('#tbl').datagrid('reload');
						},'json');
					}
				});
			}else{
				$.messager.alert('Information','Silakan pilih data ditabel dulu');
			}
		}
	<?php echo '</script'; ?>
>
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
	<?php }
}
