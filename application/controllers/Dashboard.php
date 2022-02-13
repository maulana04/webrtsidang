<?php 
 
class Dashboard extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('Warga_model');
		$this->load->model('RT_model');
	}
 
	function index(){
		$data['role'] = $this->session->userdata('role');
		$data['warga'] = $this->Warga_model->getAllWarga();
		$data['rt'] = $this->RT_model->getAllRt();

        $data['judul'] = 'Welcome to SIRT';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('dashboard');
		$this->load->view('templates/footer');
	}
}