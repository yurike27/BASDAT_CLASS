<html>
    <head>
        <title>User Page</title>
    </head>
<body>
    <h1>Selamat Datang</h1>
    <h3>Halaman Anggota</h3>

    <!-- cek halaman apakah sudah login atau belum -->
    <?php
    session_start();
    if($_SESSION['status']!='login'){
        header('location:../login.php?pesan=belum_login');
    }
    ?>
<!-- end -->
<h4>Welcome <?php echo $_SESSION['email']?>Anda Telah Login </h4>
<h1>Selamat Datang Di Buku Store</h1>
<h1>Data Buku</h1>
<table border= "1">
    <tr>
                <th>ID Buku</th>
                <th>Katalog</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Tahun terbit</th>
                <th>Penerbit</th>
             </tr>

             <!-- Menampilkan Data Buku -->
        <?php 
        include 'koneksi.php';
        $buku = mysqli_query($koneksi, "select*from buku");
        foreach($buku as $row){
            echo "<tr>";
            echo "<td>".$id = $row['id_buku'] ."</td>";
            echo "<td>".$katalog = $row['id_katalog']."</td>";
            echo "<td>".$judul = $row['judul_buku']."</td>";
            echo "<td>".$pengarang = $row['pengarang']."</td>";
            echo "<td>".$thn_terbit = $row['thn_terbit']."</td>";
            echo "<td>".$penerbit = $row['penerbit']."</td>";
            ?>

            <?php 
            echo "</tr>";
        }

        ?>
        </tr>
</table>
    <a href="../logout.php">LOGOUT</a>
</body>
</html>