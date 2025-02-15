<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function formatTime($timeString) {
    return substr($timeString, 0, 2) . ":" . substr($timeString, 2, 2) . ":" . substr($timeString, 4, 2);
}

$time = "085119";
echo formatTime($time);
?>

</body>
</html>