<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$array = [1, 2, 3, 4, 5];

$newItem = '$';
$position = 3; 

array_splice($array, $position, 0, $newItem);

print_r($array);
echo'<br>';
foreach ($array as $key => $value) {
    echo "$value ";
}
?>
</body>
</html>