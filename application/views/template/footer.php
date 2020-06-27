<!-- footer content -->
        <footer>
          <div class="pull-right">
            Developed By: Ide Kita Cemerlang
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('') ?>assets/template2/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('') ?>assets/template2/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('') ?>assets/template2/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('') ?>assets/template2/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url('') ?>assets/template2/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url('') ?>assets/template2/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url('') ?>assets/template2/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url('') ?>assets/template2/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url('') ?>assets/template2/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url('') ?>assets/template2/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url('') ?>assets/template2/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url('') ?>assets/template2/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url('') ?>assets/template2/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url('') ?>assets/template2/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url('') ?>assets/template2/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url('') ?>assets/template2/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/template2/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url('') ?>assets/template2/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url('') ?>assets/template2/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url('') ?>assets/template2/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url('') ?>assets/template2/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url('') ?>assets/template2/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/template2/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="<?php echo base_url('') ?>assets/template2/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('') ?>assets/template2/build/js/custom.min.js"></script>

    <!-- jQuery Smart Wizard -->
    <script src="<?php echo base_url('') ?>assets/template2/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
	
    <!-- Datatables -->
    <script src="<?php echo base_url('') ?>assets/template2/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/template2/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/template2/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/template2/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/template2/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/template2/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/template2/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/template2/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/template2/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/template2/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/template2/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url('') ?>assets/template2/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/template2/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/template2/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/template2/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Select 2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.select2').select2();
    });
/*Perhitungan*/
/*Form Isian C*/
    function hrg_tanah(){
        var luas_tanah = document.input_bphtb.l_tanah_bawah_njop.value;
        var njop_tanah = document.input_bphtb.njop_tanah_bawah_njop.value;
        document.input_bphtb.luas_njop_tanah.value = luas_tanah * njop_tanah;
    }

    function hrg_bangunan(){
        var luas_bangunan = document.input_bphtb.l_bangunan_bawah_njop.value;
        var njop_bangunan = document.input_bphtb.njop_bangunan_bawah_njop.value;
        document.input_bphtb.luas_njop_bangunan.value = luas_bangunan * njop_bangunan;
    }

    function hrg_total(){
        var luas_njop_t = document.input_bphtb.luas_njop_tanah.value;
        var luas_njop_b = document.input_bphtb.luas_njop_bangunan.value;
        document.input_bphtb.njop_pbb.value = parseInt(luas_njop_t) + parseInt(luas_njop_b);
    }

/*Form Isian D*/
    function hitung_npopkp(){
        var npop = document.input_bphtb.npop.value;
        var npoptkp = document.input_bphtb.npoptkp.value;
        document.input_bphtb.npopkp.value = parseInt(npop) - parseInt(npoptkp);
    }

    function hitung_bphtb_terhutang(){
        var npopkp = document.input_bphtb.npopkp.value;
        document.input_bphtb.bphtb_terhutang.value = parseInt(npopkp) * (5 / 100);
    }

    function hitung_waris(){
        var bphtb_terhutang = document.input_bphtb.bphtb_terhutang.value;
        document.input_bphtb.bea_waris.value = parseInt(bphtb_terhutang) * (50 / 100);
    }

    function hitung_bphtb(){
        var bphtb_terhutang = document.input_bphtb.bphtb_terhutang.value;
        var bea_waris = document.input_bphtb.bea_waris.value;
        document.input_bphtb.total_bphtb.value = parseInt(bphtb_terhutang) + parseInt(bea_waris);
    }


    /*Angka Terbilang huruf*/
    function terbilang(bilangan) {
        bilangan    = document.input_bphtb.jumlah_setor_bphtb.value;
        var angka   = new Array('0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');
        var kata    = new Array('','Satu','Dua','Tiga','Empat','Lima','Enam','Tujuh','Delapan','Sembilan');
        var tingkat = new Array('','Ribu','Juta','Milyar','Triliun');

        var panjang_bilangan = bilangan.length;

        /* pengujian panjang bilangan */
        if (panjang_bilangan > 15) {
            kaLimat = "Diluar Batas";
            return kaLimat;
        }

        /* mengambil angka-angka yang ada dalam bilangan, dimasukkan ke dalam array */
        for (i = 1; i <= panjang_bilangan; i++) {
            angka[i] = bilangan.substr(-(i),1);
        }

        i = 1;
        j = 0;
        kaLimat = "";

        /* mulai proses iterasi terhadap array angka */
        while (i <= panjang_bilangan) {

            subkaLimat = "";
            kata1 = "";
            kata2 = "";
            kata3 = "";

            /* untuk Ratusan */
            if (angka[i+2] != "0") {
                if (angka[i+2] == "1") {
                    kata1 = "Seratus";
                } else {
                    kata1 = kata[angka[i+2]] + " Ratus";
                }
            }

            /* untuk Puluhan atau Belasan */
            if (angka[i+1] != "0") {
                if (angka[i+1] == "1") {
                    if (angka[i] == "0") {
                        kata2 = "Sepuluh";
                    } else if (angka[i] == "1") {
                        kata2 = "Sebelas";
                    } else {
                        kata2 = kata[angka[i]] + " Belas";
                    }
                } else {
                    kata2 = kata[angka[i+1]] + " Puluh";
                }
            }

            /* untuk Satuan */
            if (angka[i] != "0") {
                if (angka[i+1] != "1") {
                    kata3 = kata[angka[i]];
                }
            }

            /* pengujian angka apakah tidak nol semua, lalu ditambahkan tingkat */
            if ((angka[i] != "0") || (angka[i+1] != "0") || (angka[i+2] != "0")) {
                subkaLimat = kata1+" "+kata2+" "+kata3+" "+tingkat[j]+" ";
            }

            /* gabungkan variabe sub kaLimat (untuk Satu blok 3 angka) ke variabel kaLimat */
            kaLimat = subkaLimat + kaLimat;
            i = i + 3;
            j = j + 1;

        }

        /* mengganti Satu Ribu jadi Seribu jika diperlukan */
        if ((angka[5] == "0") && (angka[6] == "0")) {
            kaLimat = kaLimat.replace("Satu Ribu","Seribu");
        }

        return document.input_bphtb.jumlah_setor_bphtb_huruf.value = kaLimat + "Rupiah";
    }

    </script>

    <script>
    $('#myDatepicker').datetimepicker();
    
    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });
    
    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });
    
    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();
    
    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });
    
    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });
    
    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
</script>

<script>
  $(document).ready(function(){
    $('.fs-button').on('click', function(){
      var elem = document.getElementById('fullscreen');
      if (document.webkitFullscreenElement) {
        document.webkitCancelFullScreen();
      } else {
        elem.webkitRequestFullScreen();
      };
    });

/*    $('.klik_menu').on('click',function(){
        var menu = $(this).attr('id');
        if(menu == "dashboard"){
            $('.badan').load('<?php echo base_url('dinas/Dashboard') ?>');                       
        } else if(menu == "rekapitulasi"){
            $('.badan').load('<?php echo base_url('dinas/Rekapitulasi') ?>');                        
        }*/
        /*else if(menu == "tutorial"){
            $('.badan').load('tutorial.php');                       
        }else if(menu == "sosmed"){
            $('.badan').load('sosmed.php');                     
        }*/
    //});

    //$('.badan').load('<?php echo base_url('dinas/Dashboard') ?>'); 
  });
</script>

    <!-- <script src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/js/jquery-ui.js'?>" type="text/javascript"></script> -->
    
  </body>
</html>