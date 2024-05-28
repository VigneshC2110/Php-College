<?php

$config = require "/home/dckap/Documents/Php task/config.php";
$databaseConnection = new DatabaseConnection($config);
$conn = $databaseConnection->dbConnection();

class DatabaseConnection
{
    public $connection;
    
    public function __construct($config)
    {
        $this->connection = new mysqli($config["host"], $config["username"], $config["password"], $config["dbname"]);
        
        if ($this->connection->connect_error) {
            throw new Exception("Connection failed: " . $this->connection->connect_error);
        }
    }
    
    public function dbConnection()
    {
        return $this->connection;
    }
}
?>
