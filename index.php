<h1>Exercice Banque</h1>

<?php

spl_autoload_register(function ($class_name) {
    include 'Classes/'.$class_name . '.php';
});

$client1 = new Client("Salvador", "Henri","1990-01-01", "Strasbourg","Compte Courant" );

$compte1 = new Compte("Compte Courant", 1000.00, $client1, "euros");




?>