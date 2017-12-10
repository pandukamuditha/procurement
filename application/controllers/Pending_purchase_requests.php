<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pending_purchase_requests extends CI_Controller {
  var $session_data;

  public function __construct(){
    parent::__construct();
    $this->load->model('Purchase_requests_model');

    $this->session_data = $this->session->userdata['logged_in'];

    $permissions = $this->session_data['permissions'];
    if(!$permissions['A']){
      redirect('dashboard_main');
    }

  }

  public function index(){
    $role = $this->session_data['role'];
    $dept = $this->session_data['dept'];
    echo $dept;

    $pending_requests;
    $results = $this->Purchase_requests_model->getPendingRequests($role,$dept);
    if(isset($results)){
      $pr_ids = array();
      foreach($results as $item){
        array_push($pr_ids,$item->pr_id);
      }
      $pending_requests = $this->Purchase_requests_model->getRequestDetails($pr_ids);
    }

    $this->load->view('common/header');
    $this->load->view('purchase_request/pending_requests');
    $this->load->view('common/footer');
  }
}
