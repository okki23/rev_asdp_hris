<?php $this->load->view('header-template');?>
     <!-- /striped datatable inside panel -->
	



<!--awal bagian konten -->

	<div class="page-container">
 
		<?php $this->load->view('sidebar-template');?>
	 


 
	 	<div class="page-content">

 
			<div class="page-header">
				<div class="page-title">
					<h3>Dashboard <small>Welcome <b><?php echo $this->session->userdata('username'); ?></b></small></h3>
				</div>

			</div>
		 
						<div class="info-buttons">
				<div class="row">
				 <h3 align="center" class="alert alert-danger" id="notif"><?php echo $this->session->flashdata('pesan');?> </h3>

					<div class="col-lg-12">
						<div class="row block-inner">
							<div class="col-md-4">
								<a href="<?php echo base_url('pegawai');?>"><i class="icon-stats-up"></i> <span>Pegawai</span>  </a>
							</div>

							<div class="col-md-4">
								<a href="#"><i class="icon-briefcase"></i> <span>Kapal</span>  </a>
							</div>
							<div class="col-md-4">
								<a href="#"><i class="icon-notebook"></i> <span>Bantuan</span> <strong></strong></a>
							</div>
						</div>
						</div>
</div>
</div>

<!--akhir bagian konten-->



<!--awal bagian footer-->
 
    <div class="footer clearfix">
        <div class="pull-left">  <a href="http://langitinfotama.com">PT.Langit Infotama &copy; 2016 </a></div>
    	 
    </div>
 
<!--akhir bagian footer-->
 
 		 
 </div>

</body>
</html>