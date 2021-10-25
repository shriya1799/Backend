<?php 

    $digits=$_POST["digits"];
    $ans=0;
    $rem=0;
    $i=0;
    
    while($i <= strlen($digits)){
        $rem=$digits%10;
        $ans+=$rem;
        $digits=$digits/10;
        $i++;
    }
    echo "Sum Of all digit = ".$ans;

?>