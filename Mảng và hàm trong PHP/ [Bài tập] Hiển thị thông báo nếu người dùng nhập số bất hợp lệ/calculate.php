<?php
$x = 99;
$y = 0;
function calculate($x, $y) {
    try {
        $tong = $x + $y;
        $hieu = $x - $y;
        $tich = $x * $y;
        $thuong = $x / $y;
        echo "x + y = $tong"."<br>";
        echo "x - y = $hieu"."<br>";
        echo "x * y = $tich"."<br>";
        if ($y !== 0) {
            echo "x / y = $thuong";
        }
        else {
            throw new Exception();
        }
    }
    catch (Exception $e) {
        echo "Message: DIVIDE BY ZERO EXCEPTION!";
    }
}
calculate($x, $y);