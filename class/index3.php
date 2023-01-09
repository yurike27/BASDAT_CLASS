<?php

class smkjp1{
    //properti
    var $guru;
    var $murid;

    //function berdiri
    function berdiri(){
        return "berdiri dengan tegap";
    }

    function berlari(){
        return "berlari 1000 langkah";
    }
}

// instansiasi 
$sekolah = new smkjp1();

// isi properti
$sekolah->guru= "pak saipul";
$sekolah->murid= "yurike";

//tampilkan dari objek sekolah
echo $sekolah->guru," ",$sekolah->berdiri();
echo "<br />";
echo $sekolah->murid," ",$sekolah->berlari();
echo "<br />";

// tampilkan dari objek $smkjpone


?>