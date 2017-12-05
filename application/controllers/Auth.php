<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->model('User_model');
		$this->load->model('Role_model');
	}

	public function index()
	{
		if(isset($this->session->userdata['logged_in'])){
			$this->load->view('dashboard');
		}
		else{
			$this->load->view('landing/landing');
			$this->Role_model->findRolePermissions('hod');
		}
		
	}

	public function login(){
		$this->form_validation->set_rules('username','username','trim|required');
		$this->form_validation->set_rules('password','password','trim|required');

		if($this->form_validation->run()==FALSE){
			$this->load->view('landing/landing');
		}
		else{
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);
			$user = $this->User_model->login($data);
			if($user['status']){
				$user_data = array (
					'first_name' => $user['result']->firstName,
					'last_name' => $user['result']->lastName
				);
				echo "Welcome ".$user['result']->firstName." ".$user['result']->lastName;
			}
			else {
				$data = array(
					'error_msg' => $user['result']
				);
				$this->load->view('landing/landing',$data);
			}
		}
	}
}
