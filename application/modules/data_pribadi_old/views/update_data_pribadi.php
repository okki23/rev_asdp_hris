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

<div data-options="region:'west',split:false,hideCollapsedContent:false,singleSelect:true" collapsed="false" title="Update History Employee" style="width:100%;">
        <?php 
        foreach ($data_employee->result() as $rowdata) {
          $personnel_id = $rowdata->personnel_id;
          $start_date = $rowdata->tanggalmasuknya;
          $end_date = $rowdata->tanggalberakhir;
          $status_process = $rowdata->status_process;
          $name_full = $rowdata->name_full;
          $name_first = $rowdata->name_first;
          $name_mid = $rowdata->name_mid;
          $name_last = $rowdata->name_last;
          $name_nick = $rowdata->name_nick; 
          $prefix = $rowdata->prefix; 
          $prefix_other = $rowdata->prefix_other; 
          $suffix = $rowdata->suffix; 
          $suffix_other = $rowdata->suffix_other; 
          $gender =  $rowdata->gender; 
          $birth_date =  $rowdata->tanggallahir; 
          $birth_place = $rowdata->birth_place; 
          $nationality = $rowdata->nationality; 
          $ethnic = $rowdata->ethnic; 
          $ethnic_other = $rowdata->ethnic_other; 
          $religion =  $rowdata->religion; 
          $marital_status = $rowdata->marital_status; 
          $status_since = $rowdata->status_since; 
          $no_of_children = $rowdata->no_of_children; 
        }
        ?>
        <form id="ff" method="post" action="<?php echo base_url('data_pribadi/pro_update_data_pribadi_selected')?>">

        <input type="hidden" name="personnel_id" value="<?php echo $personnel_id; ?>" >

        <fieldset>
            <legend>Key Data </legend>
              <table cellpadding="5">
                <tr>
                    <td>Periode  </td>
                    <td></td> 
                    <td><input class="easyui-datebox"  type="text" name="start_date" style="width:100%;" value="<?php echo $start_date; ?>" ></input></td>
                    <td></td>
                    <td><input class="easyui-datebox" type="text" name="end_date" style="width:100%;" value="<?php echo $end_date; ?>"></input></td>
                    <td>Status</input></td>
                    <td>
                        <select class="easyui-combobox" name="status_process">
                            <option value="">--Pilih--</option>
                            <option value="1" <?php if($status_process == '1'){ echo "selected=selected"; }?> >Release</option>
                            <option value="0"  <?php if($status_process == '0'){ echo "selected=selected"; }?>>Plan</option>
                        </select>

                    </td>
                </tr>
                </table>

        </fieldset>

        <fieldset>
            <legend> Personal Data</legend>
             <table cellpadding="5">
                <tr>
                    <td>Nama : </td>
                    <td>Depan :</td>
                    <td><input class="easyui-textbox" type="text" name="name_first" style="width:100%;" value="<?php echo $name_first; ?>" ></input></td>
                    <td>Tengah</td>
                    <td><input class="easyui-textbox" type="text" name="name_mid" style="width:100%;" value="<?php echo $name_mid; ?>"></input></td>
                    <td>Akhir</input></td>
                    <td><input class="easyui-textbox" type="text" name="name_last" value="<?php echo $name_last; ?>" style="width:100%;"></input></td>
                </tr>
                <tr>
                    <td> &nbsp; </td>
                    <td>Lengkap :</td>
                    <td colspan="3">
                    <input class="easyui-textbox" type="text" name="name_full" style="width:100%;" value="<?php echo $name_full; ?>"></input></td>
                    
                    <td>Panggilan</input></td>
                    <td><input class="easyui-textbox" type="text" name="name_nick" style="width:100%;" value="<?php echo $name_nick; ?>"></input></td>
                </tr>

                <tr>
                    <td>Gelar :</td>
                    <td>Depan :</td>
                    <td>
                        <select class="easyui-combobox" name="prefix">
                            <option value="">--Pilih--</option>
                             <?php 
                                foreach($opt_prefix->result() as $rowprefix){
                                    
                                    if($rowprefix->prefix == $prefix){
                                      echo "<option value=".$rowprefix->prefix." selected=selected> ".$rowprefix->name."</option>";
                                    }else{
                                     echo "<option value=".$rowprefix->prefix."> ".$rowprefix->name."</option>";
                                    }
                                    
 
                                }
                              ?> 
                        </select>
                    </td>
                    <td>Lainnya : </td>
                    <td><input class="easyui-textbox" type="text" name="prefix_other" style="width:100%;" value="<?php echo $prefix_other; ?>" ></input></td>
                    <td colspan="2"> &nbsp; </td>
                   
                </tr>

                <tr>
                    <td> &nbsp; </td>
                    <td>Belakang :</td>
                    <td>
                        <select class="easyui-combobox" name="suffix">
                             <option value="">--Pilih--</option>
                             <?php 
                                foreach($opt_suffix->result() as $rowsuffix){
                                  if($rowsuffix->suffix == $suffix){
                                      echo "<option value=".$rowsuffix->suffix." selected=selected> ".$rowsuffix->name."</option>";
                                    }else{
                                     echo "<option value=".$rowsuffix->suffix."> ".$rowsuffix->name."</option>";
                                    }
                                }
                              ?> 
                        </select>
                    </td>
                    <td>Lainnya : </td>
                    <td><input class="easyui-textbox" type="text" name="suffix_other" style="width:100%;"  value="<?php echo $suffix_other; ?>" ></input></td>
                    <td colspan="2"> &nbsp; </td>
                   
                </tr>

                 <tr>
                    <td> Jenis Kelamin :</td>
                    <td> Pria </td>
                    <td>
                       <input type="radio" name="gender" value="1" <?php if($gender == '1'){ echo "checked=checked"; }?> >
                    </td>
                    <td> 
                        <input type="radio" name="gender" value="2" <?php if($gender == '2'){ echo "checked=checked"; }?> >
                    </td>
                    <td> Wanita </td>
                    <td colspan="2"> &nbsp; </td>
                   
                </tr>

                <tr>
                    <td>Tempat Tanggal Lahir :</td>
                    <td>Di :</td>
                    <td>
                    <input class="easyui-textbox" type="text" name="birth_place" style="width:100%;" value="<?php echo $birth_place;?>" ></input>
                    </td>
                    <td>Tanggal : </td>
                    <td> <input name="birth_date" class="easyui-datebox" style="width:100%;" value="<?php echo $birth_date;?>"> </td>
                    <td colspan="2"> &nbsp; </td>
                   
                </tr>

                 <tr>
                    <td>Kewarganegaraan :</td>
                   
                    <td colspan="2">

                    <select class="easyui-combobox" name="nationality" style="width:100%;">
                            <option value="">--Pilih--</option>
                            <option value="WNI" <?php if($nationality == 'WNI'){ echo "selected=selected"; }?> >WNI</option> 
                            <option value="WNA" <?php if($nationality == 'WNA'){ echo "selected=selected"; }?>>WNA</option> 
                    </select>

                    </td>
                    <td colspan="3"> &nbsp; </td>
                     
                   
                </tr>

                <tr>
                    <td>Suku :</td>
                   
                    <td colspan="2">

                    <select class="easyui-combobox" name="ethnic" style="width:100%;">
                           <option value="">--Pilih--</option>
                             <?php 
                                foreach($opt_ethnic->result() as $rowethnic){
                                

                                 if($rowethnic->ethnic == $ethnic){
                                      echo "<option value=".$rowethnic->ethnic." selected=selected> ".$rowethnic->name."</option>";
                                    }else{
                                     echo "<option value=".$rowethnic->ethnic."> ".$rowethnic->name."</option>";
                                    }


                                }
                              ?> 
                    </select>

                    </td>
                    <td>Lainnya : </td>
                    <td>  <input class="easyui-textbox" type="text" name="ethnic_other" style="width:100%;" value="<?php echo $ethnic_other; ?>" ></input>  </td>
                    <td> &nbsp; </td>

                    
                     
                   
                </tr>

                <tr>
                    <td>Agama :</td>
                   
                    <td colspan="2">

                    <select class="easyui-combobox" name="religion" style="width:100%;">
                            <option value="">--Pilih--</option>
                             <?php 
                                foreach($opt_religion->result() as $rowreligion){

                                
                                 if($rowreligion->religion == $religion){
                                      echo "<option value=".$rowreligion->religion." selected=selected> ".$rowreligion->name."</option>";
                                    }else{
                                     echo "<option value=".$rowreligion->religion."> ".$rowreligion->name."</option>";
                                    }


                                }
                              ?> 
                    </select>

                    </td>
                    <td colspan="3"> &nbsp; </td>
                     
                   
                </tr>

                <tr>
                    <td>Status Pernikahan :</td>
                   
                    <td colspan="2">

                    <select class="easyui-combobox" name="marital_status" style="width:100%;">
                             <option value="">--Pilih--</option>
                             <?php 
                                foreach($opt_marital_status->result() as $rowmarstatus){

                                 

                                 if($rowmarstatus->marital_status == $marital_status){
                                      echo "<option value=".$rowmarstatus->marital_status." selected=selected> ".$rowmarstatus->name."</option>";
                                    }else{
                                     echo "<option value=".$rowmarstatus->marital_status."> ".$rowmarstatus->name."</option>";
                                    }


                                }
                              ?> 
                    </select>

                    </td>
                    <td> Sejak : </td>
                    <td> <input name="status_since" class="easyui-datebox" value="<?php echo $status_since; ?>" style="width:100%;"> </td>
                    <td> &nbsp; </td> 
                     
                   
                </tr>

                <tr>
                    <td>Jumlah Anak :</td>
                   
                    <td colspan="2">
                    <input class="easyui-textbox" type="text" name="no_of_children" style="width:100%;" value="<?php echo $no_of_children;?>" ></input>

                    </td>
                    <td colspan="3"> &nbsp; </td>
                     
                   
                </tr>


                
            </table>
        </fieldset>
             <div style="text-align:center;padding:5px">
          <button class="easyui-linkbutton" data-options="iconCls:'icon-save'"> Simpan</button>
        </div>
            
        </form>
      
        
	 
</div>
 

</body>
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

<script type="text/javascript">

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


</script>

 
<script>
         var url;
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
        function editUser(){
            var row = $('#tbl').datagrid('getSelected');
            
            if (row){
                //var p = $('#tt').tabs('getTab', 0);  // get the first tab panel
                //p.panel('refresh');
                
                getTab('Update Pegawai','pegawai/pegawai_update/'+row.personnel_id);
                //url = 'update_user.php?id='+row.id;
            }else{
                $.messager.alert('Information','Silakan pilih data ditabel dulu');
            }
        }
               function saveUser(){
            $('#fm').form('submit',{
                url: '<?php echo base_url('data_pribadi/data_pribadi_update_pro_selected');?>',
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
                        $('#dlg').dialog('close');        // close the dialog
                        $('#dg').datagrid('reload');    // reload the user data
                    }
                }
            });
        }



        function getTab(title, url){
            if ($('#tt').tabs('exists', title)){
                $('#tt').tabs('select', title);
                $('#tt').tabs('close', title);
                progress();
                editUser();
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
        
    $(function(){
        //var dg = $('#tbl').datagrid();
         //dg.datagrid('enableFilter');
         //$('#tbl').datagrid('enableFilter');
      $('#tbl').datagrid({
        onClickRow:function(){
            //$('#tt').tabs('close', title);
            editUser();
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
