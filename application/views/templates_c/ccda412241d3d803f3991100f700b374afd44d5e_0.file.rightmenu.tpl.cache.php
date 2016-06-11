<?php
/* Smarty version 3.1.29, created on 2016-06-06 05:28:06
  from "C:\xampp\htdocs\asdp\application\views\templates\rightmenu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5754edc6ce4ab3_66618868',
  'file_dependency' => 
  array (
    'ccda412241d3d803f3991100f700b374afd44d5e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\asdp\\application\\views\\templates\\rightmenu.tpl',
      1 => 1464677922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5754edc6ce4ab3_66618868 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '291635754edc6ce0340_59561494';
?>
<div data-options="region:'east',split:true,hideCollapsedContent:false,collapsed:true" title="Panel Information" style="width:180px;">
			<ul class="easyui-tree" data-options="url:'tree_data1.json',method:'get',animate:true,dnd:true"></ul>
			<div style="width:200px;height:auto;background:#7190E0;padding:5px;">
    <div class="easyui-panel" title="Info Pensiun Pegawai" collapsible="true" style="width:200px;height:auto;padding:10px;">
        5 Pegawai Tahun Ini
    </div>
    <br/>
    <div class="easyui-panel" title="Info Ultah Pegawai" collapsible="true" style="width:200px;height:auto;padding:10px;">
        3 Pegawai Bulan Ini<br/>
    </div>
    <br/>
   
    <div class="easyui-panel" title="Info Pengajuan Cuti" collapsible="true" style="width:200px;height:auto;padding:10px;">
        10 Pegawai Mengajukan Cuti
    </div>
</div><!--"-->
		</div><?php }
}
