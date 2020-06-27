<?php
  foreach ($data_notaris->result() as $row) {
    $id_notaris   = $row->id_notaris;
    $nama_notaris = $row->nama_notaris;
    $jk           = $row->jenis_kelamin;
    $agama        = $row->agama;
    $tempat_lahir = $row->tempat_lahir;
    $tgl_lahir    = $row->tgl_lahir;
    $nik          = $row->nik;
    $npwp         = $row->npwp;
    $sk_notaris   = $row->sk_notaris;
    $status       = $row->status_hubungan;
    $alamat_dinas = $row->alamat_dinas_notaris;  
    $foto_notaris = $row->foto_notaris;
  }
?>
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Profile Notaris</h3>
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
      <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Foto Notaris</h2>
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
            <?php
              if($this->session->flashdata('gagal')==TRUE){ ?>
                <div class="alert alert-danger">
                  <?php echo $this->session->flashdata('gagal'); 
                  echo $this->upload->display_errors();?>
                </div>
            <?php } ?>
            <?php
              if($this->session->flashdata('berhasil')==TRUE){ ?>
                <div class="alert alert-success">
                  <?php echo $this->session->flashdata('berhasil'); ?>
                </div>
            <?php } ?>
          	<center><img width="50%" height="25%" src="<?php echo base_url('assets/images/foto_notaris/gallery/'.$foto_notaris); ?>"><br><center>Pass Foto 3x4</center></center><br>
            <form method="POST" action="<?php echo base_url('notaris/Profile/update_foto_notaris/'.$id_notaris) ?>" enctype="multipart/form-data" accept-charset="utf-8">

              <input type="file" name="filefoto">
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-4 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="submit" class="btn btn-success">Update</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-md-8 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Data Notaris</h2>
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
              
          	<table class="table table-bordered">
              <tbody>
                <tr>
                  <th scope="row" width="25%">Nama Notaris</th>
                  <td style="text-align: center;" width="5%">:</td>
                  <td><?php echo $nama_notaris; ?></td>
                </tr>

                <tr>
                  <th scope="row" width="25%">Jenis Kelamin</th>
                  <td style="text-align: center;" width="5%">:</td>
                  <td><?php echo $jk; ?></td>
                </tr>

                <tr>
                  <th scope="row" width="25%">Agama</th>
                  <td style="text-align: center;" width="5%">:</td>
                  <td><?php echo $agama; ?></td>
                </tr>

                <tr>
                  <th scope="row" width="25%">Tempat Tanggal Lahir</th>
                  <td style="text-align: center;" width="5%">:</td>
                  <td><?php echo $tempat_lahir.", "."$tgl_lahir" ?></td>
                </tr>

                <tr>
                  <th scope="row" width="25%">NIK Notaris</th>
                  <td style="text-align: center;" width="5%">:</td>
                  <td><?php echo $nik; ?></td>
                </tr>

                <tr>
                  <th scope="row" width="25%">NPWP Notaris</th>
                  <td style="text-align: center;" width="5%">:</td>
                  <td><?php echo $npwp;; ?></td>
                </tr>

                <tr>
                  <th scope="row" width="25%">SK Notaris</th>
                  <td style="text-align: center;" width="5%">:</td>
                  <td><?php echo $sk_notaris; ?></td>
                </tr>

                <tr>
                  <th scope="row" width="25%">Status Prnikahan</th>
                  <td style="text-align: center;" width="5%">:</td>
                  <td><?php echo $status; ?></td>
                </tr>

                <tr>
                  <th scope="row" width="25%">Alamat Dinas Notaris</th>
                  <td style="text-align: center;" width="5%">:</td>
                  <td><?php echo $alamat_dinas; ?></td>
                </tr>
              </tbody>
            </table>

            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-4 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Edit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<form method="POST" action="<?php echo base_url('notaris/Profile/edit/'.$id_notaris) ?>">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
          </button>
          <h4 class="modal-title" id="myModalLabel">Modal title</h4>
        </div>
        <div class="modal-body">
          <label for="fullname">Nama Notaris * :</label>
          <input type="text" id="fullname" value="<?php echo $nama_notaris; ?>" class="form-control" name="nama_notaris" required />

          <label for="fullname">Jenis Kelamin * :</label><br>
          <small>Jenis Kelamin Saat Ini</small>
          <input type="text" value="<?php echo $jk; ?>" class="form-control"  readonly="yes" />
          <small>Perubahan Jenis Kelamin</small>
          <select class="form-control" name="Kelamin">
          	<option value="Laki-laki">Laki-laki</option>
          	<option value="Perempuan">Perempuan</option>
          </select>

          <label for="fullname">Agama * :</label>
          <small>Agama Saat Ini</small>
          <input type="text" value="<?php echo $agama; ?>" class="form-control"  readonly="yes" />
          <small>Perubahan Agama</small>
          <select class="form-control" name="agama">
          	<option value="Islam">Islam</option>
          	<option value="Katolik">Katolik</option>
          	<option value="Protestan">Protestan</option>
          	<option value="Hindu">Hindu</option>
          	<option value="Budha">Budha</option>
          	<option value="Kong Hu cu">Kong Hu cu</option>
          </select>

          <label for="fullname">Tempat Lahir * :</label>
          <input type="text" id="fullname" class="form-control" value="<?php echo $tempat_lahir; ?>" name="tempat_lahir" required />

          <label for="fullname">Tanggal Lahir * :</label>
          <input type="date" id="fullname" class="form-control" value="<?php echo $tgl_lahir; ?>" name="tgl_lahir" required />

          <label for="fullname">NIK Notaris * :</label>
          <input type="text" id="fullname" class="form-control" value="<?php echo $nik ?>" name="nik" required />

          <label for="fullname">NPWP Notaris * :</label>
          <input type="text" id="fullname" class="form-control" value="<?php echo $npwp; ?>" name="npwp" required />

          <label for="fullname">SK Notaris * :</label>
          <input type="text" id="fullname" class="form-control" value="<?php echo $sk_notaris; ?>" name="sk" required />

          <label for="fullname">Status perkawinan * :</label>
          <input type="text" id="fullname" class="form-control" value="<?php echo $status; ?>" name="status" required />

          <label for="fullname">Alamat Dinas * :</label>
          <textarea name="alamat" class="form-control"><?php echo $alamat_dinas; ?></textarea>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <input type="submit" name="submit" value="Simpan" class="btn btn-primary" />
        </div>
      </form>
    </div>
  </div>
</div>
