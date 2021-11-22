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
        public $color;

        function set_name($name){
            $this->name=$name;
        }
        function get_name(){
            return $this_name;
        }
    }
    $apple=new fruit();
    var_dump($apple instanceof fruit);
    ?>
</body>
</html>