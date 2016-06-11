<?php
/* Smarty version 3.1.29, created on 2016-06-06 05:28:06
  from "C:\xampp\htdocs\asdp\application\views\templates\topmenu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5754edc6ccd3e1_16986005',
  'file_dependency' => 
  array (
    'ce98d7b9a0f826c67099457a3462d16827ebab0f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\asdp\\application\\views\\templates\\topmenu.tpl',
      1 => 1464241597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5754edc6ccd3e1_16986005 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '207945754edc6cc6ee1_49358311';
?>
<div data-options="region:'north',split:true" title="PT ASDP Indonesia Ferry (Persero)" style="height:90px">
		<div style="float: left; margin: 10px;"><img src="../images/logo.png" alt="HRIS-INDONESIA FERRY "></a></div>
		<div style="float: right; margin: 10px;">
		<div>
		<a href="#" class="easyui-menubutton" menu="#user-menu" iconCls="icon-man"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a>
		<a href="#" class="easyui-menubutton" menu="#help-menu" iconCls="icon-help">Help</a>
		</div>
		<div id="user-menu" style="width:150px;">
    <div>Change Password</div>
    <div>Information User</div>
    <div class="menu-sep"></div>
	<div><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
auth/logout" >Logout</a></div>
</div>
<div id="help-menu" style="width:100px;">
    <div>Help</div>
    <div>About</div>
</div></div>
</div><?php }
}
