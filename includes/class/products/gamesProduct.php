<?php

require_once __DIR__ . "/product.php";

class Food extends Product
{

    // CREO VARIABILI
    private $materials;
    private $colors;

    // CONSTRUCT 
    public function __construct($nameproduct, $description, $animalsTypes, $price, $materials, $colors)
    {
        parent::__construct($nameproduct, $description, $animalsTypes, $price);
        $this->setMaterials($materials);
        $this->setColors($colors);
    }

    /**
     * Get the value of materials
     */
    public function getMaterials()
    {
        return $this->materials;
    }

    /**
     * Set the value of materials
     */
    public function setMaterials($materials): self
    {
        $this->materials = $materials;

        return $this;
    }

    /**
     * Get the value of colors
     */
    public function getColors()
    {
        return $this->colors;
    }

    /**
     * Set the value of colors
     */
    public function setColors($colors): self
    {
        $this->colors = $colors;

        return $this;
    }
}

// $game1  = new Game(1, "Fuxtreme - Coccodrillo", "rubber", 20.35);
// $game2 =  new Game(2, "Giocattoli per Gatti, Gatto Giocattoli Interattivi Gioco per Gattino Kitten Indoor, 16 Pezzi", "plastic", 15.00);
// $game3  = new Game(3, "Gioco refrigerante per cani Karlie Salsiccia", "neoprene", 8.49);


// $games = [$game1, $game2, $game3];
