<?php

class Motor {
    public $merk;
    public $warna;

    public function __construct($merk, $warna)
    {
        $this->merk = $merk;
        $this->warna = $warna;
    }
    public function speed(){
        echo "$this->merk menggunakan speed";
    }
}

class MotorRacing extends Motor {
    public $cc;

    public function __construct($merk, $warna, $cc)
    {
        parent::__construct($merk, $warna);
        $this->cc = $cc;
    }
    public function speed(){
        echo "$this->merk menggunakan cc dalam speed";
    }
}

$Vario = new MotorRacing("Vario", "hitam", 150);
echo $Vario->merk;
    echo "<br />";
   $Vario->speed();