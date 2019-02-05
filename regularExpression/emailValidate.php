<!DOCTYPE html>
<html lang="en">
<head>
    <pre>    Form Validation in PHP regular Expression    </pre>
</head>
<body>   
<?php
$pattern = "/^[a-zA-Z0-9._-]{4,20}+@[a-zA-Z]{1,10}+.[a-zA-Z]{1,10}$/";
$mail = $_POST['mail'];
$pass = $_POST['pass'];
echo '<pre>'. "Email Address is : ". $_POST['mail'].'<br></pre>';

if($_POST['pass'] == ""){
    echo '<script> alert("Enter password") </script>';
    header('Refresh:1; url=email.html');
}

if($_POST['pass']!=""){
if(preg_match($pattern, $mail)){
    echo "Match found!";
    
} 
else{
    echo "Match not found.";
}
}




?>

</body>
</html>  