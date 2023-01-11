<html>
    <head>
        <title>Tambah Data Anggota</title>
        <!-- <link rel="stylesheet" href="style.css"> -->
    </head>
    <body>
        <div>
            
            <h1>Menambahkan Data Anggota</h1>
            <form action="proses_tambah_anggota.php" method="post" >
                <label>Nama</label>
                <input type="text" name="nama">
                <br>
                <label>No_telp</label>
                <input type="number" name="telp">
                <br>
                <label>Alamat</label>
                <input type="text" name="alamat">
                <br>
                <label>Email</label>
                <input type="date" name="email">
                <br>
                <label>password</label>
                <input type="text" name="pass">
                <br>
            <input type="submit" value="submit">
            <br>
            <input type="reset" value="cancel">
            
        </div>