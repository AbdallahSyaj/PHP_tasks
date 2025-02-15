<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function swap(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$x = 12;
$y = 10;

echo "Before swapping: x = $x, y = $y<br>";

swap($x, $y);

echo "After swapping: x = $x, y = $y";
?>

</body>
</html>