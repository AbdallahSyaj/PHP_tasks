<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function checkSum($firstInteger, $secondInteger) {
    $sum = $firstInteger + $secondInteger;
    return ($sum == 30) ? $sum : false;
}

$firstInteger = 10;
$secondInteger = 10;

$result = checkSum($firstInteger, $secondInteger);
echo ($result !== false) ? $result : 'false';
?>

</body>
</html>