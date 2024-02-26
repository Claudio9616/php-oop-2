<?php
require __DIR__ . '/../Prodotti.php'
class Cibo extends Products{
    $quantità;
    $gusto;
    public function __construct($price, $name, $quantità, $gusto){
        parent:: __construct($price, $name);
    }    
}