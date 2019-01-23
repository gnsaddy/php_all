<?php
$months = 60*60*60*24+time();
date_default_timezone_set('Asia/Kolkata');

setcookie('LASTVISIT',date("g:i -m/d/y"), $months);

if(isset($_COOKIE['LASTVISIT'])){
    $visit = $_COOKIE['LASTVISIT'];
    echo "Your last visit : ",$visit;
}
else {
    echo "There is no last visit history ";
}
session_start();
if(isset($_SESSION['view'])){
    $_SESSION['view'] = $_SESSION['view']+1;
}
else {
    $_SESSION['view']=1;
}
echo "<br> view= " ,$_SESSION['view'];
echo "<br>" ,"To increase view count refresh page";
?>