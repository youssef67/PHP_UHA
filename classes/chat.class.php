<?php

class Chat {

    private String $prenom;
    private String $couleur;
    private int $age;
    private bool $male = false;
    

    public function __construct(String $prenom,String $couleur,String $sexe, $age) {
        $this->prenom = $prenom;
        $this->couleur = $couleur;
        $this->age = $age;
        $this->set_sexe($sexe);
    }

    // Getters
    public function get_prenom(): String {
        return $this->prenom;
    }

    public function get_couleur(): String {
        return $this->couleur; 
    }

    public function get_identite(): bool {
        return "Mon chat s'appelle " . $this->prenom . " et il est de couleur " . $this->couleur;
    }

    public function get_sexe(): bool {
        return $this->male; 
    }

    public function get_age(): int {
        return $this->age;
    }

    // Setters
    public function set_sexe(String $sexe) {
        if ($sexe == "male") 
            $this->male = !$this->male;
    }

    // Fonctions de traitements 
    public function allowed_together(Chat $chat): bool {
        return $chat->get_sexe() != $this->get_sexe() ? true : false ;
    }
}
?>