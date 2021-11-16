<?php

session_start();
include 'connection.php';

try{
    if($_SESSION['email']==''){
        header('Location:login.php');
    }
    else{
        $id=$_GET['sid'];
        $email=$_SESSION['email'];
        $sql="select s_name from Student where s_email='$email'" or die("error in query");
        
        $q = $pdo->query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);
        while($row=$q->fetch()){
            echo "<center><h5>Hello ".$row['s_name']."</h5></center>";    
        }
    }
}
catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}


try{
    $sql="select * from Student where s_id='$id'" or die("error in query");
        
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
    while($row=$q->fetch()){   
        $name=$row['s_name'];
        $email=$row['s_email'];
        $password=$row['s_pwd'];
        $mobno=$row['s_mno'];
    }
}
catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <center>
    <form method="POST">
        <table>
            <tr style="background-color:lightgreen;">
                <td colspan="2" style="padding-bottom: 20px;">
                <label for="update">UPDATE DETAILS</label>
                </td>
            </tr>
            <tr>
                <td> <label for="name">Enter Name</label> </td>
                <td> <input type="text" class="input-value" name="name" id="name" value="<?php echo $name ?>"> </td>
            </tr>
            <tr>
                <td> <label for="email">Enter Email:</label></td>
                <td><input type="email" class="input-value" name="email" id="email" value="<?php echo $email ?>" ></td>
            </tr>
            <tr>
                <td><label for="pwd">Enter Password:</label></td>
                <td> <input type="password" class="input-value" name="pwd" id="pwd" value="<?php echo $password ?>"> </td>
            </tr>
            <tr>
                <td><label for="c_pwd">Re-enter Password:</label></td>
                <td> <input type="password" class="input-value" name="confirm_password" id="pwd" value="<?php echo $password ?>"> </td>
            </tr>
            <tr>
                <td> <label for="mobno">Enter Mobile No.</label> </td>
                <td> <input type="text" class="input-value" name="mobno" id="mobno" value="<?php echo $mobno ?>"> </td>
            </tr>
            <tr>
                <td colspan="2" style="padding-bottom: 20px;"><input type="submit" class="btn" name="update" value="SUBMIT">
                <a href="dashboard.php" class="btn">BACK</a></td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>

<?php

if(isset($_POST['update'])){

    if($_POST["pwd"]===$_POST["confirm_password"]){

        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['pwd'];
        $mobileno=$_POST['mobno'];

        include 'connection.php';

        try{
            $sql="update Student set s_name='$name',s_email='$email',s_pwd='$password',s_mno='$mobileno' where s_id=$id";
            $pdo->exec($sql);
            header('Location:dashboard.php');
        }
        catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }
}

?>