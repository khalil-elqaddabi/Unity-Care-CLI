<?php
class DAtabase {

    private $host = '??????????';
    private $dbname = '??????????';
    private $username = '??????????
';
    private $password = '??????????
';
    private $charset = 'utf8mb4';
    private $conn;
    
    function connect() {

        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=$this->charset", $this->username, $this->password);
            $this->conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        }catch(PDOException $e) {
            die("connection failed ... " . $e->getMessage());
        }
        
    }
    
}
