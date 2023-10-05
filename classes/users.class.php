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


}


?>