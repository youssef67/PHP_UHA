<?php

class Arene {
    
    private String $nom;
    private String $capacite;

    public function __construct($nom, $capacite)
    {
        $this->setNom($nom);
        $this->setCapacite($capacite);  
    }


    public function getNom() { return $this->nom; }
    public function getCapacite() { return $this->capacite;}

    public function setNom($nom) { $this->nom = $nom;}
    public function setCapacite($capacite) { $this->capacite = $capacite; }
}

?>