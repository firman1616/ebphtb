<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BPHTB extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('status') == FALSE || $this->session->userdata('level') != 1 ){
				redirect(base_url("login"));
			}
		$this->load->library('Pdf');
	//	$this->load->library('Pdf');
	 }

	public function index()
	{
		$data['name'] = $this->session->userdata('nama'); 
		$data['conten'] = 'conten/input_sspd';
		$data['title'] = 'Form SSPD';
		$data['record'] = $this->M_data->get_data('objek_pajak_bpn');
		$data['perolehan'] = $this->M_data->get_data('perolehan');
		$this->load->view('template/conten',$data);
	}

	public function simpanData(){
		$this->load->model('M_data');

		$args = $this->input->post();
		$table = array('objek_pajak','penjual', 'pembeli'); 

		/*$data = array();*/

		/*Form Isian A*/
		$data[] = array(
			'nop'						=> $args['nop'],
			'kd_booking'   				=> $args['kd_booking'],
			'jenis_perolehan'			=> $args['perolehan'],
			'alamat'   					=> $args['alamat_op'],
			'blok'    					=> $args['blok'],
			'rt' 						=> $args['rt_op'],
			'rw' 						=> $args['rw_op'],
			'desa' 						=> $args['kelurahan_op'],
			'kecamatan' 				=> $args['kecamatan_op'],
			'kota'						=> $args['kota_op'],
			'kd_pos'  					=> $args['kode_pos_op'],
			'njop_tanah'				=> $args['njop_tanah'],
			'njop_bangunan'   			=> $args['njop_bangunan'],
			'l_tanah'   				=> $args['luas_tanah'],
			'l_bangunan'    			=> $args['luas_bangunan'],
			'njop_total' 				=> $args['njop_total'],
			'harga_transaksi' 			=> $args['harga_transaksi'],
			'jenis_surat_tanah' 		=> $args['jenis_surat_tanah'],
			'no_sertifikat' 			=> $args['no_sertifikat'],
			'npop'						=> $args['npop'],
			'npoptkp'  					=> $args['npoptkp'],
			'npopkp'					=> $args['npokp'],
			'bphtb_terutang'   			=> $args['bphtb_terhutang'],
			'pengurangan'   			=> $args['pengurangan'],
			'bphtb_telah_bayar'    		=> $args['bphtb_telah_dibayar'],
			'kurang_bayar' 				=> $args['denda'],
			'bphtb_harus_bayar'			=> $args['harus_dibayar'],
			'jml_setoran_berdasarkan' 	=> $args['setor_berdasarkan'],
			'status' 					=> 0,
			'tgl_pengajuan'				=> date('Y-m-d H:i:s'),
			'ket' 						=> $args['keterangan']
		);
 		

		/*Form Isian B*/
		$data[] = array(
			'nop_penjual'				=> $args['nop_penjual'],
			'nama_penjual' 				=> $args['nama_penjual'],
			'jkel_penjual' 				=> $args['jenis_kelamin'],
			'tmpt_lahir_penjual' 		=> $args['tempat_lahir'],
			'tgl_lahir_penjual' 		=> $args['tgl_lahir'],
			'status_nikah_penjual' 		=> $args['status'],
			'jenis_pekerjaan_penjual'	=> $args['pekerjaan'],
			'alamat_penjual' 			=> $args['alamat'],
			'blok_penjual' 				=> $args['blok_kav'],
			'rt_penjual' 				=> $args['rt_penjual'],
			'rw_penjual' 				=> $args['rw_penjual'],
			'desa_penjual' 				=> $args['kelurahan_penjual'],
			'kecamatan_penjual' 		=> $args['kecamatan_penjual'],
			'kabupaten_penjual' 		=> $args['kota_penjual'],
			'kd_pos_penjual' 			=> $args['kd_pos_penjual'],
			'ibu_kandung_penjual' 		=> $args['ibu_kandung'],
			'notelp_penjual' 			=> $args['ponsel'],
			'email_penjual' 			=> $args['email_penjual'],
			'npwp_penjual' 				=> $args['npwp_penjual'],
			'jenis_identitas_penjual' 	=> $args['identitas'],
			'no_identitas_penjual' 		=> $args['no_identitas'],
			'ket_penjual' 				=> $args['ket_penjual']
		);

		/*Form Isian C*/
		$data[] = array(
			'nop_pembeli'				=> $args['nop_pembeli'],
			'nama_pembeli' 				=> $args['nama_pembeli'],
			'jkel_pembeli' 				=> $args['jenis_kelamin_pembeli'],
			'tmpt_lahir_pembeli' 		=> $args['tempat_lahir_pembeli'],
			'tgl_lahir_pembeli' 		=> $args['tgl_lahir_pembeli'],
			'status_nikah_pembeli' 		=> $args['status_pembeli'],
			'jenis_pekerjaan_pembeli'	=> $args['pekerjaan_pembeli'],
			'alamat_pembeli' 			=> $args['alamat_pembeli'],
			'blok_pembeli' 				=> $args['blok_kav_pembeli'],
			'rt_pembeli' 				=> $args['rt_pembeli'],
			'rw_pembeli' 				=> $args['rw_pembeli'],
			'desa_pembeli' 				=> $args['kelurahan_pembeli'],
			'kecamatan_pembeli' 		=> $args['kecamatan_pembeli'],
			'kabupaten_pembeli' 		=> $args['kota_pembeli'],
			'kd_pos_pembeli' 			=> $args['kd_pos_pembeli'],
			'ibu_kandung_pembeli' 		=> $args['ibu_kandung_pembeli'],
			'notelp_pembeli' 			=> $args['ponsel_pembeli'],
			'email_pembeli' 			=> $args['email_pembeli'],
			'npwp_pembeli' 				=> $args['npwp_pembeli'],
			'jenis_identitas_pembeli' 	=> $args['identitas_pembeli'],
			'no_identitas_pembeli' 		=> $args['no_identitas_pembeli'],
			'ket_pembeli' 				=> $args['ket_pembeli']
		);

		$x = 0;
		foreach ($table as $key => $value) {
			$this->db->insert($value, $data[$x++]);
		}
		
		
		/*return redirect($_SERVER['HTTP_REFERER']);*/
		redirect('BPHTB');
	}

	public function listBphtb(){
		$data['name'] 			= $this->session->userdata('nama');
		$data['conten'] 	 	= 'conten/list_bphtb';
		$data['title']  	 	= 'Daftar BPHTB';
		$data['detail_bphtb']	= $this->M_data->join_wp();
		$this->load->view('template/conten',$data);
	}

	public function editBphtb($id)/*$id*/
	{
		$data['name'] = $this->session->userdata('nama');
		$data['conten']      = 'conten/edit_bphtb';
		$data['title']       = 'Form Edit BPHTB';
		$data['perolehan']   = $this->M_data->get_data('perolehan');
		$data['get_data']    = $this->M_data->join_all($id);
		/*$data['id_wp'] = $this->M_data->wajib_pajak();*/
		$this->load->view('template/conten',$data);
	}

	public function editData($id){
		$this->load->model('M_data');

		$args = $this->input->post();
		$table = array('objek_pajak','penjual', 'pembeli'); 

		/*$data = array();*/

		/*Form Isian A*/
		$op = array(
			'nop'						=> $args['nop'],
			'kd_booking'   				=> $args['kd_boking'],
			'alamat'   					=> $args['alamat_op'],
			'blok'    					=> $args['blok'],
			'rt' 						=> $args['rt_op'],
			'rw' 						=> $args['rw_op'],
			'desa' 						=> $args['kelurahan_op'],
			'kecamatan' 				=> $args['kecamatan_op'],
			'kota'						=> $args['kota_op'],
			'kd_pos'  					=> $args['kode_pos_op'],
			'njop_tanah'				=> $args['njop_tanah'],
			'njop_bangunan'   			=> $args['njop_bangunan'],
			'l_tanah'   				=> $args['luas_tanah'],
			'l_bangunan'    			=> $args['luas_bangunan'],
			'njop_total' 				=> $args['njop_total'],
			'harga_transaksi' 			=> $args['harga_transaksi'],
			'jenis_surat_tanah' 		=> $args['jenis_surat_tanah'],
			'no_sertifikat' 			=> $args['no_sertifikat'],
			'npop'						=> $args['npop'],
			'npoptkp'  					=> $args['npoptkp'],
			'npopkp'					=> $args['npokp'],
			'bphtb_terutang'   			=> $args['bphtb_terhutang'],
			'pengurangan'   			=> $args['pengurangan'],
			'bphtb_telah_bayar'    		=> $args['bphtb_telah_dibayar'],
			'kurang_bayar' 				=> $args['denda'],
			'bphtb_harus_bayar'			=> $args['harus_dibayar'],
			'jml_setoran_berdasarkan' 	=> $args['setor_berdasarkan'],
			'ket' 						=> $args['keterangan']
		);
 		

		/*Form Isian B*/
		$penjual = array(
			'nama_penjual' 				=> $args['nama_penjual'],
			'jkel_penjual' 				=> $args['jenis_kelamin'],
			'tmpt_lahir_penjual' 		=> $args['tempat_lahir'],
			'tgl_lahir_penjual' 		=> $args['tgl_lahir'],
			'status_nikah_penjual' 		=> $args['status'],
			'jenis_pekerjaan_penjual'	=> $args['pekerjaan'],
			'alamat_penjual' 			=> $args['alamat'],
			'blok_penjual' 				=> $args['blok_kav'],
			'rt_penjual' 				=> $args['rt_penjual'],
			'rw_penjual' 				=> $args['rw_penjual'],
			'desa_penjual' 				=> $args['kelurahan_penjual'],
			'kecamatan_penjual' 		=> $args['kecamatan_penjual'],
			'kabupaten_penjual' 		=> $args['kota_penjual'],
			'kd_pos_penjual' 			=> $args['kd_pos_penjual'],
			'ibu_kandung_penjual' 		=> $args['ibu_kandung'],
			'notelp_penjual' 			=> $args['ponsel'],
			'email_penjual' 			=> $args['email_penjual'],
			'npwp_penjual' 				=> $args['npwp_penjual'],
			'jenis_identitas_penjual' 	=> $args['identitas'],
			'no_identitas_penjual' 		=> $args['no_identitas'],
			'ket_penjual' 				=> $args['ket_penjual']
		);

		/*Form Isian C*/
		$pembeli = array(
			'nama_pembeli' 				=> $args['nama_pembeli'],
			'jkel_pembeli' 				=> $args['jenis_kelamin_pembeli'],
			'tmpt_lahir_pembeli' 		=> $args['tempat_lahir_pembeli'],
			'tgl_lahir_pembeli' 		=> $args['tgl_lahir_pembeli'],
			'status_nikah_pembeli' 		=> $args['status_pembeli'],
			'jenis_pekerjaan_pembeli'	=> $args['pekerjaan_pembeli'],
			'alamat_pembeli' 			=> $args['alamat_pembeli'],
			'blok_pembeli' 				=> $args['blok_kav_pembeli'],
			'rt_pembeli' 				=> $args['rt_pembeli'],
			'rw_pembeli' 				=> $args['rw_pembeli'],
			'desa_pembeli' 				=> $args['kelurahan_pembeli'],
			'kecamatan_pembeli' 		=> $args['kecamatan_pembeli'],
			'kabupaten_pembeli' 		=> $args['kota_pembeli'],
			'kd_pos_pembeli' 			=> $args['kd_pos_pembeli'],
			'ibu_kandung_pembeli' 		=> $args['ibu_kandung_pembeli'],
			'notelp_pembeli' 			=> $args['ponsel_pembeli'],
			'email_pembeli' 			=> $args['email_pembeli'],
			'npwp_pembeli' 				=> $args['npwp_pembeli'],
			'jenis_identitas_pembeli' 	=> $args['identitas_pembeli'],
			'no_identitas_pembeli' 		=> $args['no_identitas_pembeli'],
			'ket_pembeli' 				=> $args['ket_pembeli']
		);


		$this->M_data->update_data('objek_pajak', $op, array('nop' => $id));
		$this->M_data->update_data('penjual', $penjual, array('nop_penjual' => $id));
		$this->M_data->update_data('pembeli', $pembeli, array('nop_pembeli' => $id));
		
		/*return redirect($_SERVER['HTTP_REFERER']);*/
		redirect('BPHTB/listBphtb');
	}

	public function hapusData($id){
		$this->M_data->hapus_data('objek_pajak',array('nop' => $id));
		$this->M_data->hapus_data('penjual',array('nop_penjual' => $id));
		$this->M_data->hapus_data('pembeli',array('nop_pembeli' => $id));

		redirect('BPHTB/listBphtb');
	}

	public function cari(){
		$nop = $_GET['nop'];
        $cari = $this->M_data->cari($nop)->result();
        echo json_encode($cari);
	}

	public function approve($id){
		/*$this->db->query("UPDATE wajib_pajak SET status = 'approved' WHERE id_wajib_pajak = '$id'");*/
		$data= array('status' => 1 );
		$table = 'objek_pajak';
		$where = array('nop' => $id);
		$this->M_data->update_data($table,$data,$where);
		redirect('BPHTB/listBphtb');
	}

	public function cetak($id) /*iki control cetak*/
	{
		$data['name'] = $this->session->userdata('nama');
		$data['conten'] = 'conten/cetak_form';
		$data['title'] = 'Cetak Form SSPD BPHTB';
		$data['cetak'] = $this->M_data->cetak_sspd($id);
		/*$data['id_wp'] = $this->M_data->wajib_pajak();*/
		$this->load->view('conten/cetak_form',$data);
	}

	/*public function cetak_pdf($id)
	{
		$title_page = 'Form SSPD BPHTB'.$id;
		$data['cetak'] = $this->M_data->cetak_sspd($id)->row();
		$html= $this->load->view('conten/cetak_form', $data,true);
		$this->pdf->pdf_create($html,$title_page,'A4','portaid');
	}*/
}