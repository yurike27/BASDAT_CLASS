<?php
// variabel lokal hanya bisa diakses dari scope dimana dia definisikan 
$nama = " ganteng bgt c";

function halodunia(){
    $nama ="pak saiful ";// variabel lokal
    echo $nama;
}

halodunia();//objek

echo $nama;
?>