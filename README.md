<h1><i>Tugas 1 Prak WEB 2 ( Penjelasan dan keterangan )</i></h1>
<h2>1. Jobseheet 1 .</h2>
<h3>> A. Dengan Intruksi Kerja</h3>
<p>- Kelas Mahasiswa merupakan blueprint atau cetak biru untuk objek mahasiswa. Kelas ini mendefinisikan atribut dan metode yang dimiliki oleh setiap objek mahasiswa yang dibuat dari kelas ini.</p>

``` sh
    class Mahasiswa{
     ...
    }
```
<p>- Atribut atau properties dalam kelas Mahasiswa adalah komponen penting yang menyimpan informasi tentang objek mahasiswa, seperti nama, NIM, dan jurusan. Penggunaan modifier akses public memungkinkan atribut-atribut ini diakses dan dimodifikasi dari luar kelas,</p>

```sh
        public $nama;
        public $nim;
        public $jurusan;
```

<p>- Metode tampilkanData() dalam kelas Mahasiswa berfungsi untuk mengembalikan informasi atribut nama, nim, dan jurusan dalam format string yang siap ditampilkan di browser dengan pemformatan HTML.</p>

``` sh
  public function tampilkanData(){
            return "Nama: $this->nama.<br>NIM: $this->nim.<br>Jurusan: $this->jurusan.<br>";
        }
```

<p>- Metode __construct dalam kelas Mahasiswa berfungsi untuk menginisialisasi objek dengan nilai awal yang diberikan saat objek dibuat.</p>

``` sh
    public function __construct($nama, $nim, $jurusan){
            $this->nama = $nama;
            $this->nim = $nim;
            $this->jurusan = $jurusan;
        }
```

<p>- Kedua metode ini, updateJurusan dan setNim, adalah metode setter yang digunakan untuk mengubah nilai dari atribut jurusan dan nim dalam kelas Mahasiswa, dengan memanggil prameter di setiap metode.</p>

``` sh
 public function updateJurusan($jurusan){
            $this->jurusan = $jurusan;
        }

        public function setNim($nim){
            $this->nim = $nim;
        }
    }
```

<p>- Kode ini adalah untuk proses pembuatan dan manipulasi objek dari kelas Mahasiswa. Inisialisasi objek dilakukan dengan konstruktor, kemudian metode tampilkanData, updateJurusan, dan setNim digunakan untuk menampilkan dan memperbarui data objek. Hasil output memperlihatkan perubahan yang dilakukan pada objek mahasiswa1.</p>

``` sh
$mahasiswa1 = new Mahasiswa("Yusuf Efendi", "230102096", "Teknik Informatika");
    echo $mahasiswa1->tampilkanData();

    $mahasiswa1->updateJurusan("Teknik Mesin");
    echo "<br>";
    echo $mahasiswa1->tampilkanData();

    $mahasiswa1->setNim("230302056");
    echo "<br>";
    echo $mahasiswa1->tampilkanData();
```

<h2>Hasil tampilan dengan Intruksi Kerja.</h2>

![image](https://github.com/user-attachments/assets/bc91fd87-1a72-41f8-a009-6006c4fe1de2)

<h3>> B. Tugas 1</h3>
<p>- Menerapkan seperti di intruksi kerja tetapi dengan kelas dosen dan atrbitunya adalah Nama, NIP, matakuliah.</p>

``` sh
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
```

<h2>Hasil tampilan tugas 1</h2>

![image](https://github.com/user-attachments/assets/56e107af-db93-47f5-a3c3-28a0462dbaf0)

<h2>2. Jobseheet 2 .</h2>
<h3>> A. Penjelasan Tugas 2</h3>
<b>1. Class dan object. </b>
<p>
    
- Class: Kelas adalah blueprint atau cetak biru untuk membuat objek. Kelas mendefinisikan atribut (properties) dan metode (functions) yang akan dimiliki oleh objek.

- Object: Objek adalah instance dari kelas. Ia menyimpan data dan bisa menggunakan metode yang didefinisikan dalam kelas.

- class Mahasiswa: Mendefinisikan kelas Mahasiswa dengan atribut nama, nim, dan jurusan.

- __construct: Constructor untuk menginisialisasi nilai atribut saat objek dibuat.

- tampilkanData: Metode untuk menampilkan data mahasiswa.

- $mahasiswa1: Objek dari kelas Mahasiswa yang menyimpan data mahasiswa dan memanggil metode tampilkanData untuk menampilkan informasi.</p>

``` sh
// Definisi kelas
class Mahasiswa {
    // Atribut atau properties
    private $nama;
    private $nim;
    private $jurusan;

    // Constructor
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode atau function
    public function tampilkanData(){
        return "Nama: $this->nama,<br> NIM: $this->nim,<br> jurusan: $this->jurusan.<br>";
    }
}

// Instansiasi Objek
$mahasiswa1 = new Mahasiswa("Yusuf Efendi", "230102096", "Teknik Informatika");
echo "<h3>1. Membuat Class dan Object</h3>";
echo $mahasiswa1->tampilkanData(); // Output: Nama: Yusuf Efendi, NIM: 230102096, jurusan: Teknik Informatika.

```

<b>2. Encapsulation. </b>
<p>
    
- private $nama, $nim, $jurusan: Atribut sekarang private, artinya hanya bisa diakses di dalam kelas Mahasiswa.
  
- Getter dan Setter: Metode getNama, getNim, dan getJurusan digunakan untuk mengakses data, sedangkan setNama, setNim, dan setJurusan digunakan untuk mengubah data.

</p>

``` sh
// Definisi kelas
class Mahasiswa {
    // Atribut atau properties
    private $nama;
    private $nim;
    private $jurusan;

    // Constructor
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode atau function
    public function tampilkanData(){
        return "Nama: $this->nama,<br> NIM: $this->nim,<br> jurusan: $this->jurusan.<br>";
    }

    // Getter dan Setter
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

// Instansiasi Objek
$mahasiswa1 = new Mahasiswa("Yusuf Efendi", "230102096", "Teknik Informatika");
echo "<h3>2. Encapsulation</h3>";
echo $mahasiswa1->getNama(); // Output: Yusuf Efendi
echo "<br>";
echo $mahasiswa1->getNim(); // Output: 230102096
echo "<br>";
echo $mahasiswa1->getJurusan(); // Output: Teknik Informatika

```

<b>3. Inheritance. </b>
<p>
    
- class Pengguna: Kelas induk dengan atribut nama dan metode getNama.
  
- class Dosen extends Pengguna: Kelas Dosen mewarisi Pengguna dan menambahkan atribut matakuliah.
- parent::__construct($nama): Memanggil constructor dari kelas induk Pengguna untuk menginisialisasi atribut nama.

</p>

``` sh
// Definisi kelas
class Pengguna {
    // Atribut atau properties
    protected $nama;

    // Constructor
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

    // Constructor
    public function __construct($nama, $matakuliah){
        parent::__construct($nama);
        $this->matakuliah = $matakuliah;
    }

    public function getMatakuliah(){
        return $this->matakuliah;
    }
}

// Instansiasi Objek
$dosen1 = new Dosen("Yusuf Efendi", "Praktek WEB");
echo "<h3>3. Inheritance (Pewarisan)</h3>";
echo $dosen1->getNama(); // Output: Yusuf Efendi
echo "<br>";
echo $dosen1->getMatakuliah(); // Output: Praktek WEB

```

<b>4. Polymorphism. </b>
<p>

- class Pengguna2: Kelas dasar dengan metode aksesFitur.
  
- class Mahasiswa2 dan class Dosen2: Mewarisi Pengguna2 dan mengoverride metode aksesFitur untuk memberikan implementasi yang berbeda.
  
- Poly::print: Metode ini menunjukkan polimorfisme dengan memanggil metode aksesFitur yang berbeda tergantung pada jenis objek yang diteruskan.
  
</p>

``` sh
// Definisi kelas
class Pengguna2 {
    protected $nama;

    // Constructor
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

// Instansiasi Objek
$mahasiswa2 = new Mahasiswa2("Mahasiswa Yusuf");
$dosen2 = new Dosen2("Dosen Yusuf");

$printer = new Poly();
echo "<h3>4. Polymorphism (Polimorfisme)</h3>";
$printer->print($mahasiswa2); // Output: Hai Mahasiswa Yusuf
$printer->print($dosen2); // Output: Hallo Dosen Yusuf

```

<b>5. Abstraction. </b>
<p>
    
- abstract class Pengguna3: Kelas abstrak dengan metode abstrak aksesFitur yang harus diimplementasikan oleh kelas turunannya.
  
- Mahasiswa3 dan Dosen3: Kelas yang mewarisi Pengguna3 dan mengimplementasikan metode aksesFitur.
  
- Metode aksesFitur: Mengembalikan string yang berisi nama dan sapaan sesuai dengan implementasi masing-masing kelas.
  
</p>

``` sh
// Definisi kelas abstrak
abstract class Pengguna3 {
    abstract public function aksesFitur();
}

// inheritance atau pewarisan
class Mahasiswa3 extends Pengguna3 {
    protected $nama;

    // Constructor
    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function aksesFitur() {
        return $this->nama . " Hai Yusuf";
    }
}

// inheritance atau pewarisan
class Dosen3 extends Pengguna3 {
    protected $nama;

    // Constructor
    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function aksesFitur() {
        return $this->nama . " Hallo Yusuf";
    }
}

// Instansiasi Objek
$mahasiswa3 = new Mahasiswa3("Maaf");
$dosen3 = new Dosen3("Selamat");

echo "<h3>5. Abstraction</h3>";
echo $mahasiswa3->aksesFitur(); // Output: Maaf Hai Yusuf
echo "<br>";
echo $dosen3->aksesFitur(); // Output: Selamat Hallo Yusuf

```

<h2>Hasil tampilan Tugas 2.</h2>

![image](https://github.com/user-attachments/assets/67482c19-23c2-493c-a1fa-67d66fb81ba4)









