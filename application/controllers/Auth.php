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
    if(isset($this->session->userdata['logged_in'])) {
      redirect('dashboard');
    }
    else {
      $this->load->view('auth/landing');
    }
  }

  public function login(){
    if(isset($this->session->userdata['logged_in'])) {
      redirect('dashboard');
    }
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
			if($this->User_model->checkUser($data['username'])) {
        if($this->User_model->getPassword($data['username'])==$data['password']){
          $userData = $this->User_model->getUserData($data['username']);
  				$this->session->set_userdata('logged_in',$userData);

          redirect('dashboard');
        }
        else {
          $data = array(
  					'error_msg' => "Password incorrect."
  				);
  				$this->load->view('auth/landing',$data);
        }
			}
			else {
				$data = array(
					'error_msg' => "Username
          not found."
				);
				$this->load->view('auth/landing',$data);
			}
		}
  }

  public function reset_password() {
    if(isset($this->session->userdata['logged_in'])) {
      redirect('dashboard');
    }
    $this->load->view('auth/reset_password');
  }

  public function email_reset_password() {
    if(isset($this->session->userdata['logged_in'])) {
      redirect('dashboard');
    }
    $this->form_validation->set_rules('username','username','trim|required');

    if($this->form_validation->run()==FALSE){
			$this->load->view('auth/reset_password');
		}
		else{
      $username = $this->input->post('username');

      if($this->User_model->inResetPassword($username)){
        $data = array(
					'error_msg' => "Password reset link has already been sent."
				);
				$this->load->view('auth/reset_password',$data);
      }
      elseif($this->User_model->checkUser($username)){
        $token = $this->random_str();
        $this->User_model->addPasswordReset($username,$token);
        $name = $this->User_model->getUserFirstName($username);
        $to_email = $this->User_model->getUserEmail($username);

        $data = array(
          'token' => $token,
          'name' => $name
        );

        $config = Array(
          'protocol' => 'smtp',
          'smtp_host' => 'ssl://smtp.googlemail.com',
          'smtp_port' => 465,
          'smtp_user' => 'stuxzero@gmail.com',
          'smtp_pass' => '1aq2sw3de',
          'mailtype'  => 'html',
          'charset'   => 'iso-8859-1'
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('stuxzero@gamil.com', 'UCSC e-Procurements System');
        $this->email->to($to_email);
        $this->email->subject('Reset password.');
        $body = $this->load->view('email/pass_reset_link',$data,TRUE);
        $this->email->message($body);
        $result = $this->email->send();

        $this->load->view('auth/email_sent');
      }
      else {
        $data = array(
					'error_msg' => "Username not found."
				);
				$this->load->view('auth/reset_password',$data);
      }
    }
  }

  function random_str($length = 10, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'){
    $str = '';
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $str .= $keyspace[random_int(0, $max)];
    }
    return $str;
  }

  public function change_password($token){
    if(isset($this->session->userdata['logged_in'])) {
      redirect('dashboard');
    }
    $user_info = $this->User_model->getInfoFromResetToken($token);
    if(!isset($user_info)){
      show_404();
      die();
    }
    $username = $user_info->username;
    $timestamp = $user_info->timestamp;

    $this->session->set_flashdata('username',$username);

    $time = new DateTime($timestamp, new DateTimeZone('UTC'));
    $res_time = strtotime($time->format('Y-m-d H:i:s O'));
    $now_time = time();
    if(($now_time-$res_time)<86400){
      $this->load->view('auth/set_password');
    }
    else {
      $data = array(
        'error_msg' => "Reset link has expired. Enter username to send again."
      );
      $this->load->view('auth/reset_password',$data);
    }
  }

  public function set_reset_password(){
    if(isset($this->session->userdata['logged_in'])) {
      redirect('dashboard');
    }
    $password = $this->input->post('password');

    $this->User_model->updatePassword($password,$_SESSION['username']);
    $this->session->unset_userdata['username'];
    $this->load->view('auth/reset_pass_done');
  }

  public function logout(){
    $this->session->unset_userdata('logged_in');
    redirect('auth');
  }

}
