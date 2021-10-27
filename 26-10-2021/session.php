<html>
<head>
<title>PHP Session Example</title>
</head>
<body>
<FORM method="POST" action="session.php">

Enter Name : <input type="text" name="name"> <br/>
Enter Age : <input type="text" name="age"> <br/>
Enter City : <input type="text" name="city"> <br/>
<br/>
<input type="submit" name="Submit1" value="Create Session">
<input type="submit" name="Submit2" value="Retrieve Session">
<input type="submit" name="Submit3" value="Delete Session">
</FORM>

<?php
session_start();

if(isset($_POST["Submit1"]))
{
$_SESSION["name"]=$_POST["name"];
$_SESSION["age"]=$_POST["age"];
$_SESSION["city"]=$_POST["city"];
echo "Session Created !!";
}

elseif(isset($_POST['Submit2']))
{
if(isset($_SESSION["name"]))
{
echo "Name = ". $_SESSION["name"]."<br/>";
echo "Age = ". $_SESSION["age"]."<br/>";
echo "City = ". $_SESSION["city"]."<br/>";
}
}
elseif(isset($_POST['Submit3']))
{
session_destroy();
echo "Session deleted !!";
}
?>

</body>
</html>
<?php
if(isset($_POST["Submit1"]))
{
setcookie("name",$_POST["name"], time() + 3600, "/", "", 0);
setcookie("age", $_POST["age"], time() + 3600, "/", "", 0);
setcookie("city", $_POST["city"], time() + 3600, "/", "", 0);
echo "Cookies Created !!";
}

if(isset($_POST["Submit3"]))
{
setcookie("name","", time() - 3600, "/", "", 0);
setcookie("age", "", time() - 3600, "/", "", 0);
setcookie("city", "", time() - 3600, "/", "", 0);
}
?>