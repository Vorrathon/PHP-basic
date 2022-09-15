<!-- ค่าคงที่ -->

<?php
// define คือการตั้งค่าคงที่ไม่สามารถเปลียนแปลงค่าได้
$name = "vorrathon"; //เปลี่ยนแปลงค่าได้
define("PI",3.14) ; //เปลี่ยนแปลงไม่ได้

echo $name."<br>";
echo PI."<br>" ;
$name = "Kedpratoom"; 
echo $name."<br>";
$PI = 3.15 ;
echo $PI ; 

?>