<?php
require ('Dbconfig.php');
class auth extends CI_Controller
{

    function __construct() {
        parent::__construct();
        $this->load->helper('captcha','string');
		
    }
    
    
    function index()
    {
        //$this->login();
		//echo "index"; echo exit;
		global $title;
		$this->custom_smarty->assign("title",$title);
		$this->custom_smarty->display('signin.tpl');
    }
    
    function login()
    {
		//echo "login xxx"; echo exit;
		global $title,$db;
		//session_start();

		//$tmk_id = session_id();
		//$smarty = new Smarty;
 		//$smarty->force_compile = true;
		//$smarty->debugging = true;
		//$smarty->caching = true;
		//$smarty->cache_lifetime = 0;
		//$smarty->assign("title",$title);
		
		$replaced = array("&", "\"", "\'");
	    $replacer = array("dan", " ", " ");
	    $username = str_replace($replaced, $replacer, $_POST['username']);
		
		//$usernya=$username;
		//echo $usernya;echo exit;
		$password = md5($_POST['password']);
		
		$waktusession    = date("U", strtotime(date("Y-m-d H:i:s")));
	    $_SESSION["username"] = $username;
		$_SESSION["status"] = "1";
	    $_SESSION["passwordsession"] = $password;
	    $_SESSION["waktusession"] = $waktusession;
		//$_SESSION["tmk_id"] = $tmk_id;
		$_SESSION["namasrvapl"] = $_SERVER['SERVER_NAME'];
		
		//$sqlceklogin = "UPDATE core_identity_user SET logon_success_last_date=now(),logon_last_date=now() WHERE user_id='$username' LIMIT 1 ";
		//$sqlceklogin = "UPDATE tab_user SET lastlogin=now() WHERE username='$username' LIMIT 1 ";
	    //echo $sqlceklogin;echo exit;
		//$rs = $db->Execute($sqlceklogin);
		
		//echo "ok";echo exit;
	    $sql = "select * from core_identity_user where user_id = '$username' and lit_auth_password = '$password'";
		//echo $sql; exit;
	 
		$execute = $db->Execute($sql);
		$data = $execute->FetchRow();
		$avail = $execute->RecordCount();
		if($avail > 0){
			//echo "ada record";echo exit;
			header("location:showmenu");
		}
		else
		{
			//redirect(base_url('auth'));
			/*
			echo "<script language=javascript>
	                    alert('Login Gagal! Periksa Kembali Akun Anda!');
	                    window.location='./';
	                 </script>";
			*/		 
			redirect(base_url('auth'));
		}
		
		
    }
    
    function logout()
    {
        //$this->session->sess_destroy();
		//$this->session->session_destroy();
        //$this->login();
		//$this->session->sess_destroy($data);
		session_destroy();
		session_unset();
		redirect(base_url('./'));
    }
    
	function showmenu()
    {
		
		if($this->session->userdata('username') == ''){
			redirect(base_url('auth'));
		}
		//require ('user_cek.php');
  	    global $title,$db;
		//$smarty = new Smarty;
 		//$smarty->force_compile = true;
		$this->custom_smarty->force_compile = true;
		$this->custom_smarty->caching = true;
		$this->custom_smarty->cache_lifetime = 120;
		$this->custom_smarty->assign("title",$title);
		$this->custom_smarty->assign("username",$_SESSION['username']);
		$this->custom_smarty->assign("status",$_SESSION['status']);
		$this->custom_smarty->assign("samping","1");
		//$smarty->debugging = true;
		//$smarty->caching = true;
		//$smarty->cache_lifetime = 120;
		//$smarty->assign("title",$title);
		//$smarty->assign("username",$_SESSION['username']);
		//$smarty->assign("status",$_SESSION['status']);
		//$smarty->assign("samping","1");
		
			/*
	        if (!$rs->RecordCount())
			{
			     $kosong = 'kosong';
	             $pos_list[] = array(
	                'no'=>$kosong,
	               	'namaprojek'=>$kosong,
	               	'bulan' =>$kosong,
					'currcost'=>$kosong,
					'prevcost'=>$kosong,
					'ytd'=>$kosong,
					'rasio'=>$kosong
		                        );
	        }
	        else
	        { 
			
				//$rs=mysql_query($sql);
	            $no = 0; 
				while ($row = $rs->FetchRow()){
				      ++$no;
						//echo $row['kode_coap'];echo exit;
	                  $pos_list[] = array(
	                    'no'=>$no,
	                    'namaprojek' =>$row['nameproject'],
	                    'bulan'=>$row['bulan'],
					    'currcost'=>$row['current_cost'],
						'prevcost'=>$row['prev_cost'],
	                    'ytd'=>$row['ytd'],
						'rasio'=>$row['rasio'],
						);
						//echo $pos_list;
	            }
				$nomor = $no;
	        }
			*/
			    //echo $_SESSION['kd_coap_user'];echo exit;
				//echo $pos_list[] . "<br>";echo exit;
	        	//$smarty->assign("pos", $pos_list);
				//echo base_url();
				$this->custom_smarty->assign('link',base_url());
				$this->custom_smarty->display('home.tpl');
				
			
		}
    
}