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
<form method="post">
    Inventment Amount <input type="number" name="money"></br>
    Yearly Interest Rate <input type="number" name="percent"></br>
    Number of Years <input type="number" name="year"></br>
    <input type="submit" value="Calculate">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $money = $_POST["money"];
    $percent = $_POST["percent"];
    $year = $_POST["year"];
}
for ($i = 0; $i < $year; $i++) {
    $moneyFuture = $money + $money * $percent / 100;
    $money = $moneyFuture;
}
echo $moneyFuture;
?>
</body>
</html>
