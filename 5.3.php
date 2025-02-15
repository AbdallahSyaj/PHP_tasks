<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function containsWord($sentence, $word) {
    return (stripos($sentence, $word) !== false) ? "Word Found!" : "Word Not Found.";
}

$sentence = "I am a full stack developer at orange coding academy";
$word = "Orange";
echo containsWord($sentence, $word);
?>

</body>
</html>