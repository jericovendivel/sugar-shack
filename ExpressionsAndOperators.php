<?php
require "includes/header.php";
require "includes/helpers.php";


// Product list (LOOP will display them)
$products = [
    ["name" => "Crinkle Cookies", "price" => 25],
    ["name" => "NY Cookies", "price" => 35],
    ["name" => "Milk Bars", "price" => 40]
];

// If form is submitted
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $product_index = $_POST['product'];
    $quantity = $_POST['quantity'];

    $selected_product = $products[$product_index];
    $cost = $selected_product["price"];

    // Calculations
    $subtotal = $quantity * $cost;
    $tax = $subtotal * 0.12;
    $total = $subtotal + $tax;
    $discount = ($total > 100) ? $total * 0.05 : 0;
    $final_total = $total - $discount;

    // Save for next page
    session_start();
    $_SESSION['product'] = $selected_product["name"];
    $_SESSION['quantity'] = $quantity;
    $_SESSION['final_total'] = $final_total;

    echo "<h2>Order Calculated!</h2>";
    echo "<p>Subtotal: ₱$subtotal</p>";
    echo "<p>Tax: ₱$tax</p>";
    echo "<p>Discount: ₱$discount</p>";
    echo "<p><strong>Final Total: ₱$final_total</strong></p>";
    echo "<br><br>";
    echo '<p><a href="shorthandEcho.php">Proceed to Summary →</a></p>';

} else { ?>

<h1>Create Your Order</h1>

<form method="POST">

<p><label>Select Product:</label>
<select name="product">
    <?php foreach ($products as $index => $p): ?>
        <option value="<?php echo $index; ?>">
            <?php echo $p["name"] . " - ₱" . $p["price"]; ?>
        </option>
    <?php endforeach; ?>
</select></p>


<p><label>Quantity:</label>
<input type="number" name="quantity" min="1" required></p>

<p><button type="submit" class="button">Compute Total</button></p>

</form>

<?php }

require "includes/footer.php";
?>
