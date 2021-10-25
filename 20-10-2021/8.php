<?php
if(isset($_POST['submit']))
{
$english = $_POST['num1'];
$maths = $_POST['num2'];
$science = $_POST['num3'];
$precision = 4;
$total = ($english + $maths + $science); // Compute total marks
$average = number_format($total/3, $precision); //compute the average of total marks
echo " Total marks of three subjects = ".$total ."";
echo " Average marks of three subjects = ".$average ."";
if($total<35 || $english<35 || $maths<35 || $science<35)
{
echo "Fail";
}
else
if($average>=60 && $average<70)
{
echo "Third Class";
}
else
if($average>=70 && $average<80)
{
echo "Second Class";
}
else
if($average>=80 && $average<95)
{
echo "First Class";
}
else
{
echo "Distinction";
}
return 0;
}
?>
</body>
</html>
