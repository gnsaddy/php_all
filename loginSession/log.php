<?php
$ur = $_POST['ur'];
$ps = $_POST['ps'];

if($ur=="aditya" and $ps=123){
    session_start();
    $_SESSION['sid']=session_id();
    echo "Logged succefully ";
    echo "<br>";
    echo '<a href="out.php">Logout</a>';
   
}
else {
    echo "Wrong password";
}
?>