<?php
//รับเงินเดือน
//ส่งผลการคำนวณรายได้ต่อปี

function getTotal($salary,$count){
   //เงินเดือน * ปี
   $mount = $count ;
   return $salary*$mount ;

}

function Name($fname,$lname,$city="Bankkok"){
   return print "ชื่อ ".$fname." นามสกุล "."$lname"." จังหวัด ".$city;
}
Name("วรธน","เกษประทุม","กำแพงเพชร");
// $amount = 30000 ;
// $mount = 2 ;
// echo "เงินเดือนของผมมีค่าเท่ากับ ".$amount."<br>" ;
// $total = getTotal($amount,$mount);
// echo "รายได้ที่ทำงาน ".$mount." เดือนคือ "."$total" ;


?>