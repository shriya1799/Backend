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
    class Fruit {
        public $name;
        public $color;
        public $weight;

        function set_name($n){  
            $this->name = $n;
        }
        protected function set_color($n){ 
            $this->color = $n;
        }
        private function set_weight($n){ 
            $this->weight = $n;
        }
    }

$mango = new Fruit();
$mango->set_name('Mango'); 
$mango->set_color('Yellow'); 
$mango->set_weight('300'); 
?>
</body>
</html>