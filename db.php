<?php
class Db {
    protected $dbConn;
    public $dbHost = "localhost";
    public $dbUser = "root";
    public $dbPass = "fegregeg";
    public $dbName = "artec";

    function connect() {
        try {
            $this->dbConn = new PDO("mysql:host=$this->dbHost;dbname=$this->dbName", $this->dbUser, $this->dbPass);
            $this->dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->dbConn;
        } catch (PDOException $e) {
             "MySQL error: " . $e->getMessage();
        }
    }
}







?>
