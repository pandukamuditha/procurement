<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{
	public $username;
	private $password;
	public $firstName;
	public $lastName;
	public $roles;

	public function __construct() {
		parent::__construct();
	}

	public function user($row){
		$this->username = $row->user_name;
		$this->firstName = $row->first_name;
		$this->lastName = $row->last_name;
		$this->roles = $this->findPermissions($this->username);
	}

	public function login($data){
		$this->db->where('user_name',$data['username']);
		$query = $this->db->get('users');
		$row = $query->row();
		if(isset($row)){
			if($row->password == $data['password']){
				$user = new User_model();
				$user->user($row);
				$result = array(
					'status' => true,
					'result' => $user
				);
				return $result;
			}
			return array(
				'status' => false,
				'result' => "Password incorrect"
			);
		}
		return array(
			'status' => false,
			'result' => "User not found"
		);
	}

	// public function findPermissions($username){
	// 	$this->db->from('user_role AS A');
	// 	$this->db->join('role_permission AS B','A.role_id = B.role_id');
	// 	$this->db->join('permissions AS C','C.permission_id = B.permission_id');
	// 	$this->db->where('user_name',$username);
	// 	$this->db->select('permission_name');
	// 	$query = $this->db->get();
	// 	$result = $query->result_array();
	// 	print_r($result);
	// }

	// public function checkUser($username){
	// 	$this->db->where('user_name',$username);
	// 	$query = $this->db->get('users');
	// 	if($query->)
	// }

}