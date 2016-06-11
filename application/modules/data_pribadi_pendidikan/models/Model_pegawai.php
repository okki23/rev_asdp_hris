<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pegawai extends CI_Model {
/*
@author : Okki Setyawan &copy 2016
*/

	public function __construct(){
		parent ::__construct();
		 
	}

	//semua kueri SQL akan dijalankan disini
	//ini method untuk menarik seluruh data pegawai
	public function get_all_pegawai(){
 
	$query = $this->db->query("select *,case when gender = '1' then 'Pria' else 'Wanita' end as gender from human_pa_md_app_personal");

 	return $query;
	}

	public function get_all_pegawai_json(){
 
	$query = $this->db->query("select *,case when gender = '1' then 'Pria' else 'Wanita' end as gender from human_pa_md_app_personal");

			$list_data = null;
	        foreach ($query->result() as $row) {
	            $list_data[] = array(
	                'personnel_id' => $row->personnel_id,
	                'name_full'   => $row->name_full,
	                'start_date'=> $row->start_date,
	                'opsidelete'=> '<a href="'.base_url('pegawai/pegawai_delete/').'/'.$row->personnel_id.'""> <img src="'.base_url('assets/jqwidget/images/recycle.png').'"> </a>',
	                'opsiupdate'=> '<a href="'.base_url('pegawai/pegawai_update/').'/'.$row->personnel_id.'""> <img src="'.base_url('assets/jqwidget/images/settings.png').'"></a>'

	            );
	        }
	     return $list_data;
	}




	//ini method untuk menarik data terakhir personnel id untuk keperluan penambahan data
	public function get_last_personnel_id(){
	$query = $this->db->query("SELECT SUBSTR(MAX(personnel_id),-8) AS id  FROM human_pa_md_app_personal");

	return $query;
	}

	//ini method untuk menyimpan data pegawai baru
	public function pro_add_pegawai($nik,$stor_tanggal_masuk,$nama){
	$query = $this->db->query("insert into human_pa_md_app_personal (personnel_id,start_date,name_full) VALUES ('$nik','$stor_tanggal_masuk','$nama')");
		if($query){
			$signal = 1;			
		}else{
			$signal = 0;
		}
		return $signal;
		return $query;

	}

	public function pegawai_update($id){
		$query = $this->db->query("select * from  human_pa_md_app_personal where personnel_id = '$id' ");
		return $query;
	}

	public function pegawai_delete($id){
		$query = $this->db->query("delete from human_pa_md_app_personal where personnel_id = '$id' ");
		return $query;
	}

	public function pro_update_pegawai($nik,$stor_tanggal_masuk,$nama){
		$query = $this->db->query("update human_pa_md_app_personal set start_date = '$stor_tanggal_masuk', name_full = '$nama' where personnel_id = '$nik'");
		return $query;
	}
 
}
