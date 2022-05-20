<?php

class Product
{
    private $stock;
    private $foodType;
    private $id;
    private $name;
    private $price;

    public function __construct($stock, $foodType, $id, $name, $price)
    {
        $this->stock = $stock;
        $this->foodType = $foodType;
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getStock():string
    {
        return $this->stock;
    }

    public function getFoodType():string
    {
        return $this->foodType;
    }

    public function getId():string
    {
        return $this->id;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function getPrice():int
    {
        return $this->price;
    }

}
