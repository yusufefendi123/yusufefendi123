<?php

// Kelas Person dasar
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    // Metode getName default di kelas Person
    public function getName() {
        return $this->name;
    }
}

// Kelas Student yang mewarisi dari Person
class Student extends Person {
    protected $studentID;

    public function __construct($name, $studentID) {
        parent::__construct($name); // Memanggil konstruktor dari kelas Person
        $this->studentID = $studentID;
    }

    // Override metode getName untuk menampilkan format berbeda
    public function getName() {
        return "Student: " . $this->name . " (ID: " . $this->studentID . ")";
    }
}

// Kelas Teacher yang mewarisi dari Person
class Teacher extends Person {
    protected $teacherID;

    public function __construct($name, $teacherID) {
        parent::__construct($name); // Memanggil konstruktor dari kelas Person
        $this->teacherID = $teacherID;
    }

    // Override metode getName untuk menampilkan format berbeda
    public function getName() {
        return "Teacher: " . $this->name . " (ID: " . $this->teacherID . ")";
    }
}

// Demonstrasi Polymorphism
$student = new Student("John ", "S12345");
$teacher = new Teacher("Dr. Smith", "T98765");

// Memanggil metode getName() yang sudah di-override
echo $student->getName(); // Output: Student: John Doe (ID: S12345)
echo "<br>";
echo $teacher->getName(); // Output: Teacher: Dr. Smith (ID: T98765)

?>
