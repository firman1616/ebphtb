<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekapitulasi extends CI_Controller {
	public function __construct() {
		parent::__construct();
		/*if($this->session->userdata('status') == FALSE || $this->session->userdata('level') != 1 ){
				redirect(base_url("login"));
			}*/
	//	$this->load->library('Pdf');
	 }

	public function index()
	{

		$data['name'] 	= $this->session->userdata('nama');
		$data['id'] 			= $this->session->userdata('id');
		$data['data_notaris'] 	= $this->M_data->foto_notaris_by_id($data['id']);
		$data['foto'] = $this->M_data->foto_notaris($data['name']);
		$data['notaris']= $this->M_data->get_data('notaris');
		$data['conten'] = 'conten/rekapitulasi_sspd';
		$data['title'] 	= 'Rekapitulasi SSPD';
		$this->load->view('template/conten',$data);
	}

	public function detail_rekap($id)
	{
		$data['name'] 	= $this->session->userdata('nama');
		$data['id'] 			= $this->session->userdata('id');
		$data['data_notaris'] 	= $this->M_data->foto_notaris_by_id($data['id']);
		$data['foto'] = $this->M_data->foto_notaris($data['name']);
		$data['conten'] = 'conten/detail_rekap';
		$data['title'] 	= 'Rekapitulasi';
		$data['rekap'] 	= $this->M_data->notaris($id);
		$data['jumlah'] = $this->M_data->jumlah_setor($id);
		$this->load->view('template/conten',$data);
	}

	public function detail_rekap_pertanggal()
	{
		$data['name'] 	= $this->session->userdata('nama');
		$data['id'] 			= $this->session->userdata('id');
		$data['data_notaris'] 	= $this->M_data->foto_notaris_by_id($data['id']);
		$data['foto'] = $this->M_data->foto_notaris($data['name']);
		$data['conten'] = 'conten/detail_rekap_pertanggal';
		$data['title'] 	= 'Detail Rekapitulasi';
		$this->load->view('template/conten',$data);
	}
}
