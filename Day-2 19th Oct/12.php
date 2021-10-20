<?php

$sal = 30000;
$HRA = $sal * 0.5;
$DA = $sal * 0.2;
$PF = $sal * 0.3;
$Medical = $sal * 0.1;

$sal = ($sal + $HRA + $DA) - ($PF + $Medical);

echo "Total salary is : ".$sal;

?>