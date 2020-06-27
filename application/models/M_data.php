<?php
class M_data extends CI_Model {
	function __construct(){
        parent :: __construct();
    }
    function get_data($table){
  		return $this->db->get($table);
  	}
		function get_data_by_id($table,$where) {
          return $this->db->get_where($table,$where);
  	}
		function simpan_data($table,$data){
    	$this->db->insert($table,$data);
    }
		function update_data($table,$data,$where){
    	$this->db->update($table,$data,$where);
    }
    function hapus_data($table,$where){
    	$this->db->delete($table,$where);
    }

    function join_wp(){
      return $this->db->query("SELECT * FROM 
        objek_pajak AS a, penjual AS b, pembeli AS c
        WHERE a.nop = b.nop_penjual AND b.nop_penjual = c.nop_pembeli
        ORDER BY a.nop ASC");
    }

    function join_wp_notaris($notaris){
      return $this->db->query("SELECT * FROM 
        objek_pajak AS a, penjual AS b, pembeli AS c
        WHERE a.nop = b.nop_penjual AND b.nop_penjual = c.nop_pembeli AND notaris_pengusul = '$notaris'
        ORDER BY a.nop ASC");
    }

    function join_all($id){
      return $this->db->query("SELECT * FROM objek_pajak, pembeli, penjual WHERE nop = '$id';");
    }

    function cetak_sspd($id){
      return $this->db->query("SELECT * FROM 
        objek_pajak AS a, penjual AS b, pembeli AS c
        WHERE a.nop = '$id' AND a.nop = b.nop_penjual AND b.nop_penjual = c.nop_pembeli
        ORDER BY a.nop ASC");
    }

    function tampil_data(){ 
       return $this->db->get('mahasiswa');
    }

    function cari($id){
        $query= $this->db->get_where('objek_pajak_bpn', array('nop'=>$id));
        return $query;
    }

    /*function cari2($id){
        $query= $this->db->get_where('mahasiswa', array('nim'=>$id));
        return $query;
    }*/

    function notaris($id){
        $data = $this->db->query("SELECT nama_notaris FROM notaris WHERE id_notaris='$id'");
        return $data;
    }

    function jumlah_setor($notaris){
      $data = $this->db->query("SELECT SUM(bphtb_harus_bayar) AS jumlah FROM objek_pajak WHERE notaris_pengusul='$notaris';");
      return $data;
    }

    function jumlah_notaris(){
        $data = $this->db->query("SELECT * FROM notaris");
        return $data->num_rows();
    }

    function jumlah_objek_pajak(){
        $data = $this->db->query("SELECT * FROM objek_pajak");
        return $data->num_rows();
    }

    function jumlah_setor_perhari(){
        $tgl_sekarang = date('Y-m-d');
        $data = $this->db->query("SELECT SUM(bphtb_harus_bayar) AS jumlah FROM objek_pajak WHERE tgl_pengajuan LIKE'%$tgl_sekarang%';");
        return $data;
    }

    function jumlah_setor_perbulan(){
        $tgl_sekarang = date('Y-m');
        $data = $this->db->query("SELECT SUM(bphtb_harus_bayar) AS jumlah FROM objek_pajak WHERE tgl_pengajuan LIKE'%$tgl_sekarang%';");
        return $data;
    }

    function jumlah_setor_perhari_notaris($notaris){
        $tgl_sekarang = date('Y-m-d');
        $data = $this->db->query("SELECT SUM(bphtb_harus_bayar) AS jumlah FROM objek_pajak WHERE tgl_pengajuan LIKE'%$tgl_sekarang%' AND notaris_pengusul = '$notaris';");
        return $data;
    }

    function jumlah_setor_perbulan_notaris($notaris){
        $tgl_sekarang = date('Y-m');
        $data = $this->db->query("SELECT SUM(bphtb_harus_bayar) AS jumlah FROM objek_pajak WHERE tgl_pengajuan LIKE'%$tgl_sekarang%' AND notaris_pengusul = '$notaris';");
        return $data;
    }

    public function upload_data_bpn($filename){
          ini_set('memory_limit', '-1');
          $inputFileName = './assets/master/'.$filename;
          try {
            $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
          } catch(Exception $e) {
            die('Error loading file :' . $e->getMessage());
          }

          $worksheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
          $numRows = count($worksheet);

          for ($i=2; $i < ($numRows+1) ; $i++) {

            $ins = array(
                "nop"               => $worksheet[$i]["B"],
                "alamat"            => $worksheet[$i]["C"],
                "blok"              => $worksheet[$i]["D"],
                "rt"                => $worksheet[$i]["E"],
                "rw"                => $worksheet[$i]["F"],
                "desa"              => $worksheet[$i]["G"],
                "kecamatan"         => $worksheet[$i]["H"],
                "kota"              => $worksheet[$i]["I"],
                "kd_pos"            => $worksheet[$i]["J"],
                "njop_tanah"        => $worksheet[$i]["K"],
                "njop_bangunan"     => $worksheet[$i]["L"]
            );
            $this->db->insert('objek_pajak_bpn',$ins);
          }
    }

    public function foto_notaris($nama_notaris){
        return $data = $this->db->query("SELECT * FROM notaris AS a ,tbl_user_notaris AS b 
            WHERE a.nama_notaris = b.nama_notaris AND a.nama_notaris = '$nama_notaris'");
    }

    public function foto_notaris_by_id($id_notaris){
        return $data = $this->db->query("SELECT * FROM notaris AS a ,tbl_user_notaris AS b 
            WHERE a.nama_notaris = b.nama_notaris AND b.id_user_notaris = '$id_notaris'");
    }
}