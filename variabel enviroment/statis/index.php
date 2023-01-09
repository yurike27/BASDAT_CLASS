<?php

// statis adalah mempertahankan nilai aslinya

function test(){
   static $angka=0; //mendefinisikan varaibel lokal
    //varabel lokal jika sudah melewati scopenya akan kembali ke nilai awal 
    // static mempertahankan nilai di luar scope
    echo "A : {$angka} <br>";
    $angka++; //menambhakna fungsi increment
}

test();
test();
test();

?>