<body style="background-image: url(blue3.jpg);">
    <center>
    <?php
    $a=5;
    $i=1;
    while($i<11){
        echo $a." X ".$i." = ".$a*$i."<br>";
        $i++;
    }
    echo "<br>";
    for($i=0;$i<11;$i++){
        echo $i."<br>";
    }
    ?>
    </center>
</body>