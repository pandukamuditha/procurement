<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pending_purchase_requests extends CI_Controller {
  var $session_data;

  public function __construct(){
    parent::__construct();
    $this->load->model('Purchase_requests_model');
    $this->load->helper('url');
    $this->load->helper('form');

    $this->session_data = $this->session->userdata['logged_in'];

    $permissions = $this->session_data['permissions'];
    if(!$permissions['A']){
      redirect('dashboard_main');
    }

  }

  public function index(){
    $role = $this->session_data['role'];
    $dept = $this->session_data['dept'];

    $data = array();
    $results = $this->Purchase_requests_model->getPendingRequests($role->role_id,$dept->department_id);
    if(isset($results)){
      $pr_ids = array();
      foreach($results as $item){
        array_push($pr_ids,$item->pr_id);
      }
      $pending_requests = $this->Purchase_requests_model->getRequestDetails($pr_ids);
      $data['pending_requests'] = $pending_requests;
    }

    $this->load->view('common/header');
    $this->load->view('purchase_request/pending_requests',$data);
    $this->load->view('common/footer');
  }

  public function view($pr_id){
    $pr_ids = array();
    array_push($pr_ids,$pr_id);

    $request_details = $this->Purchase_requests_model->getRequestDetails($pr_ids);
    $items = $this->Purchase_requests_model->getItems($pr_id);

    $data['request_details'] = $request_details[0];
    $data['items'] = $items;
    $data['opt_css'] = "css/purchase_request/pr_approval.css";
    $data['session_data'] = $this->session_data;

    $this->load->view('common/header',$data);
    $this->load->view('purchase_request/pr_approval',$data);
    $this->load->view('common/footer');
  }

  public function approve($pr_id){
    $role = $this->session_data['role'];
    $this->Purchase_requests_model->approve($role,$pr_id);
  }
}
