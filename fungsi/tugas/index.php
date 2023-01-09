<?php

//paramenter
function tisu($barang,$lembar,$harga){
    echo "<h2> saat aku menggunakan {$barang}</h2>";
    echo "<h2>aku gunakan {$lembar} satu lembar</h2>";
    echo "<h2>{$lembar} harganya {$harga}</h2>";
}
// jika fungsi menggunakan paramenter
tisu("tisu","satu lembar",2000);

// function count
$a = ['saat','aku','menggunakan','tisu'];
$b = ['aku','gunakan','satu','lembar','satu','lembar'];
$c = ['saat','lembar','harganya','2000'];

$kalimat_1 = count($a);
$kalimat_2 = count($b);
$kalimat_3 = count($c);

var_dump($kalimat_1);
echo "<br/>";
var_dump($kalimat_2);
echo "<br/>";
var_dump($kalimat_3);

?>