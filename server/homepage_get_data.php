<?php
require_once("database-connection.php");

$sql = "SELECT * FROM homepage_content";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $content = $result->fetch_assoc();
} else {
    $content = array();
}

$conn->close();
?>
