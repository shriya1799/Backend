<?php
echo "<br><center>";
function EvenOddSum($arr, $n)
{
	$even = 0;
	$odd = 0;
	for ($i = 0; $i < $n; $i++)
	{
		if ($i % 2 == 0)
			$even += $arr[$i];
		else
			$odd += $arr[$i];
	}
	echo("Odd index positions sum " . $even."<br>");
	echo("Even index positions sum " . $odd);
}
$arr = array( 1, 2, 3, 4, 5, 6 );
$n = sizeof($arr);
EvenOddSum($arr, $n);
?>
