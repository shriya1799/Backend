
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
</head>
<body>
<form action="login.php" method="post">
<input type="email" name="email" id="" placeholder="enter your email">
<br>
<input type="password" name="password" id="" placeholder="enter your password">
<br>
<input type="submit" name="login" value="LOGIN">
</form>
</body>
</html>

<?php

include 'con.php';
session_start();

if(isset($_POST['login']))
{
$email=$_POST['email'];
$password=$_POST['password'];

$sql="select * from student where s_email='$email' and s_pwd='$password'" or die("error in query");

$query=mysqli_query($con,$sql);
$rows=mysqli_num_rows($query);
if($rows>0)
{
$_SESSION['email']=$email;
header("Location:dashboard.php");
}
else
{
echo "incorrect email and password";
}

}

?>