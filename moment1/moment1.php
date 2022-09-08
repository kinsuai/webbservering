<?php
$num=1;
$total=$num;
echo $num;
while($num<100)
{
   $num++;
   $total+=$num;
   echo "+$num";
}
echo "=$total";

echo "<hr>";

$sum=0;
$num2=100;

for($i=1;$i<=$num2; $i++)
{
   $sum=$sum+$i; 
}
echo "Summan av talen 1 till 100 = $sum";
echo "<br><br>";
echo "<a href='/webbservering/index.php'>Gå tillbaka till startsidan!</a>";
?>