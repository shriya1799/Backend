<?php 

    $number=$_POST["number"];
    $result=0;
    
    while($number > 1)
    {   
        $remain=$number % 10;
        $result=($result * 10) + $remain;
        $number=($number/10);
    }
    echo "Reverse Number = ".$result;

?>

