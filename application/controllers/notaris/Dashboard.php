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
		//$notaris 				= $this->session->userdata('nama');
		$data['name'] 			= $this->session->userdata('nama');
		$data['id'] 			= $this->session->userdata('id');
		$data['data_notaris'] 	= $this->M_data->foto_notaris_by_id($data['id']);
		$data['foto'] 			= $this->M_data->foto_notaris($data['name']);
		$data['jml_notaris']	= $this->M_data->jumlah_notaris();
		$data['jml_op']			= $this->M_data->jumlah_objek_pajak();
		$data['jumlah_setor_perhari']  = $this->M_data->jumlah_setor_perhari_notaris($data['name']);
		$data['jumlah_setor_perbulan'] = $this->M_data->jumlah_setor_perbulan_notaris($data['name']);
		$data['conten'] 	    = 'conten_notaris/dashboard';
		$data['title'] 			= 'Dashboard Notaris';
		$this->load->view('template/notaris/conten',$data);
	}
}
