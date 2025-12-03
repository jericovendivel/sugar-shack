<?php
// -------------------
// General Helpers
// -------------------

// Basic discount calculator
function computeDiscount(float $amount, float $rate = 0.05): float {
    return $amount * $rate;
}

// Loop helper for output
function printList(array $items): void {
    foreach ($items as $i) {
        echo "<li>$i</li>";
    }
}

// -------------------
// Stock-related Helpers
// -------------------

/**
 * Returns "YES" if stock < 10, otherwise "NO"
 */
function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "YES" : "NO";
}

/**
 * Calculates total value of stock
 */
function get_total_value(float $price, int $qty): float {
    return $price * $qty;
}

/**
 * Calculates tax due on stock
 */
function get_tax_due(float $price, int $qty, int $tax = 0): float {
    return ($price * $qty) * ($tax / 100);
}
