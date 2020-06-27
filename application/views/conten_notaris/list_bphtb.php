<div class="right_col" role="main">
  <div class="">
  <div class="page-title">
  <div class="title_left">
  <h3>Daftar BPHTB</h3>
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
      <h2>Daftar BPHTB <small>List</small></h2>
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
      <table id="datatable" class="table table-striped table-bordered"><!-- datatable-buttons -->
        <thead>
          <tr>
            <th width="5%">NO</th>
            <th width="15%">Nomor Objek Pajak</th>
            <th>Pemilik Objek Pajak</th>
            <th>NPWP</th>
            <th width="20%">Status</th>
            <th width="auto">Aksi</th>
          </tr>
        </thead>


        <tbody>
          <?php 
          $x=1;
          $no=1;
          foreach ($detail_bphtb->result() as $row) { ?>
          <tr>
            <td><?php echo $x++; ?></td>
            <td>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalView<?php echo $no++; ?>"><?php echo $row->nop; ?></button>
            </td>
            <td><?php echo $row->nama_penjual; ?></td>
            <td><?php echo $row->npwp_penjual; ?></td>
            <td><center>
              <?php
              $status = $row->status;
              if ($status != '1') { ?>
                <!-- <button class="btn btn-danger btn-xs" disabled>Belum Di Setujui</button> -->
                <img width="80%" src="<?php echo base_url('assets/img/not_approved.png') ?>">
              <?php } else { ?>
                <!-- <button class="btn btn-success btn-xs" disabled>Disetujui</button> -->
                
                <img width="80%" src="<?php echo base_url('assets/img/approved.png') ?>">
              <?php } ?>
            </center>
            </td>
            <td>
              <?php
              $status = $row->status; 
              if ($status == '0') { ?>
                <a class="btn btn-app" href="<?php echo base_url('notaris/BPHTB/editBphtb/'.$row->nop) ?>">
                  <i class="fa fa-edit"></i> Edit
                </a>
                <a class="btn btn-app" href="<?php echo base_url('notaris/BPHTB/hapusData/'.$row->nop) ?>" onclick="return confirm('Yakin Ingin Menghapus Data Ini?')">
                  <i class="fa fa-trash"></i> Hapus
                </a>
              <?php } else { ?>
                <a href="<?php echo base_url('notaris/BPHTB/cetak/'.$row->nop) ?>" class="btn btn-app">
                  <i class="fa fa-print"></i> Cetak
                </a>
              <?php }?>
              <!-- <a class="btn btn-app">
                <i class="fa fa-trash"></i> Hapus
              </a> -->
            </td>
          </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
  </div>
  </div>

  </div>
  </div>
  </div>


  <!-- Modal -->
  <?php 
  $y=1;
  foreach ($detail_bphtb->result() as $row) { ?>

  <div class="modal fade" id="myModalView<?php echo $y++; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">ID <?php echo $row->nop; ?></h4>
          </div>
          <div class="modal-body">
         <!-- table class="table table-bordered" -->   
        <table id="datatable" class="table table-striped table-bordered">
        <tbody>
          <!-- Wajib Pajak -->
          <tr>
            <th scope="row">Nomor Objek Pajak</th>
            <td>:</td>
            <td colspan="4"><?php echo $row->nop; ?></td>
          </tr>
          <tr>
            <th scope="row">Kode Booking</th>
            <td>:</td>
            <td colspan="4"><?php echo $row->kd_booking; ?></td>
          </tr>
          <tr>
            <th scope="row">Alamat</th>
            <td>:</td>
            <td colspan="4"><?php echo $row->alamat; ?></td>
          </tr>
          <tr>
            <th scope="row">Blok</th>
            <td>:</td>
            <td colspan="4"><?php echo $row->blok; ?></td>
          </tr>
          <tr>
            <th scope="row">RT/RW</th>
            <td>:</td>
            <td colspan="2"><?php echo $row->rt; ?></td>
            <td colspan="2"><?php echo $row->rw; ?></td>
          </tr>
          <!-- End Wajib Pajak -->
          <!-- Objek Pajak -->
          <tr>
            <th scope="row">Desa/Kelurahan</th>
            <td>:</td>
            <td colspan="4"><?php echo $row->desa; ?></td>
          </tr>
          <tr>
            <th scope="row">Kecamatan</th>
            <td>:</td>
            <td colspan="4"><?php echo $row->kecamatan; ?></td>
          </tr>
          <tr>
            <th scope="row">Kabupaten/Kota</th>
            <td>:</td>
            <td colspan="4"><?php echo $row->kota; ?></td>
          </tr>
          <tr>
            <th scope="row">Kode Pos</th>
            <td>:</td>
            <td colspan="4"><?php echo $row->kd_pos; ?></td>
          </tr>
          <tr>
            <th scope="row">NJOP Tanah</th>
            <td>:</td>
            <td>Rp<?php echo number_format($row->njop_tanah); ?>,-</td>
            <th scope="row">NJOP Bangunan</th>
            <td>:</td>
            <td>Rp<?php echo number_format($row->njop_bangunan); ?>,-</td>
          </tr>
          <tr>
            <th scope="row">Luas Tanah</th>
            <td>:</td>
            <td><?php echo number_format($row->l_tanah); ?> M<sup>2</sup></td>
            <th scope="row">Luas Bangunan</th>
            <td>:</td>
            <td><?php echo number_format($row->l_bangunan); ?> M<sup>2</sup></td>
          </tr>
          <tr>
            <th scope="row">NJOP Total</th>
            <td>:</td>
            <td colspan="4">Rp<?php echo number_format($row->njop_total); ?>,-</td>
          </tr>
          <tr>
            <th scope="row">Harga Transaksi</th>
            <td>:</td>
            <td colspan="4">Rp<?php echo number_format($row->harga_transaksi); ?>,-</td>
          </tr>
          <tr>
            <th scope="row">Jenis Surat Tanah</th>
            <td>:</td>
            <td colspan="4"><?php echo $row->jenis_surat_tanah; ?></td>
          </tr>
          <tr>
            <th scope="row">No Sertifikat</th>
            <td>:</td>
            <td><?php echo $row->no_sertifikat; ?></td>
          </tr>
          <tr>
            <th scope="row">Nilai Perolehan Objek Pajak (NPOP)</th>
            <td>:</td>
            <td colspan="4">Rp. <?php echo number_format($row->npop); ?>,-</td>
          </tr>
          <tr>
            <th scope="row">Nilai Perolehan Objek Pajak Tidak Kena Pajak</th>
            <td>:</td>
            <td colspan="4">Rp. <?php echo number_format($row->npoptkp); ?>,-</td>
          </tr>
          <tr>
            <th scope="row">Nilai Perolehan Objek Pajak Kena <br><small>(NPOP - NPOPTKP)</small></th>
            <td>:</td>
            <td colspan="4">Rp. <?php echo number_format($row->npopkp); ?>,-</td>
          </tr>
          <tr>
            <th scope="row">BPHTB yang Terutang <br><small>(5% * NPOPKP)</small></th>
            <td>:</td>
            <td colspan="4">Rp. <?php echo number_format($row->bphtb_terutang); ?>,-</td>
          </tr>
          <tr>
            <th scope="row">Pengurangan</th>
            <td>:</td>
            <td colspan="4">Rp. <?php echo number_format($row->pengurangan); ?>,-</td>
          </tr>
          <tr>
            <th scope="row">BPHTB Telah dibayar</th>
            <td>:</td>
            <td colspan="4">Rp. <?php echo number_format($row->bphtb_telah_bayar); ?>,-</td>
          </tr>
          <tr>
            <th scope="row">BPHTB Yang Harus dibayar</th>
            <td>:</td>
            <td colspan="4">Rp. <?php echo number_format($row->bphtb_harus_bayar); ?>,-</td>
          </tr>
          <tr>
            <th scope="row">Jumlah Setoran Berdasarkan</th>
            <td>:</td>
            <td colspan="4"><?php echo $row->jml_setoran_berdasarkan; ?></td>
          </tr>
          <tr>
            <th scope="row">Keterangan</th>
            <td>:</td>
            <td colspan="4"> <?php echo $row->ket; ?></td>
          </tr>
        </tbody>
      </table>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

        <!-- <?php 
          $status_op = $row->status;
          if ($status_op == '0') { ?>
            <a href="<?php echo base_url('BPHTB/approve/'.$row->nop) ?>"><button type="button" class="btn btn-primary" onclick="return confirm('Apakah Data Sudah Benar ?')">Setujui</button></a>
            <?php 
          } else { 
            ?>
            &nbsp
            <?php 
          } 
        ?> -->

          </div>

        </div>
      </div>
    </div>
  <?php $no++; }?>