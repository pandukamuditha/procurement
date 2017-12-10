<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase_requests_model extends CI_Model {
  public function __construct(){
    parent::__construct();
  }

  public function getPendingRequests($roleId,$deptId){
    $this->db->from('purchase_request_approval');
    $this->db->where($roleId,0);
    $query = $this->db->get();

    $results = $query->result();
    return $results;
  }

  public function getRequestDetails($pr_ids){
    $request_details = array();
    foreach($pr_ids as $pr_id){
      $this->db->from('purchase_request_details');
      $this->db->where('pr_id',$pr_id);
      $query = $this->db->get();
      $request = $query->row();

      array_push($request_details, $request);
    }
    return $request_details;
  }

}
