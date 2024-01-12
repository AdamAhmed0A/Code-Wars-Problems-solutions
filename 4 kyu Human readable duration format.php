<?php
function format_duration($seconds) {
    $second = floor($seconds); $minutes = floor($second / 60); $hours = floor($minutes / 60); $days = floor($hours / 24); $years = floor($days / 365);
    $second_shown = $second % 60; $minutes_shown = $minutes % 60; $hours_shown = $hours % 24;
    $result = [];
    if($seconds){
        if($years > 0){
            $result[] = "$years " . ($years == 1 ? "year" : "years");
        }
      $remaining_days = $days - ($years * 365);
        if($remaining_days > 0){
            $result[] = "$remaining_days " . ($remaining_days == 1 ? "day" : "days");
        }
    
        if($hours_shown > 0){
            $result[] = "$hours_shown " . ($hours_shown == 1 ? "hour" : "hours");
        }
    
        if($minutes_shown > 0){
            $result[] = "$minutes_shown " . ($minutes_shown == 1 ? "minute" : "minutes"); 
        }
        if($second_shown > 0){
            $result[] = "$second_shown " . ($second_shown == 1 ? "second" : "seconds"); 
        }
    }else{
        return "now";
    }

      $lastElement = array_pop($result);
    if (!empty($result)) {
        return implode(', ', $result) . ' and ' . $lastElement;
    } else{
        return $lastElement;
    }
}
