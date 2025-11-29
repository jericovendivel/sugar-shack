<?php

function computeDiscount($amount, $rate = 0.05) {
    return $amount * $rate;
}

function printList($items) {
    foreach ($items as $i) {
        echo "<li>$i</li>";
    }
}
