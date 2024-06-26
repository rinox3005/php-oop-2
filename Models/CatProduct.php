<?php

require_once(__DIR__ . "/Product.php");
require_once(__DIR__ . "/Cat.php");

class CatProduct extends Product
{
    use Cat;
}
