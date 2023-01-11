<html>

<head>
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    <center>
        <h1>Halaman Admin</h1>
    </center>
    <?php 
session_start();
if($_SESSION['status']!='login'){
    header('location:login_admin.php?pesan=belum_login');
}
 include 'koneksi.php';
 //data semua dari table buku
        $buku = mysqli_query($koneksi, "select*from buku");

// jumlah data yang ada di buku
$jumlah_buku= mysqli_num_rows($buku);

?>
    <!-- end -->

    <center>
        <h4>Welcome <?php echo $_SESSION['admin']?> anda telah login</h4>
    </center>
    <center>
        <h1>Selamat datang dibuku store</h1>
    </center>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <marquee direction="right">
                            <h2>Buku Yang Ada</h2>
                        </marquee>
                    </div>
                    <div class="card-body">

                        <h1>Data Buku</h1>
                        <h3>Total Buku Tersedia : <?php echo $jumlah_buku; ?></h3>
                        <a href="add.php" class="btn btn-md btn-primary" style="margin-bottom: 10px">Tambah Data
                            Buku</a>
                        <a href="add_anggota.php" class="btn btn-md btn-info" style="margin-bottom: 10px">Tambah
                            Anggota</a>
                        <table border="1" cellpadding="8" cellspacing="0">
                            <tr>
                                <th>ID Buku</th>
                                <th>Katalog</th>
                                <th>Judul Buku</th>
                                <th>Pengarang</th>
                                <th>Tahun terbit</th>
                                <th>Penerbit</th>
                                <th>Aksi</th>
                            </tr>
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
                            <td>
                                <a href="update.php?id_buku=<?php echo $row['id_buku']; ?>"
                                    class="btn btn-danger">Edit</a>
                                <a href="proses-hapus.php?id_buku=<?php echo $row['id_buku']; ?>"
                                    class="btn btn-success">Hapus</a>
                            </td>

                            <?php
            echo "</tr>";
        }
        
        ?>
                            </tr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </table>
    <a href="../logout.php" class="btn btn-secondary">LOGOUT</a>
</body>

</html>