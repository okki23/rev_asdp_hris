<?php
/* Smarty version 3.1.29, created on 2016-05-13 08:45:32
  from "C:\xampp2\htdocs\hris_new\application\views\templates\home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5735780c8a6818_44318876',
  'file_dependency' => 
  array (
    'bee02be50bc5bd8501b5f1eb3f3688657572c5f9' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\hris_new\\application\\views\\templates\\home.tpl',
      1 => 1463120106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:pengelola.tpl' => 1,
    'file:mainnav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5735780c8a6818_44318876 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '189905735780c834233_82773645';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<!-- Page container -->
 	<div class="page-container">


		<!-- Sidebar -->
		<div class="sidebar">
			<div class="sidebar-content">
				<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pengelola.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:mainnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				
			</div>
		</div>
		<!-- /sidebar -->


		<!-- Page content -->
	 	<div class="page-content">


			<!-- Page header -->
			<div class="page-header">
				<div class="page-title">
					<h3>Dashboard <small>Welcome <b><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</b></small></h3>
				</div>

			</div>
			<!-- /page header -->
			<?php if ($_smarty_tpl->tpl_vars['status']->value == '1') {?>
			<div class="info-buttons">
				<div class="row">
					<div class="col-lg-12">
						<div class="row block-inner">
							<div class="col-md-4">
								<a href="#"><i class="icon-stats-up"></i> <span>Pegawai</span> <strong class="label label-info">4422</strong></a>
							</div>

							<div class="col-md-4">
								<a href="#"><i class="icon-briefcase"></i> <span>Kapal</span> <strong class="label label-success">56</strong></a>
							</div>
							<div class="col-md-4">
								<a href="#"><i class="icon-notebook"></i> <span>Bantuan</span> <strong></strong></a>
							</div>
						</div>
						</div>
</div>
</div>
			<?php } elseif ($_smarty_tpl->tpl_vars['status']->value == '0') {?>
			<ul class="info-blocks">
				<li class="bg-primary">
					<div class="top-info">
						<a href="#">Transaction</a>
						<small>Menu 1</small>
					</div>
					<a href="#"><i class="icon-cogs"></i></a>
					<span class="bottom-info bg-info">Menu 1</span>
				</li>
				<li class="bg-primary">
					<div class="top-info">
						<a href="#">Download</a>
						<small>Menu 2</small>
					</div>
					<a href="#"><i class="icon-file4"></i></a>
					<span class="bottom-info bg-danger">Menu 2</span>
				</li>
			</ul>
			
			<?php }?>

			  
				        
						
				        <!-- /striped datatable inside panel -->
	
	<?php echo '<script'; ?>
 src="js/jquery.dataTables.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 language="javascript" type="text/javascript">  
	$(document).ready(function() {
		$('#example').dataTable( {
			"pagingType": "full_numbers"
		} );
	} );
	<?php echo '</script'; ?>
>

	       <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		   
		   <?php }
}
