<?php

class Pouvoir {
    private $typePouvoir;
    private $pouvoirActif;

    public function __construct($typePouvoir) 
    {
        $this->setTypePouvoir($typePouvoir);
        $this->pouvoirActif = false;
    }

    public function getTypePouvoir() { return $this->typePouvoir; }
    public function getPouvoirActif() { return $this->pouvoirActif; }

    public function setTypePouvoir($typePouvoir) { $this->typePouvoir = $typePouvoir; }

    public function activationPouvoir() { 
        $this->pouvoirActif = true;
    }

    public function desactivationPouvoir() { 
        $this->pouvoirActif = false;
    }
}

?>