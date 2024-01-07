<?php
function high($s) {
    $results = [];
    foreach (array_reverse(explode(" ", strtolower($s))) as $word) {
        $score = 0;
        foreach (str_split($word) as $char) $score += (ord($char) - 96);
        $results[$score] = $word;
    }
    return $results[max(array_keys($results))];
}

var_export(high('aa b'));
