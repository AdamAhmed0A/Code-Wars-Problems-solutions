<?php

function reverseColumn(&$array, $index) {
    for ($i = 0; $i < count($array); $i++) $column[$i] = $array[$i][$index];
    $column = array_reverse($column);
    for ($i = 0; $i < count($array); $i++) $array[$i][$index] = $column[$i];
    return $array;
}

function flippingMatrix($matrix) {
    $Length = sizeOf($matrix);
    $n = floor($Length / 2);
    $smallMat = array_fill(0, $n, $n > 1 ? array_fill(0, $n, 0) : $matrix[0][0]);
    $currentMax = 0;
    $prevMax = 0;
    while (true) {
        $sum = 0;
        foreach ($matrix as &$row) {
            for ($i = 0; $i < $Length; $i++) {
                $cell = $row[$i];
                if ($cell < $row[$Length - 1]) $row = array_reverse($row);
                if ($cell < $matrix[$Length - 1][$i]) reverseColumn($matrix, $i);
                echo "start($i): \n";
                echo json_encode($matrix, JSON_PRETTY_PRINT);
                echo "end($i)\n";
            }
        }
        if ($n > 1) {
            for ($i = 0; $i < $n; $i++) {
                for ($j = 0; $j < $n; $j++) $smallMat[$i][$j] = $matrix[$i][$j];
                $sum += array_sum($smallMat[$i]);
            }
        } else {
            $smallMat = $matrix[0][0];
            $sum = ($matrix[0][0]);
        }
        echo "out of loop" . json_encode($smallMat, JSON_PRETTY_PRINT) . "\n";
        if ($sum >= $currentMax) {
            $prevMax = $currentMax;
            $currentMax = $sum;
        }
        print_r("After: sum: $sum\nprevMax: $prevMax\ncurrMax: $currentMax\n");
        if ($prevMax == $currentMax) return json_encode(["res" => $smallMat, "sum" => $sum], JSON_PRETTY_PRINT);
    }
}
$matrix = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12],
    [13, 14, 15, 16]
];
// $matrix = [
//     [1, 2,],
//     [3, 4]
// ];
var_export(flippingMatrix($matrix));
