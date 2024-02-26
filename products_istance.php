<?php
require __DIR__ . '/models/Food.php';
require __DIR__ . '/models/Toys.php';
require __DIR__ . '/models/Objects.php';
require __DIR__ . '/models/Categoria.php';
$categoria_1 = new Categoria('dog');
$categoria_2 = new Categoria('cat');
$categoria_3 = new Categoria('bird');
$categoria_4 = new Categoria('fish');
$purina_dog = new Foods ('Purina Dog', 30, 20, 'manzo', '23/03/2024', $categoria_1);
var_dump($purina_dog);
$tiragraffi = new Toys ('Tiragraffi', 40, 'Beige', $categoria_2);
var_dump($tiragraffi);
$voliera = new Objects ('Voliera', 80, 'beige', '50 x 70', 'wood', $categoria_3);
var_dump($voliera);
$filtri = new Objects ('Filtri acquario', 20, '', '10 x 20', 'plastic and glass', $categoria_4);
var_dump($filtri);
$products = [$purina_dog, $tiragraffi, $voliera, $filtri];