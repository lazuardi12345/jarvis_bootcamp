<?php
//type data integer
$umur = 20;

var_dump($umur);

//float
$phi = 3.14 ;
var_dump($phi);

//string
$nama = "ardi";

var_dump($nama);
echo "<br>";

echo "Hello . $nama umur saya. $umur" ;

//bolean
$isStudent = true;

echo "<br>";

var_dump($isStudent);

echo "<br>";

//array
$siswa = ["dadang", 17, true];

echo "Hallo nama saya $siswa[0], umur saya $siswa[1] tahun.";

//array asosiatif
$mahasiswa = ["nama"=> "lazuardi", "umur saya"=> 17, "ipk"=> 4.0 ];

echo "hallo nama saya $mahasiswa[nama], saya mahasiswa dengan nilai ipk $mahasiswa[ipk]";