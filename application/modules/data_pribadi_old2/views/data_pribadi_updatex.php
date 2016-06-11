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

<script type="text/javascript">
        $(document).ready(function () {
            $('#jqxTabs').jqxTabs({ width: 1100});
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
							<li ><a href="<?php echo base_url('penugasan');?>">Penugasan</a></li>
							<li ><a href="<?php echo base_url('penugasan_sementara');?>">Penugasan Sementara</a></li>
							<li class="active"><a href="<?php echo base_url('data_pribadi');?>">Data Pribadi</a></li>
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
					<h3>Data Pribadi</h3>
				</div>

			</div>
		 
		 
				<div class="row">
				 
				   <div id='jqxWidget'>
        <div style='float: left;' id='jqxTabs'>
            <ul style="margin-left: 30px;">
                <li>Node.js</li>
                <li>JavaServer Pages</li>
                <li>Active Server Pages</li>
                <li>Python</li>
                <li>Perl</li>
                <li>Ruby on Rails</li>
                <li>Haskell</li>
                <li>Scala</li>
                <li>Clojure</li>
                <li>Objective-C</li>
                <li>Objective-X</li>
                <li>Objective-Y</li>
                <li>Objective-Z</li>
            </ul>
            <div>
                Node.js is an event-driven I/O server-side JavaScript environment based on V8. It
                is intended for writing scalable network programs such as web servers. It was created
                by Ryan Dahl in 2009, and its growth is sponsored by Joyent, which employs Dahl.
                Similar environments written in other programming languages include Twisted for
                Python, Perl Object Environment for Perl, libevent for C and EventMachine for Ruby.
                Unlike most JavaScript, it is not executed in a web browser, but is instead a form
                of server-side JavaScript. Node.js implements some CommonJS specifications. Node.js
                includes a REPL environment for interactive testing.
            </div>
            <div>
                JavaServer Pages (JSP) is a Java technology that helps software developers serve
                dynamically generated web pages based on HTML, XML, or other document types. Released
                in 1999 as Sun's answer to ASP and PHP,[citation needed] JSP was designed to address
                the perception that the Java programming environment didn't provide developers with
                enough support for the Web. To deploy and run, a compatible web server with servlet
                container is required. The Java Servlet and the JavaServer Pages (JSP) specifications
                from Sun Microsystems and the JCP (Java Community Process) must both be met by the
                container.
            </div>
            <div>
                ASP.NET is a web application framework developed and marketed by Microsoft to allow
                programmers to build dynamic web sites, web applications and web services. It was
                first released in January 2002 with version 1.0 of the .NET Framework, and is the
                successor to Microsoft's Active Server Pages (ASP) technology. ASP.NET is built
                on the Common Language Runtime (CLR), allowing programmers to write ASP.NET code
                using any supported .NET language. The ASP.NET SOAP extension framework allows ASP.NET
                components to process SOAP messages.
            </div>
            <div>
                Python is a general-purpose, high-level programming language[5] whose design philosophy
                emphasizes code readability. Python claims to "[combine] remarkable power with very
                clear syntax",[7] and its standard library is large and comprehensive. Its use of
                indentation for block delimiters is unique among popular programming languages.
                Python supports multiple programming paradigms, primarily but not limited to object-oriented,
                imperative and, to a lesser extent, functional programming styles. It features a
                fully dynamic type system and automatic memory management, similar to that of Scheme,
                Ruby, Perl, and Tcl. Like other dynamic languages, Python is often used as a scripting
                language, but is also used in a wide range of non-scripting contexts. Using third-party
                tools, Python code can be packaged into standalone executable programs. Python interpreters
                are available for many operating systems.
            </div>
            <div>
                Perl is a high-level, general-purpose, interpreted, dynamic programming language.
                Perl was originally developed by Larry Wall in 1987 as a general-purpose Unix scripting
                language to make report processing easier. Since then, it has undergone many changes
                and revisions and become widely popular amongst programmers. Larry Wall continues
                to oversee development of the core language, and its upcoming version, Perl 6. Perl
                borrows features from other programming languages including C, shell scripting (sh),
                AWK, and sed.[5] The language provides powerful text processing facilities without
                the arbitrary data length limits of many contemporary Unix tools, facilitating easy
                manipulation of text files. Perl gained widespread popularity in the late 1990s
                as a CGI scripting language, in part due to its parsing abilities.
            </div>
            <div>
                Ruby on Rails was extracted by David Heinemeier Hansson from his work on Basecamp,
                a project management tool by 37signals (now a web application company). Hansson
                first released Ruby on Rails as open source in July 2004, but did not share commit
                rights to the project until February 2005. In August 2006 the framework reached
                a milestone when Apple announced that it would ship Ruby on Rails with Mac OS X
                v10.5 "Leopard", which was released in October 2007. Ruby on Rails version 2.3 was
                released on March 15, 2009. Major new developments in Ruby on Rails include templates,
                engines, Rack and nested model forms.
            </div>
            <div>
                Following the release of Miranda by Research Software Ltd, in 1985, interest in
                lazy functional languages grew: by 1987, more than a dozen non-strict, purely functional
                programming languages existed. Of these, Miranda was the most widely used, but was
                not in the public domain. At the conference on Functional Programming Languages
                and Computer Architecture (FPCA '87) in Portland, Oregon, a meeting was held during
                which participants formed a strong consensus that a committee should be formed to
                define an open standard for such languages. The committee's purpose was to consolidate
                the existing functional languages into a common one that would serve as a basis
                for future research in functional-language design.
            </div>
            <div>
                The design of Scala started in 2001 at the École Polytechnique Fédérale de Lausanne
                (EPFL) by Martin Odersky, following on from work on Funnel, a programming language
                combining ideas from functional programming and Petri nets.[not in citation given]
                Odersky had previously worked on Generic Java and javac, Sun's Java compiler. Scala
                was released late 2003 / early 2004 on the Java platform, and on the .NET platform
                in June 2004. A second version of the language, v2.0, was released in March 2006.
                On 17 January 2011 Scala team won a 5 year research grant of over €2.3 million from
                European Research Council. On 12 May 2011, Odersky and collaborators launched Typesafe,
                a company to provide commercial support, training, and services for Scala. Typesafe
                received $3 million investment from Greylock Partners.
            </div>
            <div>
                Rich Hickey is the creator of the Clojure programming language. Before Clojure,
                he developed dotLisp, a similar project based on the .NET platform. Hickey is an
                independent software developer and a consultant with over 20 years of experience
                in many facets of software development. He has worked on scheduling systems, broadcast
                automation, audio analysis and fingerprinting, database design, yield management,
                exit poll systems, and machine listening. He spent about 2½ years working on Clojure
                before releasing it to the world, much of that time working exclusively on Clojure
                without external funding. When he finally announced it, the announcement consisted
                of one email to some friends in the Common Lisp community.
            </div>
            <div>
                Objective-C was created primarily by Brad Cox and Tom Love in the early 1980s at
                their company Stepstone. Both had been introduced to Smalltalk while at ITT Corporation's
                Programming Technology Center in 1981. The earliest work on Objective C traces back
                to around that time. Cox was intrigued by problems of true reusability in software
                design and programming. He realized that a language like Smalltalk would be invaluable
                in building development environments for system developers at ITT. However, he and
                Tom Love also recognized that backward compatibility with C was critically important
                in ITT's telecom engineering milieu. Cox began writing a pre-processor for C to
                add some of the capabilities of Smalltalk. He soon had a working implementation
                of an object-oriented extension to the C language, which he called "OOPC" for Object-Oriented
                Pre-Compiler.
            </div>
            <div>
                Objective-C was created primarily by Brad Cox and Tom Love in the early 1980s at
                their company Stepstone. Both had been introduced to Smalltalk while at ITT Corporation's
                Programming Technology Center in 1981. The earliest work on Objective C traces back
                to around that time. Cox was intrigued by problems of true reusability in software
                design and programming. He realized that a language like Smalltalk would be invaluable
                in building development environments for system developers at ITT. However, he and
                Tom Love also recognized that backward compatibility with C was critically important
                in ITT's telecom engineering milieu. Cox began writing a pre-processor for C to
                add some of the capabilities of Smalltalk. He soon had a working implementation
                of an object-oriented extension to the C language, which he called "OOPC" for Object-Oriented
                Pre-Compiler.
            </div>
            <div>
                Objective-C was created primarily by Brad Cox and Tom Love in the early 1980s at
                their company Stepstone. Both had been introduced to Smalltalk while at ITT Corporation's
                Programming Technology Center in 1981. The earliest work on Objective C traces back
                to around that time. Cox was intrigued by problems of true reusability in software
                design and programming. He realized that a language like Smalltalk would be invaluable
                in building development environments for system developers at ITT. However, he and
                Tom Love also recognized that backward compatibility with C was critically important
                in ITT's telecom engineering milieu. Cox began writing a pre-processor for C to
                add some of the capabilities of Smalltalk. He soon had a working implementation
                of an object-oriented extension to the C language, which he called "OOPC" for Object-Oriented
                Pre-Compiler.
            </div>
            <div>
                Objective-C was created primarily by Brad Cox and Tom Love in the early 1980s at
                their company Stepstone. Both had been introduced to Smalltalk while at ITT Corporation's
                Programming Technology Center in 1981. The earliest work on Objective C traces back
                to around that time. Cox was intrigued by problems of true reusability in software
                design and programming. He realized that a language like Smalltalk would be invaluable
                in building development environments for system developers at ITT. However, he and
                Tom Love also recognized that backward compatibility with C was critically important
                in ITT's telecom engineering milieu. Cox began writing a pre-processor for C to
                add some of the capabilities of Smalltalk. He soon had a working implementation
                of an object-oriented extension to the C language, which he called "OOPC" for Object-Oriented
                Pre-Compiler.
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