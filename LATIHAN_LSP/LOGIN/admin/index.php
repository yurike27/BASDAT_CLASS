<html>
    <head>
        <title>Admin Page</title>
    </head>
<body>
    <h1>Halaman Admin</h1>
<?php 
session_start();
if($_SESSION['status']!='login'){
    header('location:../login.php?pesan=belum_login');
}
?>
<!-- end -->

<h4>Welcome <?php echo $_SESSION['admin']?> anda telah login</h4>
<h1>Selamat datang dibuku store</h1>


<h1>Data Buku</h1>
<a href="add.php">Tambah Data Buku</a>
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
                <a href="proses-hapus.php?id_buku=<?php echo $row['id_buku']; ?>">Hapus</a>
            </td>
            
            <?php
            echo "</tr>";
        }
        
        ?>
        </tr>
</table>
    <a href="../logout.php">LOGOUT</a>
</body>
</html>