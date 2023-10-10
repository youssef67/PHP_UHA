<?php

class User {

    private $table = "users";
    private $id = "";

    public function __construct($id = "empty") {
        if ($id != "empty") $this->id = $id;
    }


    public function selectAll() {
        $conn = new Database();
        return $conn->executeRequest("SELECT * FROM `" . $this->table . "`");
    }

    public function selectOne($col, $value) {
        $conn = new Database();
        return $conn->selectOne($this->table, $col, $value);
    }

    public function insert($firstname, $lastname, $identifiant, $password, $userRole) {
        $conn = new Database();
        
        $fieldsValues = "(`firstname`, `lastname`, `identifiant`, `password`, `user_role`)";
        $values = "('". $firstname ."','". $lastname ."','". $identifiant ."','". $password . "','" . $userRole . "')";

        $userId = $conn->insert($this->table, $fieldsValues,  $values);
        return $this->selectOne("user_id", $userId);    
    }

    public function update() {

    }

    public function checkIfAdmin($identifiant, $password) {
        $conn = new Database();

        $user = $conn->executeRequest("SELECT * FROM users WHERE identifiant = '" . $identifiant . "'");
        return ($user[0][5] == $password && $user[0][4] == $identifiant) ? true : false;  
    }


}


?>