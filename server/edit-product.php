<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in'] || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

require_once('database-connection.php');

if (isset($_GET['product_Id'])) {
    $product_id = $_GET['product_Id'];

    $stmt = $conn->prepare("SELECT * FROM products WHERE product_Id = ?");
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();

        include('edit-product-form.php');
    } else {
        header("Location: shop.php");
        exit();
    }
} else {
    header("Location: shop.php");
    exit();
}
?>
