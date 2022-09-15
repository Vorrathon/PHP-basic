<!-- การแปลงชนิดข้อมูล -->

<?php
$price = 100.17 ;
$delivery = 50.99 ;

$total = $price + $delivery ;

//echo gettype($total)
echo "ก่อนแปลง = ".gettype($total)."<br>";
echo $total."<br>";

//type caseting
$total = (integer)$total ; //แปลง type ของข้อมูล
echo "หลังแปลง = ".gettype($total)."<br>" ;
echo $total."<br>";
echo "<hr>";

$sum = "400.89" ;
echo "ก่อนแปลง = ".gettype($sum)."<br>";
echo $sum."<br>";

$sum =(double)$sum ;
echo "หลังแปลง = ".gettype($sum)."<br>";
echo $sum."<br>";
$A =$sum + 500 ;
echo "ค่าของ A คือ ".$A ;

?>