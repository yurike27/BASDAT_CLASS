<?php
// function itu ada dua, ada yang mengembalikan nilai dan ada yang tidak
// array yang berisi 3 nilai 
$a = ['merah','kuning','hijau'];

//fungsi dari is_null mengembalikan nilai berniali true or false 
$fungsi_is_null = is_null($a);

// fungsi dari is_array  itu mengembalikan apakah array atau tidak
$fungsi_is_arraay = is_array($a);

// fungsi dari count 
$panjang = count($a);

//fungsi mengenkripsi karakter MD5 
$enskripsi = md5('sebenarnya aku masi kangen mas ex');

// fungsi var_dump untuk menampilkan hasil dari function return
var_dump($fungsi_is_null);
echo "<br/>";
var_dump($fungsi_is_arraay);
echo "<br/>";
var_dump($panjang);
echo "<br/>";
var_dump($enskripsi);

?>