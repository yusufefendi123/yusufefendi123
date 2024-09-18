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
<h3>> A. Dengan Intruksi Kerja</h3>




