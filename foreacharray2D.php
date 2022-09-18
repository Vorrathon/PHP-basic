<?php 

$persons = array(
array("โด้",27,"กรุงเทพ"),
array("บาส",23,"เชียงใหม่"),
array("โอ๊ต",23,"กำแพงเพชร")
);

$products = array(
    array("Name"=>"CPU","Type"=>"Hardware","price"=>15000),
    array("Name"=>"RAM","Type"=>"Hardware","price"=>2400),
    array("Name"=>"Photoshop","Type"=>"Sofeware","price"=>2000)
    
) ;

foreach($products as $product){
    echo ("ชื่อสินค้า = ".$product["Name"]."<br>") ;
    echo ("ประเภท = ".$product["Type"]."<br>") ;
    echo ("ราคา = ".$product["price"]."<br>") ;
    echo "<hr> ";
}


// foreach($persons as $person){
//     echo "ชื่อ ". $person[0]."<br>";
//     echo "อายุ ".$person[1] ."<br>";
//     echo "จังหวัด ".$person[2] ."<br>" ;
//     echo "<hr>" ;

// }
?>