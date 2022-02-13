<?php 
 
class DataRT extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('RT_model');
	}
 
	function index(){
		$data['role'] = $this->session->userdata('role');
		$data['wilayah']=$this->RT_model->joinWilayah();
        $data['judul'] = 'Data RT';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('rt/datart', $data);
		$this->load->view('templates/footer');
	}

	function tambah(){
		$data['wilayah']=$this->RT_model->Wilayah();
		$data['role'] = $this->session->userdata('role');
        $data['judul'] = 'Tambah Data RT';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('rt/tambaheditrt',$data);
		$this->load->view('templates/footer');
	}

	function submit_tambah(){
		$data['id']	= $this->input->post('id');
		$data['nama']	= $this->input->post('nama');
		$data['provinsi'] = $this->input->post('provinsi');
		$data['kabupaten'] = $this->input->post('kabupaten');
		$data['kecamatan'] = $this->input->post('kecamatan');
		$data['desa_id'] = $this->input->post('desa_id');
		$data['rw_id'] = $this->input->post('rw_id');
		$data['nama_rt'] = $this->input->post('nama_rt');

		$this->RT_model->input_wilayah($data);

		redirect('datart', 'refresh');
	}

	function hapus(){
		$id = $this->uri->segment('3');
		$this->RT_model->hapus_data($id);
		redirect('datart', 'refresh');
	}

	function edit(){
		$id = $this->uri->segment('4');
		$data = $this->RT_model->display_row($id);
		$data['wilayah']=$this->RT_model->Wilayah();
		$data['role'] = $this->session->userdata('role');
		$data['aksi'] = 'submit_edit';
		$data['judul'] = 'Edit RT';
		$data['role'] = $this->session->userdata('role');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('rt/tambaheditrt', $data);
		$this->load->view('templates/footer');
	}

	function submit_edit(){
		$id 				= $this->input->post('id');
		$data['nama']	= $this->input->post('nama');
		$data['provinsi'] = $this->input->post('provinsi');
		$data['kabupaten'] = $this->input->post('kabupaten');
		$data['kecamatan'] = $this->input->post('kecamatan');
		$data['desa_id'] = $this->input->post('desa_id');
		$data['rw_id'] = $this->input->post('rw_id');
		$data['nama_rt'] = $this->input->post('nama_rt');

		$this->RT_model->updateRT($data,$id);

		redirect('datart', 'refresh'); 
	}

	function get_kabupaten()
	{
		$id_provinsi=$this->input->post('id');
		$data=$this->RT_model->Wilayah_kabupaten($id_provinsi);
		echo json_encode($data);
	}

	function get_kecamatan()
	{
		$id_kabupaten=$this->input->post('id');
		$data=$this->RT_model->Wilayah_kecamatan($id_kabupaten);
		echo json_encode($data);
	}

	function get_desa()
	{
		$id_kecamatan=$this->input->post('id');
		$data=$this->RT_model->Wilayah_desa($id_kecamatan);
		echo json_encode($data);
	}

	function get_rw()
	{
		$id_desa=$this->input->post('id');
		$data=$this->RT_model->Wilayah_rw($id_desa);
		echo json_encode($data);
	}

}