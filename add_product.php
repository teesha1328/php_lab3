<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product</title>
</head>
<body>
    <h1>Add New Product</h1>
    <form action="process_add_product.php" method="POST">
        <label for="product_name">Product Name:</label>
        <input type="text" id="product_name" name="product_name" required>

        <label for="product_price">Product Price:</label>
        <input type="number" id="product_price" name="product_price" required>

        <label for="product_quantity">Product Quantity:</label>
        <input type="number" id="product_quantity" name="product_quantity" required>

        <button type="submit">Add Product</button>
    </form>
</body>
</html>
