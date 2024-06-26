<?php

require_once(__DIR__ . "/Product.php");
require_once(__DIR__ . "/Availability.php");

class CatProduct extends Product
{
    use Availability;

    protected string $category = "Cat";

    public function __construct(string $image, string $name, string $description, float $price, int $quantity)
    {
        parent::__construct($image, $name, $description, $price, $quantity);
        $this->setAvailability($quantity);
    }
}
