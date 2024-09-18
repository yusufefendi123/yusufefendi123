<?php
// Mengubah kelas Animal menjadi kelas abstrak
abstract class Animal {  
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    // Menjadikan makeSound sebagai metode abstrak
    abstract public function makeSound();
}

class Dog extends Animal {

    public function makeSound() {
        return "Woof!";
    }
}

class Cat extends Animal {

    public function makeSound() {
        return "Meow!";
    }
}

// Membuat objek Dog dan menampilkan suaranya
$dog = new Dog("Buddy");
echo $dog->getName() . " says " . $dog->makeSound(); // Output: Buddy says Woof!

echo "\n"; // Menambahkan baris baru untuk kejelasan output

class Printer {

    // Mengganti nama metode dari 'print' menjadi 'display'
    public function display(Animal $animal) {
        echo $animal->getName() . " says " . $animal->makeSound() . "<br>";
    }
}

$dog = new Dog("Buddy");
$cat = new Cat("Kitty");
$printer = new Printer();
$printer->display($dog); // Output: Buddy says Woof!
$printer->display($cat); // Output: Kitty says Meow!
?>

