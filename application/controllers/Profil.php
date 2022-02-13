<?php 
 
class Profil extends CI_Controller{
 
 
	public function index(){
        $data['judul'] = 'Profil Keluarga';
		$data['role'] = $this->session->userdata('role');
		$this->load->model('Profil_model');
		$data['data'] = $this->Profil_model->get_relasi();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('profil/profil', $data);
		$this->load->view('templates/footer');
	}
}