<?php
class Msg {
    const MESSAGE = "Beauty";
    function disp() {
        echo self::MESSAGE ;
    }
}
echo Msg::MESSAGE."<br>";
$hi = new Msg();
$hi->disp();



?>