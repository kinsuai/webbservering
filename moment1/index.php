<?php
$_output = "HELLO WORLD";
//echo $_output;
//kommentar
#kommentar
/*
string
integer
float
boolean
objects
null
resource
*/
$num1 = 4;
$float1 = 3.1455;
$bool = true;
$num2 = 6;
$sum = $num1 + $num2; 
//echo "Summan blir : " .$sum."<br>"; 
//echo " $num2 och $sum";
define('Greeting','Hello Everyone');
//echo Greeting;
/*Array
indexerad
associativ
flerdimensionell
*/
$people = array('bert simpson','svamp bob','spindel mannen');
echo $people[2]."<br>";
$pernnr = array(23,65,78,98);
echo $pernnr[0]. "<br>";
$bilar =['BMW','Audi'];
$bilar[2] = 'Tesla';
echo $bilar[2]."<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>