<?php
// Importer la class
require 'User.php';

// Création d'un objet ou instanciation (instancier) d'un objet
$bob = new User();
$bob->prenom = "Robert";
$bob->nom = "de Niro";
$bob->setAge(36);
$bob->setEmail("bob@gmail.com");
try {
    $bob->setPassword("dsq");
} catch (Exception $e) {
    echo $e->getMessage();
}

$bibi = new User();
//$bibi->setAge(17);
$bibi->setEmail('bom@gmail.com');


var_dump($bob);
var_dump($bibi);