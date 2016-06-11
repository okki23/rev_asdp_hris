<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<title><?php echo $judul;?></title>

<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/css/londinium-theme.css');?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/css/styles.css');?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/css/icons.css');?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/css/fontsext.css');?>" rel="stylesheet" type="text/css">
 
 
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui.min.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/charts/sparkline.min.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/forms/uniform.min.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/forms/select2.min.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/forms/inputmask.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/forms/autosize.js');?>"></script> 

<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/forms/inputlimit.min.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/forms/listbox.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/forms/multiselect.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/forms/validate.min.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/forms/tags.min.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/forms/switch.min.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/forms/uploader/plupload.full.min.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/forms/uploader/plupload.queue.min.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/forms/wysihtml5/wysihtml5.min.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/forms/wysihtml5/toolbar.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/interface/daterangepicker.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/interface/fancybox.min.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/interface/moment.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/interface/jgrowl.min.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/interface/datatables.min.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/interface/colorpicker.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/interface/fullcalendar.min.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/interface/timepicker.min.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/application.js');?>"></script>
 
 
</head>


<body>

<div class="page-container">

	<!--awal bagian header-->

 
	<div class="navbar navbar-inverse " role="navigation">
		<div class="navbar-header">
			<a class="navbar-brand" style="margin-top:-4px;" href="index.php?action=showmenu"><img  src="images/logo.png" title="HRIS" alt="HRIS"></a>
			<a class="sidebar-toggle"><i class="icon-paragraph-justify2"></i></a>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons">
				<span class="sr-only">Toggle navbar</span>
				<i class="icon-grid3"></i>
			</button>
			<button type="button" class="navbar-toggle offcanvas">
				<span class="sr-only">Toggle navigation</span>
				<i class="icon-paragraph-justify2"></i>
			</button>
		</div>

		<ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">
					
			
			<li class="user dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown">
					<!--<img src="http://placehold.it/300">-->
					<span><?php echo $this->session->userdata('username');?></span>
					<i class="caret"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-right icons-right">
					<li><a href="password.php"><i class="icon-key"></i> Change Password</a></li>
					<li><a href="<?php echo base_url('login/logout');?>"><i class="icon-exit"></i> Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>
 

	<!--akhir bagian header-->
	 

	<!--awal bagian konten-->
 
 	<div class="page-container">

 
			<div class="sidebar">
			<div class="sidebar-content">
								<!-- User dropdown -->
				<div class="user-menu dropdown">
					<a href="<?php echo base_url('dashboard');?>" class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?php echo base_url('assets/images/admin.png')?>">
						<div class="user-info">
							Pengelola Website <span>Administrator</span>
						</div>
					</a>
					
				</div>
				 
				<ul class="navigation">				
					<li ><a href="<?php echo base_url('dashboard');?>"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
					<li><a href="#"><span>Master</span> <i class="icon-profile"></i></a>
					<ul>
							<li  class="active"  ><a href="<?php echo base_url('pegawai');?>">Pegawai</a></li>
							<li ><a href="<?php echo base_url('jabatan');?>">Jabatan</a></li>
							<li ><a href="<?php echo base_url('unit_kerja');?>">Unit Kerja</a></li>
							<li ><a href="user.php">Manajemen User</a></li>
					</ul>
					</li>
					<li><a href="#"><span>Personal Administration</span> <i class="icon-clipboard"></i></a>
					<ul>
							<li ><a href="<?php echo base_url('penugasan');?>">Penugasan</a></li>
							<li ><a href="<?php echo base_url('penugasan_sementara');?>">Penugasan Sementara</a></li>
							<li ><a href="<?php echo base_url('data_pribadi');?>">Data Pribadi</a></li>
							<li ><a href="<?php echo base_url('keluarga');?>">Keluarga</a></li>
							<li ><a href="<?php echo base_url('alamat');?>">Alamat</a></li>
							<li ><a href="<?php echo base_url('komunikasi');?>">Komunikasi</a></li>
							<li ><a href="<?php echo base_url('identifikasi');?>">Identifikasi Pribadi</a></li>
							<li ><a href="<?php echo base_url('pendidikan');?>">Pendidikan</a></li>
							<li ><a href="<?php echo base_url('pelatihan');?>">Pelatihan</a></li>
							<li ><a href="<?php echo base_url('hukuman');?>">Hukuman</a></li>
							<li ><a href="<?php echo base_url('fasilitas');?>">Fasilitas</a></li>
							<li ><a href="<?php echo base_url('kemampuan_bahasa');?>">Kemampuan Bahasa</a></li>
							<li ><a href="<?php echo base_url('buku_pelaut');?>">Buku Pelaut</a></li>
							<li ><a href="<?php echo base_url('endorsement');?>">Endorsement</a></li>
							<li ><a href="<?php echo base_url('mcu');?>">Medical Check-up</a></li>
							<li ><a href="<?php echo base_url('riwayat_pekerjaan');?>">Riwayat Pekerjaan</a></li>
							<li ><a href="<?php echo base_url('foto');?>">Foto</a></li>
							<li ><a href="<?php echo base_url('doc_pribadi');?>">Dokumen Pribadi</a></li>
							
					</ul>
					</li>
					<li><a href="#"><span>Key Performance Indicator (KPI)</span> <i class="icon-clipboard"></i></a>
					<ul>
							<li ><a href="<?php echo base_url('setting_target');?>">Setting Target KPI</a></li>
							<li ><a href="<?php echo base_url('input_realisasi');?>">Input Realisasi KPI</a></li>
							<li ><a href="<?php echo base_url('monitoring_kpi');?>">Monitoring KPI</a></li>
							<li ><a href="<?php echo base_url('coach_and_consel');?>">Coaching and Counselling</a></li>
							<li ><a href="<?php echo base_url('nilai_kpi');?>">Nilai KPI</a></li>
					</ul>
					</li>
					<li><a href="#"><span>Kompetensi</span> <i class="icon-clipboard"></i></a>
					<ul>
							<li ><a href="<?php echo base_url('skj');?>">Standar Kompetensi Jabatan</a></li>
							<li ><a href="<?php echo base_url('ukurkomp_individu');?>">Pengukuran Kompetensi Individu</a></li>
							<li ><a href="<?php echo base_url('hasil_pengukuran');?>">Hasil Pengukuran</a></li>
							<li ><a href="<?php echo base_url('gap_kompetensi');?>">Gap Kompetensi</a></li>
							<li ><a href="<?php echo base_url('kebutuhan_diklat_komp');?>">Kebutuhan Diklat Kompetensi</a></li>
					</ul>
					</li>
					<li><a href="<?php echo base_url('login/logout');?>"><span>Logout</span> <i class="icon-exit"></i></a></li>
				</ul>				
				 
				
			</div>
		</div>
	 
	 

 	 	<div class="page-content">


		 
			<div class="page-header">
				<div class="page-title">
					<h3>Pegawai</h3>
				</div>

			</div>
		 
		 
				<div class="row">
					<div class="col-lg-12">		    		

				     
				    	 
			            

        	<!-- Form components -->
    		<form class="form-horizontal" role="form" action="<?php echo base_url('pegawai/pro_add_pegawai');?>" method="POST">

    		 
				<!-- Basic inputs -->
		        <div class="panel panel-default">
			        <div class="panel-heading"><h6 class="panel-title"><i class="icon-bubble4"></i> New Personal</h6></div>
	                <div class="panel-body">

                    	 

						<div class="form-group">
							<label class="col-sm-2 control-label">NIK: </label>
							<div class="col-sm-10">
								<input type="text" name="nik" class="form-control" value="<?php echo $last_id;?>">
							</div>
						</div>


						<div class="form-group">
							<label class="col-sm-2 control-label">Tanggal Masuk: </label>
							<div class="col-sm-10">
								<input type="text" class="datepicker form-control" name="tanggal_masuk" placeholder="Tanggal Masuk">
							</div>
						</div>

						 
						<div class="form-group">
							<label class="col-sm-2 control-label">Nama: </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" placeholder="Nama" name="nama">
							</div>
						</div>

						 

                        <div class="form-actions text-right">
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
				    </div>
				</div>
				<!-- /basic inputs -->
				       
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