<?php


class connect{

    private $hostname = "db5005705631.hosting-data.io";
    private $username = "dbu2209383";
    private $password = "aundc2021";
    private $database = "dbs4801536";
    private $conn;

    public function __construct() {
        
    $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->database)or die("MySQL Connection Error");
     
}
    public function getConn(){
        echo "Connected";
        return $this->conn;
        
    }
    
}

 