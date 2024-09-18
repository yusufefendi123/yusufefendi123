<?php
// Definisi Class
class Dosen{
    // Atribut atau Properties
    public $nama;
    public $nip;
    public $matakuliah;
    // Metode atau Function
    public function tampilkanDosen(){
        return "Nama Dossen: $this->nama, NIP: $this->nip, matakuliah: $this->matakuliah.";
    }
    // Constructor
    public function __construct($nama, $nip, $matakuliah){
        $this->nama = $nama;
        $this->nip = $nip;
        $this->matakuliah = $matakuliah;
    }
}
// Instansiasi Objek
$Dosen1 = new Dosen ("Yusuf Efendi", "230102096", "Web");
echo $Dosen1->tampilkanDosen();

?>