<?php

class ProductManager {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getProductsByCategory($category) {
        $stmt = $this->conn->prepare("SELECT * FROM products WHERE product_category = ?");
        $stmt->bind_param("s", $category);
        $stmt->execute();

        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }
}

include('database-connection.php');

$productManager = new ProductManager($conn);

$productsOralCare = $productManager->getProductsByCategory('Oral Care');
$productsPersonalCare = $productManager->getProductsByCategory('Personal Care');
$productsBundles = $productManager->getProductsByCategory('Bundles');
$productsGiftSets = $productManager->getProductsByCategory('Gift Sets');


?>
