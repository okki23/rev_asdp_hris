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

	<div data-options="region:'west',split:false,hideCollapsedContent:false,singleSelect:true" collapsed="false" title="Data Personal" style="width:50%;">

 



    <table id="tbl" class="easyui-datagrid" data-options="fit:true,border:false" url="<?php echo base_url();?>data_pribadi/get_all_data_pribadi_json/<?php echo $personnel_id;?>" toolbar="#toolbar" pagination="true" rownumbers="true" fitColumns="true" singleSelect="true" >

		<thead>
			<tr>
				<th field="start_date" width="30">From</th>
				<th field="end_date" width="20">To</th>
				<th field="name_full" width="30">Nama Lengkap</th>
				<th field="gender" width="20">Gender</th>
				<th field="birth_date" width="10">Tanggal Lahir</th>
				<th field="religion" width="10">Agama</th>
				<th field="marital_status" width="10">Status Pernikahan</th>
 
			</tr>
		</thead>
	</table>


	<div id="toolbar">
	
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="getTab('New History','<?php echo base_url();?>data_pribadi/add_data_pribadi/<?php echo $personnel_id;?>')"> New  </a>

		 
		<!-- onclick="getTab('Update History','<?php echo base_url();?>data_pribadi/update_data_pribadi/<?php echo $personnel_id;?>')" -->
		<!--<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">New</a>-->
		 
		<a href="#" class="easyui-linkbutton" plain="true" onclick="progress()" iconCls="icon-reload">Refresh</a>
	</div>

	</div>
	<div data-options="region:'center',border:false" style="width:50%;">
    <div id="tt" class="easyui-tabs" fit="true">
		
	</div>
	</div>
</div>
 

</body>

<script>
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
		function EditData(){
			var row = $('#tbl').datagrid('getSelected');
			
			if (row){
				//var p = $('#tt').tabs('getTab', 0);  // get the first tab panel
				//p.panel('refresh');
				
				getTab('Update History','<?php echo base_url();?>data_pribadi/update_data_pribadi/'+row.personnel_id);
				//url = 'update_user.php?id='+row.id;
			}else{
				$.messager.alert('Information','Silakan pilih data ditabel dulu');
			}
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

		function NewData(title, url){
			getTab('New History','data_pribadi/data_pribadi_update_selected');
		}
		
    $(function(){
		//var dg = $('#tbl').datagrid();
         //dg.datagrid('enableFilter');
		 //$('#tbl').datagrid('enableFilter');
      $('#tbl').datagrid({
        onClickRow:function(){
        	//$('#tt').tabs('close', title);
			EditData();
		 // $('#tt').tabs('refresh');
        }
      });
	  var dg = $('#tbl').datagrid();
			dg.datagrid('enableFilter');
    });
	
  function checkData(){
        $('#tt').tabs('close',1);
    }

  function doSearch(){
    $('#tbl').datagrid('load',{
        itemid: $('#itemid').val(),
        productid: $('#productid').val()
    });
}
	</script>
 