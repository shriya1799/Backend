<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <center>
    <form action="login.php" method="post">
        <table>
            <tr style="background-color:#d8dfed;">
                <td style="padding-bottom: 20px;">
                <label for="login">LOGIN</label>
                </td>
            </tr>
            <tr>
                <td>
                <input type="email" class="input-value" name="email" id="" placeholder="enter your email">
                </td>
            </tr>
            <tr>
                <td>
                <input type="password" class="input-value" name="password" id="" placeholder="enter your password">
                </td>
            </tr>
            <tr>
                <td  style="padding-bottom: 20px;">
                <input type="submit" class="btn" name="login" value="LOGIN">
                <a href="signup.php" class="btn">SIGN UP</a>    
                </td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>

<?php

include 'con.php';
session_start();

if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="select * from Student where s_email='$email' and s_pwd='$password'" or die("error in query");

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