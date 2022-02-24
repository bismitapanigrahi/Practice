<?php
class Father {
    public $name; 
    function __construct($name) {
        $this->name=$name;
    }
    function first() {
        echo "Name: {$this->name}<br>";
    }
}
class Child extends Father {
    public $child;
    function ward($child) {
        $this->child=$child;
        echo "Ward's Name: {$this->child}<br>";
    }
}
$akash=new child("Aakash");

$akash->first();
$akash->ward("Rudra");


?>