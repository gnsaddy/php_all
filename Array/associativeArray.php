<?php

$emp_name = array('n1' => 'Aditya raj', 'n2' => 'Bhaskar Uday', 'n3' => 'Alok Tripathi');
$emp_age = array('a1' => 10, 'a2' => 20);

echo $emp_name['n2'],"<br>";
echo $emp_age['a1'],"<br>";
echo count($emp_age), " count of an array element", "<br>";
 

print_r($emp_name);
echo "<br>";
print_r($emp_age);
echo "<br>";
var_dump($emp_name);
echo "<br>";
var_dump($emp_age)



?>