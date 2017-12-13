<?php

 class PurchaseRequest_model extends CI_Model{

	function createPurchaseRequest($data){
        $this->db->insert('purchase_request_details',$data);
        $pr_id = $this->db->insert_id();
        //take into notification table
        // $data_n = array('pr_id' => $data[''])
        // $this->db->insert('data_notification',$data_n);

        $insert = array(
          'pr_id' => $pr_id,
          'hod' => 0,
          'dir' => 0,
          'dep_bur' => 0,
          'sab' => 0
        );
        $this->db->insert('purchase_request_approval',$insert);
	}

    function addItem($data){
    	$pr_id = $this->db->query('SELECT MAX(pr_id) AS `pr_id` FROM `purchase_request_details`')->row()->pr_id;
    	$data['pr_id']=$pr_id;
    	$this->db->insert('purchase_request_assets_details',$data);

    }


    function viewPurchaseRequest(){
    	$prId = $this->db->query('SELECT MAX(pr_id) AS `prId` FROM `purchase_request_details`')->row()->prId;
    	$this->db->select('*');
    	$this->db->from('purchase_request_assets_details');
    	$this->db->where('pr_id',$prId);
    	$query=$this->db->get();
    	$asset_details=$query->result();
        return $asset_details;

    }

    public function getDepts() {
        $prId = $this->db->query('SELECT MAX(pr_id) AS `prId` FROM `purchase_request_details`')->row()->prId;
        $this->db->select('*');
        $this->db->from('purchase_request_details');
        $this->db->where('pr_id',$prId);
        $query=$this->db->get();
        $dept_details=$query->row();
        return $dept_details;
    }
    // function saveAsDraft(){
       //  $this->db->
    // }



    function viewPRfor_apprv($pr_id){
        $prId = $this->db->query('SELECT MAX(pr_id) AS `prId` FROM `purchase_request_details`')->row()->prId;
        $this->db->select('*');
        $this->db->from('purchase_request_assets_details');
        $this->db->where('pr_id',$pr_id);
        $query=$this->db->get();
        $asset_details=$query->result();
        return $asset_details;

    }
 }
