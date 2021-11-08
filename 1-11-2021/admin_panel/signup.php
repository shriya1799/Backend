<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <center>
    <form action="signup.php" method="post">
        <table>
            <tr style="background-color:#d8dfed;">
                <td style="padding-bottom: 20px;">
                <label for="signup">SIGN UP</label>
                </td>
            </tr>
            <tr>
                <td>
                <input type="text" class="input-value" name="name" id="" placeholder="Enter your Name">
                </td>
            </tr>
            <tr>
                <td>
                <input type="email" class="input-value" name="email" id="" placeholder="Enter your Email">
                </td>
            </tr>
            <tr>
                <td>
                <input type="password" class="input-value" name="password" id="" placeholder="Enter your Password">
                </td>
            </tr>
            <tr>
                <td>
                <input type="password" class="input-value" name="confirm_password" id="" placeholder="Re-enter the Password">
                </td>
            </tr>
            <tr>
                <td>
                <input type="text" class="input-value" name="mobile" id="" placeholder="Enter your Mobile Number">
                </td>
            </tr>
            <tr>
                <td style="padding-bottom: 20px;">
                <input type="submit" class="btn" name="signup" value="SIGN UP">
                <a href="login.php" class="btn">LOGIN</a>    
            </td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>

<?php
session_start();
include 'con.php';


if(isset($_POST['signup'])){

    if($_POST["password"]===$_POST["confirm_password"]){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $mobile=$_POST['mobile'];
    
        $query="insert into Student(s_name,s_email,s_pwd,s_mno) values('$name','$email','$password','$mobile')" or die("error in query");
        
        if(mysqli_query($con,$query))
        {
            header('Location:login.php');
        }
        else
        {
            echo "failed";
        }
    }else{
        echo "<script>alert('Password are not same.')</script>";
    }
}


?>