<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require ('Dbconfig.php');
//require 'conn.php';
class Orm extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function Index()
	{

		
		$this->custom_smarty->assign('link',base_url());
		$this->custom_smarty->display('orm.tpl');
		
	}
	
	public function Data(){
		//echo ;
		//$this->load->view('welcome_message');
		$id = isset($_POST['id']) ? intval($_POST['id']) : 0;
		require 'conn.php';
		$result = array();
		$sql = "select *,case when area='D' then 'Darat' when area='L' then 'Laut' end as arean from core_orm where parentId=$id";
		$rs=mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($rs)){
			$row['state'] = $this->has_child($row['code']) ? 'closed' : 'open';
			$row['area'] = $row['arean'];
			array_push($result, $row);
		}
		//echo $row;
		echo json_encode($result);
		}	
	function Has_child($id){
	require 'conn.php';
	$sql = "select count(*) from core_orm where parentId=$id";
	$rs=mysqli_query($con,$sql);
	//$rs = mysqli_query("select count(*) from products where parentId=$id");
	$row = mysqli_fetch_array($rs);
	return $row[0] > 0 ? true : false;
	}
	
	function Add()
    {
		global $db;
		$kode = $this->uri->segment(3);
		$sql = "select substr(code,1,2)as kodecp,code,name from core_orm where code = '$kode'";
		$rs = $db->Execute($sql);	
		$data = $rs->FetchRow();
		$kdcp = $data['kodecp'];
		$name = $data['name'];
		$datenow = date('d-M-Y');
		$enddate = '31-12-9999';
		$this->custom_smarty->assign('link',base_url());
		$this->custom_smarty->assign('kode',$kode);
		$this->custom_smarty->assign('kdcp',$kdcp);
		$this->custom_smarty->assign('name',$name);
		$this->custom_smarty->assign('datenow',$datenow);
		$this->custom_smarty->assign('enddate',$enddate);
		$this->custom_smarty->display('orm_add.tpl');
	}
	
	function Save()
	{
		global $db;
		//$company = htmlspecialchars($_REQUEST['company']);
		$code = htmlspecialchars($_REQUEST['code']);
		$name = htmlspecialchars($_REQUEST['name']);
		$parentId = htmlspecialchars($_REQUEST['parentcode']);
		$area = htmlspecialchars($_REQUEST['area']);
		$datestart = htmlspecialchars($_REQUEST['datestart']);
		$dateend = htmlspecialchars($_REQUEST['dateend']);
		$tgldn = substr($datestart,0,2);
		$blndn = substr($datestart,3,2);
		$thndn = substr($datestart,6,4);
		$tglstart = $thndn.$blndn.$tgldn;
		$tglde = substr($dateend,0,2);
		$blnde = substr($dateend,3,2);
		$thnde = substr($dateend,6,4);
		$tglend = $thnde.$blnde.$tglde;

		$sql = "insert into core_orm (id,code,parentId,name,area,start_date,end_date) 
		values(0,'$code','$parentId','$name','$area','$tglstart','$tglend')";
		//echo $sql; exit;
		$execute = $db->Execute($sql);		
		if($execute)
                	$inserted = 1;
                else
                	$inserted = 0;
		
		$link = base_url();
		if($inserted)
			{
				  echo "<script language=javascript>
							alert('Save Success');
		                    window.location='$link/orm/add';
		                 </script>";
				}else{
				  echo "<script language=javascript>
		                    alert('Save Failed');
		                    window.location='$link/orm/add';
		                 </script>";
					}
	}
	
	function Edit()
    {
		global $db;
		$kode = $this->uri->segment(3);
		$sql = "select id,substr(code,1,2)as kodecp,parentId,code,name,start_date,end_date,area from core_orm where code = '$kode'";
		$rs = $db->Execute($sql);	
		$data = $rs->FetchRow();
		$id = $data['id'];
		$kdcp = $data['kodecp'];
		$name = $data['name'];
		$area = $data['area'];
		$start_date = $data['start_date'];
		$thn = substr($start_date,0,4);
		$bln = substr($start_date,4,2);
		$tgl = substr($start_date,6,2);
		$datenow = $tgl.'-'.$bln.'-'.$thn;
		$end_date = $data['end_date'];
		$thne = substr($end_date,0,4);
		$blne = substr($end_date,4,2);
		$tgle = substr($end_date,6,2);
		$enddate = $tgle.'-'.$blne.'-'.$thne;
		$parentcode = $data['parentId'];
		
		// take parent code
		$sqlp = "select name from core_orm where code = '$parentcode'";
		$rsp = $db->Execute($sqlp);	
		$datap = $rsp->FetchRow();
		$parentname = $datap['name'];
		
		$this->custom_smarty->assign('link',base_url());
		$this->custom_smarty->assign('id',$id);
		$this->custom_smarty->assign('kode',$kode);
		$this->custom_smarty->assign('kdcp',$kdcp);
		$this->custom_smarty->assign('name',$name);
		$this->custom_smarty->assign('area',$area);
		$this->custom_smarty->assign('datenow',$datenow);
		$this->custom_smarty->assign('enddate',$enddate);
		$this->custom_smarty->assign('parentcode',$parentcode);
		$this->custom_smarty->assign('parentname',$parentname);
		$this->custom_smarty->display('orm_edit.tpl');
	}
	
	function Update()
	{
		global $db;
		$id = htmlspecialchars($_REQUEST['id']);
		$code = htmlspecialchars($_REQUEST['code']);
		$name = htmlspecialchars($_REQUEST['name']);
		$parentId = htmlspecialchars($_REQUEST['parentcode']);
		$area = htmlspecialchars($_REQUEST['area']);
		$datestart = htmlspecialchars($_REQUEST['datestart']);
		$dateend = htmlspecialchars($_REQUEST['dateend']);
		$tgldn = substr($datestart,0,2);
		$blndn = substr($datestart,3,2);
		$thndn = substr($datestart,6,4);
		$tglstart = $thndn.$blndn.$tgldn;
		$tglde = substr($dateend,0,2);
		$blnde = substr($dateend,3,2);
		$thnde = substr($dateend,6,4);
		$tglend = $thnde.$blnde.$tglde;
		$sql = "update core_orm set 
		code='$code',
		parentId='$parentId',
		name='$name',
		area='$area',
		start_date='$tglstart',
		end_date='$tglend'
		where id=$id";		
		//echo $sql; exit;
		$execute = $db->Execute($sql);		
		if($execute)
                	$inserted = 1;
                else
                	$inserted = 0;
		
		$link = base_url();
		if($inserted)
			{
				  echo "<script language=javascript>
							alert('Update Success');
		                    window.location='$link/orm/edit/';
		                 </script>";
				}else{
				  echo "<script language=javascript>
		                    alert('Update Failed');
		                    window.location='$link/orm/edit/';
		                 </script>";
					}
	}
	
	function Delete()
	{
		global $db;
		$kode = $this->uri->segment(3);
		//$kode = intval($_REQUEST['code']);
		//$kode = '020201010103';
		$sqlx = "select id from core_orm where code = '$kode'";
		$rsx = $db->Execute($sqlx);	
		$datax = $rsx->FetchRow();
		$id = $datax['id'];

$sql = "delete from core_orm where id=$id";
//echo $sql;
$rs = $db->Execute($sql);	
	//echo json_encode(array('errorMsg'=>'Delete Success.'));
	if($rs)
                	$result = true;
                else
                	$result = false;
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
		echo json_encode(array('msg'=>'An error occurred while attempting to delete the record.'));
}
}

	

	function DataCombo()
	{
		$q = isset($_POST['q']) ? strval($_POST['q']) : '';
		require 'conn.php';
		$sql = "select code,concat(code,'-',name) as name from core_orm where name like '%$q%' or code like '%$q%'";
		$rs=mysqli_query($con,$sql);
		$rows = array();
			while($row = mysqli_fetch_array($rs)){
				$rows[] = $row;
			}
		echo json_encode($rows);
	}



}
