<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function isArmstrong($number) {
    $sum = 0;
    $temp = $number;
    while ($temp != 0) {
        $digit = $temp % 10;
        $sum += $digit ** 3;
        $temp = (int)($temp / 10);
    }
    return $sum == $number;
}

$number = 407; 

if (isArmstrong($number)) {
    echo "$number is an Armstrong Number";
} else {
    echo "$number is not an Armstrong Number";
}
?>

</body>
</html>