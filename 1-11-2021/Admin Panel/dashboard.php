<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
</head>
<body>
<a href="logout.php">LOGOUT</a>
</body>
</html>

<?php


include 'con.php';
session_start();


$email=$_SESSION['email'];
$query1=mysqli_query($con,"select s_name from student where s_email='$email'") or die("error in query");

$row1=mysqli_fetch_array($query1);
echo "Hello ".$row1['s_name'];


echo "<table border='2'>
<th>ID</th>
<th>NAME</th>
<th>EMAIL</th>
<th>PASSWORD</th>
<th>MOBILE</th>
<th colspan='2'>ACTION</th>";

$sql="select * from student" or die("error in query");

$query=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($query))
{
$s_id=$row['s_id'];
echo "<tr>";
echo "<td>".$s_id."</td>";
echo "<td>".$row['s_name']."</td>";
echo "<td>".$row['s_email']."</td>";
echo "<td>".$row['s_pwd']."</td>";
echo "<td>".$row['s_mno']."</td>";
echo "<td><a href='update.php?s_id=$s_id'>EDIT</a></td>";
echo "<td><a href='delete.php?s_id=$s_id'>DELETE</a></td>";
echo "</tr>";
}
echo "</table>";
?>