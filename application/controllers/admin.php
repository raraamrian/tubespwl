<?php

class admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('model_admin');
	}

	public function index(){
		$data['pesanan'] = $this->model_admin->listpesanan();
		$this->load->view('view_admin_dashboard', $data);
	}

	public function datapengguna(){
		$data['user'] = $this->model_admin->listuser();
		$this->load->view('view_admin_data_pengguna', $data);
	}

	public function tambah(){
	    $data['nama_user'] = $this->input->post('nama');
	    $data['username_user'] = $this->input->post('username');
	    $data['password_user'] = $this->input->post('pass');
	    
	    $this->model_admin->insert($data);
	    $data['user'] = $this->model_admin->listuser();
		$this->load->view('view_admin_data_pengguna', $data);
	}

	public function tambahpesanan(){
	    $data['nama_customer'] = $this->input->post('nama');
	    $data['alamat_customer'] = $this->input->post('alamat');
	    $data['total_harga'] = $this->input->post('harga');
	    $data['no_telpon'] = $this->input->post('notelpon');
	    
	    $this->model_admin->insertpesanan($data);
	    redirect(site_url('admin'));
	}

	public function edit($id){
	    $data['nama_user'] = $this->input->post('nama');
	    $data['username_user'] = $this->input->post('username');
	    $data['password_user'] = $this->input->post('pass');
	    
	    $this->model_admin->edit($id, $data);
	    $data['user'] = $this->model_admin->listuser();
		$this->load->view('view_admin_data_pengguna', $data);
	}

	public function editpesanan($id){
	    $data['nama_customer'] = $this->input->post('nama');
	    $data['alamat_customer'] = $this->input->post('alamat');
	    $data['total_harga'] = $this->input->post('harga');
	    $data['no_telpon'] = $this->input->post('notelpon');
	    
	    $this->model_admin->editpesanan($id, $data);
	    redirect(site_url('admin'));
	}

	public function hapus($id){
	    $this->model_admin->delete($id);
	    $data['user'] = $this->model_admin->listuser();
		$this->load->view('view_admin_data_pengguna', $data);
	}

	public function hapuspesanan($id){
	    $this->model_admin->deletepesanan($id);
	    redirect(site_url('admin'));
	}
}