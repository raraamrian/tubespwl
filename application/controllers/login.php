<?php

class login extends CI_Controller{
	
	public function getlogin(){

		if($this->model_login->getloginadmin($this->input->post('username'), $this->input->post('password'))){

			$data = $this->model_login->selectByUsernameadmin($this->input->post('username'))->row_array();

			$userdata = array(
				'id_username' => $data['id_admin'], 
				'username'    => $data['username_admin'],
				'password'    => $data['password_admin'], 
				'nama'        => $data['nama_admin'],
				'level'       => 1
			);

			$this->session->set_userdata($userdata);
			redirect('admin');

		}elseif($this->model_login->getloginuser($this->input->post('username'), $this->input->post('password'))){

			$data = $this->model_login->selectByUsernameuser($this->input->post('username'))->row_array();

			$userdata = array(
				'id_username' => $data['id_user'], 
				'username'    => $data['username_user'], 
				'password'    => $data['password_user'], 
				'nama'        => $data['nama_user'],
				'level'       => 2
			);

			$this->session->set_userdata($userdata);
			redirect('home');

		}else{
			redirect('login');
		}
	}

	public function daftar(){
		$data['username_user'] = $this->input->post('username');
		$data['password_user'] = $this->input->post('pass');
		$data['nama_user'] = $this->input->post('nama');

		$this->model_login->daftar($data);
		redirect(site_url('login'));
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}

	public function index(){
		$this->load->view('view_login');
	}

}

