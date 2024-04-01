<?php

function parseInt($string) {
    $numbers = array(
        'and' => 0,
        'one' => 1,
        'two' => 2,
        'three' => 3,
        'four' => 4,
        'five' => 5,
        'six' => 6,
        'seven' => 7,
        'eight' => 8,
        'nine' => 9,
        'ten' => 10,
        'eleven' => 11,
        'twelve' => 12,
        'thirteen' => 13,
        'fourteen' => 14,
        'fifteen' => 15,
        'sixteen' => 16,
        'seventeen' => 17,
        'eighteen' => 18,
        'nineteen' => 19,
        'twenty' => 20,
        'thirty' => 30,
        'forty' => 40,
        'fifty' => 50,
        'sixty' => 60,
        'seventy' => 70,
        'eighty' => 80,
        'ninety' => 90,
        'hundred' => 100,
        'thousand' => 1_000,
        'million' => 1_000_000,
    );

    $string = explode(' ', $string);
    foreach ($string as $key => &$item) {
        if (str_contains($item, "-")) {
            $item = explode('-', $item);
            array_splice($string, $key + 1, 0, $item[1]);
            $string[$key] = $item[0];
        }
    }

    $result = 0;
    $skipped = false;

    // foreach ($string as $index => $number) {

    //     // if ($string[$index] == 'hundred') {
    //     //     $result += $numbers[$number] * 100;
    //     // } else if ($string[$index] == 'thousand') {
    //     //     $result += $numbers[$number] * 1_000;
    //     // } else if ($string[$index] == 'million') {
    //     //     $result += $numbers[$number] * 1_000_000;
    //     // }
    //     echo "number: $number" . "\n" . "result: $result" . "\n";

    //     if ($index + 1 < sizeof($string)) {
    //         if ($string[$index + 1] == 'hundred') {
    //             $result += $numbers[$number] * 100;
    //             continue;
    //         } else if ($string[$index + 1] == 'thousand') {
    //             $result += $numbers[$number] * 1_000;
    //             continue;
    //         } else if ($string[$index + 1] == 'million') {
    //             $result += $numbers[$number] * 1_000_000;
    //             continue;
    //         } else {
    //             $result += $numbers[$number];
    //         }
    //     }
    // }

    for ($i = 0; $i < sizeof($string); $i++) {
    }
    return $result;
}

var_export(parseInt("two hundred and two"));
