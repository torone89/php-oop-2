<?php

include __DIR__ . "/includes/db/data.php";
include __DIR__ . "/includes/class/user.php";
include __DIR__ . "/includes/class/shopping/cart.php";
include __DIR__ . "/includes/class/customers/customer.php";
include __DIR__ . "/includes/class/shipping/address.php";
include __DIR__ . "/includes/class/shopping/creditCard.php";

// STAMPO TUTTI I PRODOTTI FOOD
var_dump($foods);

// AGGIUNGO Il PRODOTTO 1 Del food al Carrello
$carrello = new Cart();

$carrello->addProduct($food1);
var_dump($carrello);

// Rimuovo Il PRODOTTO 1 Del food al Carrello
$carrello->removeProduct($food1);
var_dump($carrello);

// Cliente non registrato con unn carrello (vuoto)
$cliente = new Customer();
var_dump($cliente);

// Il cliente Aggiunge Food2 al carrello
$cliente->addToCart($food2);
var_dump($cliente);

// Creo un indirizzo
$indirizzo = new Address("Francesco Tovani", 'via cavour 22', '54033', 'carrara', 'italy');
var_dump($indirizzo);

//Creo Carta di credito
$carta = new CreditCard("1111-2222-3333-4444", 420, "13-09-2024");
var_dump($carta);
// per vedere la data di scandenza della carta
var_dump($carta->getExpiryDate());

// verifico se è valida la carta
var_dump($carta->isExpiry());

?>/
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Francesco Tovani">
    <meta name="description" content="Simulazione E-commerce Pet Shop">
    <title>Pet Shop</title>

    <!-- FRAME WORK ESTERNI -->
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- STILE DI QUESTA PAGINA -->
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>
    <main>
        <?php
        foreach ($users as $user) {
        ?>
            <div class="text-center mb-3 p-4">

                <h5 class='text-uppercase fw-bold fs-6 mt-3'>utenti</h5>
                <p><span class="fw-bold">Nome Utente:</span> <?php echo $user->firstname ?></p>
                <p><span class="fw-bold">Cognome Utente:</span> <?php echo $user->lastname ?></p>
                <p><span class="fw-bold">Numero di telefono:</span> <?php echo $user->phonenumber ?></p>
                <p><span class="fw-bold">Email:</span> <?php echo $user->email ?></p>
                <p><span class="fw-bold">Registrato:</span> <?php echo $user->isRegister ?></p>
            </div>
            </div>
        <?php } ?>

    </main>
</body>

</html>