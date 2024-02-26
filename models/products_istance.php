<?php
require __DIR__ . '/../sotto_classi/qwe.php';
$dog = new Dog ( 'cibo', 30, 50, 'pollo');
$cat = new Cat ('tiragraffi', 20, 40);
$bird = new Bird ('voliera', 70, 40, 60);
$fish = new Fish ('filtro acquario', 10, 5);
var_dump($dog);
var_dump($cat);
var_dump($bird);
var_dump($fish);