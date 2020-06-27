<?php 
  foreach ($cetak->result() as $row) {
        $nop                      = $row->nop;
        $kd_booking               = $row->kd_booking;
        $alamat                   = $row->alamat;
        $perolehan                = $row->jenis_perolehan;
        $blok                     = $row->blok;
        $rt                       = $row->rt;
        $rw                       = $row->rw;
        $desa                     = $row->desa;
        $kecamatan                = $row->kecamatan;
        $kota                     = $row->kota;
        $kd_pos                   = $row->kd_pos;
        $njop_tanah               = $row->njop_tanah;
        $njop_bangunan            = $row->njop_bangunan;
        $l_tanah                  = $row->l_tanah;
        $l_bangunan               = $row->l_bangunan;
        $njop_total               = $row->njop_total;
        $harga_transaksi          = $row->harga_transaksi;
        $jenis_surat_tanah        = $row->jenis_surat_tanah;
        $no_sertifikat            = $row->no_sertifikat;
        $npop                     = $row->npop;
        $npoptkp                  = $row->npoptkp;
        $npopkp                   = $row->npopkp;
        $bphtb_terutang           = $row->bphtb_terutang;
        $pengurangan              = $row->pengurangan;
        $bphtb_telah_bayar        = $row->bphtb_telah_bayar;
        $kurang_bayar             = $row->kurang_bayar;
        $bphtb_harus_bayar        = $row->bphtb_harus_bayar;
        $jml_setoran_berdasarkan  = $row->jml_setoran_berdasarkan;
        $ket                      = $row->ket;

        $nama_pembeli             = $row->nama_pembeli;
        $jkel_pembeli             = $row->jkel_pembeli;
        $tmpt_lahir_pembeli       = $row->tmpt_lahir_pembeli;
        $tgl_lahir_pembeli        = $row->tgl_lahir_pembeli;
        $status_nikah_pembeli     = $row->status_nikah_pembeli;
        $jenis_pekerjaan_pembeli  = $row->jenis_pekerjaan_pembeli;
        $alamat_pembeli           = $row->alamat_pembeli;
        $blok_pembeli             = $row->blok_pembeli;
        $rt_pembeli               = $row->rt_pembeli;
        $rw_pembeli               = $row->rw_pembeli;
        $desa_pembeli             = $row->desa_pembeli;
        $kecamatan_pembeli        = $row->kecamatan_pembeli;
        $kabupaten_pembeli        = $row->kabupaten_pembeli;
        $kd_pos_pembeli           = $row->kd_pos_pembeli;
        $ibu_kandung_pembeli      = $row->ibu_kandung_pembeli;
        $notelp_pembeli           = $row->notelp_pembeli;
        $email_pembeli            = $row->email_pembeli;
        $npwp_pembeli             = $row->npwp_pembeli;
        $jenis_identitas_pembeli  = $row->jenis_identitas_pembeli;
        $no_identitas_pembeli     = $row->no_identitas_pembeli;
        $ket_pembeli              = $row->ket_pembeli;

        $nama_penjual             = $row->nama_penjual;
        $jkel_penjual             = $row->jkel_penjual;
        $tmpt_lahir_penjual       = $row->tmpt_lahir_penjual;
        $tgl_lahir_penjual        = $row->tgl_lahir_penjual;
        $status_nikah_penjual     = $row->status_nikah_penjual;
        $jenis_pekerjaan_penjual  = $row->jenis_pekerjaan_penjual;
        $alamat_penjual           = $row->alamat_penjual;
        $blok_penjual             = $row->blok_penjual;
        $rt_penjual               = $row->rt_penjual;
        $rw_penjual               = $row->rw_penjual;
        $desa_penjual             = $row->desa_penjual;
        $kecamatan_penjual        = $row->kecamatan_penjual;
        $kabupaten_penjual        = $row->kabupaten_penjual;
        $kd_pos_penjual           = $row->kd_pos_penjual;
        $ibu_kandung_penjual      = $row->ibu_kandung_penjual;
        $notelp_penjual           = $row->notelp_penjual;
        $email_penjual            = $row->email_penjual;
        $npwp_penjual             = $row->npwp_penjual;
        $jenis_identitas_penjual  = $row->jenis_identitas_penjual;
        $no_identitas_penjual     = $row->no_identitas_penjual;
        $ket_penjual              = $row->ket_penjual;
  }
?>

<style type="text/css">
<!--
.style1 {
  font-size: x-small;
  font-style: italic;
}
.style2 {font-size: x-small}
.style3 {font-size: xx-small}
.style4 {font-size: small}
-->
</style>
<!-- <img style="width: 70px" src="./assets/img/Bangkalan.png" > -->
<body>
<table width="840" border="1" style="border:solid black;">
  <tr style="padding:1px">
    <td width="167" rowspan="2"><div align="center"><img src="<?php echo base_url('./assets/img/sampang.png') ?>" width="81" height="96" /></div></td>
    <td width="491" height="77"><div align="center">
    SURAT SETORAN PAJAK DAERAH <br /> BEA PEROLEHAN HAK ATAS TANAH DAN BANGUNAN  <br />(SSPD - BPHTB)</div></td>
    <td width="160" rowspan="2"><center> A 00001 <br /><br /><b>Lembar 1</b> <br /><br />Untuk Wajib Pajak </center></td>
  </tr>
  <tr>
    <td height="36"><div align="center" style="font-size:12px; padding:1px;"><font color="#FF0000" >BERFUNGSI SEBAGAI SURAT PEMBERITAHUAN PAJAK DAERAH (SPTPD) </font></div></td>
  </tr>
</table>

<table width="840" height="35" border="1" style="border-bottom:solid black; border-left:solid black; border-right:solid black;">
  <tr>
    <td style="padding:1px;">BADAN PAJAK DAN RETRIBUSI DAERAH : ____________________________________________ </td>
  </tr>
</table>
<table width="840" style="border-bottom:solid black; border-left:solid black; border-right:solid black;">
  <tr>
    <td width="30"><center><b>A.</b></center></td>
    <td width="234">1. Nama Wajib Pajak </td>
    <td width="28"><center>:</center></td>
    <td colspan="3"><?php echo $nama_pembeli; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>2. NPWP (Badan) </td>
    <td><center>:</center></td>
    <td colspan="3"><?php echo $npwp_pembeli; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>3. NIK (Perorangan) </td>
    <td><center>:</center></td>
    <td colspan="3"><?php echo $no_identitas_pembeli; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>4. Alamat Wajib Pajak </td>
    <td><center>:</center></td>
    <td colspan="3"><?php echo $alamat_pembeli; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>5. Kelurahan / Desa </td>
    <td><center>:</center></td>
    <td width="111"><?php echo $desa_pembeli; ?></td>
    <td width="198">6. RT / RW   : <?php echo $rt_pembeli." / ".$rw_pembeli; ?></td>
    <td width="205">7. Kecamatan : <?php echo $kecamatan_pembeli; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>8. Kabupaten / Kota </td>
    <td><center>:</center></td>
    <td><?php echo $kabupaten_pembeli; ?></td>
    <td colspan="2">9. Kode Pos : <?php echo $kd_pos_pembeli; ?></td>
  </tr>
</table>
<table width="840" style="border-bottom:solid black; border-left:solid black; border-right:solid black;">
  <tr>
    <td width="30"><center>
      <b>B.</b>
    </center></td>
    <td width="234">1. Nomer Objek Pajak (NOP) PBB </td>
    <td width="28"><center>:</center></td>
    <td colspan="2"><?php echo $nop; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>2. Letak Tanah atau Bangunan </td>
    <td><center>:</center></td>
    <td colspan="2"><?php echo $alamat; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>3. Kelurahan / Desa </td>
    <td><center>:</center></td>
    <td width="191"><?php echo $desa; ?></td>
    <td width="327">4. RT / RW : <?php echo $rt." / ".$rw; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>5. Kecamatan </td>
    <td><center>:</center></td>
    <td><?php echo $kecamatan; ?></td>
    <td>6. Kabupaten / Kota : <?php echo $kota; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>7. Jenis Perolehan Hak atas Tanah </td>
    <td><center>:</center></td>
    <td colspan="2"><?php echo $perolehan; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>8. Nomer Sertifikat </td>
    <td><center>:</center></td>
    <td colspan="2"><?php echo $no_sertifikat; ?></td>
  </tr>
</table>
<table width="840" style="border-bottom:solid black; border-left:solid black; border-right:solid black;">
  <tr>
    <td width="30" height="23"><center>
      <b>C.</b>
    </center></td>
    <td colspan="4">PERHITUNGAN BPHTB TERHUTANG    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2">1. Harga Transaksi / Nilai Pasar : </td>
    <td colspan="2" align="center"><input type="text" value="Rp<?php echo number_format($harga_transaksi, 0, ",", "."); ?>,-" readonly="yes">    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="15">&nbsp;</td>
    <td width="212">a. Luas Bumi </td>
    <td width="6"><div align="center">:</div></td>
    <td width="547"><?php echo number_format($l_tanah, 0, ",", "."); ?> M2</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>b. Luas Bangunan </td>
    <td><div align="center">:</div></td>
    <td><?php echo number_format($l_bangunan, 0, ",", "."); ?> M2</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="4">2. Dalam hal harga transaksi tidak diketahui/tidak jelas/lebih rendah dari NJOP, maka :</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="4"><table width="767" border="1">
      <tr>
        <td width="115"><div align="center"><em>URAIAN</em></div></td>
        <td colspan="2"><div align="center"><em>LUAS</em> <BR /> 
          <span class="style1">(Diisi Luas Tanah atau Bangunan yang Haknya di peroleh)</span></div></td>
        <td colspan="2"><div align="center"><em>NJOP PBB /m2 <br />
          <span class="style2">(Diisi berdasarkan SPPT PBB tahun terjadinya
perolehan hak / Tahun .....) </span></em></div></td>
        <td colspan="2"><div align="center"><em>Luas x NJOP PBB / m2 </em></div></td>
        </tr>
      
      <tr>
        <td>Tanah (Bumi) </td>
        <td width="30"><div align="center">a</div></td>
        <td width="192"><?php echo $l_tanah; ?> m2</td>
        <td width="26"><div align="center">c</div></td>
        <td width="177">Rp<?php echo number_format($njop_tanah, 0, ",", "."); ?>,-</td>
        <td width="27"><div align="center">e</div></td>
        <td width="154">Rp<?php echo number_format($l_tanah * $njop_tanah, 0, ",", "."); ?>,- </td>
      </tr>
      <tr>
        <td>Bangunan</td>
        <td><div align="center">b</div></td>
        <td><?php echo $l_bangunan; ?> m2</td>
        <td><div align="center">d</div></td>
        <td>Rp<?php echo number_format($njop_bangunan); ?>,-</td>
        <td><div align="center">f</div></td>
        <td>Rp<?php echo number_format($l_bangunan * $njop_bangunan, 0, ",", "."); ?>,- </td>
      </tr>
      <tr>
        <td colspan="5"><div align="right">NJOP PBB </div></td>
        <td><div align="center">g</div></td>
        <td>Rp<?php echo number_format(($l_bangunan * $njop_bangunan) + ($l_tanah * $njop_tanah), 0, ",", "."); ?>,- </td>
      </tr>
    </table>  </td>
  </tr>
</table>
<table width="840" style="border-left:solid black; border-right:solid black; border-bottom:solid black" border="1">
  <tr>
    <td width="23" rowspan="7" style="vertical-align:top"><div align="center"><strong>D.</strong></div></td>
    <td colspan="2">PENGHITUNGAN BPHTB ( Hanya diisi berdasarkan penghitungan Wajib Pajak )</td>
  </tr>
  <tr>
    <td>Nilai Perolehan Objek Pajak ( NPOP ) </td>
    <td width="192">Rp<?php echo number_format($npop, 0, ",", "."); ?>,- </td>
  </tr>
  <tr>
    <td>Nilai Perolehan Objek Pajak Tidak Kena Pajak ( NPOPTKP )</td>
    <td>Rp<?php echo number_format($npoptkp, 0, ",", "."); ?>,- </td>
  </tr>
  <tr>
    <td>Nilai Perolehan Objek Pajak Kena Pajak ( NPOPKP )</td>
    <td>Rp<?php echo number_format($npopkp, 0, ",", "."); ?>,- </td>
  </tr>
  <tr>
    <td>Bea Perolehan Hak atas Tanah dan Bangunan yang terutang</td>
    <td>Rp<?php echo number_format($bphtb_terutang, 0, ",", "."); ?>,- </td>
  </tr>
  <tr>
    <td>Pengenaan 50% karena waris / hibah wasiat / pemberian hak pengelolaan *)</td>
    <td>Rp, .- </td>
  </tr>
  <tr>
    <td>Bea Perolehan Hak atas Tanah dan Bangunan yang harus dibayar</td>
    <td>Rp<?php echo number_format($bphtb_harus_bayar, 0, ",", "."); ?>,- </td>
  </tr>
</table>
<table width="840" style="border-left:solid black; border-right:solid black; border-bottom:solid black">
  <tr>
    <td width="23" rowspan="6" valign="top" align="center"><strong>E.</strong></td>
    <td colspan="5">Jumlah Setoran Berdasarkan : </td>
  </tr>
  <tr>
    <td width="23">
      <label>
        <input type="checkbox" name="checkbox" value="checkbox" />
        </label>
    </td>
    <td width="15"><div align="center">a.</div></td>
    <td colspan="3">Penghitungan Wajib Pajak </td>
  </tr>
  <tr>
    <td>
      <label>
        <input type="checkbox" name="checkbox2" value="checkbox" />
        </label>
    </td>
    <td><div align="center">b.</div></td>
    <td width="297">STPD / SKPDKB / SKPDKB </td>
    <td width="190">Nomor : <input style="width: 120px;" type="text" name="no"/></td>
  <td width="264">Tanggal : <input style="width: 130px; text-align: center" type="date" name="tgl"/></td>
  </tr>
  <tr>
    <td>
      <label>
        <input type="checkbox" name="checkbox3" value="checkbox" />
        </label>
    </td>
    <td><div align="center">c.</div></td>
    <td>Pengurangan dihitung Sendiri karena : </td>
    <td colspan="2"><input style="width: 25px;" type="text" name="text"/> % Berdasarkan Peraturan KDH No <input style="width: 150px;" type="text" name="no_kdh"/></td>
  </tr>
  <tr>
    <td>
      <label>
        <input type="checkbox" name="checkbox4" value="checkbox" />
        </label>
    </td>
    <td><div align="center">d.</div></td>
    <td colspan="3">.......................................................</td>
  </tr>
</table>
<table width="840" style="border-left:solid black; border-right:solid black; border-bottom:solid black">
  <tr>
    <td width="212">Jumlah yang Disetor <span class="style2">(dengan angka)</span> </td>
    <td width="189">
      <label>
        <input type="text" name="textfield" id="jml_angka" onfocus="startCalc()" onblur="stopCalc()" readonly="yes" value="Rp<?php echo number_format($bphtb_harus_bayar, 0, ",", "."); ?>,- " width="150%" style="padding-left:1px" readonly="yes" />
        <input type="hidden" id="jml_angka_hidden"  readonly="yes" value="<?php echo $bphtb_harus_bayar; ?>" width="150%" style="padding-left:1px" readonly="yes" />
        </label>    </td>
    <td width="417" rowspan="2"><div align="center">Untuk Disetorkan ke Rekening KAS UMUM DAERAH </div></td>
  </tr>
  <tr>
    <td colspan="2">Dengan Huruf </td>
  </tr>
  <tr>
    <td colspan="2">
      <label>
        <input type="text" name="textfield2" id="jml_huruf" style="width:93%;" value="" onfocus="terbilang()" readonly="yes" />
        </label>    </td>
    <td rowspan="2">
      <label>
        <center><input type="text" name="textfield3" style="width:80%; height:30%;" value="" readonly="yes" /></center>
      </label>
    </td>
  </tr>
  <tr>
    <td colspan="2"><label>
        <input type="text" name="textfield2" style="width:93%;" value="" readonly="yes" />
        </label></td>
  </tr>
</table>
<table width="840" style="border-left:solid black; border-right:solid black; border-bottom:solid black" >
  <tr>
    <td width="158" align="center" style="border-right:solid black;">&nbsp; &nbsp; ............ Tgl, ............ <br />
      Wajib Pajak / Penyetor
      <div align="center"></div></td>
    <td width="163" style="border-right:solid #000000"><div align="center">Mengetahui <br />
      PPAT / NOTARIS</div>
        <div align="center"></div></td>
    <td width="304" style="border-right:solid black"><div align="center"><span class="style4">DITERIMA OLEH: TEMPAT PEMBAYARAN BPHTB <br />
      Tanggal ........................</span></div>
        <div align="center"></div></td>
    <td width="187" ><div align="center">Telah Verivikasi <br />
      BKD </div></td>
  </tr>
  <tr>
    <td height="56" style="border-right:solid black;">&nbsp;</td>
    <td style="border-right:solid black">&nbsp;</td>
    <td style="border-right:solid black">&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td height="33" style="border-right:solid black;"><div align="center">___________________ <br />
            <span class="style3">Nama Lengkap dan Tanda tangan</span></div></td>
    <td style="border-right:solid black"><div align="center">___________________ <br />
            <span class="style3">Nama Lengkap Stempel dan Tanda Tangan</span> </div></td>
    <td style="border-right:solid black"><div align="center">___________________ <br />
            <span class="style3">Nama Lengkap Stempel dan Tanda Tangan</span></div></td>
    <td ><div align="center">___________________ <br />
            <span class="style3">Nama Lengkap Stempel dan Tanda Tangan</span></div></td>
  </tr>
</table>
<!-- <table width="840" style="border-left:solid black; border-right:solid black; border-bottom:solid black">
  <tr>
    <td width="208" rowspan="2" style="border-right:solid black">Hanya diisi oleh Petugas DPP </td>
    <td width="614">Nomor Dokumen : </td>
  </tr>
  <tr>
    <td>NOP PBB Baru : </td>
  </tr>
</table> -->

</body>
<script type="text/javascript">
  function startCalc() {
      interval = setInterval('terbilang()',1)
  }

  function terbilang(bilangan) {
        bilangan    = document.getElementById('jml_angka_hidden').value;
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

        return document.getElementById('jml_huruf').value = kaLimat.trim() + "Rupiah";
    }

    function stopCalc() {
      clearInterval(interval);
    }

</script>