<?php
// Include the Inventory class
include 'classes/Inventory.php';

// Create an instance of the Inventory class
$inventory = new Inventory();

// Check if search query is submitted
if (isset($_GET['search'])) {
    $searchQuery = $_GET['search'];
    $products = $inventory->getInventory(); // Get the full inventory

    // Filter products based on the search query
    $filteredProducts = [];
    foreach ($products as $product) {
        if (stripos($product['name'], $searchQuery) !== false) {
            $filteredProducts[] = $product;
        }
    }

    // Display filtered products
    if (count($filteredProducts) > 0) {
        echo "Search Results for: " . $searchQuery . "<br>";
        foreach ($filteredProducts as $product) {
            echo "Product Name: " . $product['name'] . " - Price: $" . $product['price'] . " - Quantity: " . $product['quantity'] . "<br>";
        }
    } else {
        echo "No products found matching: " . $searchQuery;
    }
}
exit();
?>
