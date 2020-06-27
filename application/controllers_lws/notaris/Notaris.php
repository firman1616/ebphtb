<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notaris extends CI_Controller {
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
		$data['title']  = 'Tambah Data Notaris';
		$data['conten'] = 'conten/tambah_notaris';
		$this->load->view('template/conten',$data);
	}

	public function data_notaris()
	{

		$data['name'] 	= $this->session->userdata('nama');
		$data['title']  = 'Data Notaris';
		$data['conten'] = 'conten/data_notaris';
		$data['data_notaris'] = $this->M_data->get_data('notaris');
		$this->load->view('template/conten',$data);
	}

	function upload($name, $directory){
		$gbr_name = '';
		$config['upload_path'] = './assets/images/foto_notaris/'.$directory; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '6072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = 'notaris_'.date('dmYHis'); //nama yang terupload nantinya

        $this->upload->initialize($config);
        if($this->upload->do_upload($name)){
        	$fileData = $this->upload->data();
        	$gbr_name = $fileData['file_name'];
        }
        return $gbr_name;
	}

	public function tambah_notaris(){
		$this->load->model('M_data');

		/*$args = $this->input->post();*/
		$table = array('notaris','tbl_user_notaris'); 
		$gambar = $this->upload('filefoto','gallery');

		/*$data = array();*/

		/*Form Isian A*/
		$data[] = array(
			'foto_notaris' =>$gambar,
			'nama_notaris' => $this->input->post('nama_lengkap'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'agama' => $this->input->post('agama'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'nik' => $this->input->post('nik'),
			'npwp' => $this->input->post('npwp'),
			'sk_notaris' => $this->input->post('sk'),
			'status_hubungan' => $this->input->post('status'),
			'alamat_dinas_notaris' => $this->input->post('alamat')
		);

		$data[] = array(
			'nama_notaris' => $this->input->post('nama_lengkap'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('username')),
			'level' => '2'
		);
 		

		$x = 0;
		foreach ($table as $key => $value) {
			$this->db->insert($value, $data[$x++]);
		}
		
		
		/*return redirect($_SERVER['HTTP_REFERER']);*/
		redirect('notaris');
	}


	function hapus_data_notaris($id)
	{
		$image = $this->M_data->get_data_by_id('notaris',array('id_notaris'=>$id));
		$path = './assets/images/foto_notaris/gallery/';
		foreach ($image->result() as $row){
				unlink($path.$row->foto_notaris);
		}
		$table1 = 'notaris';
		$table2 = 'tbl_user';
		$where1 = array('id_notaris' => $id);
		$where2 = array('id_user_notaris' => $id);
		$this->M_data->hapus_data($table1,$where1);
		$this->M_data->hapus_data($table2,$where2);
		redirect('Notaris/data_notaris');
	}
}