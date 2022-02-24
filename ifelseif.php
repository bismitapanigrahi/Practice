<?php

$a=67;

if($a>90 && $a<=100) {
    echo "Out Standing";
}
elseif($a>80 && $a<=90) {
    echo "Excellent";
}
elseif($a>70 && $a<=80) {
    echo "A";
}
elseif ($a>60 && $a<=70) {
    echo "B";
}
elseif ($a>50 && $a<=60) {
    echo "C";
}
elseif ($a>40 && $a<=50) {
    echo "D";
}
else{
    echo "F";
}

?> 