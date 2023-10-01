<?php

class Combattant {

    private String $prenom;
    private int $sante;
    private Arme $arme;
    private Armure $armure;
    private int $force;
    private int $experience;
    private bool $passageExperience;
    private Race $race;
    private int $gainExperienceAttaque;
    private bool $isDead; 

    public function __construct($prenom,Arme $arme, Armure $armure,Race $race)
    {
        $this->setPrenom($prenom);
        $this->setArme($arme);
        $this->setArmure($armure);
        $this->setRace($race);

        $this->setForce(5, $arme);
        $this->setSante(100, $armure);
        $this->experience = 0;
        $this->passageExperience = false;
        $this->gainExperienceAttaque = 15;
        $this->isDead = false;

    }
        
    // Getters
    public function getPrenom() { return $this->prenom; }
    public function getArme() { return $this->arme; }
    public function getExperience() { return $this->experience; }
    public function getArmure() { return $this->armure; }
    public function getRace() { return $this->race; }
    public function getSante() { return $this->sante;}
    public function getForce() { return $this->force; }
    public function getPassageExperience() { return $this->passageExperience; }
    public function getGainExperienceAttaque() { return $this->gainExperienceAttaque; }
    public function getIsDead() { return $this->isDead; }

    //Setters
    public function setPrenom($prenom) { $this->prenom = $prenom; }
    public function setArme($arme) { $this->arme = $arme; }
    public function setArmure($armure) {$this->armure = $armure; }
    public function setRace($race) { $this->race = $race; }
    public function setIsDead() { $this->isDead = true; }

 
    public function setForce($force, $arme) {
        $this->force = $force + $arme->getBuffArme();
    }

    public function setSante($sante, $armure) {
        $this->sante = $sante + $armure->getBuffArmure();
    }

    public function subieUneAttaque($forceAttaque) {
        $this->sante -= $forceAttaque;

        if ($this->sante > 0) {
            $this->experience += 25;
    
            if ($this->experience > 100) {
                $this->force += 5;
                $this->experience = 0;
                $this->passageExperience = true;
            }
        
        } else {
            $this->setIsDead();
        }
    }

    public function lanceUneAttaque(Combattant $combattant) {
        $combattant->subieUneAttaque($this->getForce());
        $this->experience += $this->gainExperienceAttaque;

        if ($this->experience > 100) {
            $this->force += 2;
            $this->experience = 0;
            $this->passageExperience = true;
        }
    }

    public function resetPassageExperience() {
        $this->passageExperience = false;
    }

}



?>