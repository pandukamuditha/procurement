<?php 

class Purchase_model extends CI_Model{

	function insertPurchaseOrderDetails($data)
	{
		$this->db->insert('purchaseorder', $data);

	}

	function insertRest()
	{
		
		$pid = $this->db->query('SELECT MAX(p_id) AS `pid` FROM `purchaseorder`')->row()->pid;
		$this->db->select('quantity');
		$this->db->select('unit_price');
		$this->db->select('vat_rate');
		$this->db->from('purchaseorder');
		$this->db->where('p_id', $pid);

		$query = $this->db->get();

		$row =  $query->row();

		if(isset($row)){
				$quantity = $row->quantity;
				$unitprice = $row->unit_price;
				$vatrate = $row->vat_rate;
		}

		$totalwithoutvat = $quantity*$unitprice;
		$totalwithvat = $totalwithoutvat*(100+$vatrate)/100;
		
		$this->db->set('total_without_vat',$totalwithoutvat);
		$this->db->set('total_with_vat',$totalwithvat);

		$this->db->where('p_id', $pid);
		$this->db->update('purchaseorder');
	}

	function updatePurchaseOrder($data)
	{
		$pid = $this->db->query('SELECT MAX(p_id) AS `pid` FROM `purchaseorder`')->row()->pid;
		$this->db->where('p_id', $pid);
		$this->db->update('purchaseorder', $data); 
	}

	function createPurchaseOrder1()
	{
		$result = $this->db->query('SELECT MAX(p_id) AS `pid` FROM `purchaseorder`');
		$row =$result->row_array();
		$maxpid =$row['pid'];
		echo $maxpid;
		$sql = "SELECT `ref_no` FROM `purchaseorder` WHERE `p_id` =".$maxpid;
		$result1 = $this->db->query($sql);
		$row1 = $result1->row_array();
		$refno = $row1['ref_no'];

		//$this->db->select('ref_no');
		//$this->db->where('ref_no',$maxpid);
		//$refno = $this->db->get('purchaseorder');

		$this->db->select('*');
		$this->db->from('purchaseorder');
		$this->db->where('ref_no',$refno);
		$query1=$this->db->get();
		$purchase_details=$query1->row();
		return $purchase_details;


	}

	function createPurchaseOrder2()
	{
		$result = $this->db->query('SELECT MAX(p_id) AS `pid` FROM `purchaseorder`');
		$row =$result->row_array();
		$maxpid =$row['pid'];

		$sql = "SELECT `ref_no` FROM `purchaseorder` WHERE `p_id` =".$maxpid;
		$result1 = $this->db->query($sql);
		$row1 = $result1->row_array();
		$refno = $row1['ref_no'];
		//$this->db->select('ref_no');
		//$this->db->where('ref_no',$maxpid);
		//$refno = $this->db->get('purchaseorder');

		$this->db->select('*');
		$this->db->from('quotation');
		$this->db->where('invitation_no',$refno);
		$query2=$this->db->get();
		$quotation_details=$query2->row();
		return $quotation_details;
	}
}	

		