<?php

class model_login extends CI_Model {

	public function daftar($data = array()){
		$this->db->insert('user', $data);
	}

	public function getloginadmin($username, $pwd){
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('username_admin', $username);
		$this->db->where('password_admin', $pwd);

		if($this->db->get()->num_rows()>0){
			return true;
		}else{
			return false;
		}
	}

	public function getloginuser($username, $pwd){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username_user', $username);
		$this->db->where('password_user', $pwd);

		if($this->db->get()->num_rows()>0){
			return true;
		}else{
			return false;
		}
	}

	public function selectByUsernameadmin($username){
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('username_admin', $username);

		return $this->db->get();
	}

	public function selectByUsernameuser($username){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username_user', $username);

		return $this->db->get();
	}
	
}