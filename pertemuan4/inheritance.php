<?php

class Hero {
    public $nama;
    public $attack;
    public $hp;

    public function __construct($nama, $attack, $hp)
    {
        $this->nama = $nama;
        $this->attack = $attack;
        $this->hp = $hp;
    }

    public function skill(){
        echo "$this->nama menggunakan skill";
    }
}

class Mage extends Hero {
    public $mana;
    public $Magic_attack;

    public function __construct($nama, $attack, $hp, $mana, $Magic_attack){
        parent::__construct($nama, $attack, $hp);
        $this->mana = $mana;
        $this->Magic_attack = $Magic_attack;
    }   

    public function skill(){
        echo " $this->nama menggunakan magic skill";
    }   
}

$nana = new Mage ("nana", 100, 6000, 15000, 3);
echo $nana->nama;
    echo "<br />";
    $nana->skill();