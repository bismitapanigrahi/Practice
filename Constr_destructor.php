<?php

class Fruit {
    public $name;

    function __construct($name) {
        $this->name=$name;
    }
    function __destruct() {
        echo $this->name;
    }
}
$apple = new Fruit("Apple");

?>