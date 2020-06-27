<script src="<?php echo base_url(); ?>assets/ajax.js"></script>
<form autocomplete="off">
    <h1>Contoh Autocomplete</h1>
    <div>
        <label>NIM</label><br>
        <input list="data_mahasiswa" type="text" name="nim" id="nim" placeholder="nim / nama" onchange="return autofill();">
    </div>
    <div>
        <label>NAMA</label><br>
        <input type="text" name="nama" id="nama">
    </div>
    <div>
        <label>ALAMAT</label><br>
        <textarea name="alamat" id="alamat">
 
        </textarea>
    </div>
    <div>
        <label>No Telp</label><br>
        <input type="text" name="telp" id="telp">        
    </div>
</form>
 
<datalist id="data_mahasiswa">
    <?php
    foreach ($record->result() as $b)
    {
        echo "<option value='$b->nim'>$b->nama</option>";
    }
    ?>
     
</datalist>   
<script>
    function autofill(){
        var nim =document.getElementById('nim').value;
        $.ajax({
                       url:"<?php echo base_url();?>Autocomplete/cari",
                       data:'&nim='+nim,
                       success:function(data){
                           var hasil = JSON.parse(data);  
                     
            $.each(hasil, function(key,val){ 
                 
               document.getElementById('nim').value=val.nim;
                           document.getElementById('nama').value=val.nama;
                           document.getElementById('alamat').value=val.alamat;
                           document.getElementById('telp').value=val.telp;  
                                
                     
                });
            }
                   });
                   
    }
</script>