<?php

$nama = @$_POST['nama'];
$jurusan = @$_POST['jurusan'];
$nama_ayah = @$_POST['nama_ayah'];
$nama_ibu = @$_POST['nama_ibu'];
$alamat = @$_POST['alamat'];

echo "Nama = $nama - $jurusan<br>";
echo "Nama_ayah = {$nama_ayah}<br>";
echo "Nama_ibu = {$nama_ibu}<br>";
echo "Alamat = {$alamat}<br>";

$files = $_FILES;
$folder_upload = "./assets/foto";

if (!is_dir($folder_upload)){
    mkdir($folder_upload, 0777, $rekursif = true);
}

$fileFoto = (object) @$_FILES['foto'];


$uploadFotoSukses = move_uploaded_file(
    $fileFoto->tmp_name, "{$folder_upload}/{$fileFoto->name}"
);

if($uploadFotoSukses){
    $link = "{$folder_upload}/{$fileFoto->name}";
    echo "Foto Sukses Diupload: <a href = '{$link}'> {$fileFoto->name}</a>";
    echo "<br>";
}

if($fileFoto->size > 1000 * 2000){
    die("File tidak boleh lebih dari 2MB");
}

?>