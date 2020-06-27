<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BPN extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('status') == FALSE || $this->session->userdata('level') != 1 ){
				redirect(base_url("login"));
			}
		$this->load->library('PHPExcel');
	//	$this->load->library('Pdf');
	 }

	public function index()
	{

		$data['name'] 			= $this->session->userdata('nama');
		/*$data['jml_notaris']	= $this->M_data->jumlah_notaris();
		$data['jml_op']			= $this->M_data->jumlah_objek_pajak();
		$data['jumlah_setor_perhari']  = $this->M_data->jumlah_setor_perhari();
		$data['jumlah_setor_perbulan'] = $this->M_data->jumlah_setor_perbulan();*/
		$data['conten'] 		= 'conten/master_data_bpn';
		$data['title'] 			= 'Data BPN';
		$data['bpn']			= $this->M_data->get_data('objek_pajak_bpn');
		$this->load->view('template/conten',$data);
	}

	public function data_bpn()
	{
		$data['name'] 			= $this->session->userdata('nama');
		$data['conten'] 		= 'conten/tambah_data_bpn';
		$data['title'] 			= 'Tambah Data BPN';
		$this->load->view('template/conten',$data);
	}

	public function import(){
		$config['upload_path'] = './assets/master/';
		$config['allowed_types'] = 'xlsx|xls';

		$this->upload->initialize($config);

		if (! $this->upload->do_upload()){
			$this->session->set_flashdata("gagal","<center><strong>Import Data GAGAL !!!</strong></center>");
			//print_r($this->upload->display_errors());
			redirect('dinas/BPN');
		}else{
			$data = array('upload_data' => $this->upload->data());
	        $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
	        $filename = $upload_data['file_name'];
	        $this->M_data->upload_data_bpn($filename);
	        unlink('./assets/master/'.$filename);
	        $this->session->set_flashdata("berhasil","<center><strong>Import Data BERHASIL!!!</strong></center>");
			redirect('dinas/BPN');
		}
	}
}
