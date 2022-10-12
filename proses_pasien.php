<?php
include("koneksi.php");
if(isset($_POST['daftar'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $notelp = $_POST['notelp'];
    $agama = $_POST['agama'];
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $gejala = $_POST['gejala'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $no_kamar = $_POST['no_kamar'];

    $sql = "INSERT INTO tb_pasien (nama,alamat,jk,notelp,agama,tanggal_masuk,gejala,tempat_lahir,tanggal_lahir,no_kamar) VALUES ('$nama','$alamat','$jk','$notelp','$agama','$tanggal_masuk','$gejala','$tempat_lahir','$tanggal_lahir','$no_kamar')";
    $query = mysqli_query($db, $sql);

    if($query){
        header('location:index.php?status=sukses');
    }else{
        header('location:pasien.php?status=gagal');
    }
}
    ?>