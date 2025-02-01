<?php
require_once "classes/inventory.php";
require_once "classes/order.php";


error_reporting(E_ALL);
ini_set('display_errors', 1);

$inventory = new Inventory();
$inventory->addProduct("Apple", 2, 100);
$inventory->addProduct("Banana", 1.5, 50);

print_r($inventory->getInventory());




// Add more of the same product
$inventory->addProduct("Apple", 2, 20);  // Apple now has 120 in stock

// Place an order
$order = new Order("Teesha");
$order->addProduct("Apple", 2, 5);  // 5 apples
$order->addProduct("Banana", 1.5, 3);  // 3 bananas
$order->addProduct("Orange", 3, 2);  // Orange does not exist in inventory
print_r($order->generateOrderSummary());
print_r($inventory->getInventory());

$totalPrice = $order->processOrder($inventory);

if ($totalPrice !== false) {
    echo "✅ Total Price: " . $totalPrice . "<br>";
    print_r($order->generateOrderSummary());
}

// Checking the inventory after the order is processed
echo "<br><br>🛒 Updated Inventory:<br>";
print_r($inventory->getInventory());
?>
