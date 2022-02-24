<?php 

$colors=array("Blue", "Green", "Orange", "Maroon");
echo $colors[0]." ".$colors[1]." ".$colors[2]." ".$colors[3]."<br>";
echo "Number of elements: ".count($colors)."<br>";
sort($colors);
echo "After sorting: ".$colors[0]." ".$colors[1]." ".$colors[2]." ".$colors[3]."<br>";
print_r($colors);
echo "<br>";
$num=array(1,2,3,4);
$c=array_combine($num, $colors);
print_r($c); echo "<br>";
$anim=array("Cat", "Dog", "Cat", "Bear", "Bear", "Bear");
print_r(array_count_values($anim)); echo "<br>";
$traf=array("Red", "Yellow", "Green");
$dif=array_diff($colors, $traf);
print_r($dif); echo "<br>";
$dif1=array_diff_assoc($colors, $traf);
print_r($dif1); echo "<br>";
$dif2=array_diff_key($colors, $traf);
print_r($dif2); echo "<br>";
function sum($n) {
    return ($n+$n);
}
print_r(array_map("sum",$num)); echo "<br>";
print_r(array_merge($colors, $traf)); echo "<br>";
array_multisort($anim);
print_r($anim); echo "<br>";
array_pop($colors);
print_r($colors); echo "<br>";
echo (array_product($num)); echo "<br>";
array_push($anim,"Tiger","Giraff");
print_r($anim); echo "<br>";
$random=array_rand($c,2);
echo $c[$random[0]]."<br>".$c[$random[1]]."<br>"; 
echo array_shift($dif1)."<br>";
print_r($dif1); echo "<br>";



?>