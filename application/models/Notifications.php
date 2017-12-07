<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifications extends CI_Model {

	public function __construct() {
		parent::__construct();
	}


	public function director_alert ($user_role)
	{
	
		//$query = $this->db->query("SELECT * FROM purchase_reqs WHERE director_remark IS NULL");   //'SELECT * FROM purchase_reqs WHERE director_remark IS NULL'
		

		$this->db->from('notification');
		$this->db->select('pr_id,item_name,dept_division');
		$this->db->where($user_role, 0); 

		// $this->db->select('pr_id,item_name,dept_division');
		// $this->db->from('purchase_reqs');
	 	// $this->db->join('notification', 'purchase_reqs.pr_id= notification.pr_id');
	 	// $this->db->where('notification'.$user_role, 0); 


		$query = $this->db->get();
		return $query -> result_array();
	}


	public function deputy_alert () ///optional
	{
		$this->db->from('purchase_reqs');
		$this->db->where('deputy_remark', NULL, FALSE);
		$query = $this->db->get();
		return $query -> result_array();
			
	}

	public function dashboard_alert ()
	{
		$this->db->select('pr_id,dept_id,dept_division,timestamp');
		$query = $this->db->get('purchase_request_details');

		return $query -> result_array();
		
	}

	public function get_role($user_name)
	{
		$this->db->from('users');
		$this->db->where('username',$user_name);
		$query = $this->db->get();
		$row = $query->row_array();
		$apprv_role = $row['user_role'];
		return($apprv_role);			
	}

	
}