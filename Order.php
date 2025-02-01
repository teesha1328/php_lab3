<?php
class Order {
    private $customerName;
    private $productsOrdered = [];
    private $totalPrice = 0;

    public function __construct($customerName) {
        $this->customerName = $customerName;
    }

    public function addProduct($name, $price, $quantity) {
        $this->productsOrdered[] = [
            'name' => $name,
            'price' => $price,
            'quantity' => $quantity
        ];
        $this->totalPrice += $price * $quantity;
    }

    public function processOrder($inventory) {
        foreach ($this->productsOrdered as $orderItem) {
            $inventory->updateQuantity($orderItem['name'], $orderItem['quantity']);
        }
        return $this->totalPrice;
    }

    public function generateOrderSummary() {
        return [
            'customer_name' => $this->customerName,
            'total_price' => $this->totalPrice,
            'products_ordered' => $this->productsOrdered
        ];
    }
}
?>
