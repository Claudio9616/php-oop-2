<?php
require __DIR__ . '/../Prodotti.php';
class Cibo extends Products{
    public $quantità;
    public $gusto;
    public function __construct($price, $name, $quantità, $gusto){
        $this->quantità = $quantità;
        $this->gusto = $gusto;
        parent:: __construct($price, $name);
    }    
}