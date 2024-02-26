<?php
require_once __DIR__ . '/Prodotti.php';
// giochi
class Toys extends Products{
    public $color;
    public $categoria;
    public function __construct($price, $name, $color, Categoria $categoria){
        $this->color = $color;
        $this->categoria = $categoria;
        parent::__construct($price, $name);
    }    
}
