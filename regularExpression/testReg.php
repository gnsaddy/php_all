<!DOCTYPE html>
<html lang="en">
<head>
    <pre>Match a Pattern against a Phone Number Using RegExp in PHP</pre>
</head>
<body>
    
<?php
$pattern = "/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/";
$text = $_POST['ph'];
echo "Mobile Number is : ". $_POST['ph'];
if(preg_match($pattern, $text)){
    echo "Match found!";
} else{
    echo "Match not found.";
}
?>

</body>
</html>  