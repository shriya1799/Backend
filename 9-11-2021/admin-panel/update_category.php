<?php

session_start();
include 'connection.php';

if($_SESSION['email']==''){
    header('Location:login.php');
}
else{

$id=$_GET['c_id'];
$email=$_SESSION['email'];

$query1=mysqli_query($con,"select a_name from admin where a_email='$email'") or die('Error in query');

$row1=mysqli_fetch_array($query1);
echo "<center><h5>Welcome ".$row1['a_name']."</h5></center>";

$query2=mysqli_query($con," select * from category where c_id='$id' ") or die("Error in query");
$row2=mysqli_fetch_array($query2);

$name=$row2['c_name'];
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

    <!-- <center> -->
    <form method="POST">
        <table>
            <tr style="background-color:rgb(243, 176, 237);">
                <td colspan="2" style="padding-bottom: 20px;">
                <label for="update">UPDATE CATEGORY</label>
                </td>
            </tr>
            <tr>
                <td> <label for="c_name">Enter Category Name</label> </td>
                <td> <input type="text" class="input-value" name="c_name" id="c_name" value="<?php echo $name ?>"> </td>
            </tr>
            <tr>
                <td colspan="2" style="padding-bottom: 20px;"><input type="submit" class="btn" name="update" value="SUBMIT">
                <a href="view_categories.php" class="btn">BACK</a></td>
            </tr>
        </table>
    </form>
    <!-- </center> -->
</body>
</html>

<?php

if(isset($_POST['update'])){

    $name=$_POST['c_name'];
   

    include 'connection.php';

    $sql="update category set c_name='$name'where c_id=$id" or die("Error in Query");

    $query=mysqli_query($con,$sql); 

    if($query){
    echo "data update";
    header('Location:view_categories.php');
    }else{
    echo "Error in update";
    }
    
}

?>