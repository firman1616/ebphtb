<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Rekapitulasi</h3>
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
            <h2>Rekapitulasi SSPD Notaris</h2>
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
            <?php foreach ($notaris->result() as $row) { 
              $notaris = $row->nama_notaris;
              $jml_setor = $this->M_data->jumlah_setor($notaris); ?>
              <div class="animated flipInY col-lg-6 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><img height="70px" width="70px" src="<?php echo base_url('assets/images/foto_notaris/gallery/'.$row->foto_notaris); ?>"></div>
                  <div class="count">Rp <?php foreach ($jml_setor->result() as $data) {
                    echo number_format($data->jumlah, 0, ',', '.');
                  } ?>,-</div>
                  <h3><?php echo $row->nama_notaris ?></h3>
                  <p><a href="<?php echo base_url('dinas/Rekapitulasi/detail_rekap/'.$row->id_notaris) ?>">Lihat Detail</a></p>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>