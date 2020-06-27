<script src="<?php echo base_url(); ?>assets/ajax.js"></script>
<body class="nav-md" id="fullscreen">
  <div class="container body">

    <div class="main_container">
      <div class="badan"></div>
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="<?php echo base_url('dinas/Dashboard'); ?>" class="site_title"><i class="fa fa-file-text-o"></i> <span> &nbsp;E-BPHTB</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="<?php echo base_url('assets/img/icon_foto.jpg'); ?>" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2><?php echo $name; ?></h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <!-- <li><a class="klik_menu" id="dashboard"><i class="fa fa-home"></i> Dashboard </a>
                </li>
                <li><a class="klik_menu" id="rekapitulasi"><i class="fa fa-link"></i> Rekapitulasi SSPD </a>
                </li> -->
                <li><a href="<?php echo base_url('dinas/Dashboard') ?>"><i class="fa fa-home"></i> Dashboard </a>
                </li>
                <li><a href="<?php echo base_url('dinas/Rekapitulasi') ?>"><i class="fa fa-link"></i> Rekapitulasi SSPD </a>
                </li>
                <!-- <li><a><i class="fa fa-table"></i> BPN <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">                      
                    <li><a href="<?php echo base_url('dinas/BPN/data_bpn') ?>">Tambah Data BPN</a></li>
                    <li><a href="<?php echo base_url('dinas/BPN') ?>">Daftar Data BPN</a></li>
                  </ul>
                </li> -->
                <li><a href="<?php echo base_url('dinas/BPN') ?>"><i class="fa fa-table"></i> Master BPN </a>
                </li>
                <li><a><i class="fa fa-file-text-o"></i> SSPD BPHTB <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">                      
                    <li><a href="<?php echo base_url('dinas/BPHTB') ?>">Input Data SSPD</a></li>
                    <li><a href="<?php echo base_url('dinas/BPHTB/listBphtb') ?>">Daftar Data SSPD</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-book"></i> Notaris <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="<?php echo base_url('dinas/Notaris') ?>">Tambah Data</a></li>
                    <li><a href="<?php echo base_url('dinas/Notaris/data_notaris') ?>">Data Notaris</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-gear"></i> Setting <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="<?php echo base_url('dinas/Setting') ?>">Setting User</a></li>
                    <li><a href="<?php echo base_url('dinas/Setting/user_notaris') ?>">Setting User Notaris</a></li>
                  </ul>
                </li>
                </li>
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen" class="fs-button">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url('login/keluar') ?>">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="<?php echo base_url('assets/img/icon_foto.jpg'); ?>" alt=""><?php echo $name; ?>
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="javascript:;"> Profile</a></li>
                  <li>
                    <a href="javascript:;">
                      <span class="badge bg-red pull-right">50%</span>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li><a href="javascript:;">Help</a></li>
                  <li><a href="<?php echo base_url('login/keluar') ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                </ul>
              </li>

              <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">6</span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                  <li>
                    <a>
                      <span class="image"><img src="<?php echo base_url('assets/img/icon_foto.jpg'); ?>" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image"><img src="<?php echo base_url('assets/img/icon_foto.jpg'); ?>" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image"><img src="<?php echo base_url('assets/img/icon_foto.jpg'); ?>" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image"><img src="<?php echo base_url('assets/img/icon_foto.jpg'); ?>" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li>
                    <div class="text-center">
                      <a>
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>