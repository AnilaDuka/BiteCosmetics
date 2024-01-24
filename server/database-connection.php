<?php

class DatabaseConnection {
    private $conn;

    public function __construct($server = "localhost", $username = "root", $password = "", $database = "testdb") {
        $this->conn = new mysqli($server, $username, $password, $database);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }

        echo "Connected successfully";
    }

    public function getConnection() {
        return $this->conn;
    }
}

$database = new DatabaseConnection();
$conn = $database->getConnection();

?>
