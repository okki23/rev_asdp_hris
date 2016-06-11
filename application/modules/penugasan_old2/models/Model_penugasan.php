<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_penugasan extends CI_Model {
/*
@author : Okki Setyawan &copy 2016
*/

	public function __construct(){
		parent ::__construct();
		 
	}

	//semua kueri SQL akan dijalankan disini
	//ini method untuk menarik seluruh data penugasan
	public function get_all_penugasan(){
 
	$query = $this->db->query("select *,case when gender = '1' then 'Pria' else 'Wanita' end as genderstatus,date_format(start_date,'%d %M %Y') as tanggalmasuknya from human_pa_md_app_personal order by personnel_id asc");

 	return $query;
	}

	public function get_all_pic_penugasan_json(){
 	
	$query = $this->db->query("select *,case when gender = '1' then 'Pria' else 'Wanita' end as genderstatus, date_format(start_date,'%d %M %Y') as tanggalmasuknya from human_pa_md_app_personal order by personnel_id asc");

			$list_data = null;
	        foreach ($query->result() as $row) {
	            $list_data[] = array(
	                'personnel_id' => $row->personnel_id,
	                'name_full'   => $row->name_full,
	                'start_date'=> $row->tanggalmasuknya,
	                'opsidelete'=> '<a href="'.base_url('penugasan/penugasan_delete/').'/'.$row->personnel_id.'"" >  <img src="'.base_url('assets/jqwidget/images/recycle.png').'" title="Edit Data"> </a>',
	                'opsidetail'=> '<a  href="'.base_url('penugasan/penugasan_detail/').'/'.$row->personnel_id.'"" > <img src="'.base_url('assets/jqwidget/images/settings.png').'" title="Edit Data"></a>'

	            );
	        }
	     return $list_data;
	}

	public function get_all_pic_data_penugasan_json($personnel_id){
 
	$query = $this->db->query("select *, date_format(start_date,'%d %M %Y') as tglmulai, date_format(end_date,'%d %M %Y') as tglakhir from human_pa_md_emp_assignment where personnel_id = '$personnel_id'");
 
	}




	//ini method untuk menarik data terakhir personnel id untuk keperluan penambahan data
	public function get_last_personnel_id(){
	$query = $this->db->query("SELECT SUBSTR(MAX(personnel_id),-8) AS id  FROM human_pa_md_app_personal");

	return $query;
	}

	//ini method untuk menyimpan data penugasan baru
	public function pro_add_penugasan($nik,$stor_tanggal_masuk,$nama){
	$query = $this->db->query("insert into human_pa_md_app_personal (personnel_id,start_date,name_full) VALUES ('$nik','$stor_tanggal_masuk','$nama')");
		if($query){
			$signal = 1;			
		}else{
			$signal = 0;
		}
		return $signal;
		return $query;

	}

	public function opt_assignment_type(){
	$sql = $this->db->query("select * from human_cust_personnel_assignment_type order by assignment_type asc");
	return $sql;
	}

	public function opt_assignment_reason(){
	$sql = $this->db->query("select * from human_cust_personnel_assignment_reason order by assignment_reason asc");
	return $sql;
	}

	public function opt_employee_type(){
	$sql = $this->db->query("select * from human_cust_employee_type order by employee_type asc");
	return $sql;
	}

	public function opt_employee_subtype(){
	$sql = $this->db->query("select * from human_cust_employee_subtype order by employee_subtype asc");
	return $sql;
	}

	public function opt_employee_area(){
	$sql = $this->db->query("select * from human_cust_employee_area order by employee_area asc");
	return $sql;
	}

	public function opt_employee_cabang(){
	$sql = $this->db->query("select * from human_cust_employee_office order by employee_office asc");
	return $sql;
	}


	public function penugasan_detail($id){
		$query = $this->db->query("select a.*,b.name as tipeasignment,c.name as tipereason from human_pa_md_emp_assignment a
			left join human_cust_personnel_assignment_type b on b.assignment_type = a.assignment_type
			left join human_cust_personnel_assignment_reason c on c.assignment_reason = a.assignment_reason
			where a.personnel_id = '$id'");

		return $query;
	}

	public function penugasan_update_selected($id){
		$query = $this->db->query("select *,case when gender = '1' then 'Pria' else 'Wanita' end as genderstatus,date_format(start_date,'%Y %M %d') as tanggalmasuknya ,date_format(start_date,'%Y %M %d') as tanggalmasuknya,date_format(end_date,'%Y %M %d') as tanggalberakhirnya,date_format(birth_date,'%d %M %Y') as tanggallahirnya from human_pa_md_app_personal where personnel_id = '$id' ");
		return $query;
	}

	public function penugasan_delete($id){
		$query = $this->db->query("delete from human_pa_md_app_personal where personnel_id = '$id' ");
		return $query;
	}

	public function pro_update_penugasan($nik,$stor_tanggal_masuk,$nama){
		$query = $this->db->query("update human_pa_md_app_personal set start_date = '$stor_tanggal_masuk', name_full = '$nama' where personnel_id = '$nik'");
		return $query;
	}

	public function penugasan_update_pro_selected($data){
		 
		 $sql = $this->db->query("update human_pa_md_app_personal set 
						  		instance = '$data[instance]',
						  		name_full = '$data[name_full]',
						  		name_first = '$data[name_first]',
						  		name_mid = '$data[name_mid]',
						  		name_last = '$data[name_last]',
						  		name_nick = '$data[name_nick]',
						  		start_date = '$data[start_date]',
						  		end_date = '$data[end_date]',
						  		title = '$data[title]',
						  		status_process = '$data[status_process]',
						  		gender = '$data[gender]',
						  		birth_date = '$data[birth_date]',
						  		birth_place = '$data[birth_place]',
						  		nationality = '$data[nationality]',
						  		ethnic = '$data[ethnic]',
						  		ethnic_other = '$data[ethnic_other]',
						  		religion = '$data[religion]',
						  		marital_status = '$data[marital_status]',
						  		status_since = '$data[status_since]',
						  		no_of_children = '$data[no_of_children]'
						  		where personnel_id = '$data[personnel_id]'
						  		");

		 return $sql;
		 
	}

	//bagian pendidikan
	public function penugasan_pendidikan_pro_add($data){
	$query = $this->db->query("insert into human_pa_md_app_personal (personnel_id,start_date,name_full) VALUES ('$nik','$stor_tanggal_masuk','$nama')");
		if($query){
			$signal = 1;			
		}else{
			$signal = 0;
		}
		return $signal;
		return $query;

	}

 
}
