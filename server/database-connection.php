<?php

class DatabaseConnection {
    private $conn;

    public function __construct($server = "localhost", $username = "root", $password = "", $database = "bitecosmetics") {
        $this->conn = new mysqli($server, $username, $password, $database);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }

        // echo "<script>console.log('Connected Successfully');</script>";
    }

    public function startConnection() {
        return $this->conn;
    }
}

$database = new DatabaseConnection();
$conn = $database->startConnection();

?>
