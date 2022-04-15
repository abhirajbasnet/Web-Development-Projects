<!Doctype>
<html>
<body>
<?php
// In php variables can be declared anywhere in the script
// PHP has three variable scope i.e.
/*local
 * global
 * static
 */
#Global and Local Scope
// A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:
$x = 5; //Global Scope

function myTest()
{
    //using x inside this function Will generate an error
    //echo "<p> Variable x inside function is: . $x. </p>";
}

myTest();
echo "<p> Variable x outside function is: $x </p>";
?>

<?php
//A variable declared outside the function has global scope and a variable declared inside the function is local socpe
// and variable only be accessed within the function
function lasName()
{
    $txt = "Basnet";
    echo "<p> Last Name of the user is $txt </p>"; //prints the value of the variable
}

lasName();
//if we call a variable outside the function which is declared inside the local scope will generate an error
//for instatnce
//echo "<p>The last name of the user is $txt </p> ";//will generate an error
//we have local variables with the same name in different functions, because local variables are only recognized by the function
//in which they are declared
?>
<?php
// The global keyword is used to access  a global variable from within  a function
//accessing the global variable inside the function

$x = 4;
$y = 6;
function mySum()
{
    global $x, $y; // access the global function
    $y = $x + $y;
}

mySum();
echo "The sum of the variable x and y is $y";
// PHP also stores all the global variables in an array called $GLOBALS[index]. The index holds the name of the variable.
//This array is also accessible from within functions and can be used to update global variable directly.

$a = 4;
$b = 6;
function mySum1()
{
    $GLOBALS['c'] = $GLOBALS ['a'] + $GLOBALS['b'];
}

mySum1();

//echo "<p>The sum of the variable a and b is $c </p>";

$fistName = "Harry";
$LastName = "Magurie";

function myName()
{
    $GLOBALS['firstName'] = $GLOBALS['firstName'] + $GLOBALS['lastName'];
}

myName();
echo "<p>The name of the user is $fistName</p>";
?>
<?php
//PHP Static keyword
//Normally when the function is completed/executed all the variables are deleted. However, sometimes we want a local variable not to be deleted.
// So for that we use Static keyword when we declared the variables;
function myStaticTest(){
    static $x = 0;
    echo $x;
    $x++;
}
myStaticTest();
echo "<br>";
myStaticTest();
echo "<br>";
myStaticTest();
echo "<br>";
myStaticTest();
//Each time the function is called the variable will still have the information it contained from the last time the fuction was called
//The variable is still local to the function
?>

</body>
</html>



