<?php 
class Marquee extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
    
    /* waleeeeeeeeeed */
    
    public function reservation(){


    	if($this->input->method()=='post'){
    		$this->load->model('Common_model');
			$this->form_validation->set_rules('event_category','event_category','required');
			$this->form_validation->set_rules('package','Package','required');
			$this->form_validation->set_rules('hall','Hall','required');
			$this->form_validation->set_rules('booking_date','Boking_date','required');
			if($this->form_validation->run()==false){
				echo "Something went wrong! Please try again";
			}
			else {
				$formArray=array();
				$cate=$this->input->post('event_category');
				$connect = mysqli_connect('localhost','root','','arms'); 
				$query=mysqli_query($connect,"select * from category WHERE name='$cate'");
				while ($row= mysqli_fetch_array($query))
					{
						$c_id=$row['id'];
					} 



				$pack=$this->input->post('package');
				$connect = mysqli_connect('localhost','root','','arms'); 
				$query=mysqli_query($connect,"select * from package WHERE Package_Name='$pack'");
				while ($row= mysqli_fetch_array($query))
					{
						$p_id=$row['Package_id'];
					} 

				$hal=$this->input->post('hall');
				$connect = mysqli_connect('localhost','root','','arms'); 
				$query=mysqli_query($connect,"select * from hall WHERE Hall_Name='$hal'");
				while ($row= mysqli_fetch_array($query))
					{
						$h_id=$row['Hall_id'];
					}



				$bok=$this->input->post('booking_date');
				$connect = mysqli_connect('localhost','root','','arms'); 
				$query=mysqli_query($connect,"select * from eventbooking WHERE Booking_date='$bok' AND Hall_id='$h_id' ");
				$row= mysqli_fetch_array($query);
				if($row!='')
				{
					
					echo "Booking Already Exist. Kindly Choose Another hall or Change your Event  Date";

					//redirect(base_url().'index.php/marquee/reservation');
				}
				else
				{
				
				
				
				
				  $formArray['event_caterogy']=$c_id;
				  $formArray['package_id']=$p_id;
				  $formArray['hall_id']=$h_id;
				  $formArray['Booking_date']=$bok;//$this->input->post('booking_date');
				  $formArray['Start_Time']=$this->input->post('start_time');
				  $formArray['End_Time']=$this->input->post('end_time');
				  $formArray['Expected_Guest']=$this->input->post('guests');

				  $this->Common_model->reservation($formArray);
				  redirect(base_url().'index.php/marquee/reservation');
				
				}
				//$resp=$this->db->insert('eventbooking',$_POST);
				//if($resp){
				//	echo "1";
				//}
				//else{
				//	echo "Not Added"; 
				//}
			}
		}
		else{ $this->load->model('Common_model');
			$data['all_events']=$this->Common_model->select_data('eventbooking','*');
		$this->load->view('include/header');
        $this->load->view('reservation',$data);
        $this->load->view('include/footer');
		}




    }
    


    function delete_reservation($id){
		$this->db->where('Booking_id',$id);
		 $this->db->delete('eventbooking');
		 redirect(base_url().'index.php/marquee/reservation');
	 }
	function edit_reservation($id){
		 if($this->input->method()=='post')
		{
			$resp=$this->Common_model->update_date('eventbooking',$_POST,array('Booking_id'=>$id));
			if($resp)
				redirect(base_url().'index.php/marquee/reservation');
			else 
				echo 0;

		}
		else 
		{
			$data['cat_info']=$this->Common_model->select_data('hall','*',array('Hall_id'=>$id));
			$this->load->view('include/header');
			$this->load->view('edit_hall',$data);
			$this->load->view('include/footer');
		}
	}

    public function hall(){
		if($this->input->method()=='post'){
			$this->form_validation->set_rules('Hall_Name','Hall Name','required');
			$this->form_validation->set_rules('Hall_Charges','Hall_Charges','required');
			$this->form_validation->set_rules('Capacity','Capacity ','required');
			if($this->form_validation->run()==false){
				echo "Something went wrong! Please try again";
			}
			else {
				$resp=$this->db->insert('hall',$_POST);
				if($resp){
					redirect(base_url().'index.php/marquee/hall');
				}
				else{
					echo "Not Added"; 
				}
			}
		}
		else{ $this->load->model('Common_model');
			$data['all_category']=$this->Common_model->select_data('hall','*');
		$this->load->view('include/header');
		$this->load->view('hall',$data);
		$this->load->view('include/footer');
		}

		
	
	}

	 function delete_hall($id){
		$this->db->where('Hall_id',$id);
		 $this->db->delete('hall');
		 redirect(base_url().'index.php/marquee/hall');
	 }
	function edit_hall($id){
		 if($this->input->method()=='post')
		{
			$resp=$this->Common_model->update_date('hall',$_POST,array('Hall_id'=>$id));
			if($resp)
				redirect(base_url().'index.php/marquee/hall');
			else 
				echo 0;

		}
		else 
		{
			$data['cat_info']=$this->Common_model->select_data('hall','*',array('Hall_id'=>$id));
			$this->load->view('include/header');
			$this->load->view('edit_hall',$data);
			$this->load->view('include/footer');
		}
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
