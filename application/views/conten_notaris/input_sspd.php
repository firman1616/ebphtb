
<script src="<?php echo base_url(); ?>assets/ajax.js"></script>
<div class="right_col" role="main">
  <div class="">
    <form class="form-horizontal form-label-left" method="post" action="<?php echo base_url('notaris/BPHTB/simpanData'); ?>" name="input_bphtb">
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
                    <h2>Nama Notaris Pengusul</h2>
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
                      
                    <div class="form-group">
                      <div class="col-md-12 col-sm-6 col-xs-12">
                        <input type="text" name="pengusul" required="required" class="form-control col-md-7 col-xs-12" readonly="yes" value="<?php echo $name ?>">
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>

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
                        <select name="perolehan" id="perolehan" style="width: 100%;" class="select2 form-control" title="Pilih Salah Satu" required id="perolehan">
                          <option value="">-- Pilih Salah Satu --</option>
                        <?php 
                        foreach ($perolehan->result() as $row) {?>
                          <option value="<?php echo $row->nama_perolehan ?>"><?php echo $row->nama_perolehan; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No. Objek Pajak <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input list="data_nop" type="number" id="nop" name="nop" required="required" class="form-control col-md-7 col-xs-12" onchange="return autofill();" onfocus="startGetNop()" onblur="stopGetNop()" class="select2">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kode Booking <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="number" name="kd_booking" id="kd_booking" readonly="yes" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo random_string('numeric',12); ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name="alamat_op" id="alamat_op" readonly="yes" class="form-control col-md-7 col-xs-12"></textarea>
                        <!-- <input type="number" name="nop" required="required" class="form-control col-md-7 col-xs-12"> -->
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Blok Kav. No <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="blok" name="blok" readonly="yes" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">RT/RW <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="number" id="rt_op" name="rt_op" readonly="yes" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="number" id="rw_op" name="rw_op" readonly="yes" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Kelurahan <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="kelurahan_op" name="kelurahan_op" readonly="yes" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Kecamatan <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="kecamatan_op" name="kecamatan_op" readonly="yes" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kota <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="kota_op" name="kota_op" readonly="yes" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Kode Pos <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="number" id="kode_pos_op" name="kode_pos_op" readonly="yes" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> NJOP Tanah /m<sup>2</sup> <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="text" id="njop_tanah" name="njop_tanah" readonly="yes" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> NJOP Bangunan /m<sup>2</sup> <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="text" id="njop_bangunan" name="njop_bangunan" readonly="yes" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Luas Tanah /m<sup>2</sup> <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-2 col-sm-6 col-xs-12">
                        <input type="text" name="luas_tanah" id="luas_tanah" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Luas Bangunan /m<sup>2</sup> <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-2 col-sm-6 col-xs-12">
                        <input type="text" name="luas_bangunan" id="luas_bangunan" required="required" onfocus="startGetHarga()" onblur="stopGetHarga()" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> NJOP Total<span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="text" name="njop_total" required="required" class="form-control col-md-7 col-xs-12" readonly="yes" id="njop_total">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Harga Transaksi <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="text" name="harga_transaksi" id="harga_transaksi" required="required"  class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Jenis Surat Tanah <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="jenis_surat_tanah" id="perolehan" style="width: 100%;" class="select2 form-control" title="Pilih Salah Satu" required id="perolehan">
                          <option value="">-- Pilih Salah Satu --</option>
                        <?php 
                        foreach ($tanah->result() as $row) {?>
                          <option value="<?php echo $row->nama_surat ?>"><?php echo $row->nama_surat; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> No. Sertifikat/Surat <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="no_sertifikat" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Nilai Perolehan Objek Pajak (NPOP) <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="npop" id="npop" required="required" readonly="yes" class="form-control col-md-7 col-xs-12" onfocus="startGetHarga()">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Nilai Perolehan Objek Pajak Tidak Kena Pajak (NPOPTKP) <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="npoptkp" id="npoptkp" required="required" class="form-control col-md-7 col-xs-12" onfocus="startCalc()" onblur="stopCalc()">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Nilai Perolehan Objek Pajak Kena Pajak (NPOPKP) <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="npokp" id="npopkp" required="required" class="form-control col-md-7 col-xs-12" readonly="yes"> <br>
                        <small>(NPOP - NPOPTKP)</small>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> BPHTB Terhutang <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="bphtb_terhutang" id="bphtb_terhutang" required="required" class="form-control col-md-7 col-xs-12" readonly="yes"> <br>
                        <small>(5% * NPOPKP)</small>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Pengurangan <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-1 col-sm-6 col-xs-12">
                        <input type="text" name="pengurangan" id="pengurangan" required="required" class="form-control col-md-7 col-xs-12"> <br>
                        <small>(%)</small>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> BPHTB Telah Dibayar <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="bphtb_telah_dibayar" id="bphtb_telah_dibayar" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Denda/Kurang Bayar <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="denda" id="denda" required="required" onfocus="startGetBphtb()" onblur="stopGetBphtb()" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> BPHTB Harus Dibayar <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="harus_dibayar" id="harus_dibayar" required="required" readonly="yes" class="form-control col-md-7 col-xs-12">
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
                        <textarea name="keterangan" class="form-control col-md-7 col-xs-12"></textarea>
                      </div>
                    </div>
                </div>

                <div id="step-2">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No. Objek Pajak <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="number" id="nop_penjual" name="nop_penjual" required="required" class="form-control col-md-7 col-xs-12" readonly="yes">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Penjual <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="nama_penjual" required="required" class="form-control col-md-7 col-xs-12">
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
                        <input type="text" name="tempat_lahir" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="date" name="tgl_lahir" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Status Pernikahan <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="text" name="status" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jenis Pekerjaan <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="text" name="pekerjaan" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name="alamat" class="form-control col-md-7 col-xs-12"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Blok Kav. No <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-2 col-sm-6 col-xs-12">
                        <input type="text" name="blok_kav" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">RT/RW <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="number" name="rt_penjual" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="number" name="rw_penjual" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kelurahan <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="kelurahan_penjual" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kecamatan <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="kecamatan_penjual" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kota <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="kota_penjual" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kode Pos <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-2 col-sm-6 col-xs-12">
                        <input type="text" name="kd_pos_penjual" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Ibu Kandung <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="ibu_kandung" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No. Ponsel <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="number" name="ponsel" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="email" name="email_penjual" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">NPWP <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="number" name="npwp_penjual" required="required" class="form-control col-md-7 col-xs-12">
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
                        <input type="number" name="no_identitas" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Keterangan <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name="ket_penjual" class="form-control col-md-7 col-xs-12"></textarea>
                      </div>
                    </div>
                </div>

                <div id="step-3">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No. Objek Pajak <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="number" id="nop_pembeli" name="nop_pembeli" required="required" class="form-control col-md-7 col-xs-12" readonly="yes">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Pembeli <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="nama_pembeli" required="required" class="form-control col-md-7 col-xs-12">
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
                        <input type="text" name="tempat_lahir_pembeli" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="date" name="tgl_lahir_pembeli" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Status Pernikahan <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="text" name="status_pembeli" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jenis Pekerjaan <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="text" name="pekerjaan_pembeli" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name="alamat_pembeli" class="form-control col-md-7 col-xs-12"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Blok Kav. No <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-2 col-sm-6 col-xs-12">
                        <input type="text" name="blok_kav_pembeli" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">RT/RW <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="number" name="rt_pembeli" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="number" name="rw_pembeli" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kelurahan <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="kelurahan_pembeli" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kecamatan <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="kecamatan_pembeli" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kota <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="kota_pembeli" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kode Pos <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-2 col-sm-6 col-xs-12">
                        <input type="text" name="kd_pos_pembeli" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Ibu Kandung <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="ibu_kandung_pembeli" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No. Ponsel <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="number" name="ponsel_pembeli" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="email" name="email_pembeli" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">NPWP <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <input type="number" name="npwp_pembeli" required="required" class="form-control col-md-7 col-xs-12">
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
                        <input type="number" name="no_identitas_pembeli" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Keterangan <span class="required"><font color="red" size="4px">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name="ket_pembeli" class="form-control col-md-7 col-xs-12"></textarea>
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


<datalist id="data_nop">
    <?php
    foreach ($record->result() as $b)
    {
        echo "<option value='$b->nop'></option>";
    }
    ?>
     
</datalist>
<script>
    function autofill(){
        var nop = document.getElementById('nop').value;
        $.ajax({
                 url:"<?php echo base_url();?>notaris/BPHTB/cari",
                 data:'&nop='+nop,
                 success:function(data){
                    var hasil = JSON.parse(data);
                    console.log(hasil);  
                     
                    $.each(hasil, function(key,val){
                       document.getElementById('nop').value           = val.nop;
                       /*document.getElementById('kd_booking').value    = val.kd_booking;*/
                       document.getElementById('alamat_op').value     = val.alamat;
                       document.getElementById('blok').value          = val.blok;
                       document.getElementById('rt_op').value         = val.rt;
                       document.getElementById('rw_op').value         = val.rw;
                       document.getElementById('kelurahan_op').value  = val.desa;
                       document.getElementById('kecamatan_op').value  = val.kecamatan;
                       document.getElementById('kota_op').value       = val.kota;
                       document.getElementById('kode_pos_op').value   = val.kd_pos;
                       document.getElementById('njop_tanah').value    = val.njop_tanah;
                       document.getElementById('njop_bangunan').value = val.njop_bangunan;        
                    });
                  }
        });      
    }

    function startCalc() {
      interval = setInterval('calc()',1)
    }

    function calc(){
      var npop     = document.getElementById('npop').value;
      var npoptkp  = document.getElementById('npoptkp').value;
      document.getElementById('npopkp').value = npop - npoptkp;

      var npopkp  = document.getElementById('npopkp').value;
      document.getElementById('bphtb_terhutang').value = npopkp * (5/100);
    }

    function stopCalc() {
      clearInterval(interval);
    }

    function startGetNop() {
      interval1 = setInterval('getNop()',1)
    }

    function getNop(){
      var nop    = document.getElementById('nop').value;
      document.getElementById('nop_penjual').value = nop;
      document.getElementById('nop_pembeli').value = nop;
    }

    function stopGetNop() {
      clearInterval(interval1);
    }


    function startGetHarga() {
      interval2 = setInterval('getHarga()',1)
    }

    function getHarga(){
      var njop_tanah    = document.getElementById('njop_tanah').value;
      var njop_bangunan = document.getElementById('njop_bangunan').value;
      var l_tanah       = document.getElementById('luas_tanah').value;
      var l_bangunan    = document.getElementById('luas_bangunan').value;
      var harga_trans   = (document.getElementById('harga_transaksi')).value;
      var total_njop    = (((njop_tanah * l_tanah) + (njop_bangunan * l_bangunan)));
      parseInt (harga_trans);
      parseInt (total_njop);
      document.getElementById('njop_total').value = total_njop;

        if (harga_trans > total_njop) {
          document.getElementById('npop').value = harga_trans;
        } else {
          document.getElementById('npop').value = total_njop;
        }
    }


    function stopGetHarga() {
      clearInterval(interval2);
    }

    function startGetBphtb() {
      interval3 = setInterval('getBphtb()',1)
    }

    function getBphtb(){
      var bphtb_terhutang     = document.getElementById('bphtb_terhutang').value;
      var pengurangan         = document.getElementById('pengurangan').value;
      var bphtb_telah_dibayar = document.getElementById('bphtb_telah_dibayar').value;
      var denda               = document.getElementById('denda').value;
      var pengurangan1        = bphtb_terhutang - (bphtb_terhutang * (pengurangan / 100));
      var bphtb_harus_dibayar = (pengurangan1 - bphtb_telah_dibayar) + parseInt(denda);
      document.getElementById('harus_dibayar').value = bphtb_harus_dibayar;
    }

    function stopGetBphtb() {
      clearInterval(interval3);
    }

</script>


<!-- <script>
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
</script>  -->