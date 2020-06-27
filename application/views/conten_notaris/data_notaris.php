<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>NOTARIS</h3>
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
                      
                  	<table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Notaris</th>
                          <th>NIK</th>
                          <th>Tempat Tanggal Lahir</th>
                          <th>SK Notaris</th>
                          <th width="15%">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      	<?php 
                      	$x=1;
                      	$no=1;
                      	foreach ($data_notaris->result() as $row) { ?>
                        <tr>
                          <td><?php echo $x++; ?></td>
                          <td><?php echo $row->nama_notaris; ?></td>
                          <td><?php echo $row->nik; ?></td>
                          <td>
                          	<?php
                              $tempat= $row->tempat_lahir;
                              $tanggal= $row->tgl_lahir;
                              $tanggal1 = date('d M Y', strtotime($tanggal));
                              if ($tempat == '') {
                                echo "---";
                              } else {
                                echo $tempat;
                              } ?> , <?php
                              if ($tanggal == '') {
                                echo "---";
                              } else {
                                echo $tanggal1;
                              } ?>
                          </td>
                          <td><?php echo $row->sk_notaris; ?></td>
                          <td>
                          	<button type="button" class="btn btn-primary" title="Lihat Detail" data-toggle="modal" data-target="#myModal<?php echo $no++; ?>"><i class="fa fa-bookmark"></i></button>
                          	<button type="button" class="btn btn-warning" title="Edit Data"><i class="fa fa-edit"></i></button>
                          	<a href="<?php echo base_url('Notaris/hapus_data_notaris/'.$row->id_notaris) ?>" onclick="return confirm('Yakin Ingin Menghapus Data Ini?')"><button type="button" class="btn btn-danger" title="Hapus Data"><i class="fa fa-trash"></i></button></a>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

<?php
 $y=1;
   foreach ($data_notaris->result() as $row){
?>
<div class="modal fade" id="myModal<?php echo $y++ ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Biodata Notaris</h4>
                        </div>
                        <div class="modal-body">
                          
                        <div class="table-responsive">
			            <table class="table table-striped table-bordered table-hover">
			                <tbody>
			                    <tr>
			                        <td width="20%">Nama Notaris</td>
			                        <td width="5%"><center>:</center></td>
			                        <td width="50%"><?php echo $row->nama_notaris; ?></td>
			                        <td rowspan="7">
			                          <?php 
			                          $foto = $row->foto_notaris;
			                          if ($foto == "") { ?>
			                            <center><img style="width: 70%; height: auto; padding-top: 10%" src="<?php echo base_url('assets/img/icon_foto.jpg') ?>"></center>
			                          <?php } else {?>
			                          <center><img style="width: 70%; height: auto; padding-top: 10%" src="<?php echo base_url('assets/images/foto_notaris/gallery/'.$row->foto_notaris) ?>"></center>
			                        <?php } ?>
			                        </td>
			                    </tr>
			                    <tr>
			                        <td width="20%">Jenis Kelamin</td>
			                        <td width="5%"><center>:</center></td>
			                        <td width="50%"><?php echo $row->jenis_kelamin; ?></td>
			                    </tr>
			                    <tr>
			                        <td width="20%">Agama</td>
			                        <td width="5%"><center>:</center></td>
			                        <td width="50%"><?php echo $row->agama; ?></td>
			                    </tr>
			                    <tr>
			                        <td width="20%">Tempat Tanggal Lahir</td>
			                        <td width="5%"><center>:</center></td>
			                        <td width="50%">
			                        <?php
		                              $tempat= $row->tempat_lahir;
		                              $tanggal= $row->tgl_lahir;
		                              $tanggal1 = date('d M Y', strtotime($tanggal));
		                              if ($tempat == '') {
		                                echo "---";
		                              } else {
		                                echo $tempat;
		                              } ?> , <?php
		                              if ($tanggal == '') {
		                                echo "---";
		                              } else {
		                                echo $tanggal1;
		                              } ?>
			                        </td>
			                    </tr>
			                    <tr>
			                        <td width="20%">NIK</td>
			                        <td width="5%"><center>:</center></td>
			                        <td width="50%"><?php echo $row->nik; ?></td>
			                    </tr>
			                    <tr>
			                        <td width="20%">NPWP Notaris</td>
			                        <td width="5%"><center>:</center></td>
			                        <td width="50%"><?php echo $row->npwp; ?></td>
			                    </tr>
			                    <tr>
			                        <td width="20%">SK NOTARIS</td>
			                        <td width="5%"><center>:</center></td>
			                        <td width="50%"><?php echo $row->sk_notaris; ?></td>
			                    </tr>
			                    <tr>
			                        <td width="20%">Status Hubungan</td>
			                        <td width="5%"><center>:</center></td>
			                        <td width="50%" colspan="2"><?php echo $row->status_hubungan; ?></td>
			                    </tr>
			                    <tr>
			                        <td width="20%">Alamat Dinas Notaris</td>
			                        <td width="5%"><center>:</center></td>
			                        <td width="50%" colspan="2"><?php echo $row->alamat_dinas_notaris; ?></td>
			                    </tr>
			                </tbody>
			            </table>
			        </div>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>

                      </div>
                    </div>
                  </div>
<?php $no++;} ?>