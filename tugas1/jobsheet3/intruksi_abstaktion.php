<?php
// Kelas abstrak Course
abstract class Course {
    // Metode abstrak yang harus diimplementasikan oleh subclass
    abstract public function getCourseDetails();
}

// Kelas OnlineCourse yang mengimplementasikan getCourseDetails
class OnlineCourse extends Course {
    private $courseName;
    private $platform;

    public function __construct($courseName, $platform) {
        $this->courseName = $courseName;
        $this->platform = $platform;
    }

    // Implementasi metode abstrak getCourseDetails
    public function getCourseDetails() {
        return "Hasil Online Course: " . $this->courseName . " Mode ON " . $this->platform;
    }
}

// Kelas OfflineCourse yang mengimplementasikan getCourseDetails
class OfflineCourse extends Course {
    private $courseName;
    private $location;

    public function __construct($courseName, $location) {
        $this->courseName = $courseName;
        $this->location = $location;
    }

    // Implementasi metode abstrak getCourseDetails
    public function getCourseDetails() {
        return "Mode Offline Course: " . $this->courseName . " Mode OFF " . $this->location;
    }
}

// Instansiasi objek dari kelas OnlineCourse dan OfflineCourse
$onlineCourse = new OnlineCourse("PHP", "Yusuf");
$offlineCourse = new OfflineCourse("Advanced PHP", "Dr muhammad");

// Menampilkan detail kursus
echo $onlineCourse->getCourseDetails() . "<br>"; // Output: Online Course: PHP for Beginners available on Udemy
echo $offlineCourse->getCourseDetails();         // Output: Offline Course: Advanced PHP held at Main Campus Room 101
?>
