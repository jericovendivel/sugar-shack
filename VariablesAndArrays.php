<?php
require "includes/header.php";
require "includes/helpers.php";

$store_name = "Sugar Shack";
$owner = "Vendivel Jerico";
$items_available = 120;

$best_sellers = ["NY Cookies", "Milk Bars", "Crinkles", "Chorp Bars"];
$branches = ["Manila", "Cebu", "Taguig", "Davao"];
?>

<h1><?=$store_name?></h1>
<p><strong>Owner:</strong> <?=$owner?></p>
<p><strong>Items Available:</strong> <?=$items_available?></p>

<h2>Best Sellers</h2>
<ul>
<?php foreach ($best_sellers as $item): ?>
    <li><?=$item?></li>
<?php endforeach; ?>
</ul>

<h2>Branches</h2>
<ul>
<?php foreach ($branches as $branch): ?>
    <li><?=$branch?></li>
<?php endforeach; ?>
</ul>

<h2>Ready to Order?</h2>
<p><a href="ExpressionsAndOperators.php">Start Ordering →</a></p>

<p><a href="StockMonitoring.php">Check Stock Levels →</a></p>

<?php require "includes/footer.php"; ?>
