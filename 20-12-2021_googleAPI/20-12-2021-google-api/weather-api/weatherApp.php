<?php
  if(array_key_exists('submit',$_GET)){
    if(!$_GET['city']){
      $error="Sorry, your input field is empty";
    }
    if($_GET['city']){
      $apiData = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".$_GET['city']."&APPID=49851e0a7859639bf80e7d237fd280e6");
      $weatherArray = json_decode($apiData, true);
      $tempCelsius = $weatherArray['main']['temp'] - 273;
      $weather = "<b>".$weatherArray['name'].", ".$weatherArray['sys']['country']." : ".intval($tempCelsius)."&deg;C</b><br>";
      $weather .= "<b>Weather Condition : </b>".$weatherArray['weather']['0']['description']."<br>";
      $weather .= "<b>Atmosperic Pressure : </b>".$weatherArray['main']['pressure']."hPa<br> ";
      $weather .= "<b>Wind Speed : </b>".$weatherArray['wind']['speed']."meter/sec<br> ";
      $weather .= "<b>Cloudness : </b>".$weatherArray['clouds']['all']."%<br>";
    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Weather App</title>
    <style>
      body{
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: poppin, 'Times New Roman',Times,serif;
        font-size: large;
      }
      .container{
        text-align: center;
        justify-content: center;
        align-items: center;
        width: 440px;
      }
      h1{
        font-weight: 700;
        margin-top: 150px;
      }
      input{
        width: 350px;
        padding: 5px;
      }
     
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Search Global Weather</h1>
      <form action="" method="GET">
        <p><label for="city">Enter your city name</label></p>
        <p><input type="text" name="city" id="city" placeholder="City Name"></p>
        <button type="submit" name="submit" class="btn btn-success">Submit Now</button>
        <div class="output">
          
          <?php
            if($weather){
              echo '<div class="alert alert-success" role="alert">
              '.$weather.'
              </div>';
            }
            if($error){
              echo '<div class="alert alert-danger" role="alert">
              '.$error.'
              </div>';
            }
          ?>

        </div>
      </form>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html>