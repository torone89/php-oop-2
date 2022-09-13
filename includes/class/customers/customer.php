<?php

require_once __DIR__ . '/../shopping/cart.php';

class Customer
{
    protected $cart;

    public function __construct()
    {
        $this->setCart();
    }
    /**
     * Get the value of cart
     */
    public function getCart()
    {
        return $this->cart;
    }
    /**
     * Set the value of cart
     */
    protected function setCart()
    {
        $this->cart = new Cart(); // Creazione Carrello per ogni nuovo Customer
    }
    // FUNZIONE PER CHIAMARE L'ADD PRODUCT DEL SUO CARRELLO
    public function addToCart($product)
    {
        $this->cart->addProduct($product);
    }
    // FUNZIONE PER CHIAMARE il Remove PRODUCT DEL SUO CARRELLO
    public function removeFromCart($product)
    {
        $this->cart->removeProduct($product);
    }
}
