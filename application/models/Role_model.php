<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role_model extends CI_Model{
	protected $permissions;

	public function __construct(){
		$this->permissions = array();
	}

	// public function populatePermissions($role){

	// }

	public function findRolePermissions($roleId){
		$role = new Role_model();

		$query = $this->db->get('permissions');

		foreach ($query->result_array() as $row) {
			$this->permissions[$row['permission_name']] = false;
		}

		$this->db->from('role_permission AS A');
		$this->db->join('permissions AS B','A.permission_id = B.permission_id');
		$this->db->where('role_id',$roleId);
		$this->db->select('*');
		$query = $this->db->get();

		foreach ($query->result_array() as $row) {
			$this->permissions[$row['permission_name']] = true;
		}

		return $role;
	}

	
}