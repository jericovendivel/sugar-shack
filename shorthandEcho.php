<?php
require "includes/header.php";
require "includes/helpers.php";

session_start();

$store_name = "Sugon Snack";
$product = $_SESSION['product'] ?? "No product";
$quantity = $_SESSION['quantity'] ?? 0;
$total = $_SESSION['final_total'] ?? 0;
$thank_you = "Thank you for supporting local sweets!";
?>

<h1><?= $store_name ?></h1>

<h2>Order Summary</h2>

<p><strong>Product:</strong> <?= $product ?></p>
<p><strong>Quantity:</strong> <?= $quantity ?></p>
<p><strong>Total:</strong> ₱<?= $total ?></p>

<p><?= $thank_you ?></p>
<br>
<p><a href="typejuggling.php">View System Info →</a></p>

<?php require "includes/footer.php"; ?>
