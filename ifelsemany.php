<?php
$score = 0 ;
$grade="" ;

if ($score >= 80 && $score <= 100) {
    $grade = "A" ;
}
elseif($score >=70 && $score < 80){
    $grade = "B" ;
}
elseif($score >=60 && $score < 70){
    $grade = "C" ;
}
elseif($score >=50 && $score < 60){
    $grade = "D" ;
}
elseif($score < 50 && $score >= 0){
    $grade = "F" ;
}
else{
    echo "ข้อมูลไม่ถูกต้อง"."<br>" ;
}
echo "คะแนนของคุณคือ".$score."<br>" ;
echo "เกรดที่ได้คือ ".$grade ;


?>