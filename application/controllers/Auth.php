<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->helper('form');
    $this->load->model('User_model');
  }

  public function index() {
    if(isset($this->session->user_data['logged_in'])) {
      redirect('dashboard');
    }
    else {
      $this->load->view('auth/landing');
    }
  }

  public function login(){
    $this->form_validation->set_rules('username','username','trim|required');
		$this->form_validation->set_rules('password','password','trim|required');

		if($this->form_validation->run()==FALSE){
			$this->load->view('auth/landing');
		}
		else{
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);
			if($this->User_model->checkUser($data)) {
				$userData = $this->User_model->getUserData($data['username']);
				// print_r($userData);
				$this->session->set_userdata('logged_in',$userData);

        // $this->load->view('common/header');
        // $this->load->view('dashboard/dashboard',$userData);
        // $this->load->view('common/footer');
        redirect('/Dashboard_main',$userData);

			}
			else {
				$data = array(
					'error_msg' => "Username/Password not found."
				);
				$this->load->view('auth/landing',$data);
			}
		}
  }

  public function _reset_password() {
    if(isset($this->session->user_data['logged_in'])) {

    }
    else {
      $this->load->view('auth/reset_password');
    }
  }

}
