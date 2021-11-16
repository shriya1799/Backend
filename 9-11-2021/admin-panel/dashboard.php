<?php
session_start();
include 'connection.php';

if ($_SESSION['email'] == '') {
  header('Location:login.php');
}
else{
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
  <!-- FontAwesome link -->
  <script src="https://kit.fontawesome.com/cdb4175f0a.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <link href="css/sidebars.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .btn {
      border: 3px solid #d8dfed;
      border-radius: 10px;
    }

    .btn:hover {
      background-color: rgb(243, 176, 237);
      color: white;
    }

    .card {
      margin-left: 90px;
      margin-top: 50px;
      transition: all 0.2s ease;
      cursor: pointer;
      height: 90px;

    }

    .card:hover {
      box-shadow: 5px 6px 6px 2px #e9ecef;
      transform: scale(1.1);
    }

    a {
      text-decoration: none;
      color: black;
    }

    a:hover {
      color: rgb(243, 176, 237);
    }

    .shriya {
      background-color: lightcoral;
    }
  </style>
</head>

<body>

  <!-- navbar started -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="dashboard.php"><img src="img/logo.png" alt="Logo"></a>
      <a href="logout.php" class="btn">LOGOUT</a>
    </div>
  </nav>
  <!-- navbar ends -->


  <main>

    <div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
      <ul class="list-unstyled ps-0">
        <li class="mb-1">
          <a href="dashboard.php" class="link-dark dashboard-title"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
        </li>
        <hr>
        <li class="mb-1">
          <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
            Categories
          </button>
          <div class="collapse" id="dashboard-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="add_categories.php" class="link-dark rounded">Add Categories</a></li>
              <li><a href="view_categories.php" class="link-dark rounded">View Categories</a></li>
            </ul>
          </div>
        </li>
        <li class="mb-1">
          <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
            Products
          </button>
          <div class="collapse" id="orders-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="add_products.php" class="link-dark rounded">Add Products</a></li>
              <li><a href="view_products.php" class="link-dark rounded">View Products</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>

    <!-- division between side bar and main content -->

    <div class="b-example-divider"></div>

    <!-- division between side bar and main content ends -->

    <!-- Card starts -->

    <div class="container shriya">
      <div class="row">
        <div class="col-6">
          <a href="men_products.php">
            <div class="card h-100" style="width: 18rem;">
              <img src="img/men2.jpg" class="card-img-top" alt="Men's section">
              <div class="card-body text-center ">
                <h5 class="card-title">MEN</h5>
                <a href="men_products.php" class="btn btn-dark">Explore</a>
              </div>
            </div>
          </a>
        </div>

        <div class="col-6">
          <a href="men_products.php">
            <div class="card h-100" style="width: 18rem;">
              <img src="img/women.jpg" class="card-img-top" alt="Women's section">
              <div class="card-body text-center ">
                <h5 class="card-title">WOMEN</h5>
                <a href="men_products.php" class="btn btn-dark">Explore</a>
              </div>
            </div>
          </a>
        </div>
      </div>
      <br> <br>
      <!-- <br> <br> -->


      <div class="row">
        <div class="col-6 mb-5">
          <a href="men_products.php">
            <div class="card h-100" style="width: 18rem;">
              <img src="img/kids2.jpg" class="card-img-top" alt="Kids section">
              <div class="card-body text-center ">
                <h5 class="card-title">KIDS</h5>
                <a href="men_products.php" class="btn btn-dark">Explore</a>
              </div>
            </div>
          </a>
        </div>


        <div class="col-6 mb-5">
          <a href="men_products.php">
            <div class="card h-100" style="width: 18rem;">
              <img src="img/accessories.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center ">
                <h5 class="card-title">ACCESSORIES</h5>
                <a href="men_products.php" class="btn btn-dark">Explore</a>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>

    <!-- Card ends -->
  </main>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="js/sidebars.js"></script>


</body>
</html>

<?php
mysqli_close($con);
}
?>