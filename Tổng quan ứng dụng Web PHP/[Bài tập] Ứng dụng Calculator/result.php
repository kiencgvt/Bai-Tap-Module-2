<?php
if ($_SERVER["REQUEST_METHOD"] = "POST") {
    $fisrtNumber = $_REQUEST["numberOne"];
    $secondNumber = $_REQUEST["numberTwo"];
    $operator = $_REQUEST["pheptinh"];
}
$result = null;
echo $fisrtNumber." ".$operator." ".$secondNumber." = ";
if ($operator === "+") {
    $result = $fisrtNumber + $secondNumber;
}
elseif ($operator === "-") {
    $result = $fisrtNumber - $secondNumber;
}
elseif ($operator === "*") {
    $result = $fisrtNumber * $secondNumber;
}
elseif ($operator === "/") {
    if ($secondNumber != 0) {
        $result = $fisrtNumber / $secondNumber;
    }
    else {
        $result = "Vô cùng";
    }
}
echo $result;
