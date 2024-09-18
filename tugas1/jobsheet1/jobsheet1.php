<?php
    //Definisi Class
    class Mahasiswa{
        // Atribut atau Properties
        public $nama;
        public $nim;
        public $jurusan;
        // Metode atau Function
        public function tampilkanData(){
            return "Nama: $this->nama.<br> NIM: $this->nim.<br> Jurusan: $this->jurusan.<br>";
        }
        // Constructor
        public function __construct($nama, $nim, $jurusan){
            $this->nama = $nama;
            $this->nim = $nim;
            $this->jurusan = $jurusan;
        }
        // Metode atau Function
        public function updateJurusan($jurusan){
            $this->jurusan = $jurusan;
        }

        public function setNim($nim){
            $this->nim = $nim;
        }
    }

    $mahasiswa1 = new Mahasiswa("Yusuf Efendi", "230102096", "Teknik Informatika");
    echo $mahasiswa1->tampilkanData();

    $mahasiswa1->updateJurusan("Teknik Mesin");
    echo "<br>";
    echo $mahasiswa1->tampilkanData();

    $mahasiswa1->setNim("230302056");
    echo "<br>";
    echo $mahasiswa1->tampilkanData();

?>