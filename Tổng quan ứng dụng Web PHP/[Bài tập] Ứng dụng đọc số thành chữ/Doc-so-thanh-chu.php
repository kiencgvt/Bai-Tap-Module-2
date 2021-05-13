<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    Nhập vào số
    <input type="number" name="number">
    <input type="submit" value="Chuyển đổi">
</form>
<?php
$number = null;
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $number = +$_REQUEST["number"];
}
if ($number < 10 && $number >= 0) {
    switch ($number) {
        case 0:
            echo "Zero";
            break;
        case 1:
            echo "One";
            break;
        case 2:
            echo "Two";
            break;
        case 3:
            echo "Three";
            break;
        case 4:
            echo "Four";
            break;
        case 5:
            echo "Five";
            break;
        case 6:
            echo "Six";
            break;
        case 7:
            echo "Seven";
            break;
        case 8:
            echo "Eight";
            break;
        case 9:
            echo "Nine";
            break;
    }
}
elseif ($number < 20) {
    switch ($number - 10) {
        case 0:
            echo "Ten";
            break;
        case 1:
            echo "Eleven";
            break;
        case 2:
            echo "Twelve";
            break;
        case 3:
            echo "Thirteen";
            break;
        case 4:
            echo "Fourteen";
            break;
        case 5:
            echo "Fifteen";
            break;
        case 6:
            echo "Sixteen";
            break;
        case 7:
            echo "Seventeen";
            break;
        case 8:
            echo "Eighteen";
            break;
        case 9:
            echo "Nineteen";
            break;
    }
}
elseif ($number < 100) {
    $tens = floor($number / 10);
    $ones = $number % 10;
    switch ($tens) {
        case 2:
            echo "Twenty";
            break;
        case 3:
            echo "Thirty";
            break;
        case 4:
            echo "Forty";
            break;
        case 5:
            echo "Fifty";
            break;
        case 6:
            echo "Sixty";
            break;
        case 7:
            echo "Seventy";
            break;
        case 8:
            echo "Eighty";
            break;
        case 9:
            echo "Ninety";
            break;
    }
    switch ($ones) {
        case 1:
            echo " One";
            break;
        case 2:
            echo " Two";
            break;
        case 3:
            echo " Three";
            break;
        case 4:
            echo " Four";
            break;
        case 5:
            echo " Five";
            break;
        case 6:
            echo " Six";
            break;
        case 7:
            echo " Seven";
            break;
        case 8:
            echo " Eight";
            break;
        case 9:
            echo " Nine";
            break;
    }
}
elseif ($number < 1000) {
    $onehundreds = floor($number / 100);
    $tens = floor(($number % 100) / 10);
    $ones = $number - $onehundreds * 100 - $tens * 10;
    switch ($onehundreds) {
        case 1:
            echo "One hundred";
            break;
        case 2:
            echo "Two hundred";
            break;
        case 3:
            echo "Three hundred";
            break;
        case 4:
            echo "Four hundred";
            break;
        case 5:
            echo "Five hundred";
            break;
        case 6:
            echo "Six hundred";
            break;
        case 7:
            echo "Seven hundred";
            break;
        case 8:
            echo "Eight hundred";
            break;
        case 9:
            echo "Nine hundred";
            break;
    }

    switch ($tens) {
        case 2:
            echo " and twenty";
            break;
        case 3:
            echo " and thirty";
            break;
        case 4:
            echo " and forty";
            break;
        case 5:
            echo " and fifty";
            break;
        case 6:
            echo " and sixty";
            break;
        case 7:
            echo " and seventy";
            break;
        case 8:
            echo " and eighty";
            break;
        case 9:
            echo " and ninety";
            break;
    }
    switch ($ones) {
        case 1:
            echo " one";
            break;
        case 2:
            echo " two";
            break;
        case 3:
            echo " three";
            break;
        case 4:
            echo " four";
            break;
        case 5:
            echo " five";
            break;
        case 6:
            echo " six";
            break;
        case 7:
            echo " seven";
            break;
        case 8:
            echo " eight";
            break;
        case 9:
            echo " nine";
            break;
    }

}
?>
</body>
</html>