<?php
// pewarisan atau inheritance

// class induk
class komputer{
    //property
    public $merk;
    public $prosesor;
    public $memory;

    //fungsi/ operasi membuaut beli komputer
    public function beli_komputer(){
        return "Beli Komputer Baru";
    }
}

//kelas turunan / extands dari class komputer ke class laptop
class laptop extends komputer{
    public function lihat_sppek(){
        // ambil property dari class komputer
        return "merk: $this->merk, pprosesor:
        $this->prosesor,memory: $this->memory";
    }
}

// intansiasi
//membuat objek baru dari class laptop ( kelas turunan )
$laptop_baru = new laptop();

// isi propertynya
$laptop_baru->merk="Asus";
$laptop_baru->prosesor="amd ryzen 9x";
$laptop_baru->memory="1 petabyte";


// panggil function
echo $laptop_baru->beli_komputer();
echo "<br/>";
echo $laptop_baru->lihat_sppek();

?>