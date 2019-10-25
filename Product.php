<?php


class Product
{

    private $nom;
    private $prix_ht;
    private $prix_ttc;
    private $qte_stock;
    private $is_dispo;
    private $photo;
    private $marque;
    const FACTEUR_TVA_FR = 1.2;

    public function __construct($marque)
    {
        $this->marque = $marque;
    }

    public function setNom(string $nom) {
        $this->nom = ucfirst($nom);
    }

    public function getNom() {
        return $this->nom;
    }

    public function setPrixHT(float $prix_ht) {
        $this->prix_ht = $prix_ht;
        $this->setPrixTTC();
    }
    public function getPrixHT() {
        return $this->prix_ht;
    }

    private function setPrixTTC() {
        $this->prix_ttc = $this->prix_ht * self::FACTEUR_TVA_FR;
    }

    public function getPrixTTC() {
        return $this->prix_ttc;
    }

    public function setQteStock(int $qte) {

        $this->qte_stock = $qte;
        $this->setIsDispo();
    }
    public function getQteStock() {
        return $this->qte_stock;
    }
    public function setIsDispo()
    {
        $this->is_dispo = $this->qte_stock > 1 ?  true : false;

    }

    public function getIsDispo()
    {
        return $this->is_dispo;
    }
    public function setPhoto($path) {
        $this->photo = $path;
    }

    public function getPhoto() {
        return $this->photo;
    }
    public function getMarque(){
        return $this->marque;
    }

    public function setToto(){

    }

    }