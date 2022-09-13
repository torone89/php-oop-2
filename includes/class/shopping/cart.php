<?php
require_once __DIR__ . '/../products/product.php';

class Cart

{
    //ARRAY VUOTO DEI PRODOTTI (parte come carello vuoto)
    private $products = [];



    public function getProdutctList()
    {
        return $this->products;
    }

    // FUNZIONE PER IL PREZZO DI TUTTI I PRODOTTI NEL CART

    public function getTotal()
    {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getPrice(); // GetPrice() perchè è protetta 
        }
        return $total;
    }

    //FUNZIONE PER AGGIUNGERE ELEMENTI AL CART

    public function addProduct($product)
    {
        //VERIICA SE NON E' UN ISTANZA DI PRODUCT => throw ....
        if (!($product instanceof Product)) throw new Exception("$product must be instanceof Products"); {
            $this->products[] = $product;
        }
    }
    //
    public function removeProduct($product)
    {

        if ($product instanceof Product) {
            $id = $product->getId();
            foreach ($this->products as $key => $value) {
            } // Value => Il singolo Prodotto ad ogni giro __ Key = Indice
            if ($value->getId() === $id) unset($this->products[$key]); //distruggo la variabile
        }
    }
}
