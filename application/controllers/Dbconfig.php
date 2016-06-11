<?php
 ob_start();
 //session_save_path ('./session/');
 //ini_set('session.name', 'tmk_id');
 $title = "Human Resource Information System (HRIS) ASDP";
 
 
 include('adodb/adodb.inc.php');
	
	$dbhost = "localhost";
    $dbuser = "root";
    $dbpassword = "";
	//$dbname = "db_sianew";
    $dbname = "asdp_hris";
	
	global $db;
	global $dbhost;
	global $dbuser;
	global $dbpassword;
	global $dbname;
	global $title;
	
	$db = NewADOConnection("mysqli");
    //$db->debug = true;
    $connect_result = $db->Connect($dbhost,$dbuser,$dbpassword,$dbname);
    if(!$connect_result)
    {
        echo "koneksi gagal";
    	exit();
    }
	
?>					 					 