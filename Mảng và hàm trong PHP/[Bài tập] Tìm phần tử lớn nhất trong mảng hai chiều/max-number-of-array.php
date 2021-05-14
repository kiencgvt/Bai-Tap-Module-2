<?php
$array = [
    [1, 2, 3, 4],
    [5, 6, 32, 8],
    [9, 10, 11, 12]
];
$max = $array[0][0];
for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array[$i]); $j++) {
        if ($array[$i][$j] > $max) {
            $max = $array[$i][$j];
        }
    }
}
echo $max;
