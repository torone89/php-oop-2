
<?php
include __DIR__ . "/../class/products/foodProduct.php";
include __DIR__ . "/../class/shipping/address.php";
include __DIR__ . "/../class/shopping/creditCard.php";

// FOODPRODUCT DATA
$food1 = new Food("MERA Puppy Mix di ossi", "cibo per cani", 39.99, ['cani'], ['carne', 'carote'], "23-09-2020");
$food2 = new Food("Migliorcane Dog Adult Bocconi con Pollo e Tacchino 1250 gr, 16 Pezzi", "cibo per cani", 10.99, ['cani'], ['carne pollo', 'carne tacchino'], "20-10-2025");
$food3 = new Food("Super-cibo Adulto Salmone", "22-03-23", "cibo per cani", 18.99, ['gatti'], ['carne', 'olio'], "12-04-2023");
$foods = [$food1, $food2, $food3];

// ADDRESS ORDER DATA

$indirizzo = new Address("Francesco Tovani", 'via cavour 22', '54033', 'carrara', 'italy');

// CREDIT CARD DATA

$carta = new CreditCard("1111-2222-3333-4444", 420, "13-09-2024");
