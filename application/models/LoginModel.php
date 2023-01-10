<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class LoginModel extends CI_Model
{
	function cekPswd($user, $pass)
	{
		$this->db->select("*");
		$this->db->from("user_sp");
		$this->db->where('username', $user);
		$this->db->where('password', $pass);
		$result = $this->db->get();
		$user = $result->row();
		if (!empty($user)) {
			return $result->result();
		} else {
			return FALSE;
		}
	}
	function input($data, $table)
	{
		$this->db->insert($table, $data);
	}
}