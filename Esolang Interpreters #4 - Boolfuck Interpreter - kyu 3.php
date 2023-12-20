Esolang Interpreters #4 - Boolfuck Interpreter
//////////////////////////////////////////////////////
<?php
function boolfuck(string $code, string $input = ""): string {
  $bit_input = implode(array_map(function ($c) {
    return strrev(str_repeat("0", 8 - strlen($s = decbin(ord($c)))) . $s);
  }, str_split($input)));
  $tape = [0];
  $pointer = 0;
  $input_index = 0;
  $bit_output = "";
  for ($i = 0; $i < strlen($code); $i++) {
    switch ($code[$i]) {
      case "+":
        $tape[$pointer] = intval(!$tape[$pointer]);
        break;
      case ",":
        $tape[$pointer] = isset($bit_input[$input_index++]) ? $bit_input[$input_index - 1] : 0;
        break;
      case "<":
        if (!isset($tape[--$pointer])) $tape[$pointer] = 0;
        break;
      case ">":
        if (!isset($tape[++$pointer])) $tape[$pointer] = 0;
        break;
      case ";":
        $bit_output .= $tape[$pointer];
        break;
      case "[":
        if ($tape[$pointer] === 0) {
          $unmatched = 1;
          while ($unmatched) {
            if ($code[++$i] === "[") $unmatched++;
            if ($code[$i] === "]") $unmatched--;
          }
        }
        break;
      case "]":
        if ($tape[$pointer] !== 0) {
          $unmatched = 1;
          while ($unmatched) {
            if ($code[--$i] === "[") $unmatched--;
            if ($code[$i] === "]") $unmatched++;
          }
        }
        break;
    }
  }
  $chars = array_map(function ($b) {
    return chr(bindec(strrev($b . str_repeat("0", 8 - strlen($b)))));
  }, str_split($bit_output, 8));
  $output = "";
  foreach ($chars as $char) $output .= $char;
  return $output;
}
