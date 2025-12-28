<?php
class Database {

    private $host = 'localhost';
    private $dbname = 'Unity_Care_CLI';
    private $username = 'root';
    private $password = '';
    private $charset = 'utf8mb4';
    private $conn;
    
    public function connect() {

        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=$this->charset", $this->username, $this->password);
            $this->conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        }catch(PDOException $e) {
            die("connection failed ... " . $e->getMessage());
        }
        
    }
     public function getConnection() {  
        $this->connect();
        return $this->conn;
    }
    
}
