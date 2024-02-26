<?php
require_once __DIR__ . '/Prodotti.php';
// accessori
class Objects extends Products{
    public $color;
    public $size;
    public $type;
    public $categoria;
    public function __construct($price, $name, $color, $size, $type, Categoria $categoria){
        $this->color = $color;
        $this->size = $size;
        $this->type = $type;
        $this->categoria = $categoria;
        parent::__construct($price, $name);
    }    
}