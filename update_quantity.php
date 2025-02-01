<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product Quantity</title>
</head>
<body>
    <h1>Update Product Quantity</h1>
    <form action="process_update_quantity.php" method="POST">
        <label for="product">Product Name:</label>
        <input type="text" id="product" name="product" required>

        <label for="quantity">New Quantity:</label>
        <input type="number" id="quantity" name="quantity" required>

        <button type="submit">Update Quantity</button>
    </form>
</body>
</html>
