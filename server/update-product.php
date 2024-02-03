<?php
session_start();

if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in'] || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

include('database-connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $product_id = $_POST['product_Id'];
    $product_name = $_POST['product_name'];
    $product_description_short = $_POST['product_description_short'];
    $product_description_long = $_POST['product_description_long'];
    $product_price = $_POST['product_price'];


    $stmt = $conn->prepare("UPDATE products SET product_name = ?, product_description_short = ?, product_description_long = ?, product_price = ? WHERE product_Id = ?");
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }
    
    $stmt->bind_param("ssssd", $product_name, $product_description_short, $product_description_long, $product_price, $product_id);
    
    if ($stmt->execute()) {
        header("Location: ../single-product.php?product_Id=" . $product_id);
        exit();
    } else {
        echo "Error updating product: " . $stmt->error;
    }
} else {
    header("Location: ../shop.php");
    exit();
}
?>
