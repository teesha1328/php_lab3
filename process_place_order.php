<?php
// Include necessary classes
include 'classes/Inventory.php';
include 'classes/Order.php';
include 'classes/Sales.php';

// Create instances of the classes
$inventory = new Inventory();
$order = new Order($_POST['customer_name']);
$sales = new Sales();

// Check if form data is submitted
if (isset($_POST['products'])) {
    $products = $_POST['products'];

    // Process each product in the order
    foreach ($products as $product) {
        // Retrieve product details from the inventory (just an example, replace with actual product data retrieval)
        $productDetails = ['name' => $product, 'price' => 10, 'quantity' => 1]; // Placeholder values

        // Add product to the order
        $order->addProduct($productDetails['name'], $productDetails['price'], $productDetails['quantity']);
    }

    // Process the order and update inventory
    $totalPrice = $order->processOrder($inventory);
    $sales->addSale($totalPrice);

    // Display order summary
    echo "Order for " . $order->generateOrderSummary()['customer_name'] . " is placed successfully!";
    echo "Total: $" . $totalPrice;
    exit();
}
?>
