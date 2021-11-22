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
    interface Animal{
        public function makesound();
    }

    class cat implements Animal{
        public function makesound(){
            echo "meow";
        }
    }

    $animal=new cat();
    $animal->makesound();
    ?>
</body>
</html>