<?Php

$warnaterang = ['kuning','hijau','pink'];
$warnagelap =['hitam','abu-abu','coklat'];

//gabungkan 2 array tersebut menjadi 1
$warna_warna =array_merge($warnaterang,$warnagelap);

//Array_marge bisa ditambahkan lebih daru 2 
$semua_warna = array_merge(
    $warnaterang,
    $warnagelap,
    ['magenta','cyan','hijau kelabu']
);

//unpacking untuk mengekstrak array  menggunakan...
$list_buah_lokal =['mangga','rambutan'];
$list_buah =['kurma','anggur', $list_buah_lokal, 'kismis'];

// Explode array berfungsi memecah belah string lalu diubah kedalam array

//Explode ada 2 paramenter : delimeter(pemisah), string sasaran(yang akan kita pecah menjadi array)

$siswa = "yurike triyani hahaha";
//var_dump(explode(" ","$siswa"));

//impload fungsi kebalikannyan explode 
//implode dia 2 paramenter : glue (penggabungan), array sasaran (sasaran yang akan kita gabung menjadi string)

$siswa_pintar = ['yur', 'ike', 'tri'];// array
$siswa_jago = implode( ' yaya ' , $siswa_pintar);//string

 echo $siswa_jago;

?>
