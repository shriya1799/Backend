<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Karl - Fashion Ecommerce Template | Home</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
</head>
<body>
<div class="top_header_area">
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-end">

                        <div class="col-12 col-lg-7">
                            <div class="top_single_area d-flex align-items-center">
                                <!-- Logo Area -->
                                <div class="top_logo">
                                    <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                                </div>
                                <!-- Cart & Menu Area -->
                                <div class="header-cart-menu d-flex align-items-center ml-auto">
                                    <!-- Cart Area -->
                                    <div class="cart">
                                        <a href="#" id="header-cart-btn" target="_blank"><span class="cart_quantity">2</span> <i class="ti-bag"></i> Your Bag $20</a>
                                        <!-- Cart List Area Start -->
                                        <ul class="cart-list">
                                            <li>
                                                <a href="#" class="image"><img src="img/product-img/product-10.jpg" class="cart-thumb" alt=""></a>
                                                <div class="cart-item-desc">
                                                    <h6><a href="#">Women's Fashion</a></h6>
                                                    <p>1x - <span class="price">$10</span></p>
                                                </div>
                                                <span class="dropdown-product-remove"><i class="icon-cross"></i></span>
                                            </li>
                                            <li>
                                                <a href="#" class="image"><img src="img/product-img/product-11.jpg" class="cart-thumb" alt=""></a>
                                                <div class="cart-item-desc">
                                                    <h6><a href="#">Women's Fashion</a></h6>
                                                    <p>1x - <span class="price">$10</span></p>
                                                </div>
                                                <span class="dropdown-product-remove"><i class="icon-cross"></i></span>
                                            </li>
                                            <li class="total">
                                                <span class="pull-right">Total: $20.00</span>
                                                <a href="cart.html" class="btn btn-sm btn-cart">Cart</a>
                                                <a href="checkout-1.html" class="btn btn-sm btn-checkout">Checkout</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="header-right-side-menu ml-15">
                                        <a href="#" id="sideMenuBtn"><i class="ti-menu" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Top Header Area End -->
    
    <!-- <center> -->
    <form action="signup.php" method="post">
        <table class="tab">
            <tr style="background-color:rgb(243, 176, 237);">
                <td style="padding-bottom: 20px;">
                <label for="signup"><b><u>SIGN UP</u></b></label>
                </td>
            </tr>
            <br>
            <tr>
                <td>
                <input type="text" class="input-value" name="name" id="" placeholder="Enter your Name">
                </td>
            </tr>
            <br>
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
            <br>
            <tr>
                <td>
                <input type="password" class="input-value" name="confirm_password" id="" placeholder="Re-enter the Password">
                </td>
            </tr>
            <br>
            <tr>
                <td style="padding-bottom: 20px;">
                <input type="submit" class="btn" name="signup" value="SIGN UP">
                <a href="login.php" class="btn">LOGIN</a>    
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


if(isset($_POST['signup'])){

    
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $repassword=$_POST['confirm_password'];
        if($password!=$repassword){
            echo "<script>
            alert('Password Missmatch')
            </script>";
        }
        else{
        
        $sql="INSERT INTO `admin` (`a_id`, `a_name`, `a_email`, `a_password`) VALUES (NULL, '$name', '$email', '$password');";
        
        
            $query = mysqli_query($con,$sql);

        if($query)
        {
            header('Location:login.php');
        }
        else
        {
            echo "failed";
        }
        }
}



?>