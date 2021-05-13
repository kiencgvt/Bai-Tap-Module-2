<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $price = $_REQUEST["price"];
    $percent = $_REQUEST["percent"];
}
$discountAmount = $price * $percent * 0.01;
$discountPrice = $price - $discountAmount;
echo "Discount Amount: $discountAmount <br>
Discount Price: $discountPrice";