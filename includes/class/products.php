<?php

// CREO VARIABILI
class Product
{
    public $idproduct;
    public $nameproduct;

    // CONSTRUCT 
    public function __construct($idproduct, $nameproduct)
    {
        $this->setIdproduct($idproduct);
        $this->setNameproduct($nameproduct);
    }
    /**
     * Get the value of idproduct
     */
    public function getIdproduct()
    {
        return $this->idproduct;
    }
    /**
     * Set the value of idproduct
     */
    public function setIdproduct($idproduct): self
    {
        $this->idproduct = $idproduct;

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
}
