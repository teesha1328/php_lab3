<?php
class Inventory {
    private $products = [];
     
    //Add quantity of the existing product
    public function addProduct($name, $price, $quantity) {
        foreach ($this->products as &$product) {
            if ($product['name'] === $name) {
                // Product exists, so just update the quantity
                $product['quantity'] += $quantity;
                return;
            }
        }
        
        // If product doesn't exist, add it
        $this->products[] = [
            'name' => $name,
            'price' => $price,
            'quantity' => $quantity
        ];
    }

    // Update quantity (reduce stock) when an order is placed
    public function updateQuantity($name, $quantity) {
        foreach ($this->products as &$product) {
            if ($product['name'] === $name) {
                echo "🔄 Before update: " . $product['quantity'] . "<br>";
                if ($product['quantity'] >= $quantity) {
                    $product['quantity'] -= $quantity;
                    echo "✅ After update: " . $product['quantity'] . "<br>";
                    return true;
                } else {
                    echo "❌ Not enough stock for {$name}.<br>";
                    return false;
                }
            }
        }
        echo "❌ Product {$name} not found.<br>";
        return false;
    }
     

    // Get current inventory status
    public function getInventory() {
        return $this->products;
    }


    
}
?>
