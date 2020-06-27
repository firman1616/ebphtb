<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('status') == FALSE || $this->session->userdata('level') != 2 ){
				redirect(base_url("login"));
			}
	//	$this->load->library('Pdf');
	 }

	public function index()
	{

		$data['name'] 			= $this->session->userdata('nama');
		$data['jml_notaris']	= $this->M_data->jumlah_notaris();
		$data['jml_op']			= $this->M_data->jumlah_objek_pajak();
		$data['jumlah_setor_perhari']  = $this->M_data->jumlah_setor_perhari();
		$data['jumlah_setor_perbulan'] = $this->M_data->jumlah_setor_perbulan();
		$data['conten'] 		= 'conten_notaris/dashboard';
		$data['title'] 			= 'Dashboard Notaris';
		$this->load->view('template/conten_notaris',$data);
	}
}
