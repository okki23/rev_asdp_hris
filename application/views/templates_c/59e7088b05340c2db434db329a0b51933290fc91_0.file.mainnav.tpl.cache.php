<?php
/* Smarty version 3.1.29, created on 2016-05-13 08:45:32
  from "C:\xampp2\htdocs\hris_new\application\views\templates\mainnav.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5735780c9959c0_39116823',
  'file_dependency' => 
  array (
    '59e7088b05340c2db434db329a0b51933290fc91' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\hris_new\\application\\views\\templates\\mainnav.tpl',
      1 => 1463118718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5735780c9959c0_39116823 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '251895735780c90f111_86015828';
?>
<!-- Main navigation -->
<?php if ($_smarty_tpl->tpl_vars['status']->value == "0") {?>
				<ul class="navigation">				
					<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "1") {?> class="active" <?php }?>><a href="index.php?action=showmenu"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
									</li>
									<li><a href="#"><span>KKP</span> <i class="icon-clipboard"></i></a>
					<ul>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "33") {?> class="active" <?php }?>><a href="daftarkkp.php">Pendaftaran KKP</a></li>
					</ul>
					<li><a href="#"><span>Skripsi/TA</span> <i class="icon-clipboard"></i></a>
					<ul>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "31") {?> class="active" <?php }?>><a href="daftarskripsi.php">Pendaftaran Skripsi</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "34") {?> class="active" <?php }?>><a href="daftarsidangprop.php">Pendaftaran Sidang Proposal</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "35") {?> class="active" <?php }?>><a href="daftarsidangakhir.php">Pendaftaran Sidang Skripsi</a></li>
					</ul>
					</li>
					<!--li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "4") {?> class="active" <?php }?>><a href="printdaftar.php?id=2"><span>Reporting</span> <i class="icon-accessibility"></i></a></li-->
					<li><a href="index.php?action=logout"><span>Logout</span> <i class="icon-exit"></i></a></li>
				</ul>
<?php } else { ?>
				<ul class="navigation">				
					<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "1") {?> class="active" <?php }?>><a href="index.php?action=showmenu"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
					<li><a href="#"><span>Master</span> <i class="icon-profile"></i></a>
					<ul>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "101") {?> class="active" <?php }?>><a href="pegawai.php">Pegawai</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "102") {?> class="active" <?php }?>><a href="jabatan.php">Jabatan</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "103") {?> class="active" <?php }?>><a href="jabatan.php">Unit Kerja</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "104") {?> class="active" <?php }?>><a href="user.php">Manajemen User</a></li>
					</ul>
					</li>
					<li><a href="#"><span>Personal Administration</span> <i class="icon-clipboard"></i></a>
					<ul>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "201") {?> class="active" <?php }?>><a href="penugasan.php">Penugasan</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "202") {?> class="active" <?php }?>><a href="tugasementara.php">Penugasan Sementara</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "203") {?> class="active" <?php }?>><a href="datapribadi.php">Data Pribadi</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "204") {?> class="active" <?php }?>><a href="keluarga.php">Keluarga</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "205") {?> class="active" <?php }?>><a href="#">Alamat</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "206") {?> class="active" <?php }?>><a href="#">Komunikasi</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "207") {?> class="active" <?php }?>><a href="#">Identifikasi Pribadi</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "208") {?> class="active" <?php }?>><a href="#">Pendidikan</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "209") {?> class="active" <?php }?>><a href="#">Pelatihan</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "210") {?> class="active" <?php }?>><a href="#">Hukuman</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "211") {?> class="active" <?php }?>><a href="#">Fasilitas</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "212") {?> class="active" <?php }?>><a href="#">Kemampuan Bahasa</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "213") {?> class="active" <?php }?>><a href="#">Buku Pelaut</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "214") {?> class="active" <?php }?>><a href="#">Endorsement</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "215") {?> class="active" <?php }?>><a href="#">Medical Check-up</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "216") {?> class="active" <?php }?>><a href="#">Riwayat Pekerjaan</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "217") {?> class="active" <?php }?>><a href="#">Foto</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "218") {?> class="active" <?php }?>><a href="#">Dokumen Pribadi</a></li>
							
					</ul>
					</li>
					<li><a href="#"><span>Key Performance Indicator (KPI)</span> <i class="icon-clipboard"></i></a>
					<ul>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "301") {?> class="active" <?php }?>><a href="target.php">Setting Target KPI</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "302") {?> class="active" <?php }?>><a href="realisasi.php">Input Realisasi KPI</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "303") {?> class="active" <?php }?>><a href="realisasi.php">Monitoring KPI</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "304") {?> class="active" <?php }?>><a href="realisasi.php">Coaching and Counselling</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "305") {?> class="active" <?php }?>><a href="realisasi.php">Nilai KPI</a></li>
					</ul>
					</li>
					<li><a href="#"><span>Kompetensi</span> <i class="icon-clipboard"></i></a>
					<ul>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "401") {?> class="active" <?php }?>><a href="target.php">Standar Kompetensi Jabatan</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "402") {?> class="active" <?php }?>><a href="realisasi.php">Pengukuran Kompetensi Individu</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "403") {?> class="active" <?php }?>><a href="realisasi.php">Hasil Pengukuran</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "404") {?> class="active" <?php }?>><a href="realisasi.php">Gap Kompetensi</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "405") {?> class="active" <?php }?>><a href="realisasi.php">Kebutuhan Diklat Kompetensi</a></li>
					</ul>
					</li>
					<li><a href=".."><span>Logout</span> <i class="icon-exit"></i></a></li>
				</ul>				
<?php }?>
				<!-- /main navigation --><?php }
}
