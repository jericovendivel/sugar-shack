<?php
require "includes/header.php";

$price = 74;
$quantity = 20;

$total = $price * $quantity;

$bool_add = true;
$concat = "Candy";

$subtotal = 120 + 30;
$tax = $subtotal * 0.12;
$total_with_tax = $subtotal + $tax;
?>

<h1>Sugar Shack</h1>
<h2>Type Juggling Demo</h2>

<p>Price: <?=$price?></p>
<p>Quantity: <?=$quantity?></p>
<p>Total (price × quantity): <?=$total?></p>

<p>Sample Boolean: <?=$bool_add ? "true" : "false"?></p>
<p>Concat Example: <?=$concat?></p>

<p>Subtotal: <?=$subtotal?></p>
<p>Tax (12%): <?=$tax?></p>
<p>Total with Tax: <?=$total_with_tax?></p>

<?php require "includes/footer.php"; ?>
