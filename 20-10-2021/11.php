<?php
    $n1=$_POST["num1"];
    $n2=$_POST["num2"];
    $n3=$_POST["num3"];
    $n4=$_POST["num4"];

    if($n1>=$n2 && $n1>=$n3 && $n1>=$n4)
    {
        echo "Maximum number = ".$n1;
    }
    else if($n2>=$n1 && $n2>=$n3 && $n2>$n4)
    {
        echo "Maximum number = ".$n2;
    }
    else if($n3=$n1 && $n3>=$n3 && $n3>$n4)
    {
        echo "Maximum number = ".$n2;
    }
    else 
    {
        echo "Maximum number = ".$n4;
    }

?>