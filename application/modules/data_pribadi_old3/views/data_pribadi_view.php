<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/themes/icon.css">
	<script type="text/javascript" src="<?php echo base_url();?>assets/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/jquery.easyui.min.js"></script>
	<script type="text/javascript" src="http://localhost/asdp/assets/datagrid-filter.js"></script>
	


<body>
<div class="easyui-layout" data-options="fit:true,border:false" >

<div data-options="region:'west',split:false,hideCollapsedContent:false,singleSelect:true" collapsed="false" title="Data Personal" style="width:40%;">

<table id="tbl" class="easyui-datagrid" data-options="fit:true,border:false,method:'get',editUser: editUser" 
			url="data_pribadi/get_all_data_pribadi_json"
			toolbar="#toolbar" pagination="true"
			rownumbers="true" fitColumns="true" singleSelect="true" >
		<thead>
			<tr>
				<th field="personnel_id" width="30">NIK</th>
				<th field="name_full" width="60">Nama</th>
				<!--<th field="start_date" width="20">Tanggal Masuk</th>-->
				
			</tr>
		</thead>
	</table>
	<div id="toolbar">
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="getTab('New Pegawai','pegawai/add_pegawai')">New</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">New</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Edit</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Remove</a>
		<a href="#" class="easyui-linkbutton" plain="true" onclick="progress()" iconCls="icon-reload">Refresh</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" onclick="$('#w').window('open');">Open</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" onclick="$('#wr').window('open')">Close</a>
	</div>
</div>
<div data-options="region:'center',border:false" style="width:60%;">
    <div id="tt" class="easyui-tabs" fit="true">
		
	</div>
	</div>

</div>



<div id="dlg" class="easyui-window" style="width:400px;height:280px;padding:10px 20px"
			closed="true" toolbar="#dlgx-toolbar">
		<div class="ftitle">Information</div>
		<form id="fm" method="post" novalidate>
			<div class="fitem">
				<label>NIK:</label>
				<input name="nik" class="easyui-textbox" required="true">
			</div>
			<div class="fitem">
				<label>Nama:</label>
				<input name="nama" class="easyui-textbox" required="true">
			</div>
			
		</form>
	</div>
<div id="dlg-buttons">
		<a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px">Save</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancel</a>
	</div>
	<div id="dlg0-toolbar">
    <a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="javascript:alert('Add')">Add</a>
    <a href="#" class="easyui-linkbutton" iconCls="icon-save" plain="true" onclick="javascript:alert('Save')">Save</a>
	
</div>
<div id="wr" data-options="modal:true,closed:true,iconCls:'icon-save'" class="easyui-window" style="padding:5px;width:400px;height:200px;"
        title="My Dialog" iconCls="icon-ok"
        toolbar="#dlg0-toolbar" >
    <form id="fm" method="post" novalidate>
			<div class="fitem">
				<label>NIK:</label>
				<input name="nik" class="easyui-textbox" required="true">
			</div>
			<div class="fitem">
				<label>Nama:</label>
				<input name="nama" class="easyui-textbox" required="true">
			</div>
			
		</form>
</div>
	<div id="w" data-options="modal:true,closed:true,iconCls:'icon-save'" class="easyui-window" toolbar="#dlg0-toolbar" iconCls="icon-ok" title="Modal Window" style="padding:5px;width:600px;height:200px;">
		<div class="easyui-layout" data-options="fit:true">
            <div data-options="region:'east',split:true" style="width:100px"></div>
            <div data-options="region:'center'" style="padding:10px;">
                jQuery EasyUI framework help you build your web page easily.
            </div>
            <div data-options="region:'south',border:false" style="text-align:right;padding:5px 0 0;">
                <a class="easyui-linkbutton" data-options="iconCls:'icon-ok'" href="javascript:void(0)" onclick="javascript:alert('ok')" style="width:80px">Ok</a>
                <a class="easyui-linkbutton" data-options="iconCls:'icon-cancel'" href="javascript:void(0)" onclick="javascript:alert('cancel')" style="width:80px">Cancel</a>
            </div>
        </div>
	</div>	
	<div id="wk" class="easyui-window" title="Fluid Window" style="width:80%;height:200px;padding:10px;" data-options="
			iconCls:'icon-save',
			closed:true,
			onResize:function(){
				$(this).window('hcenter');
			}">
		<p>The window has a width of 80%.</p>
	</div>
</body>
<script>
		var url;
		function newUser(){
			$('#dlg').dialog('open').dialog('setTitle','New User');
			$('#fm').form('clear');
			//url = 'pegawai/pro_add_pegawai';
		}
		function saveUser(){
			$('#fm').form('submit',{
				url: 'pegawai/pro_add_pegawai',
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.errorMsg){
						$.messager.show({
							title: 'Error',
							msg: result.errorMsg
						});
					} else {
						$('#dlg').dialog('close');		// close the dialog
						$('#tbl').datagrid('reload');	// reload the user data
					}
				}
			});
		}
		function editUser(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$('#dlg').dialog('open').dialog('setTitle','Edit User');
				$('#fm').form('load',row);
				url = 'update_user.php?id='+row.id;
			}
		}
		function progress(){
            var win = $.messager.progress({
                title:'Please waiting',
                msg:'Loading data...'
            });
            setTimeout(function(){
				$('#tbl').datagrid('reload');
                $.messager.progress('close');
            },0)
			
        }
		function getTab(title, url){
			if ($('#tt').tabs('exists', title)){
				$('#tt').tabs('select', title);
				//$('#tt').tabs('close', title);
				//progress();
				//editUser();
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
	</script>
	