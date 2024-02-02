<?php

include_once 'database-connection.php';
class ContactRepository {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function saveContact($name, $email, $subject, $message) {
        $stmt = $this->conn->prepare("INSERT INTO contact (name, email, subject, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $subject, $message);

        if ($stmt->execute()) {
            return true;
        } else {
            return false; 
        }
    }

    public function getAllSubmissions() {
        $result = $this->conn->query("SELECT * FROM contact");
        $submissions = [];

        while ($row = $result->fetch_assoc()) {
            $submissions[] = $row;
        }

        return $submissions;
    }
}

$contactRepository = new ContactRepository($conn);
?>