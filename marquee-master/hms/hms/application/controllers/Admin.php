<?php 
class Admin extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		
		$this->load->view('include/header');
		$this->load->view('home');
		$this->load->view('include/footer');
	}
	
	
	
	
}



?>