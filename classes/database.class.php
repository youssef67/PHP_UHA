<?php

class Database {

    private PDO $connection;
    private bool $successRequest;
    
    public function __construct(String $serv="localhost", $db="phpoo", $u="mariadb", $p="mariadb*1") {
        $this->connection = new PDO("mysql:host=$serv;dbname=$db", $u, $p);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function executeRequest(String $req) {

        $requestArray = explode(" ", trim($req));
        $this->successRequest = false;

        if ($requestArray[0] == "SELECT" || $requestArray[0] == "INSERT" || $requestArray[0] == "UPDATE" || $requestArray[0] == "DELETE") {
            $res = $this->connection->query($req);

            if ($requestArray[0] == 'SELECT') $res = $res->fetchAll();
            if ($requestArray[0] == 'INSERT') $res = $this->connection->lastInsertId();

            return $res;
        } else {
            return false;
        }     
    }

    public function selectOne($table, $colValue, $value) {
        $query = "SELECT * FROM `" . $table . "` WHERE `" . $colValue . "` = '" . $value . "'";
        $res = $this->executeRequest($query);
        return $res[0];
    } 

    //insert
    public function insertEntry(String $firstname, String $lastname, String $identifiant, int $password, String $userRole): String|false {
        $query = "INSERT INTO `users`(`firstname`, `lastname`, `identifiant`, `password`, `user_role`) 
        VALUES ('". $firstname ."','". $lastname ."','". $identifiant ."','". $password . "','" . $userRole . "')";
        $entriesStatement = $this->connection->prepare($query);
        $this->executeRequest($query, $entriesStatement);
        return $this->connection->lastInsertId();
    }


    //get
    public function selectEntryByValue(mixed $field, mixed $value) {
        $query = "SELECT * FROM users WHERE ". $field .' = "' . $value . '"';
        $entriesStatement = $this->connection->prepare($query);
        $this->executeRequest($query, $entriesStatement);
        return $entriesStatement->fetchAll();
    }


    //update
    public function updateEntry($id, $firstname, $lastname, $identifiant, $role) {
        $query = "UPDATE `users` SET `firstname`='". $firstname . "', `lastname`= '" . $lastname . "', `user_role`= '" . $role . "', `identifiant`= '" . $identifiant . "' WHERE `user_id`=". $id;
        $entriesStatement = $this->connection->prepare($query);
        $this->executeRequest($query, $entriesStatement);
        return $this->successRequest;
    }

    //delete
    public function deleteEntry($id) {
        $query = "DELETE FROM `users` WHERE `user_id`=" . $id;
        $entriesStatement = $this->connection->prepare($query);
        $this->executeRequest($query, $entriesStatement);
        return $this->successRequest;
    }

    public function checkIfAdmin($identifiant, $password) {
        $query = "SELECT * FROM users WHERE identifiant = '" . $identifiant . "'";
        $entriesStatement = $this->connection->prepare($query);
        $this->executeRequest($query, $entriesStatement);
        $user = $entriesStatement->fetchAll();
        return ($user[0][5] == $password && $user[0][4]) ? true : false;      
    }
}

?>