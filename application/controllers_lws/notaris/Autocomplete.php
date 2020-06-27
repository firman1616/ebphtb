<?php class Autocomplete extends CI_Controller { 
     function __construct() { 
           parent::__construct(); 
           $this->load->model('M_data');
    }
 
    public function index()
    {
            $data['record']=  $this->M_data->tampil_data();
            $this->load->view('conten/view_data',$data);
    }
     
    public function cari(){
        $nim=$_GET['nim'];
        $cari =$this->M_data->cari2($nim)->result();
        echo json_encode($cari);
    } 
}