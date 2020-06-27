<div class="right_col" role="main">
    <div class="row">
        <?php
            /*for ($i=date("n"); $i >= 1 ; $i--) {
                if($i < 10){
                    $i = "0".$i;
                }
                $x = 0;
                $year = '2019';
                foreach ($rekap->result() as $row) {
                    if ($x == 0) {
                        $lok = $row->nama_lokasi;
                        $x++;
                    } else {
                        "&nbsp;";
                    }
                }
                $month[] = completeFormatMonthIndo_helper($i);
                $date = $year.'-'.$i;
                $data = $this->db->query("SELECT SUM(jml_setor) AS jumlah FROM epasar WHERE nama_lokasi='$lok' AND dibayar_pada LIKE '%$date%';");
                foreach ($data->result() as $row) {
                   $total[] = number_format($row->jumlah,0,",",".");
                } 
            } */
        ?>
    </div>
    <div class="row">
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Detail Rekapitulasi</h1>
        </div>
            <!-- /.col-lg-12 -->
        <!-- <div class="row">
            <canvas id="canvas" width="900" height="400"></canvas>
            <script type="text/javascript" src="<?php echo base_url().'assets/chart.js'; ?>"></script>
            <script>
                var ctx = document.getElementById("canvas").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: <?php echo json_encode($month); ?>,
                        datasets: [{
                            label: 'Data Pemasukan Tahun 2019',
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
            </script>
        </div> -->
<div class="row">
    <div class="x-content">
        &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-danger" onclick="goBack()"><i class="fa fa-arrow-left"></i> Kembali</button> <br><br>
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Rekapitulasi
                </div>
                
                <div class="x-content" style="font-size: 16px;">
                    <table width="100%" class="table table-striped table-bordered table-hover"><!-- id="dataTables-example" -->
                        <thead>
                            <tr>
                                <th>Nama Notaris</th>
                                <th>Bulan</th>
                                <th>Jumlah Setor</th>
                                <th width="10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($i=date("n"); $i >= 1 ; $i--) {if($i < 10){$i = "0".$i;}?>
                            <tr class="odd gradeX">
                                <td>
                                    <?php 
                                    $x = 0;
                                    $year = '2019';
                                    foreach ($rekap->result() as $row) {
                                        if ($x == 0) {
                                            echo $notaris = $row->nama_notaris;
                                            $x++;
                                        } else {
                                            echo "&nbsp;";
                                        }
                                    }
                                 ?>
                                </td>
                                <td><?php echo $bulan = completeFormatMonthIndo_helper($i); ?></td>
                                <td class="center">
                                    <?php 
                                        $date = $year.'-'.$i;
                                        $data = $this->db->query("SELECT SUM(bphtb_harus_bayar) AS jumlah FROM objek_pajak WHERE notaris_pengusul='$notaris' AND tgl_pengajuan LIKE '%$date%';");
                                        foreach ($data->result() as $row) {
                                            echo "Rp ".number_format($row->jumlah,0,",",".").",-";
                                        } 
                                    ?></td>
                                <td><a href="<?php echo base_url('dinas/Rekapitulasi/detail_rekap_pertanggal?param='.$year.'-'.$i.'&notaris='.$notaris.'&bulan='.$bulan) ?>"> <button type="button" class="btn btn-primary"><i class="fa fa-list"></i> Detail</button> </a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function goBack() {
  window.history.back();
}
</script>