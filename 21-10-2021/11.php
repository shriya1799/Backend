<?php
function swap($a,$b,$temp)
{
    echo "First array before Swap : ";
    print_r($a);
    echo "<br>Second array before Swap : ";
    print_r($b);
    $temp=$a;
    $a=$b;
    $b=$temp;
    echo "<br><br>First array after Swap : ";
    print_r($a);
    echo "<br>Second array after Swap : ";
    print_r($b);
}
$a=array(23,11,44,55,6);
$b=array(3,44,1,56,5);
$temp=array();
swap($a,$b,$temp);
?>