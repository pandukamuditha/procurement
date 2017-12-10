<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase_requests_model extends CI_Model {
  public function __construct(){
    parent::__construct();
  }

  public function getPendingRequests($role,$dept){
    $this->db->from('purchase_request_approval');
    $this->db->where($role->role_id,0);
    $query = $this->db->get();

    $results = $query->result();
  }

}
