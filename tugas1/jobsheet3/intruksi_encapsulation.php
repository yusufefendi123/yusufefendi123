<?php
class Student {
    // Atribut private
    private $nama;
    private $studentID;

    // Konstruktor untuk menginisialisasi atribut
    public function __construct($nama, $studentID) {
        $this->nama = $nama;
        $this->studentID = $studentID;
    }

    // Metode getter untuk atribut nama
    public function getNama() {
        return $this->nama;
    }

    // Metode setter untuk atribut nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Metode getter untuk atribut studentID
    public function getStudentID() {
        return $this->studentID;
    }

    // Metode setter untuk atribut studentID
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }
}

// Contoh penggunaan kelas Student
$student = new Student("Yusuf", "12345");
echo $student->getNama(); // Output: John Doe
echo $student->getStudentID(); // Output: 12345

$student->setNama("Yucup");
$student->setStudentID("67890");
echo $student->getNama(); // Output: Jane Doe
echo $student->getStudentID(); // Output: 67890
?>
