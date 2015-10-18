<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('home_model');
		$this->load->library('access');
		$this->load->library('session');
		$this->load->helper('url');
	}
 	
	public function index() {
		
		$data['title'] = "Home";
		
 		$this->load->view('layout/header', array('data' => $data));
		$this->load->view('home/index');
		$this->load->view('layout/footer'); 
		
 	}
	
	public function login() {
		
		$user_login 	= $this->input->post('i_email');
		$password 	= $this->input->post('i_password');
		
		$user_id = $this->home_model->is_valid($user_login, $password);

		if(!$user_id)
		{				
			
			redirect("home?err=1");
			
		}else{
			$this->session->set_userdata('logged', 1);
			$this->session->set_userdata('user_id', $user_id[0]);
			$this->session->set_userdata('user_type_id', $user_id[1]);
			
			redirect("admin");
			
		}
	
		
	}
	
}