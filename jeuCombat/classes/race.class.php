<?php

class Race {
    private String $typeRace;

    public function __construct($typeRace)
    {
        $this->setRace($typeRace);
    }

    public function getTypeRace() { return $this->typeRace; }

    public function setRace($typeRace) { $this->typeRace = $typeRace; }
}

?>