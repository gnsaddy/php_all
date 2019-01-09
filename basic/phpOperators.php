<?php
$var_first = 10; echo $var_first, "<br>";
$var_second = 3; echo $var_second, "<br>";
$var_third = 0;
$var_fourth = 10;

# arithmetic operator
echo "Addition '+' : ", ($var_first + $var_second), "<br>";
echo "Subtraction '-' : ", ($var_first - $var_second), "<br>";
echo "Multiplication '*' : ", ($var_first * $var_second), "<br>";
echo "Division '/' : ", ($var_first / $var_second), "<br>";
echo "Modulo '%' : ", ($var_first % $var_second), "<br>";
echo "Negation '-' : ", (-$var_first), "<br>"; #negtaion
echo "concat '.' : ", ($var_first . $var_second), "<br>";

#assignment operator

echo "Increment to '+' : ", ($var_third += 20), "<br>";
echo "Decrement to '-' : ", ($var_third -= 2), "<br>";
echo "Multiply to '*' : ", ($var_third *= 2), "<br>";
echo "Divide to '/' : ", ($var_third /= 2), "<br>";

# comprasion operator

echo "Equals to '==' : ", (10 == 10), "<br>";
echo "Equals to value ,datatype '===' : ", ($var_first === $var_fourth), "<br>";
echo "not Equals to '=' : ", ($var_third <> 2), "<br>";
echo "greater to '=' : ", ($var_third > 2), "<br>";
echo "less Equals to '=' : ", ($var_third < 2), "<br>";

# logical operator







?>