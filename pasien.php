<?php 
include 'koneksi.php';
?>
 
 <h1>Data Pasien</h1>
 <h4> <a href=index.php>Ke Halaman Utama</a></h4>
<form action="pasien.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>

<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
	<?php
include("koneksi.php");?>

<html>
    <head>
</head>
<body>
    
    <table border="1">
        <tr>
            <th>Id Pasien</th>
            <th>Nama Pasien</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>No. Telp</th>
            <th>Agama</th>
            <th>Tanggal Masuk</th>
            <th>Gejala</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>No Kamar</th>
</tr>

<?php
include("koneksi.php");

if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $sql="SELECT * FROM tb_pasien WHERE nama LIKE '%".$cari."%'";
    $query = mysqli_query($db, $sql); 
    			
}else{
    $sql='SELECT * FROM tb_pasien';
    $query = mysqli_query($db, $sql);  	
}



while($datapasien=mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>".$datapasien['id']."</td>";
    echo "<td>".$datapasien['nama']."</td>";
    echo "<td>".$datapasien['alamat']."</td>";
    echo "<td>".$datapasien['jk']."</td>";
    echo "<td>".$datapasien['notelp']."</td>";
    echo "<td>".$datapasien['agama']."</td>";
    echo "<td>".$datapasien['tanggal_masuk']."</td>";
    echo "<td>".$datapasien['gejala']."</td>";
    echo "<td>".$datapasien['tempat_lahir']."</td>";
    echo "<td>".$datapasien['tanggal_lahir']."</td>";
    echo "<td>".$datapasien['no_kamar']."</td>";
    echo "<td>";
    echo "<a href='edit-data.php?id=".$datapasien['id']."'>Edit</a> |";
    echo "<a href='hapus-data.php?id=".$datapasien['id']."'>Hapus</a> |";
    echo "</td>";
    echo "</tr>";
 }
 ?>
 </table>
</body>
</html>

