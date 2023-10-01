<?php 

class Armure {

    private String $typeArmure;
    private int $buffArmure;

    public function __construct($armure)
    {
        $this->setTypeArmure($armure);
        $this->setBuffArmure($armure);
    }

    public function getTypeArmure() { return $this->typeArmure; }
    public function getBuffArmure() { return $this->buffArmure; }

    public function setTypeArmure($typeArmure) { $this->typeArmure = $typeArmure; }

    public function setBuffArmure($typeArmure) { 

        switch ($typeArmure) {
            case "armure en cuir":
                $this->buffArmure = 4; 
                break;
            case "cuirasse milanaise":
                $this->buffArmure = 15; 
                break;
            case "plastron":
                $this->buffArmure = 8; 
                break;
            case "cotte de maille":
                $this->buffArmure = 2; 
                break;
        }
    }
}


?>