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

	<div data-options="region:'west',split:false,hideCollapsedContent:false,singleSelect:true" collapsed="false" title="Data Penugasan" style="width:50%;">


    <table id="tbl" class="easyui-datagrid" data-options="fit:true,border:false" url="<?php echo base_url();?>penugasan/get_all_penugasan_detail_json/<?php echo $personnel_id;?>" toolbar="#toolbar" pagination="true" rownumbers="true" fitColumns="true" singleSelect="true" >

		<thead>
			<tr>
				<th field="personnel_id" width="20">Personnel ID</th>
				<th field="tipe_penugasan" width="30">Tipe Penugasan</th>
				<th field="alasan_penugasan" width="20">Alasan Penugasan</th>
			 
 
			</tr>
		</thead>
	</table>


	<div id="toolbar">
	
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="getTab('New Penugasan','<?php echo base_url();?>penugasan/penugasan_detail_add/<?php echo $personnel_id;?>')"> New  </a>
		 
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="Delete();"> Delete  </a>	 
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
        function Delete(){
        	var row = $('#tbl').datagrid('getSelected');
      		$.post('<?php echo base_url();?>penugasan/penugasan_detail_delete/'+row.personnel_id+'/'+row.assignment_type+'/'+row.assignment_reason,
      			function(result){
            	if (result.success){
                	$('#tbl').datagrid('reload');    // reload the user data
                } else {
                	$.messager.show({    // show error message
               		title: 'Error',
                	msg: result.errorMsg
               		});
                }
            },'json');
        }
		function EditData(){
			var row = $('#tbl').datagrid('getSelected');
			
			if (row){
				//var p = $('#tt').tabs('getTab', 0);  // get the first tab panel
				//p.panel('refresh');
				
				getTab('Penugasan','<?php echo base_url();?>penugasan/penugasan_detail_update/'+row.personnel_id+'/'+row.assignment_type+'/'+row.assignment_reason);
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
 


 