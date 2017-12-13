<?php

class Quotation_model_letter extends CI_Model{

	function insertQuotation($data)
	{
		//new quotation field insert
		$this->db->insert('quotation', $data);
		
	}

	function updateQuotation($data)
	{
		//edit->update entered details
		$qid = $this->db->query('SELECT MAX(q_id) AS `qid` FROM `quotation`')->row()->qid;
		$this->db->where('q_id', $qid);
		$this->db->update('quotation', $data); 
	}


	function getQuotationData()
	{
		$qid = $this->db->query('SELECT MAX(q_id) AS `qid` FROM `quotation`')->row()->qid;

		$this->db->select('*');
		$this->db->from('quotation');
		$this->db->where('q_id',$qid);
		$query=$this->db->get();
		$quotation_details=$query->row();
		return $quotation_details;
	}
}