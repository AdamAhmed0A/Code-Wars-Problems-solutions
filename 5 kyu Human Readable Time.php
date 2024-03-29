<?php
function human_readable($seconds) {
    $second = floor($seconds % 60);
    $minutes = floor(($seconds % 3600) / 60);
    $hours = floor($seconds / 3600);
    return sprintf("%02d:%02d:%02d", $hours, $minutes, $second);
  // %02d -> Means at least 2 digits in the exact postion 
}
