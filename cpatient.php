<?php
require_once "Person.php";  

class Patient extends Person {

    protected function getTableName(): string {
        return "patients";
    }
}
?>
