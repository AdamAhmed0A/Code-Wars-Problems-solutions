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

// Another Solution by Frisky
function high($x) {
    $list = explode(" ", strtolower($x));
    $maxword = ""; $maxval = 0;
    foreach($list as $a){
        $value = 0;
        for($i = 0; $i < strlen($a); $i++){
            $value += ord($a[$i]) - 96;
        }
        if($value > $maxval){
            $maxval = $value;
            $maxword = $a;
        }
    }
    return $maxword;
}
