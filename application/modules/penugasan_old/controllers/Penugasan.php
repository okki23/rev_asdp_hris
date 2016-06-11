<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penugasan extends CI_Controller {
/*
@author : Okki Setyawan &copy 2016
*/
	
	//ini method yang pertama kali di jalankan oleh codeginiter,semua pemanggilan ada disini termasuk hak akses
	  
	public function __construct(){
		parent ::__construct();
		//panggil model penugasan jika memang controller butuh transaksi data
		$this->load->model('model_penugasan');
		//jika tidak ada session yang terdaftar maka sistem balik ke halaman login
		if($this->session->userdata('username') == ''){
			redirect(base_url('login'));
		}
		 
	} 


 	public function get_all_penugasan_detail_json(){
		$personnel_id = $this->uri->segment(3);
		 
		echo json_encode($this->model_penugasan->get_all_penugasan_detail_json($personnel_id));
	}

	public function get_all_pic_penugasan_json(){
		$personnel_id = $this->uri->segment(3);
		 
		echo json_encode($this->model_penugasan->get_all_pic_penugasan_json($personnel_id));
	}
 
	//ini method buat menampilkan ke layar pertama kali ketika controller diakses
	public function index()	{
		//ini variabel buat nimpuk ke view ,ini kalau di smarty namanya assign
		$error = '';
		$personnel_id = $this->uri->segment(3);
		$data = array('judul'=>'Human Resource Information System (HRIS) ASDP',
					'personnel_id'=>$personnel_id,
					  
					  'footer'=>'© 2016. Langit Infotama');		
		//ini mirip sama display smarty tapi si CI ngelempar view sama data sekaligus
		//kalau smarty antara display sama assign terpisah

		//$this->session->set_flashdata('pesan','');
		
		$this->load->view('penugasan/penugasan_detail_view',$data);
		 

		 
	}

	public function penugasan_detail_json(){
	 	$id = $this->uri->segment(3);
	 
		$sqlemp = $this->db->query("select * from human_pa_md_emp_assignment where personnel_id = '".$id."'");
		 

		foreach ($sqlemp->result() as $row) {
			$list[] = array('id'=>$row->id,
							'personnel_id'=>$row->personnel_id,
							'start_date'=>$row->start_date,
							'end_date'=>$row->end_date
							 

							);	 
		}
		echo json_encode($list);
 
	}

  

	public function penugasan_detail(){
		$personnel_id = $this->uri->segment(3);
	 	//$this->model_penugasan->penugasan_update($id);
	 	$data_employee = $this->model_penugasan->penugasan_detail($personnel_id);
 	 
	  
	 	$error = '';
	 		$data = array('judul'=>'Human Resource Information System (HRIS) ASDP',
					  'error'=>$error,
					  'personnel_id' => $personnel_id,		   
					  'data_employee'=>$data_employee,
					  'footer'=>'© 2016. Langit Infotama');	

	 	$this->load->view('penugasan/penugasan_detail_view',$data);
	}

	public function penugasan_detail_delete($personnel_id,$assignment_type,$assignment_reason){
		$personnel_id = $this->uri->segment(3);
		$assignment_type = $this->uri->segment(4);
		$assignment_reason = $this->uri->segment(5);
		$sqldelete = $this->model_penugasan->penugasan_detail_delete($personnel_id,$assignment_type,$assignment_reason);
		$this->session->set_flashdata('pesan','Data berhasil di Hapus!');
		redirect(base_url('penugasan/penugasan_detail/'.$personnel_id));
	}

	public function penugasan_detail_add(){
		$personnel_id = $this->uri->segment(3);
		$date_start_today = date('d-m-Y');
 		$date_end =  '31-12-9999';
 	 	$error = '';
	 	$data = array('judul'=>'Human Resource Information System (HRIS) ASDP',
					  'error'=>$error,
					  'personnel_id'=>$personnel_id,
					  'opt_assignment_type'=>$this->model_penugasan->opt_assignment_type(),
					  'opt_assignment_reason'=>$this->model_penugasan->opt_assignment_reason(),
					  'opt_employee_type'=>$this->model_penugasan->opt_employee_type(),
					  'opt_employee_subtype'=>$this->model_penugasan->opt_employee_subtype(),
					  'opt_employee_area'=>$this->model_penugasan->opt_employee_area(),
					  'opt_employee_cabang'=>$this->model_penugasan->opt_employee_cabang(),
					  'opt_employee_wilayah'=>$this->model_penugasan->opt_employee_wilayah(),
					  'date_start_today'=>$date_start_today,
					  'date_end'=>$date_end,
					  'footer'=>'© 2016. Langit Infotama');	

	 	$this->load->view('penugasan/penugasan_detail_add',$data);
	}


	public function penugasan_detail_update($personnel_id,$assignment_type,$assignment_reason){
		$personnel_id = $this->uri->segment(3);
		$assignment_type = $this->uri->segment(4);
		$assignment_reason = $this->uri->segment(5);
		$date_start_today = date('d-m-Y');
 		$date_end =  '31-12-9999';
 	 	$error = '';
 	 	$data_assignment = $this->model_penugasan->penugasan_detail_update($personnel_id,$assignment_type,$assignment_reason);
	 	$data = array('judul'=>'Human Resource Information System (HRIS) ASDP',
					  'error'=>$error,
					  'personnel_id'=>$personnel_id,
					  'opt_assignment_type'=>$this->model_penugasan->opt_assignment_type(),
					  'opt_assignment_reason'=>$this->model_penugasan->opt_assignment_reason(),
					  'opt_employee_type'=>$this->model_penugasan->opt_employee_type(),
					  'opt_employee_subtype'=>$this->model_penugasan->opt_employee_subtype(),
					  'opt_employee_area'=>$this->model_penugasan->opt_employee_area(),
					  'opt_employee_cabang'=>$this->model_penugasan->opt_employee_cabang(),
					  'opt_employee_wilayah'=>$this->model_penugasan->opt_employee_wilayah(),
					  'date_start_today'=>$date_start_today,
					  'date_end'=>$date_end,
					  'data_assignment'=>$data_assignment,
					  
					  'footer'=>'© 2016. Langit Infotama');	

	 	$this->load->view('penugasan/penugasan_detail_update',$data);
	}

	public function cek_opt(){
		$sql = $this->model_penugasan->opt_assignment_reason();

		foreach ($sql->result() as $baris) {
			echo $baris->assignment_reason .'-'. $baris->name .'<br>';
		}
	}

	public function penugasan_detail_pro_update(){
		$data = array('personnel_id'=>$this->input->post('personnel_id'),
					  'start_date'=>str_replace("-","",date('Ymd',strtotime($this->input->post('start_date')))),
					  'end_date'=>str_replace("-","",date('Ymd',strtotime($this->input->post('end_date')))),
					  'status_process'=>$this->input->post('status_process'),				  
					  'assignment_type'=>$this->input->post('assignment_type'),
					  'assignment_reason'=>$this->input->post('assignment_reason'),
					  'employee_area'=>$this->input->post('employee_area'),
					  'employee_office'=>$this->input->post('employee_office'),
					  'employee_type'=>$this->input->post('employee_type'),
					  'employee_subtype'=>$this->input->post('employee_subtype'),
					  'position'=>$this->input->post('position'),
					  'organization'=>$this->input->post('organization'),
					  'jabatan'=>$this->input->post('jabatan'),
					  'unit'=>$this->input->post('unit'),
					  'bagian'=>$this->input->post('bagian'),
					  'work_location'=>$this->input->post('work_location'),
					  'cost_center'=>$this->input->post('cost_center'),
					  'company'=>$this->input->post('company'),
					  'legal_letter_no'=>$this->input->post('legal_letter_no'),
					  'legal_date'=>str_replace("-","",date('Ymd',strtotime($this->input->post('legal_date')))),
				  	  'legal_effective_date'=>str_replace("-","",date('Ymd',strtotime($this->input->post('legal_effective_date')))),
					  'remark'=>$this->input->post('remark')
					  );

		$sql = $this->model_penugasan->penugasan_detail_pro_update($data);

	 	$this->session->set_flashdata('pesan','Data berhasil di Rubah!');
		redirect(base_url('penugasan/penugasan_detail_update/'.$data['personnel_id'].'/'.$data['assignment_type'].'/'.$data['assignment_reason']));
	}
	 
	public function penugasan_detail_pro_add(){
		$data = array('personnel_id'=>$this->input->post('personnel_id'),
					  'start_date'=>str_replace("-","",date('Ymd',strtotime($this->input->post('start_date')))),
					  'end_date'=>str_replace("-","",date('Ymd',strtotime($this->input->post('end_date')))),
					  'status_process'=>$this->input->post('status_process'),				  
					  'assignment_type'=>$this->input->post('assignment_type'),
					  'assignment_reason'=>$this->input->post('assignment_reason'),
					  'employee_area'=>$this->input->post('employee_area'),
					  'employee_office'=>$this->input->post('employee_office'),
					  'employee_type'=>$this->input->post('employee_type'),
					  'employee_subtype'=>$this->input->post('employee_subtype'),
					  'position'=>$this->input->post('position'),
					  'organization'=>$this->input->post('organization'),
					  'jabatan'=>$this->input->post('jabatan'),
					  'unit'=>$this->input->post('unit'),
					  'bagian'=>$this->input->post('bagian'),
					  'work_location'=>$this->input->post('work_location'),
					  'cost_center'=>$this->input->post('cost_center'),
					  'company'=>$this->input->post('company'),
					  'legal_letter_no'=>$this->input->post('legal_letter_no'),
					  'legal_date'=>str_replace("-","",date('Ymd',strtotime($this->input->post('legal_date')))),
				  	  'legal_effective_date'=>str_replace("-","",date('Ymd',strtotime($this->input->post('legal_effective_date')))),
					  'remark'=>$this->input->post('remark')
					  );

		$sql = $this->model_penugasan->penugasan_detail_pro_add($data);
		$link = base_url();
	 	//$this->session->set_flashdata('pesan','Data berhasil di Simpan!');
		//redirect(base_url('penugasan/penugasan_detail_add/'.$data['personnel_id']));
		
		$idp = $data['personnel_id'];
		echo "<script language=javascript>
				alert('Save Success');
		        window.location='$link/penugasan/penugasan_detail_add/$idp';
		      </script>";
	}

 

	public function penugasan_update_pro_selected(){
		//date('Y-m-d',strtotime($_POST['contract_date']))
		$data = array(
				'personnel_id'=>$this->input->post('personnel_id'),
				'instance'=>$this->input->post('instance'),
				'start_date'=>date('Y-m-d',strtotime($this->input->post('start_date'))),
			 	'name_full'=>$this->input->post('name_full'),
				'name_first'=>$this->input->post('name_first'),
				'name_mid'=>$this->input->post('name_mid'),
				'name_last'=>$this->input->post('name_last'),
				'name_nick'=>$this->input->post('name_nick'),
				'title'=>$this->input->post('title'),
				'end_date'=>date('Y-m-d',strtotime($this->input->post('end_date'))),
				'status_process'=>$this->input->post('status_process'),
				'gender'=>$this->input->post('gender'),
				'birth_date'=>date('Y-m-d',strtotime($this->input->post('birth_date'))),
				'birth_place'=>$this->input->post('birth_place'),
				'nationality'=>$this->input->post('nationality'),
				'ethnic'=>$this->input->post('ethnic'),
				'ethnic_other'=>$this->input->post('ethnic_other'),
				'religion'=>$this->input->post('religion'),
				'marital_status'=>$this->input->post('marital_status'),
				'status_since'=>$this->input->post('status_since'),
				'no_of_children'=>$this->input->post('no_of_children'),
				);
	  
		$sqlupdate = $this->model_penugasan->penugasan_update_pro_selected($data);

		$this->session->set_flashdata('pesan','Data berhasil di Update!');
		redirect(base_url('penugasan/penugasan_detail/'.$data['personnel_id']));

	}
 
	 
}
