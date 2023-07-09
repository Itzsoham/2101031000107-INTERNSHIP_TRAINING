<body>
    <?php
    $a=12;
    $b=66;
    $c=54;
    if($a>=$b && $a>=$c){
        echo "$a is the largest number.";
    }
    else if($b>=$a && $b>=$c){
        echo "$b is the largest number.";
    }   
    else{
        echo "$c is the largest number.";
    }
    ?>
</body>