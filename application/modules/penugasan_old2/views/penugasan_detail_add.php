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

<!--jqwidget-->

  <link rel="stylesheet" href="<?php echo base_url('assets/jqwidget/jqwidgets/styles/jqx.bootstrap.css');?>" type="text/css" />

  <link rel="stylesheet" href="<?php echo base_url('assets/jqwidget/jqwidgets/styles/jqx.base.css');?>" type="text/css" />

  <script type="text/javascript" src="<?php echo base_url('assets/jqwidget/jqwidgets/jqx-all.js');?>"></script>


  <script type="text/javascript" src="<?php echo base_url('assets/jqwidget/jqwidgets/jqxtabs.js');?>"></script>

  
 
<script>
$(document).ready(function(){
   		$("#notif").delay(1000).fadeIn();
   		$("#notif").delay(1000).fadeOut();

});
</script>

<!--manggil jqtabs-->
<script type="text/javascript">
        $(document).ready(function () {
            $('#jqxTabs').jqxTabs({ width: 1090});
            $('#leftButton').jqxRadioButton({ height: 25, width: 100});
            $('#rightButton').jqxRadioButton({ height: 25, width: 100, checked: true});
            $('#jqxTabs').jqxTabs({ scrollPosition: 'both' });
             
        });
</script>
 

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
					<li   ><a href="<?php echo base_url('dashboard');?>"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
					<li><a href="#"><span>Master</span> <i class="icon-profile"></i></a>
					<ul>
							<li ><a href="<?php echo base_url('pegawai');?>">Pegawai</a></li>
							<li ><a href="<?php echo base_url('jabatan');?>">Jabatan</a></li>
							<li ><a href="<?php echo base_url('unit_kerja');?>">Unit Kerja</a></li>
							<li ><a href="user.php">Manajemen User</a></li>
					</ul>
					</li>
					<li class="active"><a href="#"><span>Personal Administration</span> <i class="icon-clipboard"></i></a>
					<ul>
							<li class="active"><a href="<?php echo base_url('penugasan');?>">Penugasan</a></li>
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
					<h3>Penugasan</h3>
				</div>

			</div>

					 
				<div class="row">
				 
				    	 
				    	<h3 lign="center" class="alert alert-danger" id="notif"><?php echo $this->session->flashdata('pesan');?> </h3>
				    	 
					<div class="col-lg-12">
					  
		            </div>

		          
			            <div class="panel panel-default">
			          	 
			          
			                <div class="panel-heading"><h6 class="panel-title"> <b>Form Tambah Data Assignment </b> </h6></div>
			                  
			                <form class="form-horizontal" role="form" action="<?php echo base_url('penugasan/penugasan_detail_pro_add');?>" method="POST">	


			               <!--start key data -->
 		                   <div class="panel panel-default">
			          	 
			          
			                  <div class="panel-heading"><h6 class="panel-title"> <i> Key Data </i></h6></div>

			                 	<div class="table-responsive">
				               		<table class="table table-striped table-bordered">
				                   
				                    <tbody>				                        
				                        
				                        <tr>
				                            <td style="width:10%">Periode</td>
				                            <td style="width:3%">:</td>
				                            <td style="width:50%">

				                              <div class="col-lg-6">
				                          	  <input type="text" name="start_date" class="datepicker form-control" placeholder="Start Date" > 
				                          	  </div>

				                        
				                          	  
				                          	  <div class="col-lg-6">
				                          	  <input type="text" name="end_date" class="datepicker form-control" placeholder="End Date" >
				                          	  </div>
				                            </td>


 
				                            
				                        </tr>
				                        <tr>
				                            <td style="width:10%">Status</td>
				                            <td style="width:3%">:</td>
				                            <td style="width:80%">
				                          	<select name="status_proces" class="form-control">
				                           		<option value="">--Pilih--</option>
				                           		<option value="1">Release</option>
				                           		<option value="2">Available</option>
					                            
				                            </select>
				                            	 
				                            </td>
				                            
				                        </tr>
				                        
				                        <tr>
				                            <td>Assignment Type</td>
				                            <td>:</td>
				                            <td>
				                            
				                            <select name="assignment_type" class="form-control">
				                            <option value="">--Pilih--</option>
				                            <?php 
				                            foreach($opt_assignment_type->result() as $row){

				                            	 
				                            		echo "<option value=".$row->assignment_type."> ".$row->name."</option>" ;
				                            	 
				                            }
				                           	?> 
				                            </select>
				                            	 
				                            </td>
				                           
				                        </tr>
				                        <tr>
				                            <td>Assignment Reason </td>
				                            <td>:</td>
				                            <td>
				                             <select name="assignment_type" class="form-control">
				                            <option value="">--Pilih--</option>
				                           	<?php
				                           	foreach ($opt_assignment_reason->result() as $rows) {

				                           		echo "<option value=".$rows->assignment_type."> ".$rows->name."</option>" ;
				                           		 
				                           	}
				                           	?>
				                            </select>
				                            </td>
				                             
				                        </tr>

				                         

				                    </tbody>
				                    </table>



			                </div>
			                </div>

			                <!--end key data -->


			                <!--start struktur administrasi -->
 		                   <div class="panel panel-default">
			          	 
			          
			                <div class="panel-heading"><h6 class="panel-title"> <i> Struktur Administrasi  </i></h6></div>

			                 	<div class="table-responsive">
				               		<table class="table table-striped table-bordered">
				                   
				                    <tbody>				                        
				                        
				                        <tr>
				                            <td style="width:10%">Tipe Karyawan</td>
				                            <td style="width:3%">:</td>
				                            <td style="width:50%">

				                            <select name="employee_type" class="form-control">
				                           	<option value="">--Pilih--</option>
				                           	<?php
				                           	foreach ($opt_employee_type->result() as $rowemployeetype) {

				                           		echo "<option value=".$rowemployeetype->oemployee_type."> ".$rowemployeetype->name."</option>" ;
				                           		 
				                           	}
				                           	?>
					                            
				                            </select>

				                            </td>

 
				                        </tr>

				                        <tr>
				                            <td style="width:10%">Sub Tipe</td>
				                            <td style="width:3%">:</td>
				                            <td style="width:80%">
				                         	<select name="employee_subtype" class="form-control">
				                           	<option value="">--Pilih--</option>
				                           	<?php
				                           	foreach ($opt_employee_subtype->result() as $rowemployeestype) {

				                           		echo "<option value=".$rowemployeestype->oemployee_subtype."> ".$rowemployeestype->name."</option>" ;
				                           		 
				                           	}
				                           	?>
					                            
				                            </select>
			                            	 
				                            </td>
				                            
				                        </tr>
				                        
				                        <tr>
				                            <td>Area</td>
				                            <td>:</td>
				                            <td>
				                            <select name="employee_area" class="form-control">
				                           	<option value="">--Pilih--</option>
				                           	<?php
				                           	foreach ($opt_employee_area->result() as $rowemployeearea) {

				                           		echo "<option value=".$rowemployeearea->employee_area."> ".$rowemployeearea->name."</option>" ;
				                           		 
				                           	}
				                           	?>
					                            
				                            </select>
				                            	 
				                            </td>
				                           
				                        </tr>
				                        <tr>
				                            <td>Cabang</td>
				                            <td>:</td>
				                            <td>
				                          	<select name="employee_office" class="form-control">
				                           	<option value="">--Pilih--</option>
				                           	<?php
				                           	foreach ($opt_employee_cabang->result() as $rowemployeecabang) {

				                           		echo "<option value=".$rowemployeecabang->employee_office."> ".$rowemployeecabang->name."</option>" ;
				                           		 
				                           	}
				                           	?>
					                            
				                            </select>
				                            </td>
				                             
				                        </tr>

				                      

				                    </tbody>
				                    </table>



			                </div>
			                </div>
			                <!--end struktur administrasi -->



			               <!--start struktur organisasi -->
 		                   <div class="panel panel-default">
			          	 
			          
			                <div class="panel-heading"><h6 class="panel-title"> <i> Struktur Organisasi  </i></h6></div>

			                 	<div class="table-responsive">
				               		<table class="table table-striped table-bordered">
				                   
				                    <tbody>				                        
				                        
				                        <tr>
				                            <td style="width:10%">Posisi</td>
				                            <td style="width:3%">:</td>
				                            <td style="width:50%">

											<input type="text" name="posisi" class="form-control" placeholder="Posisi" > 

				                            </td>
 
				                        </tr>

				                        <tr>
				                            <td style="width:10%">Organisasi</td>
				                            <td style="width:3%">:</td>
				                            <td style="width:50%">

											<input type="text" name="organisasi" class="form-control" placeholder="Organisasi" > 

				                            </td>
 
				                        </tr>

				                        <tr>
				                            <td style="width:10%">Jabatan</td>
				                            <td style="width:3%">:</td>
				                            <td style="width:50%">

											<input type="text" name="jabatan" class="form-control" placeholder="Jabatan" > 

				                            </td>
 
				                        </tr>

				                        <tr>
				                            <td style="width:10%">Unit Kerja</td>
				                            <td style="width:3%">:</td>
				                            <td style="width:50%">

											<input type="text" name="unit_kerja" class="form-control" placeholder="Unit Kerja" > 

				                            </td>
 
				                        </tr>

										<tr>
				                            <td style="width:10%">Perusahaan</td>
				                            <td style="width:3%">:</td>
				                            <td style="width:50%">

											<input type="text" name="perusahaan" class="form-control" placeholder="Perusahaan" > 

				                            </td>
 
				                        </tr> 

				                        <tr>
				                            <td style="width:10%">Bagian</td>
				                            <td style="width:3%">:</td>
				                            <td style="width:50%">

											<input type="text" name="bagian" class="form-control" placeholder="Bagian" > 

				                            </td>
 
				                        </tr> 


										<tr>
				                            <td style="width:10%">Cost Center</td>
				                            <td style="width:3%">:</td>
				                            <td style="width:50%">

											<input type="text" name="cost_center" class="form-control" placeholder="Cost Center" > 

				                            </td>
 
				                        </tr> 

				                        <tr>
				                            <td style="width:10%">Wilayah</td>
				                            <td style="width:3%">:</td>
				                            <td style="width:50%">

											<input type="text" name="wilayah" class="form-control" placeholder="Wilayah" > 

				                            </td>
 
				                        </tr> 

				                        
				                    </tbody>
				                    </table>



			                </div>
			                </div>
			                <!--end struktur organisasi -->


			               <!--start info lainnya -->
 		                   <div class="panel panel-default">
			          	 
			          
			                <div class="panel-heading"><h6 class="panel-title"> <i> Info Lainnya  </i></h6></div>

			                 	<div class="table-responsive">
				               		<table class="table table-striped table-bordered">
				                   
				                    <tbody>				                        
				                        
				                        <tr>
				                            <td style="width:10%">No.SK</td>
				                            <td style="width:3%">:</td>
				                            <td style="width:50%">

											<input type="text" name="no_sk" class="form-control" placeholder="No.SK" > 

				                            </td>
 
				                        </tr>

				                        <tr>
				                            <td style="width:10%">Tanggal SK</td>
				                            <td style="width:3%">:</td>
				                            <td style="width:50%">

											<input type="text" name="tanggal_sk" class="form-control" placeholder="Tanggal SK" > 

				                            </td>
 
				                        </tr>

				                        <tr>
				                            <td style="width:10%">Tanggal Berlaku</td>
				                            <td style="width:3%">:</td>
				                            <td style="width:50%">

											<input type="text" name="tanggal_berlaku" class="form-control" placeholder="Tanggal Berlaku" > 

				                            </td>
 
				                        </tr>

				                        <tr>
				                            <td style="width:10%">NIK</td>
				                            <td style="width:3%">:</td>
				                            <td style="width:50%">

											<input type="text" name="nik" class="form-control" placeholder="NIK" > 

				                            </td>
 
				                        </tr>

										<tr>
				                            <td style="width:10%">Catatan</td>
				                            <td style="width:3%">:</td>
				                            <td style="width:50%">

											<textarea name="catatan" class="form-control"></textarea>

				                            </td>
 
				                        </tr> 
 

				                      

				                    </tbody>
				                    </table>



			                </div>
			                </div>
			                <!--end info lainnya -->



			               <!--start audit trail -->
 		                   <div class="panel panel-default">
			          	 
			          
			                <div class="panel-heading"><h6 class="panel-title"> <i> Info Lainnya  </i></h6></div>

			                 	<div class="table-responsive">
				               		<table class="table table-striped table-bordered">
				                   
				                    <tbody>				                        
				                        
				                        <tr>
				                            <td style="width:10%">Created By</td>
				                            <td style="width:3%">:</td>
				                            <td style="width:50%">

				                            <div class="col-lg-4">
											<input type="text" name="createdby" class="form-control" placeholder="Created By" > 
											</div>

											<div class="col-lg-4">
											<input type="text" name="createdbyat" class="form-control" placeholder="At" > 
											</div>

											<div class="col-lg-4">
											<input type="text" name="createdydocid" class="form-control" placeholder="Doc Id" > 
											</div>
				                            
				                            </td>
 
				                        </tr>



										<tr>
				                            <td style="width:10%">Changed By</td>
				                            <td style="width:3%">:</td>
				                            <td style="width:50%">

				                            <div class="col-lg-4">
											<input type="text" name="changedby" class="form-control" placeholder="Changed By" > 
											</div>

											<div class="col-lg-4">
											<input type="text" name="changedbyat" class="form-control" placeholder="At" > 
											</div>

											<div class="col-lg-4">
											<input type="text" name="changedbydocid" class="form-control" placeholder="Doc Id" > 
											</div>
				                            
				                            </td>
 
				                        </tr>

				                       
 
 

				                        <tr>
				                        	<td colspan="3">     
												<button type="submit" class="btn btn-block btn-primary">Simpan Perubahan Data</button>
									  		</td>
				                        </tr>

				                    </tbody>
				                    </table>



			                </div>
			                </div>
			                <!--end audit trail -->			                
			 
						</form>
				        

				       
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