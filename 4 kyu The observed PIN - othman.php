<?php
function getPINs($pin) {
    // ┌───┬───┬───┐
    // │ 1 │ 2 │ 3 │
    // ├───┼───┼───┤
    // │ 4 │ 5 │ 6 │
    // ├───┼───┼───┤
    // │ 7 │ 8 │ 9 │
    // └───┼───┼───┘
    //     │ 0 │
    //     └───┘
    $possiblePins = array();
    $keypad = array(
        '1' => array('1', '2', '4'),
        '2' => array('1', '2', '3', '5'),
        '3' => array('2', '3', '6'),
        '4' => array('1', '4', '5', '7'),
        '5' => array('2', '4', '5', '6', '8'),
        '6' => array('3', '5', '6', '9'),
        '7' => array('4', '7',  '8'),
        '8' => array('5', '7', '8', '9', '0'),
        '9' => array('6', '8', '9'),
        '0' => array('8', '0')
    );

    $pin = str_split($pin);
    foreach ($pin as $digit) {
        $temp = [];
        foreach ($keypad[$digit] as $value) {
            if (empty($possiblePins)) array_push($temp, $value);
            else foreach ($possiblePins as $item) array_push($temp, ($item . $value));
        }
        $possiblePins = $temp;
    }
    return array_unique($possiblePins);
}

$res = getPINs("369");
$solution = ["339", "366", "399", "658", "636", "258", "268", "669", "668", "266", "369", "398", "256", "296", "259", "368", "638", "396", "238", "356", "659", "639", "666", "359", "336", "299", "338", "696", "269", "358", "656", "698", "699", "298", "236", "239"];
sort($res);
sort($solution);
var_export($res == $solution);
