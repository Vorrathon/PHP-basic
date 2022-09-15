<?php

    // isset คือการบอกว่าตัวแปรมีการกำหนดค่าหรือไม่ แสดงแบบ boolean
    $total = null;
    $total2 = "" ;
    $total3 = 0 ;
    $total4 = "vvv";

    //unset คืนค่าตัวแปร หรือ ลบตัวแปร
    unset($total4) ;

    echo "ค่าของ total คือ".isset($total)."<br>" ;
    echo "ค่าของ total2 คือ".isset($total2)."<br>" ;
    echo "ค่าของ total3 คือ".isset($total3)."<br>" ;
    echo "ค่าของ total4 คือ".isset($total4)."<br>" ;

    //empty ถ้ามีค่า null, 0,"",โดนลบตัวแปร จะแสดง boolean เป็น 1 
    echo "ค่าของ total คือ".empty($total)."<br>" ;
    echo "ค่าของ total2 คือ".empty($total2)."<br>" ;
    echo "ค่าของ total3 คือ".empty($total3)."<br>" ;
    echo "ค่าของ total4 คือ".empty($total4)."<br>" ;

    //is_null คือตัวไหนเป็นค่า null จะแสดง boolean เป็น 1

    echo "ค่าของ total คือ".is_null($total)."<br>" ;
    echo "ค่าของ total2 คือ".is_null($total2)."<br>" ;
    echo "ค่าของ total3 คือ".is_null($total3)."<br>" ;
   
    // var_dump ดูโครงสร้างของตัวแปร
    echo "ค่าของ total คือ".var_dump($total)."<br>" ;
    echo "ค่าของ total2 คือ".var_dump($total2)."<br>" ;
    echo "ค่าของ total3 คือ".var_dump($total3)."<br>" ;
   

   


    





?>