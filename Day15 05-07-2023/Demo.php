<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=10;
    $b=5;
    $add=$a+$b;
    echo "Addition is: " . $add;
    echo "<br>";
    $sub=$a-$b;
    echo "subtraction is: " . $sub;
    echo "<br>";
    $mul=$a*$b;
    echo "multiplcation is: " . $mul;
    echo "<br>";
    $div=$a/$b;
    echo "division is: " . $div;
    echo "<br>";
    $s="123.abc";
    echo "type of a is:".gettype($s);
    echo "<br>";
    settype($s,"int");
    echo "After conversion type of a is:".gettype($a);
    echo "<br>";
    print "hello";
    ?>
</body>
</html>