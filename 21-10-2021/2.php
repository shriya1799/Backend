<?php  
    $arr = array(10,20,30,40,50);   
    echo"Original Array: <br>";  
    for ($i = 0; $i < count($arr); $i++) {   
        print($arr[$i] . " ");   
    }    
    echo"<br>Array in reverse order: <br>";  
    for ($i = count($arr)-1; $i >= 0; $i--) {   
        print($arr[$i] . " "); ;   
    }      
?>  