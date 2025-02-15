<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function isPalindrome($string) {
    $string = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $string));
    return $string === strrev($string);
}

$inputString = "Eva, can I see bees in a cave?"; 

if (isPalindrome($inputString)) {
    echo "Yes, it is a palindrome";
} else {
    echo "No, it is not a palindrome";
}
?>

</body>
</html>