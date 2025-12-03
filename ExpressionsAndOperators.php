<?php
require "includes/header.php";
require "includes/helpers.php";
require "includes/stocks.php";   // ← NEW (load products)

session_start();

// Convert stocks array into dropdown usable array
$products = [];
foreach ($sugon_products as $name => $info) {
    $products[] = ["name" => $name, "price" => $info["price"]];
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $index = $_POST['product'];
    $quantity = (int) $_POST['quantity'];

    $product = $products[$index]["name"];
    $price = $products[$index]["price"];

    $subtotal = $quantity * $price;
    $tax = $subtotal * 0.12;
    $total = $subtotal + $tax;
    $discount = ($total > 100) ? $total * 0.05 : 0;
    $final_total = $total - $discount;

    $_SESSION['product'] = $product;
    $_SESSION['quantity'] = $quantity;
    $_SESSION['final_total'] = $final_total;

    echo "<h2>Order Calculated!</h2>";
    echo "<p>Subtotal: ₱$subtotal</p>";
    echo "<p>Tax: ₱$tax</p>";
    echo "<p>Discount: ₱$discount</p>";
    echo "<p><strong>Total: ₱$final_total</strong></p>";
    echo "<p><a href='shorthandEcho.php'>Proceed →</a></p>";

} else { ?>

<h1>Create Your Order</h1>

<form method="POST">
    <p><label>Select Product:</label><br>
    <select name="product">
        <?php foreach ($products as $i => $p): ?>
            <option value="<?=$i?>"><?=$p["name"]?> – ₱<?=$p["price"]?></option>
        <?php endforeach; ?>
    </select></p>

    <p><label>Quantity:</label>
    <input type="number" name="quantity" min="1" required></p>

    <p><button type="submit">Compute Total</button></p>
</form>

<?php }

require "includes/footer.php";
?>
