<?php
session_start();
session_destroy();
header('Location:login.php');
?>
......................................
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up</title>
</head>
<body>
<form action="signup.php" method="post">
<input type="text" name="name" id="" placeholder="enter your name">
<br>
<input type="email" name="email" id="" placeholder="enter your email">
<br>
<input type="password" name="password" id="" placeholder="enter your password">
<br>
<input type="text" name="mobile" id="" placeholder="enter your mobile number">
<br>
<input type="submit" name="signup" value="SIGN UP">
</form>
</body>
</html>

<?php
include 'con.php';


if(isset($_POST['signup'])){

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];

$query="insert into student(s_name,s_email,s_pwd,s_mno) values('$name','$email','$password','$mobile')" or die("error in query");

if(mysqli_query($con,$query))
{
echo "data inserted";
}
else
{
echo "failed";
}
}


?>