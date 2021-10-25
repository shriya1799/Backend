<?php  

$a = array(     
             array(1, 2, 3),  
             array(4, 5, 6),  
             array(7, 8, 9)  
           );  
   
$rows = count($a);  
$cols = count($a[0]);  
for($i = 0; $i < $cols; $i++){  
    $sumCol = 0;  
    for($j = 0; $j < $rows; $j++){  
      $sumCol = $sumCol + $a[$j][$i];  
    }  
    print("Sum of " . ($i+1) . " column: " . $sumCol);  
    print("<br>");  
}  
?>  