<?php 
defined('BASEPATH') OR exit('No direct script access allowed');



class m_dataproyek extends CI_Model
{
	function menu(){
		return $this->db->query('SELECT * FROM kategori')->result();
	}
}
?>