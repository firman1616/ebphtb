<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('status') == FALSE || $this->session->userdata('level') != 2 ){
				redirect(base_url("login"));
			}
	//	$this->load->library('Pdf');
	 }

	public function index(){
		//$notaris 				= $this->session->userdata('nama');
		$data['name'] 			= $this->session->userdata('nama');
		$data['id'] 			= $this->session->userdata('id');
		$data['data_notaris'] 	= $this->M_data->foto_notaris_by_id($data['id']);
		$data['foto'] 			= $this->M_data->foto_notaris($data['name']);
		$data['jml_notaris']	= $this->M_data->jumlah_notaris();
		$data['jml_op']			= $this->M_data->jumlah_objek_pajak();
		$data['jumlah_setor_perhari']  = $this->M_data->jumlah_setor_perhari_notaris($data['name']);
		$data['jumlah_setor_perbulan'] = $this->M_data->jumlah_setor_perbulan_notaris($data['name']);
		$data['conten'] 	    = 'conten_notaris/profile_notaris';
		$data['title'] 			= 'Profile Notaris';
		$this->load->view('template/notaris/conten',$data);
	}

	public function edit($id){
		$this->load->model('M_data');

		$args = $this->input->post();
		$table = 'notaris';

		$notaris = array(
			'nama_notaris'			=> $args['nama_notaris'],
			'jenis_kelamin' 		=> $args['Kelamin'],
			'agama'   				=> $args['agama'],
			'tempat_lahir'  		=> $args['tempat_lahir'],
			'tgl_lahir'    			=> $args['tgl_lahir'],
			'nik' 					=> $args['nik'],
			'npwp' 					=> $args['npwp'],
			'sk_notaris' 			=> $args['sk'],
			'status_hubungan' 		=> $args['status'],
			'alamat_dinas_notaris'	=> $args['alamat']
		);


		$this->M_data->update_data($table, $notaris, array('id_notaris' => $id));
		
		/*return redirect($_SERVER['HTTP_REFERER']);*/
		redirect('notaris/Profile');
	}


	function upload($name){
		$gbr_name = '';
		$config['upload_path'] = './assets/images/foto_notaris/gallery'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '10000'; //maksimum besar file 10M
        //$config['max_width']  = '5000'; //lebar maksimum 5000 px
        //$config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = 'notaris_'.date('dmYHis'); //nama yang terupload nantinya

        $this->upload->initialize($config);
        if($this->upload->do_upload($name)){
        	$fileData = $this->upload->data();
        	$gbr_name = $fileData['file_name'];
        	$this->session->set_flashdata("berhasil","<center><strong>Edit Foto Berhasil !!!</strong></center>");
        } else {
        	//echo $this->upload->display_errors();
        	$this->session->set_flashdata("gagal","<center><strong>Edit Foto Gagal !!!</strong></center>");
        	
        }
        
        return $gbr_name;
	}

	public function update_foto_notaris($id){
		$this->load->model('M_data');

		$table = 'notaris';
		$gambar = $this->upload('filefoto');

		$notaris = array(
			'foto_notaris' => $gambar
		);
 		
		$this->M_data->update_data($table, $notaris, array('id_notaris' => $id));
		
		/*return redirect($_SERVER['HTTP_REFERER']);*/
		redirect('notaris/Profile');
	}
}
