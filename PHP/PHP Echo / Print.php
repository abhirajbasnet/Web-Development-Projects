<!DOCTYPE html>
<html>
<body>
<?php
//In php there are two basic way of printing the output i.e. echo and print
//using echo to display text
echo "Hello How are you? <br>";
echo "Hari : I am good and you? <br>";
echo "Umm I am good too. Thank you <br>";

//using echo to display the variable

$x = 3;
$y = 4;
$firstName = "Harry";
$lastName = "Maguire";
echo "Tha sum of the variable value is " . ($x + $y) . "<br>";
echo "The current worst player in the Manchester United is ". $firstName. " " . $lastName . "<br>";
echo $x + $y ."<br>";

//Using print to display output
//print can be used with or without the parameters

print "<h1>Using Print statement</h1>";
print "Hello World <br>";
print "<h4 style='color: darkred'>Hello Universe </h4>";

//using print to display variable

$car = "ford";
$speed = 40;
print "<h3 style='animation: alternate-reverse'>$car runs at the speed of $speed . km/hr</h3> <br>";
print $speed . " ". $car;

?>
</body>
</html>

