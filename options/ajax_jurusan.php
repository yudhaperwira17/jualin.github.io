<?php 
include("koneksi.php");
$fakultas = $_POST['fakultas_id'];
$tampil=mysqli_query($koneksi,"SELECT * FROM tbl_jurusan WHERE jurusan_fakultas='$fakultas'");
$jml=mysqli_num_rows($tampil);
 
if($jml > 0){    
    while($r=mysqli_fetch_array($tampil)){
        ?>
        <option value="<?php echo $r['jurusan_id'] ?>"><?php echo $r['jurusan_nama'] ?></option>
        <?php        
    }
}else{
    echo "<option selected>- Data Wilayah Tidak Ada, Pilih Yang Lain -</option>";
}
 
?>