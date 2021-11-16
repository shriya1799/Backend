<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <center>
    <form action="add_categories.php" method="post">
        <table>
            <tr style="background-color:#d8dfed;">
                <td style="padding-bottom: 20px;">
                <label for="category">Add Categories</label>
                </td>
            </tr>
            <tr>
                <td>
                <input type="text" class="input-value" name="c_name" id="" placeholder="Enter Category Name">
                </td>
            </tr>
            <tr>
                <td style="padding-bottom: 20px;">
                <input type="submit" class="btn" name="add" value="ADD">
                <a href="dashboard.php" class="btn">BACK</a>    
            </td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>

<?php
session_start();
include 'connection.php';
if($_SESSION['email']==''){
    header('Location:login.php');
}
else{
    if(isset($_POST['add'])){

        $c_name=$_POST['c_name'];
        
        $query="insert into category(c_name) values('$c_name')" or die("error in query");
        
        if(mysqli_query($con,$query))
        {
            header('Location:dashboard.php');
        }
        else
        {
            echo "failed";
        }
    }
}

?>