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
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $number = $_REQUEST["number"];
}
$arr = [1 => "one",
    2 => "two",
    3 => "three",
    4 => "four",
    5 => "five",
    6 => "six",
    7 => "seven",
    8 => "eight",
    9 => "nine",
    10 => "ten",
    11 => "eleven",
    12 => "twelve",
    13 => "thirteen",
    14 => "fourteen",
    15 => "fifteen",
    18 => "eighteen",
    20 => "twenty",
    30 => "thirty",
    40 => "forty",
    50 => "fifty",
    80 => "eighty"];
function readOneNumber($number)
{
    global $arr;
    return $arr[$number];
}

function readTwoNumber($number)
{
    global $arr;
    if ($number < 16) {
        return $arr[$number];
    } elseif ($number < 20) {
        if ($number == 18) {
            return $arr[18];
        } else {
            return $arr[$number[1]] . "teen";
        }
    } else {
        if ($number < 60) {
            if ($number % 10 == 0) {
                return $arr[$number];
            } else {
                return $arr[$number[0] * 10] . " " . $arr[$number[1]];
            }
        } else {
            if ($number[0] == 8) {
                if ($number[1] == 0) {
                    return $arr[$number];
                } else {
                    return $arr[$number[0] * 10] . " " . $arr[$number[1]];
                }
            } else {
                if ($number % 10 == 0) {
                    return $arr[$number[0]] . "ty";
                } else {
                    return $arr[$number[0]] . "ty " . $arr[$number[1]];
                }
            }
        }
    }
}

function readThreeNumber($number)
{
    global $arr;
    $twoNumber = $number - $number[0] * 100;
    $stringTwoNumber = readTwoNumber("$twoNumber");
    return $arr[$number[0]] . "hundred and " . $stringTwoNumber;
}

if ($number < 10) {
    echo readOneNumber($number);
} elseif ($number < 100) {
    echo readTwoNumber($number);
} elseif ($number < 1000) {
    echo readThreeNumber($number);
}
?>
</body>
</html>