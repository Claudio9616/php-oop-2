<?php
class Products {
    public $price;
    public $name;
    public function __construct($price, $name){
        $this->price = $price;
        $this->name = $name;
    }
}