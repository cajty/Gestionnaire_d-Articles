<?php
class Db
{
    protected $dbConn;
    protected $dbHost = "localhost";
    protected $dbUser = "root";
    protected $dbPass = "";
    protected $dbName = "aretec";

    function connect()
    {
        try {
            $this->dbConn = new PDO("mysql:host=$this->dbHost;dbname=$this->dbName", $this->dbUser, $this->dbPass);
            return $this->dbConn;
        } catch (PDOException $e) {
            return "MySQL error: " . $e->getMessage();
        }
    }
}

?>