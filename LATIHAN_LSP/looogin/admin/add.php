<html>

<head>
    <title>Tambah Data</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="box-tambah">
        <h1>Tambah Data</h1>
        <form action="proses_tambah.php" method="post">
            <div class="lapisInput">
                <label>Masukkan Katalog</label>
                <input type="number" name="id_katalog">
                <br>
                <label>Masukkan Judul Buku</label>
                <input type="text" name="judul_buku">
                <br>
                <label>Masukkan Pengarang</label>
                <input type="text" name="pengarang">
                <br>
                <label>Masukkan Tahun Terbit</label>
                <input type="date" name="thn_terbit">
                <br>
                <label>Masukkan Penerbit</label>
                <input type="text" name="penerbit">
                <br>
            </div>

            <div class="tombol-login">
                <input type="submit" value="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="reset" value="reset">
            </div>
    </div>
    </form>
</body>

</html>