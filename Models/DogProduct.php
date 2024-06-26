<?php

require_once(__DIR__ . "/Product.php");
require_once(__DIR__ . "/Availability.php");

class DogProduct extends Product
{
    use Availability;

    protected string $category = "Dog";

    public function __construct(string $image, string $name, string $description, float $price, int $stock)
    {
        parent::__construct($image, $name, $description, $price, $stock);
        $this->setAvailability($stock);
    }
}