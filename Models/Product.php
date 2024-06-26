<?php

class Product
{
    // Dichiarazioni variabili d'istanza protected
    protected string $image;
    protected string $name;
    protected string $description;
    protected int $price;


    public function __construct(string $image, string $name, string $description, int $price)
    {
        $this->image = $image;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }
    // Metodi getter delle variabili
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


    // Metodi setter delle variabili
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}
