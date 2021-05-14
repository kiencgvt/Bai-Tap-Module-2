<?php
$arr = [4, 2, 3, 1, 5, 6, 7, 8, 9];
function minNumberOfArray($arr) {
    $min = $arr[0];
    $index = 0;
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
            $index = $i;
        }
    }
    return $index;
}
echo minNumberOfArray($arr);
