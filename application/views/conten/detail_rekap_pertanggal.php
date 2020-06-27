<?php 
    /*for ($i=1; $i <= 31 ; $i++) { 
        if ($i < 10) {
            $i = "0".$i;
        }
        $tanggal[] = reverseNormalFormatDate_helper($this->input->get("param")."-".$i);
             
        $tgl = $this->input->get("param")."-".$i;
        $lok = $this->input->get("lok");
        $query_tgl = $this->db->query("SELECT SUM(jml_setor) AS total FROM epasar WHERE dibayar_pada LIKE '%$tgl%' AND nama_lokasi='$lok'");
        foreach ($query_tgl->result() as $row) {
           $total[] = number_format($row->total,0,",",".");
        }
    }*/
?>

<div class="right_col" role="main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Detail Rekapitulasi Notaris Perhari </h1>
        </div>
        <!-- /.col-lg-12 -->

        <div class="row">
            <?php 
                /*$param = $this->input->get('param');
                $b = date('m-Y', strtotime($param));
                echo $bulan = substr($b, 0, 2);
                if ($bulan == '01') {
                    $bln = 'Januari';
                } elseif ($bulan == '02') {
                    $bln = 'Februari';
                } elseif ($bulan == '03') {
                    $bln = 'Maret';
                } elseif ($bulan == '04') {
                    $bln = 'April';
                } elseif ($bulan == '05') {
                    $bln = 'Mei';
                } elseif ($bulan == '06') {
                    $bln = 'Juni';
                } elseif ($bulan == '07') {
                    $bln = 'Juli';
                } elseif ($bulan == '08') {
                    $bln = 'Agustus';
                } elseif ($bulan == '09') {
                    $bln = 'September';
                } elseif ($bulan == '10') {
                    $bln = 'Oktober';
                } elseif ($bulan == '11') {
                    $bln = 'November';
                } elseif ($bulan == '12') {
                    $bln = 'Desember';
                }*/
            ?>
            <!-- <canvas id="myChart" width="900" height="400"></canvas>
            <script type="text/javascript" src="<?php echo base_url().'assets/chart.js'; ?>"></script>
            <script>
                var ctx = document.getElementById("myChart").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: <?php echo json_encode($tanggal); ?>,
                        datasets: [{
                            label: 'Data Pemasukan Bulan <?php echo $bln; ?> 2019',
                            data: <?php echo json_encode($total); ?>,
                            backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });
            </script> -->
        </div>
    </div>
    <div class="row">
        &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-danger" onclick="goBack()"><i class="fa fa-arrow-left"></i> Kembali</button><br><br>
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Detail Rekap Harian
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Hari dan Tanggal</th>
                                        <th>Penghasilan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    for ($i=1; $i <= 31 ; $i++) { 
                                        if ($i < 10) {$i = "0".$i;} ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td>
                                                <?php echo hari_helpers(date('l',strtotime($this->input->get("param")."-".$i))).", ".reverseNormalFormatDate_helper($this->input->get("param")."-".$i); ?>
                                            </td>
                                            <td>
                                                    <?php 
                                                    $tgl = $this->input->get("param")."-".$i;
                                                    $notaris = $this->input->get("notaris");
                                                    $query_tgl = $this->db->query("SELECT SUM(bphtb_harus_bayar) AS jumlah FROM objek_pajak WHERE notaris_pengusul='$notaris' AND tgl_pengajuan LIKE '%$tgl%'");
                                                    foreach ($query_tgl->result() as $row) {
                                                       echo "Rp".number_format($row->jumlah,0,",",".").",-";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                <?php } ?>
                               

                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-6 -->
            <!-- /.col-lg-6 -->
        </div>
</div>

<script>
    function goBack() {
      window.history.back();
    }
</script>