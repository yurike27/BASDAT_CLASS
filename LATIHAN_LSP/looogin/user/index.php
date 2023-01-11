<html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <div class="card mt-5 container" style="width: 53rem;">
        <div class="card-body row">
            <div class="text-center">

                <h1>Selamat Datang</h1>
                <h3>Halaman User</h3>

                <!-- cek halaman apakah sudah login atau belum -->
                <?php
    session_start();
    if($_SESSION['status']!='login'){
        header('location:login.php?pesan=belum_login');
    }
    ?>
                <!-- end -->
                <h4>Welcome
                    <?php 
include '../koneksi.php';
$email = $_SESSION['email'];
$anggota = mysqli_query($koneksi, "select*from anggota where email='$email'");
foreach($anggota as $nama){
    echo $nama['nama'];
    echo $nama['id_anggota'];
}
?> Anda Telah Login </h4>
                <a href="update-anggota.php?id_anggota=<?php echo $nama['id_anggota']?>"
                    class="btn btn-primary ">Customize</a>

                <h1>Data Buku</h1>
            </div>
            <table class="table table-bordered table-hover text-center">
                <tr class="table-danger ">
                    <th>ID Buku</th>
                    <th>Katalog</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Tahun terbit</th>
                    <th>Penerbit</th>
                    <th>Aksi</th>
                </tr>

                <!-- Menampilkan Data Buku -->
                <?php 
        include '../koneksi.php';
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

                <td> <a href="keranjang.php?id_buku=<?php echo $row['id_buku']; ?>" class="btn btn-light">Add to
                        Cart</a></td>
                <?php
                echo "</tr>";
                }

                ?>
                </tr>
            </table>
            <a class="btn btn-primary " href="../logout.php">
                LOGOUT
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>