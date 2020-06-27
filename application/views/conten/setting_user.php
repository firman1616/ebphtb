<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Setting</h3>
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
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tambah User</h2>
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
                      <form method="post" action="<?php echo base_url('dinas/Setting/tambah_user_admin') ?>">
                      
                  	<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" placeholder="Nama User" name="nama">
                        <span class="fa fa-users form-control-feedback left" aria-hidden="true"></span>
                      </div>

                  	<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" placeholder="Username" name="username">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      &nbsp;&nbsp; 
                      <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</button>
                      </form>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data User</h2>
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
                          <th>Nama User</th>
                          <th>Username</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>

                      <tbody>
                      	<?php 
                      	$x=1;
                        $no=1;
                      	foreach ($user->result() as $row) { ?>
                        <tr>
                          <td><?php echo $x++; ?></td>
                          <td><?php echo $row->nama_user; ?></td>
                          <td><?php echo $row->username; ?></td>
                          <td>
                            <?php  
                            $level=$row->level;
                            if ($level="2") {
                              echo "Session Admin";
                            }
                            ?>
                          </td>
                          <td>
                          	<button type="button" class="btn btn-warning"><i class="fa fa-edit" data-toggle="modal" data-target="#myModal<?php echo $no++; ?>"></i></button>
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
   foreach ($user->result() as $row){
?>
<div class="modal fade" id="myModal<?php echo $y++ ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-bg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Edit User</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?php echo base_url('dinas/Setting/update_user/'.$row->id_user) ?>">
          <div class="form-group">
                <input class="form-control" readonly name='nama' value="<?php echo $row->nama_user; ?>" required>
          </div>
          <div class="form-group">
                <input class="form-control" name='username' value="<?php echo $row->username; ?>" required>
          </div>
          <div class="form-group">
                <input class="form-control" name='password' placeholder="Password Baru" required>
          </div>
          <div class="form-group"></div>
          <button type="reset" class="btn btn-default btn-xs"><i class=" fa fa-refresh "></i> Reset</button>
          <button type="submit" class="btn btn-primary btn-xs"><i class="fa fa-edit "></i> Edit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php $no++;} ?>
