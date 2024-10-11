<h1>Exercice Banque</h1>

<?php

spl_autoload_register(function ($class_name) {
    include 'Classes/'.$class_name . '.php';
});

$client1 = new Client("Landolfo", "Bobbie","2022-08-06", "Strasbourg");

$compte1 = new Compte("Compte Courant", 1000.00, "euros", $client1);
$compte2 = new Compte("Livret A ", 2500.00, "euros", $client1);

echo $client1->afficherComptes();
echo $compte1->VirementCompte($compte1, $compte2, 500.00);

?>