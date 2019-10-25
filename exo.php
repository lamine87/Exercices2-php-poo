<?php
// Afficher une liste de produits avec les données suivantes:
// - nom du produit, prix_ht, prix_ttc, qte_en_stock, dispo (oui/non), photo 70px (largeur)
// Cette liste de produit doit être accessible par un utilisateur admin
// Le prix TTC est calculé à partir du prix HT


$produit = new Product();
$produit->setPrixHT(10);

$metro1 = new Metro();
$metro1->setStationDepart("Louvres Rivoli");
$metro1->demarre();


$metro2 = new Metro;
$metro2->setStationDepart("Louvres Rivoli");
$metro2->demarre();

