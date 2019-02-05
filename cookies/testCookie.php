<?php

date_default_timezone_set('Asia/Calcutta');

setcookie("username", date("G:i - m/d/y"), time()+3600);

if (isset($_COOKIE["username"])){
    echo '<pre>'. " Welcome Aditya " ;
    $visit = $_COOKIE['username'];
    echo "Your last visit was - ". $visit . '</pre>';   
}   
else
  echo "Welcome guest!<br>";

session_start();

if(isset($_SESSION['view'])){
    $_SESSION['view'] = $_SESSION['view'] + 1;  
    
}
else{
    $_SESSION['view'] = 1;
}
    echo '<pre>';
    echo "<br>view= " ,$_SESSION['view'];
    echo "<br>" ,"To increase view count refresh page" .'</pre>';

?>