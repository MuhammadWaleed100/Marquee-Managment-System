<?php 
class Marquee extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	public function category(){
		if($this->input->method()=='post'){
			$this->form_validation->set_rules('name','Category Name','required');
			if($this->form_validation->run()==false){
				echo "Something went wrong! Please try again";
			}
			else {
				$resp=$this->db->insert('category',$_POST);
				if($resp){
					echo "1";
				}
				else{
					echo "Not Added"; 
				}
			}
		}
		else{ $this->load->model('Common_model');
			$data['all_category']=$this->Common_model->select_data('category','*');
		$this->load->view('include/header');
		$this->load->view('category',$data);
		$this->load->view('include/footer');
		}
	
	}
	 function delete_category($id){
		$this->db->where('id',$id);
		 $this->db->delete('category');
		 redirect(base_url().'index.php/marquee/category');
	 }
	function edit_category($id){
		 if($this->input->method()=='post')
		{
			$resp=$this->Common_model->update_date('category',$_POST,array('id'=>$id));
			if($resp)
				echo 1;
			else 
				echo 0;

		}
		else 
		{
			$data['cat_info']=$this->Common_model->select_data('category','*',array('id'=>$id));
			$this->load->view('include/header');
			$this->load->view('edit_category',$data);
			$this->load->view('include/footer');
		}
	}
	//package tbale
	public function package(){
		if($this->input->method()=='post'){
			$this->form_validation->set_rules('Package_Name','Package Name','required');
			$this->form_validation->set_rules('Package_Category','Package Category','required');
			$this->form_validation->set_rules('No_of_items','No. of items','required');
			$this->form_validation->set_rules('charges','charges','required');
			if($this->form_validation->run()==false){
				echo "Something went wrong! Please try again";
			}
			else {
				$resp=$this->db->insert('package',$_POST);
				if($resp){
					echo "1";
				}
				else{
					echo "Not Added"; 
				}
			}
		}
		else{ $this->load->model('Common_model');
			$data['all_package']=$this->Common_model->select_data('package','*');
		$this->load->view('include/header');
		$this->load->view('package',$data);
		$this->load->view('include/footer');
		}
	
	}
	
	 function delete_package($id){
		$this->db->where('Package_id',$id);
		 $this->db->delete('package');
		 redirect(base_url().'index.php/marquee/package');
	 }
	function edit_package($id){
		 if($this->input->method()=='post')
		{
			$resp=$this->Common_model->update_date('package',$_POST,array('Package_id'=>$id));
			if($resp)
				echo 1;
			else 
				echo 0;

		}
		else 
		{
			$data['pack_info']=$this->Common_model->select_data('package','*',array('Package_id'=>$id));
			$this->load->view('include/header');
			$this->load->view('edit_package',$data);
			$this->load->view('include/footer');
		}
	}
	
}



?>
