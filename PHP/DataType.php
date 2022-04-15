<!DOCTYPE html>
<html lang="en">
<body>
<?php
//Variables can store data of different types and different data types can do different things.
//php support the following data types
/*
 * String
 * Integer
 * Float(floating point numbers -also called double)
 * Boolean
 * Array
 * Object
 * Null
 * Resource
 */

//Php String
//String is the sequence of the characters
//String can be any text inside the quotes. We can use single or double quotes
//For example
$firstName = "Harry";
$lastName = "Maguire";
$a = "Hello A";
$b = "Hello B";
echo $firstName . " ". $lastName;
echo "<br>";
echo $a;
echo "<br>";
echo  $b;
echo "<br>";
var_dump($firstName);
echo "<br>";
?>
<?php
//Integer
$x = 1234;
var_dump($x);
?>
<?php
//Float
$y = 10.33;
var_dump($y);
echo "<br>";
?>
<?php
//boolean
//boolean are often used in the conditional statements
$firstName = true;
$lastName = true;
?>
<?php
//Array
//array variable stores the multiple value in one single variable
$car = array("BMW", "Toyota", "Holden", "Mitusubi");
var_dump($car);
?>

<?php
//Null
$g = 23;
$j = null;
echo "<br>";
var_dump($j);
?>
</body>
</html>

