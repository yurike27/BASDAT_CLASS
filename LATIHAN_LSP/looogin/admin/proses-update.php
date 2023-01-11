<?php
// include koneksi
include '../koneksi.php';

// menangkap data yang ada di form
$id_buku = $_POST['id_buku'];
$id = $_POST['id_katalog'];
$judul = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$thn = $_POST['thn_terbit'];
$penerbit = $_POST['penerbit'];

// menginput database
$input = mysqli_query($koneksi,"update buku set id_katalog='$id',judul_buku='$judul', pengarang='$pengarang',thn_terbit='$thn',penerbit='$penerbit' where id_buku='$id_buku'");


if($input){
    ?>
    <script>
        alert('Data berhasil Di rubah!!');
        window.location = "index.php";
    </script>
    <?php
}else{
    ?>
    <script>
        alert('Data Gagal Di rubah');
        window.location = "index.php"
    </script>
    <?php
}

?>