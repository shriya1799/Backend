<?php
class A{
    private $x=1;
}
$getValue=function(){
    return $this->x;
};
$value=$getValue->bindTo(new A,'A');

print($value());
?>