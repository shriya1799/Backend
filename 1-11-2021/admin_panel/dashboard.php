<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        th{
            text-align: center;
            background-color: lightgreen;
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .container{
            text-align: right;
        }
        a{
            color: lightgreen;
        }
        a:hover{
            background-color: lightgreen;
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
    </div>
</body>
</html>

<?php


include 'con.php';
session_start();

if($_SESSION['email']==''){
    header('Location:login.php');
}
else{
    $email=$_SESSION['email'];
    $query1=mysqli_query($con,"select s_name from Student where s_email='$email'") or die("error in query");
    
    $row1=mysqli_fetch_array($query1);
        echo "<center><h5>Hello ".$row1['s_name']."</h5></center>";    
}


echo "<center><table class='table-primary' border='2'>
    <th>ID</th>
    <th>NAME</th>
    <th>EMAIL</th>
    <th>PASSWORD</th>
    <th>MOBILE</th>
    <th colspan='2'>ACTION</th>";

$sql="select * from Student" or die("error in query");

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
echo "</table></center>";
?>