<?php

 class StockKeeper_model extends CI_Model{
    
	function insertStock($data){
        $this->db->insert('inventory',$data);
    }

    function getStock(){
        
        $this->db->select('order_id,date,invoice,Comments');
		$query = $this->db->get('purchase_request_details');
		
		return $query -> result_array();
    }


  }
