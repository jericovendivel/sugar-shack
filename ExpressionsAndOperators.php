<?php
$items = 3;
$cost = 5;
$subtotal = $cost * $items;
$tax = ($subtotal / 100) * 12;
$total = $subtotal + $tax;
$discount = $total * 0.05;
$final_total = $total - $discount;
$isAffordable = $final_total < 28 ? "Good deal!" : "Might be pricey.";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressions & Operators</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<h1>Shopping Cart</h1>

<p>Items: <?php echo $items; ?></p>
<p>Cost per Pack: <?php echo $cost; ?></p>
<p>Subtotal: ₱<?php echo $subtotal; ?></p>
<p>Tax (12%): ₱<?php echo $tax; ?></p>
<p>Total (with tax): ₱<?php echo $total; ?></p>
<p>Discount (5%): ₱<?php echo $discount; ?></p>
<p><strong>Final Total: ₱<?php echo $final_total; ?></strong></p>

<p>Evaluation: <?php echo $isAffordable; ?></p>

</body>
</html>
