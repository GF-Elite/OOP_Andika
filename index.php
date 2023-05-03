<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Contoh Koneksi CSS dan PHP</title>
  <link rel="stylesheet" href="Style.css">
</head>
<body>
<marquee style="color:red;" behavior="scroll" direction="left">I LOVE YOU MY CRUSH  XI RPL2 </marquee>


</body>
</html>




<?php

class SepedaMotor {
  // Properti
  public $nomorKendaraan;
  public $namaKendaraan;
  public $tipeKendaraan;
  public $dataKendaraan = array();

  // Constructor
  public function __construct($nomorKendaraan, $namaKendaraan, $tipeKendaraan) {
    $this->nomorKendaraan = $nomorKendaraan;
    $this->namaKendaraan = $namaKendaraan;
    $this->tipeKendaraan = $tipeKendaraan;
  }

  // Method
  public function tambahDataKendaraan($key, $value) {
    $this->dataKendaraan[$key] = $value;
  }

  public function hapusDataKendaraan($key) {
    unset($this->dataKendaraan[$key]);
  }

  public function tampilkanDataKendaraan() {
    foreach($this->dataKendaraan as $key => $value) {
      echo "<span style='color: blue;'>" . $key . "</span>" . ": " . $value . "<br>";
    }
  }

  public function dibawaSantai() {
    echo "Sepeda motor dengan nomor kendaraan " . "<span style='color: red;'>" . $this->nomorKendaraan . "</span>" . " dibawa santai<br>";
  }

  public function kontes() {
    echo "Sepeda motor dengan nomor kendaraan " . "<span style='color: red;'>" . $this->nomorKendaraan . "</span>" . " diikuti dalam kontes<br>";
  }

  public function balap() {
    echo "Sepeda motor dengan nomor kendaraan " . "<span style='color: red;'>" . $this->nomorKendaraan . "</span>" . " digunakan untuk balap<br>";
  }
}

// Membuat objek dari kelas SepedaMotor
$sepedaMotor1 = new SepedaMotor("B 1234 ABC", "Honda", "Supra");

// Menambahkan beberapa data kendaraan
$sepedaMotor1->tambahDataKendaraan("tahun", 2019);
$sepedaMotor1->tambahDataKendaraan("warna", "hitam");

// Menampilkan data kendaraan
echo "<span style='color: blue;'>Nomor Kendaraan:</span> " . "<span style='color: red;'>" . $sepedaMotor1->nomorKendaraan . "</span>" . "<br>";
echo "<span style='color: blue;'>Nama Kendaraan:</span> " . $sepedaMotor1->namaKendaraan . "<br>";
echo "<span style='color: blue;'>Tipe Kendaraan:</span> " . $sepedaMotor1->tipeKendaraan . "<br>";
echo "<span style='color: blue;'>Data Kendaraan:</span><br>";
$sepedaMotor1->tampilkanDataKendaraan();



// Menggunakan sepeda motor untuk beberapa kegiatan
$sepedaMotor1->dibawaSantai();
$sepedaMotor1->kontes();
$sepedaMotor1->balap();

?>
