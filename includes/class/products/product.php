<?php

// CREO VARIABILI
class Product
{
    protected $id;
    protected $nameproduct;
    protected $description;
    protected $animalsTypes;
    protected $price;

    // CONSTRUCT 
    public function __construct($nameproduct, $description, $animalsTypes, $price)
    {

        $this->setNameproduct($nameproduct);
        $this->setDescription($description);
        $this->setAnimalsTypes($animalsTypes);
        $this->setPrice($price);
    }


    /**
     * Get the value of id 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id (automizzo il set ID (ogni volta ne assegna uno lui in automatico))
     */
    public function setId($id): self
    {
        $this->id = uniqid();

        return $this;
    }

    /**
     * Get the value of nameproduct
     */
    public function getNameproduct()
    {
        return $this->nameproduct;
    }
    /**
     * Set the value of nameproduct
     */
    public function setNameproduct($nameproduct): self
    {
        $this->nameproduct = $nameproduct;

        return $this;
    }



    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }



    /**
     * Get the value of animalsTypes
     */
    public function getAnimalsTypes()
    {
        return $this->animalsTypes;
    }

    /**
     * Set the value of animalsTypes
     */
    public function setAnimalsTypes($animalsTypes): self
    {
        $this->animalsTypes = $animalsTypes;

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
