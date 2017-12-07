<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	public function checkUser($data) {
		$this->db->from('users');
		$this->db->where($data);
		$query = $this->db->get();
		$row = $query->row();

		if(isset($row)){
			return true;
		}
		return false;
	}

	public function getUserData($username) {
		$this->db->from('users');
		$this->db->where('username',$username);
		$query = $this->db->get();
		$row = $query->row();
		
		$data = array(
			'username' => $username,
			'firstName' => $row->first_name,
			'lastName' => $row->last_name,
			'role' => $this->getRole($username),
			'permissions' => $this->getPermissions($this->getRole($username)->role_id),
		);

		return $data;
	}

	public function getRole($username){
		$this->db->from('user_role AS A');
		$this->db->join('roles AS B','A.role_id = B.role_id');
		$this->db->where('user_name',$username);
		$this->db->select('A.role_id, role_name');
		$query = $this->db->get();
		$row = $query->row();
		return $row;
	}

	public function getPermissions($roleId){
		$permissions = array();

		$query = $this->db->get('permissions');

		foreach ($query->result_array() as $row) {
			$permissions[$row['permission_name']] = false;
		}

		$this->db->from('role_permission AS A');
		$this->db->join('permissions AS B','A.permission_id = B.permission_id');
		$this->db->where('role_id',$roleId);
		$this->db->select('*');
		$query = $this->db->get();

		foreach ($query->result_array() as $row) {
			$permissions[$row['permission_name']] = true;
		}

		return $permissions;
	}
}