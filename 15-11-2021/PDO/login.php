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
    <!-- <center> -->
    <form action="login.php" method="post" class="formtable">
        <table>
            <tr style="background-color:lightgreen;">
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
                <td>
                <input type="checkbox" name="remember">  
                <label for="remember-me">Remember me</label>  
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
    <!-- </center> -->
</body>
</html>

<?php 
 include 'connection.php';
session_start();

if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];

    try{
        $sql="select * from Student where s_email='$email' and s_pwd='$password'" or die("error in query");
        $q = $pdo->query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);
        while($row=$q->fetch())
        {
            if(isset($_POST["remember"]))   
            {  
                setcookie ("email",$email);  
                setcookie ("password",$password);
                $_SESSION['email']=$email;
            }  
            header("Location:dashboard.php");

        }
    }
    catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }

}
?>