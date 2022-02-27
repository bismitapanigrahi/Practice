<?php
date_default_timezone_set("Asia/Kolkata");
echo date("y/m/d")."<br>";
echo date("Y/m/d")."<br>";
echo date("Y-M-d")."<br>";
echo date("D")."<br>";
echo date("l")."<br>";
echo date("h:i:sa")."<br>";
$d=strtotime("tomorrow");
echo date("d-M-Y",$d)."<br>";
$d=strtotime("next Thursday");
echo date("d-M-Y",$d)."<br>";
$d=strtotime("+8 Months");
echo date("d-M-Y",$d)."<br>";
$d1=strtotime("Dec 04");
$d2=ceil(($d1-time())/60/60/24);
echo $d2 ." days left <br>";
$dc=date_create("2022-04-22");
date_add($dc,date_interval_create_from_date_string("60 days"));
echo date_format($dc,"d/m/Y")."<br>";
$dt=getdate();
echo "$dt[mday] $dt[month] $dt[year], $dt[weekday]";


?>