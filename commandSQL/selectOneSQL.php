<?php 
    if (isset($_POST["menu-select-one"]) && !empty($_POST["menu-select-one"])) {
        $fieldSearch = $_POST["menu-select-one"];
        $value = $_POST["value-select-one"];
    } else {
        $fieldSearch = "id";
        $value = $lastInsertId;
    }
    
    switch ($fieldSearch) {
        case "firstname":
            $field = "firstname";
            $user = $database->selectEntryByValue($field, $value);
            break;
        case "id":
            $field = "user_id";
            $user = $database->selectEntryByValue($field, $value);
            break;
        
        case "lastname":
            $field = "lastname";
            $user = $database->selectEntryByValue($field, $value);
            break;
        default:
            echo "valeur non connu";    
    }
?>