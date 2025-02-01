<form action="process_place_order.php" method="POST">
    <label for="customer_name">Customer Name:</label>
    <input type="text" id="customer_name" name="customer_name" required>
    <br>
    <label for="product">Select Products:</label>
    <select id="product" name="products[]" multiple>
        <!-- Populate with product names from inventory -->
    </select>
    <br>
    <button type="submit">Place Order</button>
</form>
