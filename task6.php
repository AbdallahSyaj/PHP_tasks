<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$temperatures = array_unique(array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62,
65, 64, 68, 73, 75, 79, 73));

$average = array_sum($temperatures) / count($temperatures);
echo "Average Temperature is: " . number_format($average, 1) . "<br>";

sort($temperatures);

echo "List of seven lowest temperatures: ";
$lowest = array_slice($temperatures, 0, 7);
echo implode(", ", $lowest) . "<br>";

echo "List of seven highest temperatures: ";
$highest = array_slice($temperatures, -7);
echo implode(", ", $highest) . "<br>";
?>

</body>
</html>