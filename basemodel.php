<?php

require_once "config.php";



abstract class BaseModel {

    protected PDO $conn;
    protected string  $table; 

    public function __construct(PDO $conn){

        $this->conn = $conn;
        $this->table = $this->getTableName();
    }

    
    abstract protected function getTableName();

    public function getAll(){
        $qry= "SELECT * FROM $this->table";

        $stmt = $this->conn->prepare($qry);
         $stmt->execute();

        $result =$stmt->fetchAll();
        print_r($result);
    }
}