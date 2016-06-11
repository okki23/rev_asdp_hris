<!-- Main navigation -->
{if $status == "0"}
				<ul class="navigation">				
					<li {if $samping == "1" } class="active" {/if}><a href="index.php?action=showmenu"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
									</li>
									<li><a href="#"><span>KKP</span> <i class="icon-clipboard"></i></a>
					<ul>
							<li {if $samping == "33" } class="active" {/if}><a href="daftarkkp.php">Pendaftaran KKP</a></li>
					</ul>
					<li><a href="#"><span>Skripsi/TA</span> <i class="icon-clipboard"></i></a>
					<ul>
							<li {if $samping == "31" } class="active" {/if}><a href="daftarskripsi.php">Pendaftaran Skripsi</a></li>
							<li {if $samping == "34" } class="active" {/if}><a href="daftarsidangprop.php">Pendaftaran Sidang Proposal</a></li>
							<li {if $samping == "35" } class="active" {/if}><a href="daftarsidangakhir.php">Pendaftaran Sidang Skripsi</a></li>
					</ul>
					</li>
					<!--li {if $samping == "4" } class="active" {/if}><a href="printdaftar.php?id=2"><span>Reporting</span> <i class="icon-accessibility"></i></a></li-->
					<li><a href="index.php?action=logout"><span>Logout</span> <i class="icon-exit"></i></a></li>
				</ul>
{else}
				<ul class="navigation">				
					<li {if $samping == "1" } class="active" {/if}><a href="index.php?action=showmenu"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
					<li><a href="#"><span>Master</span> <i class="icon-profile"></i></a>
					<ul>
							<li {if $samping == "101" } class="active" {/if}><a href="pegawai.php">Pegawai</a></li>
							<li {if $samping == "102" } class="active" {/if}><a href="jabatan.php">Jabatan</a></li>
							<li {if $samping == "103" } class="active" {/if}><a href="jabatan.php">Unit Kerja</a></li>
							<li {if $samping == "104" } class="active" {/if}><a href="user.php">Manajemen User</a></li>
					</ul>
					</li>
					<li><a href="#"><span>Personal Administration</span> <i class="icon-clipboard"></i></a>
					<ul>
							<li {if $samping == "201" } class="active" {/if}><a href="penugasan.php">Penugasan</a></li>
							<li {if $samping == "202" } class="active" {/if}><a href="tugasementara.php">Penugasan Sementara</a></li>
							<li {if $samping == "203" } class="active" {/if}><a href="datapribadi.php">Data Pribadi</a></li>
							<li {if $samping == "204" } class="active" {/if}><a href="keluarga.php">Keluarga</a></li>
							<li {if $samping == "205" } class="active" {/if}><a href="#">Alamat</a></li>
							<li {if $samping == "206" } class="active" {/if}><a href="#">Komunikasi</a></li>
							<li {if $samping == "207" } class="active" {/if}><a href="#">Identifikasi Pribadi</a></li>
							<li {if $samping == "208" } class="active" {/if}><a href="#">Pendidikan</a></li>
							<li {if $samping == "209" } class="active" {/if}><a href="#">Pelatihan</a></li>
							<li {if $samping == "210" } class="active" {/if}><a href="#">Hukuman</a></li>
							<li {if $samping == "211" } class="active" {/if}><a href="#">Fasilitas</a></li>
							<li {if $samping == "212" } class="active" {/if}><a href="#">Kemampuan Bahasa</a></li>
							<li {if $samping == "213" } class="active" {/if}><a href="#">Buku Pelaut</a></li>
							<li {if $samping == "214" } class="active" {/if}><a href="#">Endorsement</a></li>
							<li {if $samping == "215" } class="active" {/if}><a href="#">Medical Check-up</a></li>
							<li {if $samping == "216" } class="active" {/if}><a href="#">Riwayat Pekerjaan</a></li>
							<li {if $samping == "217" } class="active" {/if}><a href="#">Foto</a></li>
							<li {if $samping == "218" } class="active" {/if}><a href="#">Dokumen Pribadi</a></li>
							
					</ul>
					</li>
					<li><a href="#"><span>Key Performance Indicator (KPI)</span> <i class="icon-clipboard"></i></a>
					<ul>
							<li {if $samping == "301" } class="active" {/if}><a href="target.php">Setting Target KPI</a></li>
							<li {if $samping == "302" } class="active" {/if}><a href="realisasi.php">Input Realisasi KPI</a></li>
							<li {if $samping == "303" } class="active" {/if}><a href="realisasi.php">Monitoring KPI</a></li>
							<li {if $samping == "304" } class="active" {/if}><a href="realisasi.php">Coaching and Counselling</a></li>
							<li {if $samping == "305" } class="active" {/if}><a href="realisasi.php">Nilai KPI</a></li>
					</ul>
					</li>
					<li><a href="#"><span>Kompetensi</span> <i class="icon-clipboard"></i></a>
					<ul>
							<li {if $samping == "401" } class="active" {/if}><a href="target.php">Standar Kompetensi Jabatan</a></li>
							<li {if $samping == "402" } class="active" {/if}><a href="realisasi.php">Pengukuran Kompetensi Individu</a></li>
							<li {if $samping == "403" } class="active" {/if}><a href="realisasi.php">Hasil Pengukuran</a></li>
							<li {if $samping == "404" } class="active" {/if}><a href="realisasi.php">Gap Kompetensi</a></li>
							<li {if $samping == "405" } class="active" {/if}><a href="realisasi.php">Kebutuhan Diklat Kompetensi</a></li>
					</ul>
					</li>
					<li><a href=".."><span>Logout</span> <i class="icon-exit"></i></a></li>
				</ul>				
{/if}
				<!-- /main navigation -->