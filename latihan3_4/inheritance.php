<?php
// Definisi Kelas
class Produk{
    // Atribut atau properties
    protected $nama;

    public function __consturct($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }
}
    // inheritance atau pewarisan
    class Buku extends Produk {
        private $penulis;
        
        // Constructor
        public function __construct($nama, $penulis){
            parent::__consturct($nama);
            $this->penulis = $penulis;
        }

        // Metode atau Function
        public function getPenulis(){
            return $this->penulis;
        }
    }
    // Instansiasi Objek
    $buku1 = new Buku("Pemrograman PHP", "Andi prasetyo");
    echo $buku1->getNama(); //Output: Pemrograman PHP
?>