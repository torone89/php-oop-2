<?php
require_once __DIR__ . "/products.php";

// CREO VARIABILI
class Accessorie extends Product
{
    public $materialAccessories;
    public $color;
    public $price;

    // CONSTRUCT 
    public function __construct($idproduct, $nameproduct, $materialAccessories, $color, $price)
    {
        parent::__construct($idproduct, $nameproduct);
        $this->setMaterialAccessories($materialAccessories);
        $this->setColor($color);
        $this->setPrice($price);
    }


    /**
     * Get the value of materialAccessories
     */
    public function getMaterialAccessories()
    {
        return $this->materialAccessories;
    }

    /**
     * Set the value of materialAccessories
     */
    public function setMaterialAccessories($materialAccessories): self
    {
        $this->materialAccessories = $materialAccessories;

        return $this;
    }

    /**
     * Get the value of color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     */
    public function setColor($color): self
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     */
    public function setPrice($price): self
    {
        $this->price = $price;

        return $this;
    }
}


$accessorie1 = new Accessorie(7, "cuccia cani", "25-12-25", "wood", "white", 39.99);
$accessorie2 = new Accessorie(8, "collare cane", "18-09-23", "cuoio", "brown", 29.00);
$accessorie3  = new Accessorie(69, "vaschetta gatto", "22-03-23", "plastic", "red", 4.49);


$accessories = [$accessorie1, $accessorie2, $accessorie3];
