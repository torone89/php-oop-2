<?php
require_once __DIR__ . "/products.php";

// CREO VARIABILI
class Food extends Product
{
    public $scadenza;
    public $price;

    // CONSTRUCT 
    public function __construct($idproduct, $nameproduct, $scadenza, $price)
    {
        parent::__construct($idproduct, $nameproduct);
        $this->setScadenza($scadenza);
        $this->setPrice($price);
    }




    /**
     * Get the value of scadenza
     */
    public function getScadenza()
    {
        return $this->scadenza;
    }

    /**
     * Set the value of scadenza
     */
    public function setScadenza($scadenza): self
    {
        $this->scadenza = $scadenza;

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


$food1 = new Food(4, "MERA Puppy Mix di ossi", "25-12-25", 39.99);
$food2 = new Food(5, "Migliorcane Dog Adult Bocconi con Pollo e Tacchino 1250 gr, 16 Pezzi", "18-09-23", 29.00);
$food3  = new Food(6, "Super-cibo Adulto Salmone", "22-03-23", 4.49);


$foods = [$food1, $food2, $food3];
