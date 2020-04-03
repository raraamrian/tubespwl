<?php

class model_admin extends CI_Model{
	
	public function profile($username){
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('username_admin', $username);
		$query = $this->db->get();
		return $query->result();
	}

	public function listpesanan(){
		$this->db->select('*');
		$this->db->from('pesanan');
		$query = $this->db->get();
		return $query->result();
	}

	public function listuser(){
		$this->db->select('*');
		$this->db->from('user');
		$query = $this->db->get();
		return $query->result();
	}

	public function insert($data= array()){
        $this->db->insert('user', $data);
    }

    public function insertpesanan($data= array()){
        $this->db->insert('pesanan', $data);
    }

	public function edit($id, $data){
        $this->db->set($data);
        $this->db->where('id_user', $id);
        $this->db->update('user');
    }

    public function editpesanan($id, $data){
        $this->db->set($data);
        $this->db->where('id_pesanan', $id);
        $this->db->update('pesanan');
    }

	public function delete($id){
        $this->db->where('id_user', $id);
        $this->db->delete('user');
    }

    public function deletepesanan($id){
        $this->db->where('id_pesanan', $id);
        $this->db->delete('pesanan');
    }
}