<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {
/*
@author : Okki Setyawan &copy 2016
*/
	
	//ini method yang pertama kali di jalankan oleh codeginiter,semua pemanggilan ada disini termasuk hak akses
	public function __construct(){
		parent ::__construct();
		//panggil model pegawai jika memang controller butuh transaksi data
		$this->load->model('model_pegawai');
		//jika tidak ada session yang terdaftar maka sistem balik ke halaman login
		//if($this->session->userdata('username') == ''){
		//	redirect(base_url('login'));
		//}
		 
	}


	public function transaksi_id($param='') {
		$data = $this->model_pegawai->get_last_personnel_id();
		$lastid = $data->row();
		$idnya = $lastid->id;
	 

            if($idnya=='') { // bila data kosong
                $ID = $param."00000001";
				//00000001
            }else {
                $MaksID = $idnya;
                $MaksID++;
                if($MaksID < 10) $ID = $param."0000000".$MaksID;  
                else if($MaksID < 100) $ID = $param."000000".$MaksID; 
                else if($MaksID < 1000) $ID = $param."00000".$MaksID;  
                else if($MaksID < 10000) $ID = $param."0000".$MaksID;  
				else if($MaksID < 100000) $ID = $param."000".$MaksID;
				else if($MaksID < 1000000) $ID = $param."00".$MaksID;
				else if($MaksID < 10000000) $ID = $param."0".$MaksID;
                else $ID = $MaksID;  
            }

            return $ID;
        }



	public function get_all_pegawai_json(){
		$data_employee = $this->model_pegawai->get_all_pegawai_json();
		$total = count($this->model_pegawai->get_all_pegawai_json());
		$data = json_encode($this->model_pegawai->get_all_pegawai_json());
		//echo json_encode($this->model_pegawai->get_all_pegawai_json());
		//echo "{\"total\":". $total .",\"records\":" . $data . "}";
	echo "{\"records\":" . $data . "}";
	}
	public function get_chart_pegawai_json(){
		//$data_employee = $this->model_pegawai->get_all_pegawai_json();
		//$total = count($this->model_pegawai->get_all_pegawai_json());
		echo json_encode($this->model_pegawai->get_chart_pegawai_json());
		//echo json_encode($this->model_pegawai->get_all_pegawai_json());
		//echo "{\"total\":". $total .",\"records\":" . $data . "}";
	//echo "{\"records\":" . $data . "}";
	}
	
	//ini method buat menampilkan ke layar pertama kali ketika controller diakses
	public function index()	{
		//ini variabel buat nimpuk ke view ,ini kalau di smarty namanya assign
		$error = '';
		$data_employee = $this->model_pegawai->get_all_pegawai();
		$data = array('judul'=>'Human Resource Information System (HRIS) ASDP',
					  'error'=>$error,
					  'data_employee'=>$data_employee,
					  'footer'=>'© 2016. Langit Infotama');		
		//ini mirip sama display smarty tapi si CI ngelempar view sama data sekaligus
		//kalau smarty antara display sama assign terpisah

		//$this->session->set_flashdata('pesan','');
		
		$this->load->view('pegawai/pegawai_view',$data);
		 

		 
	}

	public function add_pegawai(){
		//ini variabel buat nimpuk ke view ,ini kalau di smarty namanya assign
		$error = '';
		//$last_personnel_id = $this->model_pegawai->get_last_personnel_id();
  
		$data = array('judul'=>'Human Resource Information System (HRIS) ASDP',
					  'error'=>$error,
					  'last_id'=>$this->transaksi_id(),
					  'footer'=>'© 2016. Langit Infotama');	
		//ini mirip sama display smarty tapi si CI ngelempar view sama data sekaligus
		//kalau smarty antara display sama assign terpisah
		$this->load->view('pegawai/pegawai_add',$data);
	}

		public function pro_add_pegawai(){
		//ini adalah tipe parsingan data si CI
		$nik = $this->input->post('nik');
		$tanggal_masuk = $this->input->post('tanggal_masuk');
		//$stor_tanggal_masuk = date('Y-m-d',strtotime($tanggal_masuk));
		$datestart = htmlspecialchars($tanggal_masuk);
		$tgldn = substr($datestart,0,2);
		$blndn = substr($datestart,3,2);
		$thndn = substr($datestart,6,4);
		$tglstart = $thndn.$blndn.$tgldn;
		$nama =   $this->input->post('nama');

 		//karena model terpisah jadi kita panggil method si model saja ,karena core model sudah dipanggil sama si construct diatas
		//jangan lupa parameter parsingan dimasukin

		$sqlinsert = $this->model_pegawai->pro_add_pegawai($nik,$tglstart,$nama);
		$link = base_url();
		//jika berhasil maka pindah ke halaman view pegawai
		//$this->session->set_flashdata('pesan','Data Berhasil Dimasukkan');
		 //redirect(base_url('pegawai'));
		echo "<script language=javascript>
				alert('Simpan Berhasil');
		        window.location='$link/pegawai/add_pegawai';
		      </script>";
		
	 	
 
		
	}

	public function pegawai_update(){
		$id = $this->uri->segment(3);
	 	//$this->model_pegawai->pegawai_update($id);
	 	$data_employee = $this->model_pegawai->pegawai_update($id);
	 	$error = '';
	 		$data = array('judul'=>'Human Resource Information System (HRIS) ASDP',
					  'error'=>$error,
					  'data_employee'=>$data_employee,
					  'footer'=>'© 2016. Langit Infotama');	
	 	$this->load->view('pegawai/pegawai_edit',$data);
	}

	public function pro_update_pegawai(){
		$nik = $this->input->post('nik');
		$tanggal_masuk = $this->input->post('tanggal_masuk');
		$stor_tanggal_masuk = date('Y-m-d',strtotime($tanggal_masuk));
		$nama =   $this->input->post('nama');
		//echo $nik.'-'.$stor_tanggal_masuk.'-'.$nama;
		$sqlupdate = $this->model_pegawai->pro_update_pegawai($nik,$stor_tanggal_masuk,$nama);
		$link = base_url();
		//jika berhasil maka pindah ke halaman view pegawai
		//echo $this->session->set_flashdata('pesan','Data Berhasil Dirubah');
		//echo 2;
		//redirect(base_url('pegawai'));
		//
		echo "<script language=javascript>
				alert('Perbaikan Berhasil');
				window.location='$link/pegawai/pegawai_update/$nik';
		      </script>";

	}

	public function pegawai_delete(){
		$id = $this->uri->segment(3);
		$this->model_pegawai->pegawai_delete($id);
		echo json_encode($this->model_pegawai->pegawai_delete($id));
		//$this->session->set_flashdata('pesan','Data Berhasil Dihapus');
		// redirect(base_url('pegawai'));

	}
	
	public function pegawai_importphoto(){
	
	$sql        =   $this->db->query("SELECT * FROM human_pa_md_emp_photo order by start_date desc limit 1")->row_array();
    $file   =   'images/'.$sql['personnel_id'].".jpg";
	$handle = fopen($file, 'a+');
	fwrite($handle, $sql['binary_data']); 
	//$result = $this->db->query("SELECT * FROM human_pa_md_emp_photo limit 1")->row_array();
	//echo json_encode($result);
				/*
		$query = "SELECT * FROM human_pa_md_emp_photo limit 1";
				$result = $db->Execute($query);
	            
				while ($row = $rs->FetchRow()){

					$file = 'images/'.$row['personnel_id'].".jpg";
					$handle = fopen($file, 'a+');

					
					fwrite($handle, $row['binary_data']); 
				      	
	            }
		echo json_encode($result);
		*/
	}

	 
}
