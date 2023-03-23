<?php 
class Common_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	  public function select_data($tbl_name,$field,$warr=''){
		  if($warr!=''){
			  $this->db->where($warr);
		  }
             $res=$this->db->select($field)->from($tbl_name)->get();
		  return $res->result_array();
    }
	function update_date($tbl_name,$data,$wdata)
	{
		$this->db->where($wdata);
		return $this->db->update($tbl_name,$data);
	}
	public function registration($data_person,$data_emp,$data_login){
		
		$resp=$this->db->insert('person',$data_person);
		$last_pid=$this->db->insert_id();
		
		$resp=$this->db->insert('login',$data_login);
		$last_lid=$this->db->insert_id();
		
		
		$data_emp['person_id']=$last_pid;
		$data_emp['Emp_Login']=$last_lid;
		$resp=$this->db->insert('employee',$data_emp);
			
		
	}
	
	public function myjoin(){
		$this->db->select('*');
		$this->db->from('person');
		
		$this->db->join('employee','person.P_id=employee.person_id');
		$this->db->join('login','login.Login_id=employee.Emp_Login');
		
 		$res= $this->db->get();
		 return $res->result_array();
		
	}
		public function supjoin(){
		$this->db->select('*');
		$this->db->from('person');
		
		$this->db->join('supplier','person.P_id=supplier.person_id');
		
		
 		$res= $this->db->get();
		 return $res->result_array();
		
	}
	
	public function supregistration($data_person,$data_sup){
		
		$resp=$this->db->insert('person',$data_person);
		$last_pid=$this->db->insert_id();
		
			
		$data_sup['person_id']=$last_pid;
		
		$resp=$this->db->insert('supplier',$data_sup);
			
		
	}

	
} 




?>
