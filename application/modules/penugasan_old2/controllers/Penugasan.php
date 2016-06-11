<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class penugasan extends CI_Controller {
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
	//http://localhost/asdp_hris/penugasan/penugasan_detail/00000005
 

	public function get_all_pic_penugasan_json(){
		$data_employee = $this->model_penugasan->get_all_pic_penugasan_json();
		echo json_encode($this->model_penugasan->get_all_pic_penugasan_json());
	}
 
	//ini method buat menampilkan ke layar pertama kali ketika controller diakses
	public function index()	{
		//ini variabel buat nimpuk ke view ,ini kalau di smarty namanya assign
		$error = '';
		 
		$data = array('judul'=>'Human Resource Information System (HRIS) ASDP',
					  
					  'footer'=>'© 2016. Langit Infotama');		
		//ini mirip sama display smarty tapi si CI ngelempar view sama data sekaligus
		//kalau smarty antara display sama assign terpisah

		//$this->session->set_flashdata('pesan','');
		
		$this->load->view('penugasan/penugasan_view',$data);
		 

		 
	}

	public function penugasan_detail_json(){
	 	$id = $this->uri->segment(3);
	 
		$sqlemp = $this->db->query("select * from human_pa_md_emp_assignment where personnel_id = '".$id."'");
		 

		foreach ($sqlemp->result() as $row) {
			$list[] = array('id'=>$row->id,
							'personnel_id'=>$row->personnel_id,
							'start_date'=>$row->start_date,
							'end_date'=>$row->end_date,
							'opsiupdate'=> '<a href="'.base_url('penugasan/penugasan_update/').'/'.$row->personnel_id.'/'.$row->id.'""> <img src="'.base_url('assets/jqwidget/images/settings.png').'"> </a>',
	               			'opsidelete'=> '<a href="'.base_url('penugasan/penugasan_delete/').'/'.$row->personnel_id.'/'.$row->id.'""> <img src="'.base_url('assets/jqwidget/images/recycle.png').'"></a>'

							);	 
		}
		echo json_encode($list);
 
	}

  

	public function penugasan_detail(){
		$id = $this->uri->segment(3);
	 	//$this->model_penugasan->penugasan_update($id);
	 	$data_employee = $this->model_penugasan->penugasan_detail($id);
 	 
	 	//get employee 
	 	$sqlemp = $this->db->query("select * from human_pa_md_app_personal where personnel_id = $id");
	 	$getsqlemp = $sqlemp->row();

	 	$error = '';
	 		$data = array('judul'=>'Human Resource Information System (HRIS) ASDP',
					  'error'=>$error,
					  'id' => $id,
					  'personnel_id'=>$getsqlemp->personnel_id,
					  'nama_pegawai'=>$getsqlemp->name_full,
					  'link'=>base_url('penugasan/penugasan_detail/'.$id),
					  'data_employee'=>$data_employee,
					  'footer'=>'© 2016. Langit Infotama');	

	 	$this->load->view('penugasan/penugasan_detail_view',$data);
	}

	public function penugasan_detail_add(){
 	 	$error = '';
	 	$data = array('judul'=>'Human Resource Information System (HRIS) ASDP',
					  'error'=>$error,
					  'opt_assignment_type'=>$this->model_penugasan->opt_assignment_type(),
					  'opt_assignment_reason'=>$this->model_penugasan->opt_assignment_reason(),
					  'opt_employee_type'=>$this->model_penugasan->opt_employee_type(),
					  'opt_employee_subtype'=>$this->model_penugasan->opt_employee_subtype(),
					  'opt_employee_area'=>$this->model_penugasan->opt_employee_area(),
					  'opt_employee_cabang'=>$this->model_penugasan->opt_employee_cabang(),
					  'footer'=>'© 2016. Langit Infotama');	

	 	$this->load->view('penugasan/penugasan_detail_add',$data);
	}

	public function cek_opt(){
		$sql = $this->model_penugasan->opt_assignment_reason();

		foreach ($sql->result() as $baris) {
			echo $baris->assignment_reason .'-'. $baris->name .'<br>';
		}
	}
	 
	public function penugasan_detail_pro_add(){
		$id = $this->uri->segment(3);
	 	//$this->model_penugasan->penugasan_update($id);
 		$sql = $this->db->query("select * from human_cust_personnel_assignment_type order by assignment_type asc");



	 	$error = '';
	 		$data = array('judul'=>'Human Resource Information System (HRIS) ASDP',
					  'error'=>$error,
					  'opt_assignment_type'=>$this->model_penugasan->opt_assignment_type(),
					  'footer'=>'© 2016. Langit Infotama');	

	 	$this->load->view('penugasan/penugasan_detail_add',$data);
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
