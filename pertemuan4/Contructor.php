<?php
class Laptop{
    public $merk;
    public $processor;
    public$memori;

    public function __construct($merk, $processor, $memori){
        $this->merk = $merk;
        $this->processor = $processor;
        $this->memori = $memori;
        
    }
    public function desc(){
        return "merk laptop ini adalah $this->merk,  dengan processor $this->processor, 
        dan RAM $this->memori";

    }
}
$lenovo = new Laptop("lenovo", "intel i5 gen 7", "8 GB" );
echo $lenovo->desc();