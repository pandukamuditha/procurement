<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pending_purchase_requests extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('Purchase_requests_model');

    $session_data = $this->session->userdata['logged_in'];

    $permissions = $session_data['permissions'];
    if(!permissions['view_pending_purchase_reqs']){
      redirect('dashboard_main');
    }

  }

  public function index(){
    $role = $session_data['role'];
    $dept = $session_data['dept'];

    $data = $this->Purchase_requests_model->getPendingRequests($role,$dept);

    $this->load->view('common/header');
    $this->load->view('purchase_request/pending_requests');
    $this->load->view('common/footer');
  }
}
