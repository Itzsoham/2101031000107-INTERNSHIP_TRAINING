<body>
    <?php
    $a=array(1,3,5,7,9,11);
    print_r($a);
    $sum=0;
    foreach($a as $value){
        $sum+=$value;
    }
    echo "<br>";
    echo "sum is : $sum";
    ?>
</body>