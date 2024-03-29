<!-- https://www.codewars.com/kata/57bf599f102a39bb1e000ae5/train/php -->

<?php
function fibs_fizz_buzz($n) {
    if ($n < 0) return [];

    $result = [];
    $num1 = 0;
    $num2 = 1;

    for ($i = 0; $i < $n; $i++) {
        if ($num2 % 3 == 0 && $num2 % 5 == 0) {
            $result[] = "FizzBuzz";
        } elseif ($num2 % 3 == 0) {
            $result[] = "Fizz";
        } elseif ($num2 % 5 == 0) {
            $result[] = "Buzz";
        } else {
            $result[] = $num2;
        }
            $temp = $num1 + $num2;
            $num1 = $num2;
            $num2 = $temp;
    }

    return $result;
}
