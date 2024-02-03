<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

*{
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
}


.form-edit {
    max-width: 600px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    color: #333;
}

form {
    display: grid;
    gap: 15px;
}

label {
    font-weight: bold;
    color: #555;
}

input,
textarea {
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #ddd;
    border-radius: 4px;
    margin-top: 5px;
}

textarea {
    resize: none;
    height: 100px;
}

input[type="submit"] {
    background-color: black;
    color: white;
    cursor: pointer;
    height: 50px;
    border-radius: 8px;
}
        </style>
</head>
<body>
    <div class="form-edit">
        <h2>Edit Product</h2>
        <form action="server/update-product.php" method="post">
            <input type="hidden" name="product_Id" value="<?php echo $product['product_Id']; ?>">
            <label for="product_name">Product Name:</label>
            <input type="text" id="product_name" name="product_name" value="<?php echo $product['product_name']; ?>" required><br>

            <label for="product_description_short">Product short Description:</label>
            <textarea id="product_description_short" name="product_description_short" required><?php echo $product['product_description_short']; ?></textarea><br>

            <label for="product_description_long">Product long Description:</label>
            <textarea id="product_description_long" name="product_description_long" required><?php echo $product['product_description_long']; ?></textarea><br>

            <label for="product_price">Product Price:</label>
            <input type="number" id="product_price" name="product_price" value="<?php echo $product['product_price']; ?>" required><br>


            <input type="submit" value="Update Product">
        </form>
    <div>
</body>
</html>
