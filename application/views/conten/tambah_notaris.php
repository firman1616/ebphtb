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
            	<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" action="<?php echo base_url('dinas/Notaris/tambah_notaris') ?>">
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tambah Data Notaris</h2>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Lengkap
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                          <input type="text" name="nama_lengkap" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jenis Kelamin
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                        	<select name="jenis_kelamin" class="form-control" required="required">
                        		<option>Pilih Satu</option>
                        		<option value="Laki-laki">Laki - Laki</option>
                        		<option value="Perempuan">Perempuan</option>
                        	</select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Agama
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                        	<select name="agama" class="form-control" required="required">
                        		<option>Pilih Satu</option>
                        		<option value="Islam">Islam</option>
                        		<option value="Kristen">Kristen</option>
                        		<option value="Hindu">Hindu</option>
                        		<option value="Budha">Budha</option>
                        		<option value="Konghucu">Konghucu</option>
                        	</select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tempat Tanggal Lahir
                        </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" name="tempat_lahir" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        <div class="col-md-5 col-sm-6 col-xs-12">
                          <input type="date" name="tgl_lahir" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NIK
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                          <input type="number" name="nik" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No. NPWP
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                          <input type="number" name="npwp" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No. SK
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                          <input type="number" name="sk" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Status
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                          <input type="text" name="status" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Username
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                          <input type="text" name="username" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Alamat
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                          <textarea name="alamat" class="form-control"></textarea>
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						  
                        </div>
                      </div>

                    


                  </div>
                </div>
              </div>


              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tambah Foto Notaris</h2>
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
                        <div class="col-md-9 col-sm-6 col-xs-12">
                         <center><img width="50%" height="25%" src="<?php echo base_url('assets/img/icon_foto.jpg') ?>"></center><br><center>Pass Foto 3x4</center><br>
                         <input type="file" name="filefoto">
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                  </div>
                </div>
              </div>
          </form>
            </div>
          </div>
        </div>