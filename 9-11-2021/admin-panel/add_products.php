<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- <center> -->
    <form action="add_products.php" enctype="multipart/form-data" method="post">
        <table>
            <tr style="background-color:#d8dfed;">
                <td colspan="2" style="padding-bottom: 20px;">
                <label for="category">Add Products</label>
                </td>
            </tr>
            <tr>
                <td><label for="p_name">Enter Product Name:</label></td>
                <td><input type="text" class="input-value" name="p_name" id=""></td>
            </tr>
            <tr>
                <td><label for="p_price">Enter Product Price:</label></td>
                <td><input type="text" class="input-value" name="p_price" id=""></td>
            </tr>
            <tr>
                <td><label for="p_desc">Enter Product Description:</label></td>
                <td><textarea name="p_desc" class="input-value" cols="24" rows="5" id=""></textarea></td>
            </tr>
            <tr>
                <td><label for="file">Select Image:</label></td>
                <td style="padding-left: 45px;">
                <input type="file" name="file">
                </td>
            </tr>
            <tr>
                <td><label for="c_name">Select Category Name:</label></td>
                <td class="c_name">
                <select name="c_name" id="c_name">
                    <option value="Men">Men</option>
                    <option value="Women">Women</option>
                    <option value="Accessories">Accessories</option>
                    <option value="Kids">Kids</option>
                </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding-bottom: 20px;">
                <input type="submit" class="btn" name="add" value="ADD">
                <a href="dashboard.php" class="btn">BACK</a>     
                </td>
            </tr>
        </table>
    </form>
    <!-- </center> -->
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

        $p_name=$_POST['p_name'];
        $p_price=$_POST['p_price'];
        $p_desc=$_POST['p_desc'];
        $filepath = "../images/" . $_FILES["file"]["name"];
        $selected=$_POST['c_name'];

        $query="insert into product_detail(p_name,p_price,p_desc,p_image,c_name) values('$p_name',$p_price,'$p_desc','$filepath','$selected')" or die("error in query");
        echo $query;
        move_uploaded_file($_FILES["file"]["tmp_name"], $filepath);

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