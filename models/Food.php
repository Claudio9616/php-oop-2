<?php
require_once __DIR__ . '/Prodotti.php';
// cibo
class Foods extends Products{
    public $quantità;
    public $gusto;
    public $data_scadenza;
    public $categoria;
    public function __construct($price, $name, $quantità, $gusto, $data_scadenza, Categoria $categoria){
        $this->quantità = $quantità;
        $this->gusto = $gusto;
        $this->data_scadenza = $data_scadenza;
        $this->categoria = $categoria;
        parent::__construct($price, $name);
    }    
}
