<!DOCTYPE html>
<html>
<body>

<?php
$Rupee=800;
echo "Rupees=".$Rupee."<br>";

while($Rupee>=100){
 $a= $Rupee/100;
 echo "The no of 100 are :".$a;
 break;
}

while($Rupee>=50){
 $b= $Rupee/50;
 echo "<br>The no of 50 are : ".$b;
 break;
}

while($Rupee>=20){
 $c= $Rupee/20;
 echo "<br>The no of 20 are: ".$c;
 break;
}

while($Rupee>=10){
 $d= $Rupee/10;
 echo "<br>The no of 10 are : ".$d;
 break;
}

while($Rupee>=5){
 $e= $Rupee/5;
 echo "<br>The no of 5 are : ".$e;
 break;
}

while($Rupee>=2){
 $f= $Rupee/5;
 echo "<br>The no of 2 are : ".$f;
 break;
}

?>

</body>
</html>