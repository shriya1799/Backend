<?php  
$a = array(     
             array(1, 2, 3),  
             array(4, 5, 6),  
             array(7, 8, 9)  
           );  
   
$rows = count($a);  
$cols = count($a[0]);  
for($i = 0; $i < $rows; $i++){  
    $sumRow = 0;  
    for($j = 0; $j < $cols; $j++){  
      $sumRow = $sumRow + $a[$i][$j];  
    }  
    print("Sum of " . ($i+1) ." row: " . $sumRow);  
    print("<br>");  

}  
?>  