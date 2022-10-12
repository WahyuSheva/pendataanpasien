<?php
include("koneksi.php");?>

<html>
    <head>
</head>
<body>
    <h1>Data Pasien</h1>
    <br>
    <h4> <a href=index.php>Ke Halaman Pertama</a</h4>
</br>
    <table border="1">
        <tr>
            <th>Id Pasien</th>
            <th>Nama Pasien</th>
            <th>Alamat</th>
            <th>Jenis kelamin</th>
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
$sql='SELECT * FROM tb_pasien';
$query = mysqli_query($db, $sql);

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
            echo "<a href='edit.php?id=".$datapasien['id']."'>Edit</a> |";
            echo "<a href='hapus.php?id=".$datapasien['id']."'>Hapus</a>";
            echo "</td>";
    echo "</tr>";

}
?>
</table>
</body>
</html>