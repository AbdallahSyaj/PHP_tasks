<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function extractFileName($url) {
    return basename($url);
}

$url = "www.orange.com/index.php";
echo extractFileName($url);
?>

</body>
</html>