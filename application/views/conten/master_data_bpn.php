<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>BPN</h3>
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
            	<?php
                  if($this->session->flashdata('gagal')==TRUE){ ?>
                        <div class="alert alert-danger">
                          <?php echo $this->session->flashdata('gagal') ?>
                        </div>
                  <?php } ?>
                  <?php
                  if($this->session->flashdata('berhasil')==TRUE){ ?>
                        <div class="alert alert-success">
                          <?php echo $this->session->flashdata('berhasil') ?>
                        </div>
                  <?php } ?>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Upload Data BPN</h2>
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
                   <div class="animated flipInY col-lg-5 col-md-3 col-sm-6 col-xs-12">
	                <div class="tile-stats">
	                  <div class="icon"><i class="fa fa-download"></i></div>
	                  <div class="count">Excel</div>
	                  <h3>Format Upload Excel</h3>
	                  <a href="<?php echo base_url('/assets/master/master_data_bpn.xlsx') ?>"> <p>Download</p> </a>
	                </div>
	              </div>
	              <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <form method="post" action="<?php echo base_url('dinas/BPN/import') ?>" enctype="multipart/form-data" accept-charset="utf-8">
                      <input type="file" name="userfile" required="required" class="form-control col-md-7 col-xs-12"><br><br>
                      <button type="submit" class="btn btn-success">Upload</button>
                      </form>
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
                    <h2>Master Data BPN</h2>
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
                          <th width="5%">No</th>
                          <th width="10%">NOP</th>
                          <th width="10%">Alamat</th>
                          <th>Kodepos</th>
                          <th>NJOP Tanah</th>
                          <th width="14%">NJOP Bangunan</th>
                          <th width="15%">Aksi</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php  
                        $x=1;
                        foreach ($bpn->result() as $row) { ?>

                        <tr>
                          <td><center> <?php echo $x++; ?> </center></td>
                          <td><?php echo $row->nop; ?></td>
                          <td><?php echo $row->alamat; ?></td>
                          <td><?php echo $row->kd_pos; ?></td>
                          <td>Rp. <?php echo number_format($row->njop_tanah) ; ?>,-</td>
                          <td>Rp. <?php echo number_format($row->njop_bangunan) ; ?>,-</td>
                          <td>
                            <button type="button" class="btn btn-primary" title="Lihat Detail Data"><i class="fa fa-bookmark"></i></button>
                            <button type="button" class="btn btn-warning" title="Edit Data"><i class="fa fa-edit"></i></button>
                            <button type="button" class="btn btn-danger" title="Hapus Data"><i class="fa fa-trash"></i></button>

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