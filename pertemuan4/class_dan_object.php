<?php
class Mobil {
 private $merk;
 private $warna;

 public function setMerk ($merk){
    $this->merk = "Mobil $merk";
 }
 public function getMerk(){
   echo $this->merk; 
   
 }
 public function setWarna ($warna){
    $this->warna = $warna;
 }
 public function getWarna(){
   echo $this->warna;
 }
 public function hidupkanMesin(){
    echo " Mesin di hidupkan";
 }
 public function jalan(){
    echo " mobil berjalan";
 }
}

$toyota = new Mobil();
$toyota->setMerk("toyota");
$toyota->getMerk();
$toyota->setWarna("hitam");
$toyota->getWarna();

$toyota->hidupkanMesin();
echo "<br>";
$toyota->jalan();
