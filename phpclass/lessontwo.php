<!-- Data types in PHP -->

<!-- String -->
<?php 
$mystring = 'My name is Emmanuel';
//echo is_string("This is a string");
echo var_dump($mystring);
echo "<br>";
// Numbers
$mynumber = 5870;
// echo is_integer($mynumber);
var_dump($mynumber);
// echo $mynumber
echo "<br>";

$number1 = '5';
$number2 = 5;
// var_dump($number1);
echo $number1 + $number2;
echo "<br>";

$name = "Kundos Solutions Academy";
$text = "We empower you for digital opportunities";
$text2 = '$name : We empower you for digital opportunities';
echo $text; 
echo "<br>";
echo $text2;
echo "<hr>";
// Concatenation
echo "At " . $name . " " . $text;
echo "<br>";
// Array
$kundos_students = array("Israel", "Pelumi", "David");
var_dump ($kundos_students); echo "<hr>";
// Output a single element in an array 
echo $kundos_students[2]; echo "<br>";
echo $kundos_students[0]; echo "<br>";

// Strings
// Boolean
// Array
// Object
// NULL
// resource
// Number
echo "<hr>";
// Boolean
$check = false;
echo is_bool($check);
// var_dump($check);
echo "<br>";

function sample($name){
    echo "Good morning " . $name;
}
sample("Emmanuel");
sample("David");

// NULL
$text = NULL;
echo $text;
?>