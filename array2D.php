<?php 
$products = array(
array("keybord","คีบอร์ด",2000), 
array("mouse","เมาส์",790),
array("Headphone","หูฟัง",4900),
array("Mic","ไมค์",1400)

) ;
// echo ($products[2][2]);  //row กับ column

for($row=0;$row<count($products);$row++){
    echo " สินค้าชิ้นที่ ".$row."<br>" ;
    for($column=0; $column<count($products[$row]);$column++){
        echo ($products[$row][$column]."<br>");
        
    }
    echo "<hr>";

}

?>