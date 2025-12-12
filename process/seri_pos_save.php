
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //getting data from textboxes
        $item_name              = $_POST['item_name'];
        $quantity               = $_POST['quantity1']; // Matches JS data_string
        $price                  = $_POST['price'];
        $discount_amount        = $_POST['discount_amount'];
        $discounted_amount      = $_POST['discounted_amount'];
        $total_quantity         = $_POST['total_quantity'];
        $total_discount_given   = $_POST['total_discount_given'];
        $total_discounted_given = $_POST['total_discounted_given'];
        $cash_given             = $_POST['cash_given'];
        $change                 = $_POST['change'];
        $discount_option        = $_POST['discount_option'];

        //connecting or calling codes from db_connection file for database connection
        include 'db_connection.php';
        $conn = OpenCon();

        //saving of sales per transaction
        // Note: Inserting '$total_discounted_given' into 'total_discounted_amount' column
        $sql1 = "INSERT INTO salestbl (item_name, quantity, price,
    discount_amount, discounted_amount, total_quantity,
    total_discount_given, total_discounted_amount,
    cash_given, customer_change, discount_option)
    VALUES ('$item_name', '$quantity', '$price',
    '$discount_amount', '$discounted_amount',
    '$total_quantity','$total_discount_given',
    '$total_discounted_given', '$cash_given', '$change',
    '$discount_option')";

        if ($conn->query($sql1) === true) {
            // echo '';
        } else {
            // echo "Error: " . $sql1 . "<br>" . $conn->error;
        }

        //closing the database connection
        $conn->close();

        //return results going to the event listener
        echo json_encode([
            'ok' => 1,
        ]);
}
?>