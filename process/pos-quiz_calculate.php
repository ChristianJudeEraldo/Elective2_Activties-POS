<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header('Content-Type: application/json');

    $price         = isset($_POST['price']) ? floatval($_POST['price']) : 0;
    $quantity      = isset($_POST['quantity']) ? intval($_POST['quantity']) : 0;
    $discount_rate = isset($_POST['discount_rate']) ? floatval($_POST['discount_rate']) : 0;

    $total             = $price * $quantity;
    $discount_amount   = $total * $discount_rate;
    $discounted_amount = $total - $discount_amount;

    echo json_encode([
        'discount_amount'   => number_format($discount_amount, 2, '.', ''),
        'discounted_amount' => number_format($discounted_amount, 2, '.', ''),
    ]);
}
