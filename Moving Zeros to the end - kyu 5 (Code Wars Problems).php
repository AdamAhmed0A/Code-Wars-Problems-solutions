Write an algorithm that takes an array and moves all of the zeros to the end, preserving the order of the other elements.

moveZeros([false,1,0,1,2,0,1,3,"a"]) // returns[false,1,1,2,1,3,"a",0,0]


/////////////////////////////////////////////////////
<?php
function moveZeros(array $items): array {
    // list 
    $zeroList = [];
    $nonZeroList = [];

    foreach ($items as $number) {
        // Check if the number is numeric and not equal to 0
        if (is_numeric($number) && intval($number) != 0) {
            $nonZeroList[] = $number;
        } elseif ($number === 0 || $number === 0.0) {
            $zeroList[] = 0;
        } else {
            $nonZeroList[] = $number;
        }
    }

    return array_merge($nonZeroList, $zeroList);
}
