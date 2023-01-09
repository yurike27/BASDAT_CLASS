<?php

class vhsjp1{
    //properti
    var $kepsek;
    var $guru;
    var $murid;

    //function berdiri
    function ygpunyaJp(){
        return "Pak Lilik";
    }

    function ygngajarJp(){
        return "Pak Saiful";
    }

    function ygbelajardijp(){
        return "Yurike";
    }
}

// instansiasi 
$sekolah = new vhsjp1();

// isi properti
$sekolah->kepsek= "Kepsek kita adalah";
$sekolah->guru= "Guru Kita adalah";
$sekolah->murid= "Murid Kita adalah";

//tampilkan dari objek sekolah
echo $sekolah->kepsek," ",$sekolah->ygpunyaJp();
echo "<br />";
echo $sekolah->guru," ",$sekolah->ygngajarJp();
echo "<br />";
echo $sekolah->murid," ",$sekolah->ygbelajardijp();
echo "<br />";
// tampilkan dari objek $smkjpone


?>