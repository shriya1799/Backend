<?php
    $array = array(30, 44, 17, 25, 21); 
    $max=$max2=0;
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] > $max) {
            $max2 = $max;
            $max = $array[$i];
        } else if (($array[$i] > $max2) && ($array[$i] != $max)) {
            $max2 = $array[$i];
        }
    }
    echo "Highest Value is : " . $max . "<br/>"; 
    echo "Second highest value is : " . $max2 . "<br/>"; 
?>