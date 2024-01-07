<?php
function fib($n, &$memo = []) {
    if ($n >= 0 && $n <= 2) return 1;
    if (!empty($memo[$n])) return $memo[$n];
    $memo[$n] = fib($n - 1, $memo) + fib($n - 2, $memo);
    return $memo[$n];
}

function productFib($n) {
    $res = [];
    for ($i = 0; $i < $n; ++$i) {
        $fib_i = fib($i);
        $fib_j = fib($i + 1);
        $product = ($fib_i * $fib_j);
        if ($product == $n) return [$fib_i, $fib_j, true];
        elseif ($product < $n) $res[0] = $fib_j;
        elseif ($product > $n) {
            $res[1] = $fib_j;
            break;
        }
    }
    return array_merge($res, [false]);
}

var_export(productFib(800));

<----- Another Solution By Frisky ----->
    function productFib($prod) {
    if ($prod < 0) return [];
    $num1 = 0;
    $num2 = 1;
    
    while($num1 * $num2 < $prod){
        $temp = $num1 + $num2;
        $num1 = $num2;
        $num2 = $temp;
    }
     return [$num1, $num2, $num1 * $num2 === $prod];
}
