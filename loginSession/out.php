<?php
echo "Logout succefully";

session_start();
session_destroy();
echo "<br>";
echo '<a href="index.html">Login</a>';
?>