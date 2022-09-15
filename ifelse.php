<?php
$balance = 1000;
$transfer = 1000 ;

//โปแกรมกดเงิน
echo "เงินในบัญชี = ".$balance."</br>" ;
if($transfer<=$balance){
    echo "สามารถกดเงินได้"."<br>" ;
    $balance-=$transfer ; //คำนวณยอดเงินคงเหลือ
    echo "ยอดเงินคงเหลือ".$balance."<br>" ; 
}
else {
    echo "คืนบัตรกดเงิน";
}
?>