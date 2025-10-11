<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header('Content-Type: application/json');

    $quantity          = isset($_POST['quantity']) ? intval($_POST['quantity']) : 0;
    $discount_amount   = isset($_POST['discount_amount']) ? floatval($_POST['discount_amount']) : 0;
    $discounted_amount = isset($_POST['discounted_amount']) ? floatval($_POST['discounted_amount']) : 0;
    $amount_given      = isset($_POST['amount_given']) ? floatval($_POST['amount_given']) : 0;

    $change = $amount_given - $discounted_amount;

    echo json_encode([
        'total_quantity'   => $quantity,
        'total_discount'   => number_format($discount_amount, 2, '.', ''),
        'total_discounted' => number_format($discounted_amount, 2, '.', ''),
        'change'           => number_format($change, 2, '.', ''),
    ]);
}
