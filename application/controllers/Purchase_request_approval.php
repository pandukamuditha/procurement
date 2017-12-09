<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase_request_approval extends CI_Controller {
  public function __construct(){
    parent::__construct();
    // $this->load->model(Purchase_requests_model);
  }

  public function index(){
    $data['opt_css'] = "css/purchase_request/pr_approval.css";

    $this->load->view('common/header',$data);
    $this->load->view('purchase_request/pr_approval');
    $this->load->view('common/footer');
  }
}
