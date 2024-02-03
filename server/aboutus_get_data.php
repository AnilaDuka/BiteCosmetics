<?php
include('database-connection.php');

function getAboutUsContent($conn) {
    $query = "SELECT * FROM about_us_content";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Database query failed.");
    }

    return mysqli_fetch_assoc($result);
}

function getIngredients($conn) {
    $query = "SELECT * FROM ingredients";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Database query failed.");
    }

    $ingredients = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $ingredients[] = $row;
    }

    return $ingredients;
}
?>
