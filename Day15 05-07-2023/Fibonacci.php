<body>
    <?php
    $n=12;
    $first=0;
    $second=1;
    echo "fibonacci series of first 12 terms: ";
    echo "<br>";
    for($i=1;$i<$n;++$i){
        echo "$first,";
        $next=$first+$second;
        $first=$second;
        $second=$next;
    }
    ?>
</body>