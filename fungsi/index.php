<?php

// cara membuat function
function ngoding(){

}

// function bisa di kategorikan menggunnakan public, protected, private
class vscode{
    public function coding_php(){

    }
}

// mencoba buat fungsi sapa temen 
function sapa_temen(){
    echo "<h1> Hai gais</h1>";
    echo"<h3>ketemu lagi kita</h3>";
    
}

// mencoba membuat fungsi yang ada paramenter
function temen($temen_gue,$umur){
    
    echo "<h2>hei disini gue lagi sama {$temen_gue}</h2>";
    echo "<h2>sekarang umurnya segini {$umur}</h2>";
}

// panggil function
// tuliskan nama fungsinya bersama ()
sapa_temen();

// jika fungsi menggunakan parameter, harus ditulis saat panggilannya
temen("yurike",17);

// mencoba membuat fungsi menggunakan percabankan
function kasir($nama,$jumlah){
    echo "<h3>hai {$nama}, Terimaksih telah berkunjung !</h3>";
    echo "<h3>dan jangan lupa datang kembali </h3>";

// membuat perulangan menggunakan if (jika jumlah lebih maka akan dapat bonus)
if($jumlah > 10){
    echo "<h3>Gokil, kamu dpat mobil karena telah berkunjung  sebanyak ($jumlah) kali </h3>";
    }
}
//panggil fungsi isi  paramenternya 
kasir("akbar",9);
?>