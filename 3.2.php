<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function isMultipleOfThree($number) {
    return ($number % 3 == 0) ? 'true' : 'false';
}

$number = 20; 

echo isMultipleOfThree($number);
?>

</body>
</html>