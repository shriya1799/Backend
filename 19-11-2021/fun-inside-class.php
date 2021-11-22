<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class fruit{
        public $name;
        function set_name($name){
            $this->name=$name;
        }
    }
    $apple=new fruit();
    $apple->set_name("Apple");
    echo $apple->name;
    
    ?>
</body>
</html>