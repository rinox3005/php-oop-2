<?php

class Product
{
    // Dichiarazione delle variabili d'istanza
    protected static int $id = 1;
    protected int $productId;
    protected string $image;
    protected string $name;
    protected string $description;
    protected float $price;
    protected int $stock;

    // Costruttore del mio prodotto
    public function __construct(string $image, string $name, string $description, float $price, int $stock)
    {
        $this->productId = self::$id++;
        $this->image = $image;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->stock = $stock;
    }

    // Metodi getter delle mie variabili d'istanza
    public function getProductId()
    {
        return $this->productId;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getStock()
    {
        return $this->stock;
    }

    // Metodi setter delle mie variabili d'istanza
    public function setImage(string $image)
    {
        $this->image = $image;
        return $this;
    }

    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
        return $this;
    }

    public function setPrice(float $price)
    {
        $this->price = $price;
        return $this;
    }

    public function setStock(int $stock)
    {
        $this->stock = $stock;
        return $this;
    }
}
