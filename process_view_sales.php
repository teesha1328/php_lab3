<?php
// Include the Sales class
include 'classes/Sales.php';

// Create an instance of the Sales class
$sales = new Sales();

// Get the total sales
$totalSales = $sales->getTotalSales();

// Display the sales report
echo "Total Sales: $" . $totalSales;
exit();
?>
