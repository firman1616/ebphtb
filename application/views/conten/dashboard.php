<div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">
              <div class="animated flipInY col-lg-6 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-money"></i></div>
                  <div class="count"><?php foreach ($jumlah_setor_perhari->result() as $row){ echo "Rp".number_format($row->jumlah).",-";} ?></div>
                  <h3>Total Penghasilan Hari Ini</h3>
                  <p>BPHTB Hari Ini</p>
                </div>
              </div>
              <div class="row top_tiles">
              <div class="animated flipInY col-lg-6 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-money"></i></div>
                  <div class="count"><?php foreach ($jumlah_setor_perbulan->result() as $row){ echo "Rp".number_format($row->jumlah).",-";} ?></div>
                  <h3>Total Penghasilan Bulan Ini</h3>
                  <p>BPHTB Bulan Ini</p>
                </div>
              </div>
              <!-- <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-check-square-o"></i></div>
                  <div class="count">179</div>
                  <h3>New Sign ups</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div> -->
            </div>
            <div class="animated flipInY col-lg-6 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-users"></i></div>
                  <div class="count"><?php echo $jml_notaris ?></div>
                  <h3>Notaris</h3>
                  <p><a href="<?php echo base_url('dinas/Notaris/data_notaris') ?>">Detail Notaris</a></p>
                </div>
              </div>
              <div class="animated flipInY col-lg-6 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-file"></i></div>
                  <div class="count"><?php echo $jml_op ?></div>
                  <h3>Permohonan BPHTB</h3>
                  <p><a href="<?php echo base_url('dinas/BPHTB/listBphtb') ?>">Detail BPHTB</a></p>
                </div>
              </div>
          </div>
        </div>
      </div>