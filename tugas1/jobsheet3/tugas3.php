<?php
// Kelas induk Person
abstract class Person {

    protected $nama;
    // Metode abstrak untuk role
    abstract public function getRole();

    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode getter untuk nama
    public function getNama() {
        return $this->nama;
    }
}

// Kelas Dosen yang mewarisi Person
class Dosen extends Person {
    private $nidn;

    public function __construct($nama, $nidn) {
        parent::__construct($nama);
        $this->nidn = $nidn;
    }

    // Getter untuk nidn
    public function getNidn() {
        return $this->nidn;
    }

    // Setter untuk nidn
    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }

    // Override metode getRole
    public function getRole() {
        return "Dosen";
    }
}

// Kelas Mahasiswa yang mewarisi Person
class Mahasiswa extends Person {
    private $nim;

    public function __construct($nama, $nim) {
        parent::__construct($nama);
        $this->nim = $nim;
    }

    // Getter untuk nim
    public function getNim() {
        return $this->nim;
    }

    // Setter untuk nim
    public function setNim($nim) {
        $this->nim = $nim;
    }

    // Override metode getRole
    public function getRole() {
        return "Mahasiswa";
    }
}

// Kelas abstrak Jurnal
abstract class Jurnal {
    // Metode abstrak yang harus diimplementasikan oleh subclass
    abstract public function manageSubmission();
}

// Kelas JurnalDosen yang mengimplementasikan Jurnal
class JurnalDosen extends Jurnal {
    public function manageSubmission() {
        return "Jurnal Dosen: Pengajuan jurnal oleh dosen diterima.";
    }
}

// Kelas JurnalMahasiswa yang mengimplementasikan Jurnal
class JurnalMahasiswa extends Jurnal {
    public function manageSubmission() {
        return "Jurnal Mahasiswa: Pengajuan jurnal oleh mahasiswa diterima.";
    }
}

// Demonstrasi
$dosen = new Dosen("Dr. Budi", "238897279");
$mahasiswa = new Mahasiswa("Yusuf Efedi", "230102096");

echo $dosen->getNama() . " adalah " . $dosen->getRole() . "<br>"; // Output: Dr. Budi adalah Dosen
echo "NIDN: " . $dosen->getNidn() . "<br>"; // Output: NIDN: 123456

echo $mahasiswa->getNama() . " adalah " . $mahasiswa->getRole() . "<br>"; // Output: Yusuf adalah Mahasiswa
echo "NIM: " . $mahasiswa->getNim() . "<hr>"; // Output: NIM: 654321

// Penggunaan Jurnal
$jurnalDosen = new JurnalDosen();
$jurnalMahasiswa = new JurnalMahasiswa();

echo $jurnalDosen->manageSubmission() . "<br>"; // Output: Jurnal Dosen: Pengajuan jurnal oleh dosen diterima.
echo $jurnalMahasiswa->manageSubmission();     // Output: Jurnal Mahasiswa: Pengajuan jurnal oleh mahasiswa diterima.
?>
