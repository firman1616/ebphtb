<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('status') == FALSE || $this->session->userdata('level') != 1 ){
				redirect(base_url("login"));
			}
	//	$this->load->library('Pdf');
	 }

	public function index()
	{

		$data['name'] 			= $this->session->userdata('nama');
		$data['title']  	 	= 'Setting User';
		//$data['notaris']		= $this->M_data->get_data('notaris');
		$data['conten'] 		= 'conten/setting_user';
		$data['user']			= $this->M_data->get_data('tbl_user');
		$this->load->view('template/conten',$data);
	}

	public function tambah_user_admin()
	{
		$table='tbl_user';
		$data= array('username' => $this->input->post('username'),
						'password' => md5($this->input->post('username')),
						'nama_user' => $this->input->post('nama'),
						'level' => '1'
						 );
		$this->M_data->simpan_data($table,$data);
		redirect('dinas/Setting');
	}

	public function user_notaris()
	{
		$data['name'] 			= $this->session->userdata('nama');
		$data['title']  	 	= 'Setting User Notaris';
		//$data['notaris']		= $this->M_data->get_data('notaris');
		$data['conten'] 		= 'conten/setting_user_notaris';
		$data['user_notaris']			= $this->M_data->get_data('tbl_user_notaris');
		$this->load->view('template/conten',$data);
	}

	public function update_user($id){
		$table='tbl_user';
		$data= array(	'username' => $this->input->post('username'),
						'password' => md5($this->input->post('password'))
						 );
		$this->M_data->update_data($table,$data,array('id_user' => $id));
		redirect('dinas/Setting');
	}

	public function update_user_notaris($id){
		$table='tbl_user_notaris';
		$data= array(	'username' => $this->input->post('username'),
						'password' => md5($this->input->post('password'))
						 );
		$this->M_data->update_data($table,$data,array('id_user_notaris' => $id));
		redirect('dinas/Setting/user_notaris');
	}
}
