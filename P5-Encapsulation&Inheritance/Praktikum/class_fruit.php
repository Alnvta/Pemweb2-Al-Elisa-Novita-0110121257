<?php
class Fruit{
    public $name;
    public $color;
    public $weight:

    function set_name($n){
        $this->name = $n;
    }

    function set_color($n){
        $this->color = $n;
    }

    function set_weight($n){
        $this->weight = $n;
    }
}

$mango = new Fruit();
$mango->set_name('Mango');
$mango->set_color('Yellow');
$mango->set_weight('300');
?>