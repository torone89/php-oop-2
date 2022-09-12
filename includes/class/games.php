<?php
require_once __DIR__ . "/products.php";

// CREO VARIABILI
class Game extends Product
{
    public $material;
    public $price;

    // CONSTRUCT 
    public function __construct($idproduct, $nameproduct, $material, $price)
    {
        parent::__construct($idproduct, $nameproduct);
        $this->setMaterial($material);
        $this->setPrice($price);
    }


    /**
     * Get the value of material
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set the value of material
     */
    public function setMaterial($material): self
    {
        $this->material = $material;

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


$game1  = new Game(1, "Fuxtreme - Coccodrillo", "rubber", 20.35);
$game2 =  new Game(2, "Giocattoli per Gatti, Gatto Giocattoli Interattivi Gioco per Gattino Kitten Indoor, 16 Pezzi", "plastic", 15.00);
$game3  = new Game(3, "Gioco refrigerante per cani Karlie Salsiccia", "neoprene", 8.49);


$games = [$game1, $game2, $game3];
