<?php
require __DIR__ . '/../Prodotti.php';
// cibo
class Dog extends Products{
    public $quantità;
    public $gusto;
    public function __construct($price, $name, $quantità, $gusto){
        $this->quantità = $quantità;
        $this->gusto = $gusto;
        parent::__construct($price, $name);
    }    
}
// tiragraffi
class Cat extends Products{
    public $size;
    public function __construct($price, $name, $size){
        $this->size = $size;
        parent::__construct($price, $name);
    }
}
// voliera
class Bird extends Products {
    public $width;
    public $height;
    public function __construct($price, $name, $width, $height){
        $this->width = $width;
        $this->height = $height;
        parent::__construct($price, $name);
    }
}
// filtro acquario
class Fish extends Products {
    public $numbers;
    public Function __construct($price, $name, $numbers){
        $this->numbers = $numbers;
        parent::__construct($price, $name);
    }
}
// i Products in Prodotti.php sono le cose super generiche come prezzo e nome del prodotto;
// il Product in qwe.php sono le cose specifiche per ogni tipo di prodotto;
// fare le categorie per cane, gatto, pesci e uccelli che a seconda del tipo di animale avranno il loro singolo prodotto specifico