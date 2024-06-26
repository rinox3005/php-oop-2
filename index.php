<?php

require_once(__DIR__ . "/Models/DogProduct.php");
require_once(__DIR__ . "/Models/CatProduct.php");

$collareInTela = new DogProduct('img1', 'Collare in tela', 'Collare in tela morbido per cani di tutte le taglie', 10.99, 0);
$erbaGatta = new CatProduct('img4', 'Erba gatta 50g', 'Busta di erba gatta da 50g', 7.50, 17);
$guinzaglioPelle = new DogProduct('img2', 'Guinzaglio Nero in Pelle', 'Guinzaglio nero in pelle per cani di taglia grande', 29.99, 3);
$pallinaDiCorda = new CatProduct('img3', 'Pallina di Corda', 'Pallina di corda piccola, ideale come gioco per gatti di tutte le etá', 9.99, 11);

var_dump($collareInTela);
var_dump($erbaGatta);
var_dump($guinzaglioPelle);
var_dump($pallinaDiCorda);
