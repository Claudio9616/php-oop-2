<?php
require __DIR__ . '/../Prodotti.php';
class Product extends Products{
    public $quantità;
    public $gusto;
    public function __construct($price, $name, $quantità, $gusto){
        $this->quantità = $quantità;
        $this->gusto = $gusto;
        parent::__construct($price, $name);
    }    
}
// i Products in Prodotti.php sono le cose super generiche come prezzo e nome del prodotto;
// il Product in qwe.php sono le cose specifiche per ogni tipo di prodotto;
// fare le categorie per cane, gatto, pesci e uccelli che a seconda del tipo di animale avranno il loro singolo prodotto specifico