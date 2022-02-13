<?php 
 
class DataWarga extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('Warga_model');
	}
 
	function index(){
        $data['judul'] = 'Data Warga';
		$data['role'] = $this->session->userdata('role');
		$data['warga'] = $this->Warga_model->getAllWarga();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('warga/datawarga', $data);
		$this->load->view('templates/footer');
	}

	function detail(){
        $data['judul'] = 'Detail Warga';
		$data['role'] = $this->session->userdata('role');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('warga/detailwarga');
		$this->load->view('templates/footer');
	}

	function tambah(){
		$data['nik'] = '';
		$data['nkk'] = '';
		$data['nama'] = '';
		$data['jk'] = '';
		$data['tempat_lahir'] = '';
		$data['tanggal_lahir'] = '';
		$data['agama'] = '';
		$data['pendidikan'] = '';
		$data['jenis_pekerjaan'] = '';
		$data['status_pernikahan'] = '';
		$data['status_hidup'] = '';
		$data['status_keluarga'] = '';
		$data['nama_ayah'] = '';
		$data['nama_ibu'] = '';
		$data['aksi'] = 'submit_tambah';
		$data['judul'] = 'Tambah Data Warga';
		$data['role'] = $this->session->userdata('role');		
		$data['data'] = $this->Warga_model->all();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('warga/tambaheditwarga', $data);
		$this->load->view('templates/footer');
	}

	function submit_tambah(){
		$data['nik'] = $this->input->post('nik');
		$data['nkk'] = $this->input->post('nkk');
		$data['nama'] = $this->input->post('nama');
		$data['jk'] = $this->input->post('jk');
		$data['tempat_lahir'] = $this->input->post('tempat_lahir');
		$data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
		$data['agama'] = $this->input->post('agama');
		$data['pendidikan'] = $this->input->post('pendidikan');
		$data['jenis_pekerjaan'] = $this->input->post('jenis_pekerjaan');
		$data['status_pernikahan'] = $this->input->post('status_pernikahan');
		$data['status_hidup'] = $this->input->post('status_hidup');
		$data['status_keluarga'] = $this->input->post('status_keluarga');
		$data['nama_ayah'] = $this->input->post('nama_ayah');
		$data['nama_ibu'] = $this->input->post('nama_ibu');

		$this->Warga_model->input_data('detail_warga', $data);

		redirect('datawarga', 'refresh');

	}

	function hapus(){
		$nik = $this->uri->segment('3');
		$this->Warga_model->hapus_data($nik);
		redirect('datawarga', 'refresh');
	}

	function edit(){
		$nik = $this->uri->segment('3');
		$data = $this->Warga_model->display_row($nik);
		$data['data'] = $this->Warga_model->all();
		$data['aksi'] = 'submit_edit';
		$data['judul'] = 'Edit Data Warga';
		$data['role'] = $this->session->userdata('role');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('warga/tambaheditwarga', $data);
		$this->load->view('templates/footer');
	}

	function submit_edit(){
		$id = $this->input->post('nik');
		$data['nkk'] = $this->input->post('nkk');
		$data['nama'] = $this->input->post('nama');
		$data['jk'] = $this->input->post('jk');
		$data['tempat_lahir'] = $this->input->post('tempat_lahir');
		$data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
		$data['agama'] = $this->input->post('agama');
		$data['pendidikan'] = $this->input->post('pendidikan');
		$data['jenis_pekerjaan'] = $this->input->post('jenis_pekerjaan');
		$data['status_pernikahan'] = $this->input->post('status_pernikahan');
		$data['status_keluarga'] = $this->input->post('status_keluarga');
		$data['nama_ayah'] = $this->input->post('nama_ayah');
		$data['nama_ibu'] = $this->input->post('nama_ibu');

		$this->Warga_model->updateWarga($data, $id);

		redirect('datawarga', 'refresh'); 
	}

	public function export_data()
	{
		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $objPHPExcel = new PHPExcel();

        $objPHPExcel->getProperties()->setCreator("Toni");
        $objPHPExcel->getProperties()->setLastModifiedBy("Toni");
        $objPHPExcel->getProperties()->setTitle("Data Warga");
        $objPHPExcel->getProperties()->setSubject("");
        $objPHPExcel->getProperties()->setDescription("");

        $objPHPExcel->setActiveSheetIndex(0);

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'No.');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'NKK');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'NIK');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'Nama Lengkap');
        $objPHPExcel->getActiveSheet()->setCellValue('E1', 'Jenis Kelamin');
        $objPHPExcel->getActiveSheet()->setCellValue('F1', 'Tempat Lahir');
        $objPHPExcel->getActiveSheet()->setCellValue('G1', 'Tanggal Lahir');
		$objPHPExcel->getActiveSheet()->setCellValue('H1', 'Agama');
		$objPHPExcel->getActiveSheet()->setCellValue('I1', 'Pendidikan');
		$objPHPExcel->getActiveSheet()->setCellValue('J1', 'Jenis Pekerjaan');
		$objPHPExcel->getActiveSheet()->setCellValue('K1', 'Status Pernikahan');
		$objPHPExcel->getActiveSheet()->setCellValue('L1', 'Status Keluarga');
		$objPHPExcel->getActiveSheet()->setCellValue('M1', 'Nama Ayah');
		$objPHPExcel->getActiveSheet()->setCellValue('N1', 'Nama Ibu');
		$objPHPExcel->getActiveSheet()->setCellValue('O1', 'Status Hidup');

		$baris = 2;
        $x = 1;
		$data = $this->Warga_model->getAllWarga();

        foreach ($data as $row) {

            //SETTING DATA
            $objPHPExcel->getActiveSheet()->setCellValue('A'.$baris, $x);
            $objPHPExcel->getActiveSheet()->setCellValue('B'.$baris, $row->nkk);
            $objPHPExcel->getActiveSheet()->setCellValue('C'.$baris, $row->nik);
            $objPHPExcel->getActiveSheet()->setCellValue('D'.$baris, $row->nama);
            $objPHPExcel->getActiveSheet()->setCellValue('E'.$baris, $row->jk);
            $objPHPExcel->getActiveSheet()->setCellValue('F'.$baris, $row->tempat_lahir);
            $objPHPExcel->getActiveSheet()->setCellValue('G'.$baris, $row->tanggal_lahir);
			$objPHPExcel->getActiveSheet()->setCellValue('H'.$baris, $row->agama);
            $objPHPExcel->getActiveSheet()->setCellValue('I'.$baris, $row->pendidikan);
            $objPHPExcel->getActiveSheet()->setCellValue('J'.$baris, $row->jenis_pekerjaan);
			$objPHPExcel->getActiveSheet()->setCellValue('K'.$baris, $row->status_pernikahan);
            $objPHPExcel->getActiveSheet()->setCellValue('L'.$baris, $row->status_keluarga);
            $objPHPExcel->getActiveSheet()->setCellValue('M'.$baris, $row->nama_ayah);
			$objPHPExcel->getActiveSheet()->setCellValue('N'.$baris, $row->nama_ibu);
            $objPHPExcel->getActiveSheet()->setCellValue('O'.$baris, $row->status_hidup);
            
            $x++;
            $baris++;
        }

        $filename = "Data-Warga".date("d-m-Y-H-i-s").'.xls';
        $objPHPExcel->getActiveSheet()->setTitle("Data Warga");
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');
        $writer->save('php://output');

        exit;
	}
}