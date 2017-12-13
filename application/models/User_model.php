<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	public function checkUser($username) {
		$this->db->from('users');
		$this->db->where('username',$username);
		$query = $this->db->get();
		$row = $query->row();

		if(isset($row)){
			return true;
		}
		return false;
	}

	public function getPassword($username){
		$this->db->from('users');
		$this->db->where('username',$username);
		$query = $this->db->get();

		$row = $query->row();
		return $row->password;
	}

	public function getUserData($username) {
		$this->db->from('users');
		$this->db->where('username',$username);
		$query = $this->db->get();
		$row = $query->row();

		$data = array(
			'firstName' => $row->first_name,
			'lastName' => $row->last_name,
			'role' => $this->getRole($username),
			'permissions' => $this->getPermissions($this->getRole($username)->role_id),
			'dept' => $this->getUserDept($username),
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

	public function getUserDept($username){
		$this->db->from('user_department AS A');
		$this->db->join('departments AS B','A.department_id = B.department_id');
		$this->db->where('user_name',$username);
		$this->db->select('B.department_id, B.department_name');
		$query = $this->db->get();
		$row = $query->row();

		return $row;
	}

	public function getUserEmail($username){
		$this->db->select('email');
		$this->db->from('users');
		$this->db->where('username',$username);
		$query = $this->db->get();

		$email = $query->row()->email;
		return $email;
	}

	public function getUserFirstName($username){
		$this->db->select('first_name');
		$this->db->from('users');
		$this->db->where('username',$username);
		$query = $this->db->get();

		$firstName = $query->row()->first_name;
		return $firstName;
	}

	public function addPasswordReset($username,$token){
		$data = array(
			'username' => $username,
			'token' => $token
		);
		$this->db->insert('password_resets',$data);
	}

	public function getInfoFromResetToken($token){
		$this->db->from('password_resets');
		$this->db->where('token',$token);
		$query = $this->db->get();

		$row = $query->row();
		return $row;
	}

	public function inResetPassword($username){
		$this->db->from('password_resets');
		$this->db->where('username',$username);
		$query = $this->db->get();

		if($query->num_rows()==0){
			return false;
		}
		return true;
	}

	public function updatePassword($password,$username){
		$user = $username;
		$this->db->where('username',$user);
		$this->db->update('users', array('password' => $password));

		$this->db->delete('password_resets', array('username' => $user));
	}
}
