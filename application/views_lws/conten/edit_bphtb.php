<?php
    foreach ($get_data->result() as $row) {
        $nop                      = $row->nop;
        $kd_booking               = $row->kd_booking;
        $alamat                   = $row->alamat;
        $jenis_perolehan          = $row->jenis_perolehan;
        $blok                     = $row->blok;
        $rt                       = $row->rt;
        $rw                       = $row->rw;
        $desa                     = $row->desa;
        $kecamatan                = $row->kecamatan;
        $kota                     = $row->kota;
        $kd_pos                   = $row->kd_pos;
        $njop_tanah               = $row->njop_tanah;
        $njop_bangunan            = $row->njop_bangunan;
        $l_tanah                  = $row->l_tanah;
        $l_bangunan               = $row->l_bangunan;
        $njop_total               = $row->njop_total;
        $harga_transaksi          = $row->harga_transaksi;
        $jenis_surat_tanah        = $row->jenis_surat_tanah;
        $no_sertifikat            = $row->no_sertifikat;
        $npop                     = $row->npop;
        $npoptkp                  = $row->npoptkp;
        $npopkp                   = $row->npopkp;
        $bphtb_terutang           = $row->bphtb_terutang;
        $pengurangan              = $row->pengurangan;
        $bphtb_telah_bayar        = $row->bphtb_telah_bayar;
        $kurang_bayar             = $row->kurang_bayar;
        $bphtb_harus_bayar        = $row->bphtb_harus_bayar;
        $jml_setoran_berdasarkan  = $row->jml_setoran_berdasarkan;
        $ket                      = $row->ket;

        $nama_pembeli             = $row->nama_pembeli;
        $jkel_pembeli             = $row->jkel_pembeli;
        $tmpt_lahir_pembeli       = $row->tmpt_lahir_pembeli;
        $tgl_lahir_pembeli        = $row->tgl_lahir_pembeli;
        $status_nikah_pembeli     = $row->status_nikah_pembeli;
        $jenis_pekerjaan_pembeli  = $row->jenis_pekerjaan_pembeli;
        $alamat_pembeli           = $row->alamat_pembeli;
        $blok_pembeli             = $row->blok_pembeli;
        $rt_pembeli               = $row->rt_pembeli;
        $rw_pembeli               = $row->rw_pembeli;
        $desa_pembeli             = $row->desa_pembeli;
        $kecamatan_pembeli        = $row->kecamatan_pembeli;
        $kabupaten_pembeli        = $row->kabupaten_pembeli;
        $kd_pos_pembeli           = $row->kd_pos_pembeli;
        $ibu_kandung_pembeli      = $row->ibu_kandung_pembeli;
        $notelp_pembeli           = $row->notelp_pembeli;
        $email_pembeli            = $row->email_pembeli;
        $npwp_pembeli             = $row->npwp_pembeli;
        $jenis_identitas_pembeli  = $row->jenis_identitas_pembeli;
        $no_identitas_pembeli     = $row->no_identitas_pembeli;
        $ket_pembeli              = $row->ket_pembeli;

        $nama_penjual             = $row->nama_penjual;
        $jkel_penjual             = $row->jkel_penjual;
        $tmpt_lahir_penjual       = $row->tmpt_lahir_penjual;
        $tgl_lahir_penjual        = $row->tgl_lahir_penjual;
        $status_nikah_penjual     = $row->status_nikah_penjual;
        $jenis_pekerjaan_penjual  = $row->jenis_pekerjaan_penjual;
        $alamat_penjual           = $row->alamat_penjual;
        $blok_penjual             = $row->blok_penjual;
        $rt_penjual               = $row->rt_penjual;
        $rw_penjual               = $row->rw_penjual;
        $desa_penjual             = $row->desa_penjual;
        $kecamatan_penjual        = $row->kecamatan_penjual;
        $kabupaten_penjual        = $row->kabupaten_penjual;
        $kd_pos_penjual           = $row->kd_pos_penjual;
        $ibu_kandung_penjual      = $row->ibu_kandung_penjual;
        $notelp_penjual           = $row->notelp_penjual;
        $email_penjual            = $row->email_penjual;
        $npwp_penjual             = $row->npwp_penjual;
        $jenis_identitas_penjual  = $row->jenis_identitas_penjual;
        $no_identitas_penjual     = $row->no_identitas_penjual;
        $ket_penjual              = $row->ket_penjual;
  } 
?>

<div class="right_col" role="main">
  <div class="">
    <form class="form-horizontal form-label-left" method="post" action="<?php echo base_url('BPHTB/editData/').$nop; ?>" name="input_bphtb">
      <div class="page-title">
        <div class="title_left">
          <h3>Form Pengisian SSPD</h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                    </span>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>SSPD BPHTB <small>Entri Data</small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a>
                    </li>
                    <li><a href="#">Settings 2</a>
                    </li>
                  </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <!-- Smart Wizard -->
              <div id="wizard" class="form_wizard wizard_horizontal">
                <ul class="wizard_steps">
                  <li>
                    <a href="#step-1">
                      <span class="step_no">1</span>
                      <span class="step_descr">
                                        Data 1<br />
                                        <small>Objek Pajak</small>
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a href="#step-2">
                      <span class="step_no">2</span>
                      <span class="step_descr">
                                        Data 2<br />
                                        <small>Penjual/Pemberi</small>
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a href="#step-3">
                      <span class="step_no">3</span>
                      <span class="step_descr">
                                        Data 3<br />
                                        <small>Pembeli/Penerima</small>
                                    </span>
                    </a>
                  </li>
                </ul>
                <div id="step-1">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jenis Perolehan <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" readonly="yes" value="<?php echo $jenis_perolehan; ?>" class="form-control col-md-7 col-xs-12"> <br>
                        <small>Jenis Perolehan Saat Ini</small> <br><br>
                        <select name="perolehan" style="width: 100%;" class="select2 form-control" data-live-search="true" title="Pilih Salah Satu" required id="perolehan">
                        	<option value="">-- Pilih Salah Satu --</option>
                        <?php 
                        foreach ($perolehan->result() as $row) {?>
                        	<option value="<?php echo $row->nama_perolehan; ?>"><?php echo $row->nama_perolehan; ?></option>
                        	<?php } ?>
                      	</select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No. Objek Pajak <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="number" name="nop" required="required" readonly="yes" value="<?php echo $nop; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kode Boking <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="number" name="kd_boking" required="required" readonly="yes" value="<?php echo $kd_booking; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name="alamat_op" readonly="yes" class="form-control col-md-7 col-xs-12"><?php echo $alamat; ?></textarea>
                        <!-- <input type="number" name="nop" required="required" class="form-control col-md-7 col-xs-12"> -->
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Blok Kav. No <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="number" name="blok" readonly="yes" required="required" value="<?php echo $blok; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">RT/RW <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="number" name="rt_op" readonly="yes" required="required" value="<?php echo $rt; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="number" name="rw_op" readonly="yes" required="required" value="<?php echo $rw; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Kelurahan <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="kelurahan_op" readonly="yes" required="required" value="<?php echo $desa; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Kecamatan <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="kecamatan_op" readonly="yes" required="required" value="<?php echo $kecamatan; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kota <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="kota_op" readonly="yes" required="required" value="<?php echo $kota; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Kode Pos <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="number" name="kode_pos_op" readonly="yes" required="required" value="<?php echo $kd_pos; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> NJOP Tanah /m<sup>2</sup> <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="text" name="njop_tanah" readonly="yes" required="required" value="<?php echo $njop_tanah; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> NJOP Bangunan /m<sup>2</sup> <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="text" name="njop_bangunan" readonly="yes" required="required" value="<?php echo $njop_bangunan; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Luas Tanah /m<sup>2</sup> <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-2 col-sm-6 col-xs-12">
                        <input type="text" name="luas_tanah" required="required" value="<?php echo $l_tanah; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Luas Bangunan /m<sup>2</sup> <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-2 col-sm-6 col-xs-12">
                        <input type="text" name="luas_bangunan" required="required" value="<?php echo $l_bangunan; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> NJOP Total<span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="text" name="njop_total" required="required" value="<?php echo $njop_total; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Harga Transaksi <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="text" name="harga_transaksi" required="required" value="<?php echo $harga_transaksi; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Jenis Surat Tanah <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="text" name="harga_transaksi" required="required" readonly="yes" value="<?php echo $jenis_surat_tanah; ?>" class="form-control col-md-7 col-xs-12"> <br>
                        <small>Jenis Surat Tanah Saat Ini</small> <br><br>
                        <select name="jenis_surat_tanah" style="width: 100%;" class="selectpicker form-control" data-live-search="true" title="Pilih Salah Satu" required id="perolehan">
                        	<option value=""> Tidak Ada Pilihan </option>
                        	<option value="1">1</option>
                        	<option value="2">2</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> No. Sertifikat/Surat <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="no_sertifikat" required="required" value="<?php echo $no_sertifikat; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Nilai Perolehan Objek Pajak (NPOP) <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="npop" required="required" value="<?php echo $npop; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Nilai Perolehan Objek Pajak Tidak Kena Pajak (NPOPTKP) <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="npoptkp" required="required" value="<?php echo $npoptkp; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Nilai Perolehan Objek Kena Pajak (NPOKP) <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="npokp" required="required" value="<?php echo $npopkp; ?>" class="form-control col-md-7 col-xs-12"> <br>
                        <small>(NPOP - NPOPTKP)</small>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> BPHTB Terhutang <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="bphtb_terhutang" required="required" value="<?php echo $bphtb_terutang; ?>" class="form-control col-md-7 col-xs-12"> <br>
                        <small>(5% * NPOPKP)</small>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Pengurangan <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-1 col-sm-6 col-xs-12">
                        <input type="text" name="pengurangan" required="required" value="<?php echo $pengurangan; ?>" class="form-control col-md-7 col-xs-12"> <br>
                        <small>(%)</small>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> BPHTB Telah Dibayar <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="bphtb_telah_dibayar" required="required" value="<?php echo $bphtb_telah_bayar; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Denda/Kurang Bayar <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="denda" required="required" value="<?php echo $kurang_bayar; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> BPHTB Harus Dibayar <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="harus_dibayar" required="required" value="<?php echo $bphtb_harus_bayar; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Jumlah Setoran Berdasarkan <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <select class="form-control col-md-7 col-xs-12" name="setor_berdasarkan">
                          <option value="Perhitungan Wajib Pajak">Perhitungan Wajib Pajak</option>
                          <option value="STPD BPHTB/SKPDB KB/SKPDB KBT/BA. VERLAB">STPD BPHTB/SKPDB KB/SKPDB KBT/BA. VERLAB</option>
                          <option value="Pengurangan Dihitung Sendiri Karena">Pengurangan Dihitung Sendiri Karena</option>
                          <option value="Lain - Lain">Lain - Lain</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Keterangan <span></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name="keterangan" class="form-control col-md-7 col-xs-12"><?php echo $ket; ?></textarea>
                      </div>
                    </div>
                </div>

                <div id="step-2">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Penjual <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="nama_penjual" required="required" value="<?php echo $nama_penjual; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                     </div>
                     <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jenis Kelamin <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <select class="form-control col-md-7 col-xs-12" name="jenis_kelamin">
                          <option value=""></option>
                          <option value="Laki - Laki">Laki - Laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tempat Tanggal Lahir <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="text" name="tempat_lahir" value="<?php echo $tmpt_lahir_penjual ?>" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="date" name="tgl_lahir" required="required" value="<?php echo $tgl_lahir_penjual ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Status Pernikahan <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="text" name="status" required="required" value="<?php echo $status_nikah_penjual ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jenis Pekerjaan <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="text" name="pekerjaan" required="required" value="<?php echo $jenis_pekerjaan_penjual ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name="alamat" class="form-control col-md-7 col-xs-12"><?php echo $alamat_penjual ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Blok Kav. No <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-2 col-sm-6 col-xs-12">
                        <input type="text" name="blok_kav" required="required" value="<?php echo $blok_penjual ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">RT/RW <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="number" name="rt_penjual" value="<?php echo $rt_penjual ?>" required="required"  class="form-control col-md-7 col-xs-12">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="number" name="rw_penjual" value="<?php echo $rw_penjual ?>" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kelurahan <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="kelurahan_penjual" value="<?php echo $desa_penjual ?>" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kecamatan <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="kecamatan_penjual" value="<?php echo $kecamatan_penjual ?>" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kota <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="kota_penjual" required="required" value="<?php echo $kabupaten_penjual ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kode Pos <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-2 col-sm-6 col-xs-12">
                        <input type="text" name="kd_pos_penjual" required="required" value="<?php echo $kd_pos_penjual ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Ibu Kandung <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="ibu_kandung" required="required" value="<?php echo $ibu_kandung_penjual ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No. Ponsel <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="number" name="ponsel" required="required" value="<?php echo $notelp_penjual ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="email" name="email_penjual" required="required" value="<?php echo $email_penjual ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">NPWP <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="number" name="npwp_penjual" required="required" value="<?php echo $npwp_penjual ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jenis Identitas <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <select class="form-control col-md-7 col-xs-12" name="identitas">
                          <option value=""></option>
                          <option value="KTP">KTP</option>
                          <option value="SIM">SIM</option>
                          <option value="Pasport">Pasport</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No. identitas <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="number" name="no_identitas" required="required" value="<?php echo $no_identitas_penjual ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Keterangan <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name="ket_penjual" class="form-control col-md-7 col-xs-12"><?php echo $ket_penjual ?></textarea>
                      </div>
                    </div>
                </div>

                <div id="step-3">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Pembeli <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="nama_pembeli" required="required" value="<?php echo $nama_pembeli; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jenis Kelamin <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <select class="form-control col-md-7 col-xs-12" name="jenis_kelamin_pembeli">
                          <option value=""></option>
                          <option value="Laki - Laki">Laki - Laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tempat Tanggal Lahir <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="text" name="tempat_lahir_pembeli" required="required" value="<?php echo $tmpt_lahir_pembeli ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="date" name="tgl_lahir_pembeli" required="required" value="<?php echo $tgl_lahir_pembeli ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Status Pernikahan <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="text" name="status_pembeli" required="required" value="<?php echo $status_nikah_pembeli ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jenis Pekerjaan <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="text" name="pekerjaan_pembeli" required="required" value="<?php echo $jenis_identitas_pembeli ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name="alamat_pembeli" class="form-control col-md-7 col-xs-12"><?php echo $alamat_pembeli; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Blok Kav. No <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-2 col-sm-6 col-xs-12">
                        <input type="text" name="blok_kav_pembeli" required="required" value="<?php echo $blok_pembeli ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">RT/RW <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="number" name="rt_pembeli" required="required" value="<?php echo $rt_pembeli ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="number" name="rw_pembeli" required="required" value="<?php echo $rw_pembeli ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kelurahan <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="kelurahan_pembeli" required="required" value="<?php echo $desa_pembeli ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kecamatan <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="kecamatan_pembeli" required="required" value="<?php echo $kecamatan_pembeli ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kota <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="kota_pembeli" required="required" value="<?php echo $kabupaten_pembeli ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kode Pos <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-2 col-sm-6 col-xs-12">
                        <input type="text" name="kd_pos_pembeli" required="required" value="<?php echo $kd_pos_pembeli ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Ibu Kandung <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="ibu_kandung_pembeli" required="required" value="<?php echo $ibu_kandung_pembeli ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No. Ponsel <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="number" name="ponsel_pembeli" required="required" value="<?php echo $notelp_pembeli ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="email" name="email_pembeli" required="required" value="<?php echo $email_pembeli ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">NPWP <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="number" name="npwp_pembeli" required="required" value="<?php echo $npwp_pembeli ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jenis Identitas <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <select class="form-control col-md-7 col-xs-12" name="identitas_pembeli">
                          <option value=""></option>
                          <option value="KTP">KTP</option>
                          <option value="SIM">SIM</option>
                          <option value="Pasport">Pasport</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No. identitas <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="number" name="no_identitas_pembeli" required="required" value="<?php echo $no_identitas_pembeli ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Keterangan <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name="ket_pembeli" class="form-control col-md-7 col-xs-12"><?php echo $ket_pembeli ?></textarea>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){

        $('#nop').autocomplete({
            source: "<?php echo site_url('BPHTB/get_autocomplete');?>",
  
            select: function (event, ui) {
                $('[name="nop"]').val(ui.item.nop); 
                $('[name="LTB"]').val(ui.item.LTB);
                $('[name="kelurahan"]').val(ui.item.kelurahan);
                $('[name="RtRw"]').val(ui.item.RtRw);
                $('[name="kec"]').val(ui.item.kec);
                $('[name="KabKot"]').val(ui.item.KabKot);
                $('[name="nosertifikat"]').val(ui.item.nosertifikat);
                $('[name="harga_transaksi"]').val(ui.item.harga_transaksi);
                $('[name="luas_bumi"]').val(ui.item.luas_bumi);
                $('[name="luas_bangunan"]').val(ui.item.luas_bangunan);
            }
        });

    });
</script>

    <!-- Load Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Load Jquery UI-->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

<script>
$(document).ready(function() {
	var Perolehan = <?php echo json_encode($perolehan) ?>;
	console.log(Perolehan);
	$('#perolehan').autocomplete({
		source: Perolehan,
		minLength: 0,
		scroll: true
		}).focus(function() {
		$(this).autocomplete("search", this.value);
	});
});
</script> 