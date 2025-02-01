<?php
class Sales {
    private $totalSales = 0;

    public function addSale($amount) {
        $this->totalSales += $amount;
    }

    public function getTotalSales() {
        return $this->totalSales;
    }
}
?>
