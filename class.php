<?php

class Color {
    public $color;
    function set($color) {
        $this->color=$color;
    }
    function get() {
        return $this->color;
    }
}

$red=new Color();
$red->set("Red");
echo "Color: ".$red->get()."<br>";
$red->set("Yellow");
echo "Color: ".$red->get()."<br>";
$red->set("Green");
echo "Color: ".$red->get()."<br>";

?>