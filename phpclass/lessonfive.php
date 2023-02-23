<h1>PHP Operators</h1>
<?php 
// Arithmetic Operators
$x = 5;  $y = 6;
$x += $y;
echo $x; 
echo "<br>";

// Exponentiation
$z = 4;
echo $z ** 2;
echo  "<br>";

// Modulus
$x = 4;
echo $x % 2;
echo  "<br>";

// Comparison Operators
$x = 4; $y = '6';
// == || === || != || !== || <> || >= || <= || <=> || > | < 

// Example 1
if($x == $y){
    echo "The two values are the same";
}else{
    echo "{$x} is different from {$y}";
}
echo  "<br>";

$answer = ($x == $y)?"{$x} and {$y} are the same -T":"{$x} is different from {$y} -T";
echo $answer;
echo "<hr>";













// Example 2
if($x === $y){
    echo "The two values have the same data type and value";
}else{
    var_dump($x); var_dump($y);
    echo "The two are not the same"; 
}
echo  "<br>";

// Example 3
if($x != $y){
    echo "The two values are not equal <br>";
}else{
    echo "{$x} and {$y} are equal <br>" ; 
}

// Example 4
if($x !== $y){
    echo "The two values are not identical <br>";
}

// Example 5
if($x <> $y){
    echo "The two values are not equal using <> <br>";
}

// Example 6 - Greater than or equal to
if($x >= $y){
    echo "{$x} is greater than {$y} <br>";
}

// Example 7 - Less than or equal to
if ($x <= $y) {
    echo "{$y} is greater than {$x} <br>";
}

// Example 8 - Spaceship
echo $x <=> $y;

// Conditional Ternary Operators
//?: - $container = (exp1)?exp2:exp3;

// Logical Operators : ||    && 
//                     OR    AND  XOR

// || OR - checks if either of a condition is true
echo "<br>";
$person1 = "Emmanuel";
$person2 = "David";
if($person1 OR $person2 == "Emmanuel"){
    echo "OR: One of our students is Emmanuel";
    echo "<br>";
}

// XOR - checks if either of a condition is true, returns false if both are true
if($person1 XOR $person2 == "Emmanuel"){
    echo "XOR: One of our students is Emmanuel";
    echo "<br>";
}

// AND - checks if both conditions are true
if ($person1 AND $person2 == "Emmanuel") {
    echo "AND: The two students are named Emmanuel";
}

// INCREMENTAL and DECREMENTAL // ++ -- ++$x // $x++
// Write a PHP Script to outout 1 to 30
// for ($x = 1; $x <31; $x++ ){
//         echo $x; 
//         echo "<br>";
//     }

// Write a PHP script to output numbers in descending order from 30 to 1;
for($x = 30; $x > 0; $x--){
    echo $x;
    echo "<br>";
}



?>