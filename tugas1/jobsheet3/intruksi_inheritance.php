<?php
class Person {
    // Atribut protected agar bisa diakses oleh kelas turunan
    protected $nama;

    // Konstruktor untuk menginisialisasi atribut
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode getter untuk atribut nama
    public function getNama() {
        return $this->nama;
    }
}

class Student extends Person {
    // Atribut tambahan khusus untuk kelas Student
    private $studentID;

    // Konstruktor untuk menginisialisasi atribut dari kelas dan atribut tambahan
    public function __construct($nama, $studentID) {
        // Panggil konstruktor kelas Person
        parent::__construct($nama);
        $this->studentID = $studentID;
    }

    // Metode getter untuk atribut studentID
    public function getStudentID() {
        return $this->studentID;
    }
}
// Membuat objek Student
$student1 = new Student("Yusuf", "12345");

// Mengakses metode dari kelas Person melalui objek Student
echo $student1->getNama(); // Output: John Doe

// Mengakses metode dari kelas Student
echo $student1->getStudentID(); // Output: 12345
?>
