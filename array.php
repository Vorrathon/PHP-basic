<?php 
/*
$Data = ["Vorrathon",True,1234,"Red"] ;
$Num = [1,2,55] ;
$sum = $Num[1] + $Num[2]; 
echo $sum ;
*/

// array จับคู่
/*
$room = ["A01"=>300,"A02"=>500,"A03"=>1000] ;
echo $room["A01"]." + ".$room["A03"]."<br>"; 
echo $room["A01"]+$room["A03"] ;
*/

// Array range
//range(start,stop,step) ;
$num = range(1,10,2) ; //2 คือผลต่างระหว่างช่วง 1-10
print_r($num);
$word = range("A","Z") ;
print_r($word); 

?>