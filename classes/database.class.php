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
            if ($requestArray[0] == 'DELETE') $res = true;

            return $res;
        } else {
            return false;
        }     
    }

    public function selectOne($table, $colValue, $value) {
        $query = "SELECT * FROM `" . $table . "` WHERE `" . $colValue . "` = '" . $value . "'";
        $res = $this->executeRequest($query);
        return $res;
    }
    
    public function insert($table, $fieldsValues, $values) {
        $query = "INSERT INTO `" . $table ."` " . $fieldsValues . " VALUES " .$values;
        $res = $this->executeRequest($query);
        return $res;
    }


    //delete
    public function delete($table, $colValue, $value) {
        $query =  "DELETE FROM `" . $table . "` WHERE `" . $colValue . "` = '" . $value . "'";
        $res = $this->executeRequest($query);
        return $res;
    }
}

?>