<?php

// cara untuk mengakses class dan object
class mobil{
    //property
    var $merk;
    var $roda;
    var $kecepatan;

    // membuat fungsi / operasi berjalan ( maju dan mundur )
    function jalan_maju(){
        return "Vroooom majuu";
    }

    function jalan_mundur(){
        return "vrooom cittt mundur";
    }
    
}

// intansiasi ( menginstankan variabel yang menghubungkan dari class keluar class)
$mobil_keren = new mobil();

// set property ( mengisi property dengan mengakses diluar class )
$mobil_keren->merk="Ferari";
$mobil_keren->roda="Hitam";
$mobil_keren->kecepatan="30KmH";

//tampilkan propertynya
echo $mobil_keren->merk;
echo "<br />";
echo $mobil_keren->roda;
echo "<br />";
echo $mobil_keren->kecepatan;
echo "<br />";

// tampilkan function
echo $mobil_keren->jalan_maju();
echo "<br />";
echo $mobil_keren->jalan_mundur();





?>