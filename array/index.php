<?php


// array adalah tipe data yang berisi beberaapa tipe data (string maupun integer)
//keynya diawali dengan angka 0 dst

//Array asosiatif
//Keynya berubah menjadi tipe data string

$siswa = [
    //keynya bisa int/string
    1 => 'arjuna',
    'sipalingcantik'=> 'nita',
    'sipalingnetral' => 'awa redy'
];

//echo "siapa paling ganteng? {$siswa ['1']}";

// array miultidimension
//ada array didalam array

$togel =[
    [1,2,3,4,5],
    [6,7,8,9,22],
    [12,15,13,14,51],
    [19,21,31,47,35]
];

//cara manggil array
//echo $togel[2][4]; 

// Array push
//Array push berguna untuk menerima 2 parameter, parameter pertama : untuk target,
//parameter kedua: untuk nilai yang akan dimasukan

$sayur = ['bayem','kangkung','sawi'];
$buah = ['pisang','kelapa','coklat'];

// cara pertama untuk menambahkan item
array_push($buah,'timun');

// cara yg kedua 
$sayur[] = 'labu';

echo $buah[3];
echo $sayur[3];
?>