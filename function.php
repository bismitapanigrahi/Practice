<?php

function prac($max, $min) {
    if($max>$min) {
        echo $max." is greater.<br>";
    } else {
        echo $min." is greater.<br>";
    }
}

function operation($a, $b) {
    return ($a*$b)/5;
}

prac(24,78);
prac(400,90);
prac(290,56);

echo operation(56,78)."<br>";
echo operation(74,687)."<br>";
echo operation(90,67)."<br>";
?>
