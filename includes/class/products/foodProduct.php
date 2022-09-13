<?php
require_once __DIR__ . "/product.php";

// CREO VARIABILI
class Food extends Product
{
    private $ingredients;
    private $expiration;

    // CONSTRUCT 
    public function __construct($nameproduct, $description, $animalsTypes, $price, $ingredients, $expiration)
    {
        parent::__construct($nameproduct, $description, $animalsTypes, $price);
        $this->setIngredients($ingredients);
        $this->setExpiration($expiration);
    }

    /**
     * Get the value of ingredients
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Set the value of ingredients
     */
    public function setIngredients($ingredients): self
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    /**
     * Get the value of expiration
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * Set the value of expiration
     */
    public function setExpiration($expiration): self
    {
        $this->expiration = $expiration;

        return $this;
    }
}

// $food1 = new Food(4, "MERA Puppy Mix di ossi",'cibo per gatti "25-12-25", 39.99);
// $food2 = new Food(5, "Migliorcane Dog Adult Bocconi con Pollo e Tacchino 1250 gr, 16 Pezzi", "18-09-23", 29.00);
// $food3  = new Food(6, "Super-cibo Adulto Salmone", "22-03-23", 4.49);


// $foods = [$food1, $food2, $food3];
