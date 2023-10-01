<?php

class Arme {
    
    private String $typeArme;
    private int $buffArme;

    public function __construct($typeArme) {
        $this->setTypeArme($typeArme);
        $this->setBuffArme($typeArme);
    }

    public function getTypeArme() { return $this->typeArme; }
    public function getBuffArme() { return $this->buffArme; }

    public function setTypeArme($typeArme) { $this->typeArme = $typeArme; }

    public function setBuffArme($typeArme) {

        switch ($typeArme) {
            case "épée":
                $this->buffArme = 5; 
                break;
            case "hache":
                $this->buffArme = 12; 
                break;
            case "arc":
                $this->buffArme = 4; 
                break;
            case "couteau":
                $this->buffArme = 0; 
                break;
            case "glaive":
                $this->buffArme = 3; 
                break;
            case "hachette":
                $this->buffArme = 8; 
                break;
            case "masse":
                $this->buffArme = 15; 
                break;
            case "pique":
                $this->buffArme = 9; 
                break;       
        }

    }
}

?>