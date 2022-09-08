<?php
echo date('d')."<br>";
echo date('m')."<br>";
echo date('y')."<br>";
echo date('l')."<br>";
echo date('y/m/d')."<br>";
echo date('y-m-d')."<br>";
echo date('h')."<br>";
echo date('i')."<br>";
echo date('s')."<br>";
echo date('a')."<br>";
echo date('h:i:sa')."<br>";
echo "<hr>";
$timestamp=mktime(11,23,45,5,21,2002);
//echo $timestamp;
echo date('m/d/y', $timestamp);
?>