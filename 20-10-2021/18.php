<?php
    $MyNum=$_POST["num"];
    $revNum = 0;
    $Num = $MyNum;

    while($Num > 0) {
        $digit = $Num % 10;
        $revNum = $revNum * 10 + $digit;
        $Num = (int)($Num / 10);
    }

    if ($MyNum == $revNum){
        echo $MyNum." is a Palindrome number.\n";
    } else {
        echo $MyNum." is not a Palindrome number.\n";
    }

?>