<html>
    <head>
    <tittle>Form Pendaftaran Pasien Baru</tittle>
</head>
<body>
    <header>
    <h3>Form Pendaftaran Pasien Baru</h3>
</header>
    <form action="proses_pasien.php" method="POST">
        <form>
            <fieldset>
    
    <p>
    <label for ="nama">Nama Lengkap:</label>
    <input type ="text" name="nama" />
</p>

<p>
    <label for ="alamat">Alamat :</label>
    <textarea name="alamat" row="5"></textarea>
</p>

<p>
    <label for="jk">Jenis Kelamin :</label>
    <label><input type="radio" name= "jk" value="Laki-Laki" />Laki-Laki</label>
    <label><input type="radio" name= "jk" value="Perempuan" />Perempuan</label>
</p>

<p>
    <label for ="notelp">No Telepon:</label>
    <input type ="number" name="notelp" />
</p>

<p>
    <label for ="agama">Agama :</label>
    <select name="agama">
        <option value="islam">Islam</option>
        <option value="katholik">Katholik</option>
        <option value="kristen">Kristen</option>
        <option value="hindu">Hindu</option>
        <option value="buddha">Buddha</option>
        <option value="konghucu">konghucu</option>
</select>
</p>

<p>
    <label for ="tanggal_masuk">Tanggal Masuk:</label>
    <input type ="date" name="tanggal masuk" />
</p>

<p>
    <label for ="gejala">Gejala:</label>
    <input type ="text" name="gejala" />
</p>

<p>
    <label for ="tempat_lahir">Tempat Lahir:</label>
    <input type ="text" name="tempat_lahir" />
</p>

<p>
    <label for ="tanggal_lahir">Tanggal Lahir:</label>
    <input type ="date" name="tanggal_lahir" />
</p>

<p>
    <label for ="no_kamar">No Kamar:</label>
    <input type ="number" name="no_kamar" />
</p>


<p>
    <input type="submit" value="Daftar" name="daftar" />
</p>
</fieldset>
</form>
</body>
</html>