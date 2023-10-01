<?php

class Game {

    private $typePartie;

    public function __construct()
    {
        
    }

    // getters
    public function getTypePartie() { return $this->typePartie; }

    // setters
    public function setTypePartie($typePartie) { $this->typePartie = $typePartie; }
}


?>