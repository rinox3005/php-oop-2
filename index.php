<?php

require_once(__DIR__ . "/Models/DogProduct.php");
require_once(__DIR__ . "/Models/CatProduct.php");

$collareInTela = new DogProduct('img1', 'Collare in tela', 'Collare in tela morbido per cani di tutte le taglie', 10);

var_dump($collareInTela);
