<?php
$value = $_POST["facvalue"];  
$factorial = 1;  
for ($x=$value; $x>=1; $x--)   
{  
  $factorial = $factorial * $x;  
}  
echo "Factorial of $value is $factorial"; 
?>