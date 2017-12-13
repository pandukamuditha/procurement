<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifications_model extends CI_Model {

	public function __construct() {
		parent::__construct();


	}


	//Load the user role of looged user from session (hod,dir,sab ect)
	public function user_alert ()
	{

		$session_data = $this->session->userdata['logged_in'];
    	$role = $this->session->userdata['logged_in']['role']->role_id;
		$dept = $this->session->userdata['logged_in']['dept'];

		$data_user = array(
			'role' => $role,
			'dept' => $dept
		);


		$role = $data_user['role'];
		$this->db->from('notification');
		$this->db->select('pr_id,item_name,dept_division');

		$this->db->where($role, '0');

		$query = $this->db->get();
		return $query -> result_array();
	}



	public function dashboard_alert ()
	{
		$this->db->select('pr_id,dept_id,dept_division,timestamp');
		$query = $this->db->get('purchase_request_details');

		return $query -> result_array();

	}




	public function Stock_dashboard_alert ()
	{
		$this->db->select('order_id,invoice,Comments,date');
		$query = $this->db->get('inventory');

		return $query -> result_array();

	}

}
