<?php

require_once(__DIR__ . "/Product.php");
require_once(__DIR__ . "/Dog.php");


class DogProduct extends Product
{
    use Dog;
}