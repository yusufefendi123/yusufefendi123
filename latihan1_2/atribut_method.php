<?php
// definisi kelas
class Mobil {
    // stribut  atau properties
    public $merk;
    public $warna;
    // constructor
    public function __construct($merk, $warna){
        $this->merk = $merk;
        $this->warna = $warna;
    }

    // methode atau function
    public function deskripsi(){
        return "mobil ini adalah $this->merk berwarna $this->warna.";
    }
}
    // instansiasi objek
    $mobil1 = new Mobil("toyota","hitam");
    echo $mobil->deskripsi();
?>