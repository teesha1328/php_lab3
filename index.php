<?php
// Include classes and initiate objects as needed
include 'classes/Inventory.php';
$inventory = new Inventory();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Store Management System</title>
</head>
<body>
    <h1>Welcome to the Grocery Store Management System</h1>
    <h2>Forms:</h2>
    <ul>
        <li><a href="forms/add_product.php">Add New Product</a></li>
        <li><a href="forms/update_quantity.php">Update Product Quantity</a></li>
        <li><a href="forms/place_order.php">Place an Order</a></li>
        <li><a href="forms/view_sales.php">View Sales</a></li>
        <li><a href="forms/search_feature.php">Search Products</a></li>
    </ul>
</body>
</html>
