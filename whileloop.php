<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>รายการอาหาร</h1>
    <ul>
        <?php
        $i = 1 ;
        $limit = 5 ;
        while($i<=$limit){?>
            <li><?php echo "รายการอาหาร"."$i"?></li>
            <?php
                $i++ ;
        }
            ?>
             
        
    </ul>
    
</body>
</html>