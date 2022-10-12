<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("Location:pasien.php?");
}
$kode=$_GET['id'];
$sql="SELECT * FROM tb_pasien where id=$kode";
$query = mysqli_query($db,$sql);
$datapasien = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("Data tidak ditemukan");
}

?>
<html>
    <head>
</head>
<body>
    <h1> Form Edit Pasien </h1>
    <form action ="proses-edit-pasien.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $datapasien['id']?>" />
            <p>
                <label name="nama">Nama : </label>
                <input type="text" value= "<?php echo $datapasien['nama']?>"></p>

                <p>
                <label name="alamat">Alamat: </label>
                <input type="textarea" value="<?php echo $datapasien['alamat']?>" /></p>

                <p>
                <label name="jk">Jenis Kelamin : </label>
                <label><input type="radio" name= "jk" value="Laki-Laki" />Laki-Laki</label>
                <label><input type="radio" name= "jk" value="Perempuan" />Perempuan</label>
                <?php echo $datapasien['jk']?></p>

                <p>
                <input type="submit" value="simpan" name="simpan" />
</p>
</fieldset>
</form>
</body>
</html>