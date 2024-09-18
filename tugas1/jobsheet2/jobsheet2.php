<?php
    // Definisi kelas
    // penerapan Objek dan kelas
    class Mahasiswa {

        // public $nama;
        // public $nim;
        // public $jurusan;

        // Atribut atau properties
        // Penerapan Encapsulation
        private $nama;
        private $nim;
        private $jurusan;
        // metode atau function
        public function tampilkanData(){
            return "Nama: $this->nama,<br> NIM: $this->nim,<br> jurusan: $this->jurusan.<br>";
        }
        // constructor
        public function __construct($nama, $nim, $jurusan){
            $this->nama = $nama;
            $this->nim = $nim;
            $this->jurusan = $jurusan;
        }
        // metode atau function
        public function getNama(){
            return $this->nama;
        }

        public function getNim(){
            return $this->nim;
        }

        public function getJurusan(){
            return $this->jurusan;
        }

        public function setNama($nama){
            $this->nama = $nama;
        }

        public function setNim($nim){
            $this->nim = $nim;
        }

        public function setJurusan($jurusan){
            $this->jurusan = $jurusan;
        }
    }
    // Definisi kelas
    class Pengguna {
        // Atribut atau properties
        protected $nama;
        // constructor
        public function __construct($nama){
            $this->nama = $nama;
        }

        public function getNama(){
            return $this->nama;
        }
    }
    // inheritance atau pewarisan
    class Dosen extends Pengguna {
        private $matakuliah;
        // constructor
        public function __construct($nama, $matakuliah){
            parent::__construct($nama);
            $this->matakuliah = $matakuliah;
        }

        public function getMatakuliah(){
            return $this->matakuliah;
        }
    }
    // Definisi kelas
    class Pengguna2 {
        protected $nama;
        // constructor
        public function __construct($nama){
            $this->nama = $nama;
        }
        // metode atau function aksesfitur
        public function aksesFitur(){
            return $this->nama;
        }
    }
    // inheritance atau pewarisan
    class Mahasiswa2 extends Pengguna2 {
        public function aksesFitur(){
            return "Hai " . $this->nama;
        }
    }
    // inheritance atau pewarisan
    class Dosen2 extends Pengguna2 {
        public function aksesFitur(){
            return "Hallo " . $this->nama;
        }
    }
    // Definisi kelas
    class Poly {
        public function print(Pengguna2 $pengguna){
            echo $pengguna->aksesFitur() . "<br>";
        }
    }

    abstract class Pengguna3 {

        abstract public function aksesFitur();
    }
    // inheritance atau pewarisan
    class Mahasiswa3 extends Pengguna {
        protected $nama;
        // constructor
        public function __construct($nama) {
            $this->nama = $nama;
        }

        public function aksesFitur() {
            return $this->nama . " Hai Yusuf";
        }
    }
    // inheritance atau pewarisan
    class Dosen3 extends Pengguna {
        protected $nama;
        // constructor
        public function __construct($nama) {
            $this->nama = $nama;
        }

        public function aksesFitur() {
            return $this->nama . " Hallo Yusuf";
        }
    }
    // Instansiaisi Objek
    $mahasiswa1 = new Mahasiswa("Yusuf Efendi", "230102096", "Teknik Informatika");
    echo "<h3>1.  Membuat Class dan Object </h3>";
    echo $mahasiswa1->tampilkanData();// Output: Nama: Yusuf Efendi, NIM: 230102096, jurusan: Teknik Informatika.
    echo "<h3>2. Encapsulation (pembungkusan) </h3>";
    echo $mahasiswa1->getNama();// Output: Yusuf Efendi
    echo "<br>";
    echo $mahasiswa1->getNim();// Output: 230102096
    echo "<br>";
    echo $mahasiswa1->getJurusan();// Output: Teknik Informatika
    echo "<hr>";

    echo "<h3>3. Inheritance (Pewarisan)  </h3>";
    $dosen1 = new Dosen("Yusuf Efendi", "Praktek WEB");
    echo $dosen1->getNama();// Output: Yusuf Efendi
    echo "<br>";
    echo $dosen1->getMatakuliah();// Output: Praktek WEB
    echo "<hr>";
    echo "<h3>4. Polymorphism (Polimorfisme)   </h3>";
    
    $mahasiswa2 = new Mahasiswa2("Mahasisa yusuf");
    $dosen2 = new Dosen2("Dosen yusuf");

    $printer = new Poly();
    $printer->print($mahasiswa2);// Output: Hai Mahasiswa yusuf
    $printer->print($dosen2);// Output: Hallo Dosen Yusuf
    echo "<hr>";
    echo "<h3>5. Abstraktion</h3>";
    $mahasiswa3 = new Mahasiswa3("Maaf");
    echo $mahasiswa3->aksesFitur(); // Output: Maaf hai yusuf
    echo "<br>";
    $dosen3 = new Dosen3("Selamat");
    echo $dosen3->aksesFitur(); // Output: selamat hallo yusuf
?>
