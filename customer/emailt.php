<?php
// Get the order details
$order_id = $_POST["o_id"];
$product_name = $_POST["name"];
$quantity = $_POST["o_qty"];
$price = $_POST["o_price"];
$total_price = $quantity * $price;

// Get the user's email address
$email = $_POST["c_email"];

// Send the email
$subject = "Order Confirmation";
$message = "
Thank you for your order!

Your order details are as follows:

Order ID: $order_id
Product Name: $product_name
Quantity: $quantity
Price: $price
Total Price: $total_price

Your order will be shipped to the following address:

[User's address]

Thank you for shopping with us!
";

mail($email, $subject, $message);
?>