<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_dataproyek'); 
	}


	public function index()
	{
		$data = array(
			'kategori' => $this->m_dataproyek->menu(),
			'welcome' => 'WELCOME TO',
			'judul' => 'MILAN UTAMA TAILOR',
			'slogan' => 'Jasa Jahit Terpercaya',
			
		);
		$this->load->view('template/header');
		$this->load->view('home', $data);
		$this->load->view('template/footer');
	}
	public function about(){
		$this->load->view('template/header');
		$this->load->view('about');
		$this->load->view('template/footer');
	}
	public function contact(){
		$this->load->view('template/header');
		$this->load->view('template/contact');
		$this->load->view('template/footer');
	}
}
