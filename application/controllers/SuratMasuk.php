<?php 
 
class SuratMasuk extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('Surat_model');
		$this->load->library('Pdf');
	}
 
	function index(){
        $data['judul'] = 'Surat Masuk SIRT';
		$data['surat'] = $this->Surat_model->allSurat();
		$data['role'] = $this->session->userdata('role');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('surat/suratmasuk');
		$this->load->view('templates/footer');
	}

	function tambah(){
        $data['judul'] = 'Tambah Surat Masuk';
		$data['nama_surat'] = '';
		$data['keterangan'] = '';
		$data['tanggal_pembuatan'] = '';
		$data['aksi'] = 'submit_tambah';
		$data['role'] = $this->session->userdata('role');		
		$data['data'] = $this->Surat_model->allSurat();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('surat/tambaheditsuratmasuk', $data);
		$this->load->view('templates/footer');
	}
	
	function submit_tambah(){
		$data['nama_surat'] = $this->input->post('nama_surat');
		$data['keterangan'] = $this->input->post('keterangan');
		$data['tanggal_pembuatan'] = $this->input->post('tanggal_pembuatan');

		$this->Surat_model->input_data('surat', $data);

		redirect('suratmasuk', 'refresh');

	}

	function hapus(){
		$id_surat = $this->uri->segment('3');
		$this->Surat_model->hapus_data($id_surat);
		redirect('suratmasuk', 'refresh');
	}

	function edit(){
		$id_surat = $this->uri->segment('3');
		$data = $this->Surat_model->display_row($id_surat);
		$data['data'] = $this->Surat_model->allSurat();
		$data['aksi'] = 'submit_edit';
		$data['judul'] = 'Edit Surat Masuk';
		$data['role'] = $this->session->userdata('role');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('surat/tambaheditsuratmasuk', $data);
		$this->load->view('templates/footer');
	}

	function submit_edit(){
		$id = $this->input->post('id_surat');
		$data['nama_surat'] = $this->input->post('nama_surat');
		$data['keterangan'] = $this->input->post('keterangan');
		$data['tanggal_pembuatan'] = $this->input->post('tanggal_pembuatan');

		$this->Surat_model->updateSurat($data, $id);

		redirect('suratmasuk', 'refresh'); 
	}

	function print()
	{
		$pdf = new FPDF('P','mm','A4');
		$pdf->AddPage();
		// Header
		//Pilih font Arial bold 15
		$pdf->SetFont('Times','B',15);
		//Geser ke kanan
		$pdf->Cell(80);
		//Judul dalam bingkai
		$pdf->Cell(30,10,'RUKUN TETANGGA 07/10 KECAMATAN COBLONG ',0,0,'C');
		$pdf->Ln(15);
		$pdf->Cell(0,0,'KELURAHAN SADANG SERANG KOTA BANDUNG',0,0,'C');
		//Ganti baris
		$pdf->Ln(15);
		$pdf->SetLineWidth(1);
		$pdf->Line(30,36,180,36);
		$pdf->Ln(5);
		$pdf->SetFont('Times','B',20);
		$pdf->Cell(0,0,'SURAT PENGANTAR',0,0,'C');
		$pdf->Line(70,50,140,50);
		$pdf->Ln(10);
		$pdf->SetFont('Times','',14);
		$pdf->Cell(0,0,'No. 08/INT/III/2017',0,0,'C');
		$pdf->Ln(5);
		$pdf->SetMargins(100,40,20);
		$pdf->SetFont('Times','',12);
		$pdf->Multicell(0,10,'Yang bertanda tangan di bawah ini Ketua RT.07 RW.10 Kecamatan Coblong Kelurahan Sadang Serang Kota Bandung, Menerangkan bahwa:
		1. Nama Lengkap		: Fikri Ar Rohman
		2. Tempat/Tgl Lahir	: Bandung/ 27 Januari 1998
		3. Jenis Kelamin	: Laki-Laki
		4. Agama			: Islam
		5. Alamat			: Jln. Cibiru Raya No.11
		6. Keperluan		: SKCK
		
		Demikian Surat Keterangan ini dibuat untuk dapat dipergunakan sesuai dengan keperluannya',0);
		$pdf->Output();
	}
}