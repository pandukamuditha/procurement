<?php

 class pr_details_model extends CI_Model{
    

    function viewPRfor_apprv($pr_id){
        $this->db->from('purchase_request_assets_details');
        $this->db->where('pr_id',$pr_id);
        $query=$this->db->get();
        return $query->result();

    }




    
 }

