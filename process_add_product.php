<?php
// Include the Inventory class
include 'classes/Inventory.php';

// Create an Inventory object
$inventory = new Inventory();

// Check if form data is submitted
if (isset($_POST['product'], $_POST['quantity'])) {
    // Sanitize the input values to avoid malicious data
    $productName = htmlspecialchars(trim($_POST['product']));
    $newQuantity = (int) $_POST['quantity'];  // Ensures quantity is treated as an integer

    // Validate the input (Optional but recommended)
    if (empty($productName) || $newQuantity <= 0) {
        echo "Invalid input. Please provide a valid product name and quantity.";
        exit;
    }

    // Update the product quantity in the inventory
    $updated = $inventory->updateQuantity($productName, $newQuantity);

    // Redirect or show a success message
    if ($updated) {
        header('Location: index.php'); // Redirect back to the homepage
        exit; // Make sure to stop further execution after redirect
    } else {
        echo "Product not found. Please check the product name.";
    }
} else {
    echo "Please provide both product name and quantity.";
}
?>
