<?php
require_once __DIR__ . "/products.php";

// CREO VARIABILI
class Kennel extends Product
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


// $accessorie1 = new Accessorie(7, "cuccia cani", "25-12-25", "wood", "white", 39.99);
// $accessorie2 = new Accessorie(8, "collare cane", "18-09-23", "cuoio", "brown", 29.00);
// $accessorie3  = new Accessorie(69, "vaschetta gatto", "22-03-23", "plastic", "red", 4.49);


// $accessories = [$accessorie1, $accessorie2, $accessorie3];
