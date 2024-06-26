<?php

require_once(__DIR__ . "/Models/DogProduct.php");
require_once(__DIR__ . "/Models/CatProduct.php");

$collareInTela = new DogProduct('img1', 'Collare in tela', 'Collare in tela morbido per cani di tutte le taglie', 10, 0);
$erbaGatta = new CatProduct('img2', 'Erba gatta 50g', 'Busta di erba gatta da 50g', 7, 17);

var_dump($collareInTela);
var_dump($erbaGatta);
