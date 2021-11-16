<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        th{
            text-align: center;
            background-color: rgb(243, 176, 237);
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .container{
            text-align: right;
        }
        a{
            color: rgb(243, 176, 237);
        }
        a:hover{
            background-color: rgb(243, 176, 237);
            color: white;
        }
        table tr td{
            padding-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="logout.php" class="btn">LOGOUT</a>
        <a href="dashboard.php" class="btn">BACK</a>    

    </div>
</body>
</html>

<?php


include 'connection.php';
session_start();

if($_SESSION['email']==''){
    header('Location:login.php');
}
else{
    $email=$_SESSION['email'];
    $query1=mysqli_query($con,"select a_name from admin where a_email='$email'") or die("error in query");
    
    $row1=mysqli_fetch_array($query1);
        echo "<center><h5>Welcome ".$row1['a_name']."</h5></center>";    
}


echo "<center><table class='table-primary' border='2'>
    <th>ID</th>
    <th>CATEGORIES</th>
    <th colspan='2'>ACTION</th>";

$sql="select * from category" or die("error in query");

$query=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($query))
{
    $c_id=$row['c_id'];
    echo "<tr>";
    echo "<td>".$c_id."</td>";
    echo "<td>".$row['c_name']."</td>";
    echo "<td><a href='update_category.php?c_id=$c_id'>EDIT</a></td>";
    echo "<td><a href='delete_category.php?c_id=$c_id'>DELETE</a></td>";
    echo "</tr>";
}
echo "</table></center>";
?>