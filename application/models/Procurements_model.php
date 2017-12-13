<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Procurements_model extends CI_Model {

public function Proc_history ()
	{

		$this->db->from('Procurements');
		$this->db->select('	Proc_id,Goods,Deparment,Invoice_no,TotalCost');
		
		$query = $this->db->get();
		 

		return $query -> result_array();
	}





}





?>