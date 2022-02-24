<?php

$text="Ravi Shankar";

echo strlen($text)."<br>";
echo str_word_count($text)."<br>";
echo strrev($text)."<br>";
echo strpos($text,"Shan")."<br>";
echo stripos($text,"shan")."<br>";
echo str_replace("Ravi", "Hari", $text)."<br>";
echo str_ireplace("ravi", "Hari", $text)."<br>";
echo addcslashes($text,"v")."<br>";
echo addslashes("What's ur name?")."<br>";
echo stripslashes("What\'s ur name?")."<br>";
echo stripcslashes("Ravi \Shan\k\ar")."<br>";
echo count_chars("What's ur name?",3)."<br>";
print_r(explode(" ",$text));
echo "<br>";
$arr=array("Hello","User.","How are","you","doing?");
echo implode(" ",$arr)."<br>";
echo lcfirst($text)."<br>";
echo ucfirst("ram")."<br>";
echo ucwords("lovely day")."<br>";
echo strtoupper($text)."<br>";
echo strtolower($text)."<br>";
$str=" abc mno ";
$str1=" pqr ";
$str2="xyz ";
echo $str,$str2,$str1;
echo "<br>";
echo ltrim($str,"a")."<br>";
echo rtrim($str1,"qr")."<br>";
echo trim($str,"ano")."<br>";
echo rtrim($str2).ltrim($str1).trim($str)."<br>";
echo nl2br("Hi $text \n end")."<br>";
echo number_format(459089,2)."<br>";
printf("Hi %s Have a Great day",$text);
echo "<br>";
echo str_repeat("Fabulous ",4)."<br>";
echo str_shuffle("Bismita")."<br>";
echo strip_tags("Hare <b>Krishna</b>")."<br>";
echo strstr("Hi PHP**","PHP")."<br>";
echo stristr("Hi PHP Hi","PhP")."<br>";
echo substr($text,5)."<br>";
echo substr_count("Hello World, Welcome to PHP World","World")."<br>";

?>