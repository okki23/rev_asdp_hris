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
 
	$query = $this->db->query("select *,case when gender = '1' then 'Pria' else 'Wanita' end as genderstatus,date_format(start_date,'%d %M %Y') as tanggalmasuknya from human_pa_md_emp_personal order by personnel_id asc");

 	return $query;
	}




	public function get_all_penugasan_detail_json($personnel_id){
 	
	$query = $this->db->query("select a.*,b.name as tipe_penugasan,c.name as alasan_penugasan,  date_format(a.start_date,'%d %M %Y') as tanggalmasuknya,date_format(a.end_date,'%d %M %Y') as tanggalberakhirnya from human_pa_md_emp_assignment a
		left join human_cust_personnel_assignment_type b on b.assignment_type = a.assignment_type 
		left join human_cust_personnel_assignment_reason c on c.assignment_reason = a.assignment_reason
		where a.personnel_id = '$personnel_id' order by personnel_id asc");

			$list_data = null;
	        foreach ($query->result() as $row) {
	            $list_data[] = array(
	                'personnel_id' => $row->personnel_id,
	                'end_date'=>$row->tanggalberakhirnya,
	                'start_date'=> $row->tanggalmasuknya,
	                'assignment_type'=>$row->assignment_type,
	                'assignment_reason'=>$row->assignment_reason,
	                'tipe_penugasan'=>$row->tipe_penugasan,
	                'alasan_penugasan' => $row->alasan_penugasan
	            );
	        }
	     return $list_data;
	}

	public function penugasan_detail_delete($personnel_id,$assignment_type,$assignment_reason){
		$sql = $this->db->query("delete from human_pa_md_emp_assignment where personnel_id = '$personnel_id' AND assignment_type = '$assignment_type' AND assignment_reason = '$assignment_reason'");
		return $sql;
	}
	public function get_all_pic_penugasan_json($personnel_id){
 	
	$query = $this->db->query("select *,case when gender = '1' then 'Pria' else 'Wanita' end as genderstatus, date_format(start_date,'%d %M %Y') as tanggalmasuknya from human_pa_md_emp_personal where personnel_id = '$personnel_id' order by personnel_id asc");

			$list_data = null;
	        foreach ($query->result() as $row) {
	            $list_data[] = array(
	                'personnel_id' => $row->personnel_id,
	                'name_full'   => $row->name_full,
	                'start_date'=> $row->tanggalmasuknya,
	                'tipe_penugasan'=>$row->tanggalmasuknya,
	                'alasan_penugasan' => $row->tanggalmasuknya
	            );
	        }
	     return $list_data;
	}

	public function get_all_pic_data_penugasan_json($personnel_id){
 
	$query = $this->db->query("select *, date_format(start_date,'%d %M %Y') as tglmulai, date_format(end_date,'%d %M %Y') as tglakhir from human_pa_md_emp_assignment where personnel_id = '$personnel_id'");
 
	}




	//ini method untuk menarik data terakhir personnel id untuk keperluan penambahan data
	public function get_last_personnel_id(){
	$query = $this->db->query("SELECT SUBSTR(MAX(personnel_id),-8) AS id  FROM human_pa_md_emp_personal");

	return $query;
	}

	//ini method untuk menyimpan data penugasan baru
	public function pro_add_penugasan($nik,$stor_tanggal_masuk,$nama){
	$query = $this->db->query("insert into human_pa_md_emp_personal (personnel_id,start_date,name_full) VALUES ('$nik','$stor_tanggal_masuk','$nama')");
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
	public function opt_employee_wilayah(){
	$sql = $this->db->query("select * from human_cust_position_work_location order by work_location asc");
	return $sql;
	}


	public function penugasan_detail($id){
		$query = $this->db->query("select a.*,b.name as tipeasignment,c.name as tipereason from human_pa_md_emp_assignment a
			left join human_cust_personnel_assignment_type b on b.assignment_type = a.assignment_type
			left join human_cust_personnel_assignment_reason c on c.assignment_reason = a.assignment_reason
			where a.personnel_id = '$id'");

		return $query;
	}

	public function penugasan_detail_pro_add($data){
		$sql = $this->db->query("insert into human_pa_md_emp_assignment (personnel_id,start_date,end_date,status_process,assignment_type,assignment_reason,employee_area,employee_office,employee_type,employee_subtype,position,organization,cost_center,company,unit,jabatan,bagian,work_location,legal_letter_no,legal_date,legal_effective_date,remark) VALUES ('$data[personnel_id]','$data[start_date]','$data[end_date]','$data[status_process]','$data[assignment_type]','$data[assignment_reason]','$data[employee_area]','$data[employee_office]','$data[employee_type]','$data[employee_subtype]','$data[position]','$data[organization]','$data[cost_center]','$data[company]','$data[unit]','$data[jabatan]','$data[bagian]','$data[work_location]','$data[legal_letter_no]','$data[legal_date]','$data[legal_effective_date]','$data[remark]')");

		return $sql;
	}

	public function penugasan_detail_update($personnel_id,$assignment_type,$assignment_reason){

		$sql = $this->db->query("
			select *,date_format(start_date,'%d-%m-%Y') as tanggalstart,date_format(end_date,'%d-%m-%Y') as tanggalend,date_format(legal_date,'%d-%m-%Y') as legal_datex,date_format(legal_effective_date,'%d-%m-%Y') as legal_effective_datex from human_pa_md_emp_assignment where personnel_id = '$personnel_id' and assignment_type = '$assignment_type' and assignment_reason = '$assignment_reason'");
		return $sql;
	}

	public function penugasan_update_selected($id){
		$query = $this->db->query("select *,case when gender = '1' then 'Pria' else 'Wanita' end as genderstatus,date_format(start_date,'%Y %M %d') as tanggalmasuknya ,date_format(start_date,'%Y %M %d') as tanggalmasuknya,date_format(end_date,'%Y %M %d') as tanggalberakhirnya,date_format(birth_date,'%d %M %Y') as tanggallahirnya from human_pa_md_emp_personal where personnel_id = '$id' ");
		return $query;
	}

	public function penugasan_detail_pro_update($data){
		/*
			$personnel_id = $row->personnel_id;
            $start_date = $row->tanggalstart;
            $end_date = $row->tanggalend;
            $status_process = $row->status_process;
            $assignment_type = $row->assignment_type;
            $assignment_reason = $row->assignment_reason;
            $employee_area = $row->employee_area;
            $employee_office = $row->employee_office;
            $employee_type = $row->employee_type;
            $employee_subtype = $row->employee_subtype;
            $position = $row->position;
            $organization = $row->organization;
            $jabatan = $row->jabatan;
            $unit = $row->unit;
            $bagian = $row->bagian;
            $work_location = $row->work_location;
            $cost_center = $row->cost_center;
            $company = $row->company;
            $legal_letter_no = $row->legal_letter_no;
            $legal_date = $row->legal_date;
            $legal_effective_date = $row->legal_effective_date;
            $remark = $row->remark;
		*/
		$query = $this->db->query("update human_pa_md_emp_assignment set 					status_process = '$data[status_process]', 
							assignment_type = '$data[assignment_type]',
							assignment_reason = '$data[assignment_reason]',
							employee_area = '$data[employee_area]',
							employee_office = '$data[employee_office]',
							employee_type = '$data[employee_type]',
							employee_subtype = '$data[employee_subtype]',
							position = '$data[position]',
							organization = '$data[organization]',
							jabatan = '$data[jabatan]',
							unit = '$data[unit]',
							bagian = '$data[bagian]',
							work_location = '$data[work_location]',	
							cost_center = '$data[cost_center]',
							company = '$data[company]',
							legal_letter_no = '$data[legal_letter_no]',
							legal_date = '$data[legal_date]',
							legal_effective_date = '$data[legal_effective_date]',
							remark = '$data[remark]'
							where personnel_id = '$data[personnel_id]' 
							AND start_date = '$data[start_date]' 
							AND end_date = '$data[end_date]'");
		return $query;
	}
	public function penugasan_delete($id){
		$query = $this->db->query("delete from human_pa_md_emp_personal where personnel_id = '$id' ");
		return $query;
	}

	public function pro_update_penugasan($nik,$stor_tanggal_masuk,$nama){
		$query = $this->db->query("update human_pa_md_emp_personal set start_date = '$stor_tanggal_masuk', name_full = '$nama' where personnel_id = '$nik'");
		return $query;
	}

	public function penugasan_update_pro_selected($data){
		 
		 $sql = $this->db->query("update human_pa_md_emp_personal set 
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
 
 
}
