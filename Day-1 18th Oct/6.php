<?php

$salary=10000;


$dearness_allowance = $salary * (40/100);
$house_rent_allowance = $salary * (20/100);

$gross_salary = $salary + $dearness_allowance + $house_rent_allowance;

echo "Gross Salary Of Employee : ".$gross_salary;

?>