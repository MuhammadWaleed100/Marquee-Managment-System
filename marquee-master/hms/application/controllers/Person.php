<?php 
class Person extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function register_emp(){

		
			if($this->input->method()=='post'){
			$this->form_validation->set_rules('P_Name','Employee Name','required');
			$this->form_validation->set_rules('P_Address','Employee Name','required');
			$this->form_validation->set_rules('P_Email','Employee Name','required');
			$this->form_validation->set_rules('P_ContactNo','Employee Name','required');
			$this->form_validation->set_rules('P_CNIC','Employee CNIC#','required');
			$this->form_validation->set_rules('Designation','Employee Designation','required');
			$this->form_validation->set_rules('Type','Employee Type','required');
			$this->form_validation->set_rules('UserName','Employee UserName','required');
			$this->form_validation->set_rules('password','Employee Password','required');
				
				$data_person= array (
		'P_Name'=>$this->input->post('P_Name'),
		'P_Address'=>$this->input->post('P_Address'),
		'P_Email'=>$this->input->post('P_Email'),
		'P_ContactNo'=>$this->input->post('P_ContactNo'),
		'P_CNIC'=>$this->input->post('P_CNIC')
		
		
		);
		$data_emp=array (
		'Designation'=>$this->input->post('Designation'),
		'Type'=>$this->input->post('Type'),
		'E_Salary'=>$this->input->post('E_Salary')
		
		);
		$data_login=array (
		'UserName'=>$this->input->post('UserName'),
		'password'=>$this->input->post('password')
				
		);
			if($this->form_validation->run()==false){
				echo "Something went wrong! Please try again";
			}
			else {
				$resp=$this->Common_model->registration($data_person,$data_emp,$data_login); 
				if($resp){
					echo "1";
				}
				else{
					echo "Not Added"; 
				}
			}
		}
		
		else{ 
		$this->load->model('Common_model');
			
		$data['query']=$this->Common_model->myjoin();
		
		$this->load->view('include/header');
		$this->load->view('employee',$data);
		$this->load->view('include/footer');
		}
	}
	
	
	public function delete_emp($id){
		$sql = "DELETE person,login,employee 
        FROM person,login,employee
        WHERE person.P_id =employee.person_id
        AND login.Login_id=employee.Emp_Login
        AND employee.E_id= ?";
		
		$this->db->query($sql, array($id));
		
	redirect(base_url().'index.php/person/register_emp');
	}
	
	
		function edit_emp($eid,$pid,$lid){
		 if($this->input->method()=='post')
		{
			 
				$data_person= array (
		'P_Name'=>$this->input->post('P_Name'),
		'P_Address'=>$this->input->post('P_Address'),
		'P_Email'=>$this->input->post('P_Email'),
		'P_ContactNo'=>$this->input->post('P_ContactNo'),
		'P_CNIC'=>$this->input->post('P_CNIC')
		
		
		);
		$data_emp=array (
		'Designation'=>$this->input->post('Designation'),
		'Type'=>$this->input->post('Type'),
		'E_Salary'=>$this->input->post('E_Salary')
		
		);
		$data_login=array (
		'UserName'=>$this->input->post('UserName'),
		'password'=>$this->input->post('password')
				
		);
			 $this->db->where('P_id',$pid);
			 $this->db->set($data_person);
			 $this->db->update('person');
			 
			 
			 
			  $this->db->where('Login_id',$lid);
			  $this->db->set($data_login);
			 	 $this->db->update('login');
			 $this->db->where('E_id', $eid);
			  $this->db->set($data_emp);

$this->db->update('employee');
			 if($this->db->affected_rows()!=0){
				 echo 1;
			 }
			 else {
				 echo 0;
			 }
			 
	 
			 
		}
		else 
		{$this->load->model('Common_model');
			
		$data['query']=$this->Common_model->myjoin();
		
		$this->load->view('include/header');
		$this->load->view('edit_emp',$data);
		$this->load->view('include/footer');
		}
	}
	
	
	
	public function register_sup(){

		
			if($this->input->method()=='post'){
			$this->form_validation->set_rules('sup_Type','Supplier Type','required');
			$this->form_validation->set_rules('P_Name','Supplier Name','required');
			$this->form_validation->set_rules('P_Address','Supplier Name','required');
			$this->form_validation->set_rules('P_Email','Supplier Name','required');
			$this->form_validation->set_rules('P_ContactNo','Supplier Contact No.','required');
			$this->form_validation->set_rules('P_CNIC','Supplier CNIC#','required');
			
				
				$data_person= array (
		'P_Name'=>$this->input->post('P_Name'),
		'P_Address'=>$this->input->post('P_Address'),
		'P_Email'=>$this->input->post('P_Email'),
		'P_ContactNo'=>$this->input->post('P_ContactNo'),
		'P_CNIC'=>$this->input->post('P_CNIC')
		
		
		);
		$data_sup=array (
		'sup_Type'=>$this->input->post('sup_Type')	
		);
	
			if($this->form_validation->run()==false){
				echo "Something went wrong! Please try again";
			}
			else {
				$resp=$this->Common_model->supregistration($data_person,$data_sup); 
				if($resp){
					echo "1";
				}
				else{
					redirect(base_url().'index.php/person/register_sup');
				}
			}
		}
		
		else{ 
		$this->load->model('Common_model');
			
		$data['query']=$this->Common_model->supjoin();
		
		$this->load->view('include/header');
		$this->load->view('supplier',$data);
		$this->load->view('include/footer');
		}
	}
	
	
	public function delete_sup($id){
		$sql = "DELETE person,supplier 
        FROM person,supplier
        WHERE person.P_id =supplier.person_id
       
        AND supplier.Sup_id= ?";
		
		$this->db->query($sql, array($id));
		
	redirect(base_url().'index.php/person/register_sup');
	}
	
	
	function edit_sup($sid,$pid){
		 if($this->input->method()=='post')
		{
			 
				$data_person= array (
		'P_Name'=>$this->input->post('P_Name'),
		'P_Address'=>$this->input->post('P_Address'),
		'P_Email'=>$this->input->post('P_Email'),
		'P_ContactNo'=>$this->input->post('P_ContactNo'),
		'P_CNIC'=>$this->input->post('P_CNIC')
		
		
		);
		$data_sup=array (
		'sup_Type'=>$this->input->post('sup_Type')	
		);
		
			 $this->db->where('P_id',$pid);
			 $this->db->set($data_person);
			 $this->db->update('person');
			 
			 
			 
			  $this->db->where('Sup_id',$sid);
			  $this->db->set($data_sup);
			 	 $this->db->update('supplier');
			


			 if($this->db->affected_rows()!=0){
				 echo 1;
			 }
			 else {
				 echo 0;
			 }
			 
	 
			 
		}
		else 
		{$this->load->model('Common_model');
			
		$data['query']=$this->Common_model->supjoin();
		
		$this->load->view('include/header');
		$this->load->view('edit_sup',$data);
		$this->load->view('include/footer');
		}
	}
	
}



?>