<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    include("Quadratic-Equation.php");
    $a = $_GET["a"];
    $b = $_GET["b"];
    $c = $_GET["c"];

    $equation = new QuadraticEquation($a, $b, $c);
    $delta = $equation->getDiscriminant();
    if ($delta > 0) {
        echo "r1 = " . $equation->getRoot1();
        echo "<br>";
        echo "r2 = " . $equation->getRoot2();
    } elseif ($delta == 0) {
        echo "r1 = r2 = " . $equation->getRoot1();
    } else {
        echo "The equation has no roots";
    }
}