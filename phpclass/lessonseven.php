<!-- Conditionals -->

<!-- 
    If 
    If Else
    If elseif
    if elseif... else
-->
<?php 
$age = 28;
// If Checks one condition
if($age == 28){
    echo "You are eligible to vote. Go and get your PVC";
    echo "<br>";
}

// If...Else checks two conditions
if($age < 18){
    echo "You are too young to vote";
    echo "<br>";
}else {
    echo "You are eligible to vote"; 
    echo "<br>";
}
// If..Elseif checks two or more conditions
// if($age < 18){
//     echo "You are less than 18 years"; echo "<br>";
// }elseif($age == 18){
//     echo "You are now mature to vote in Nigeria"; echo "<br>";
// }elseif($age > 18){
//     echo "You must vote because you are of age"; echo "<br>";
// }

if($age < 18){
    echo "You are a young child"; echo "<br>";
}elseif($age == 18){
    echo "You are now 18 years old"; echo "<br>";
}else{
    echo "We don't know your age, but we assume that you are older than 18";
}

?>

<form action="" method="GET">
    <input type="text" name="age" id="">
    <input type="submit" name="check" value="Check">
</form>
<?php 
if(isset($_GET['check'])){
    $myage = $_GET['age'];
    if($myage < 18 ):
        echo "You are less than 18 bro. When you grow up, you can vote";
    elseif($myage >= 18):
        echo "You are good to go";
    elseif($myage > 70):
        echo "Don't bother yourself man! Send your child to vote";
    endif;
}
?>

<!-- Example 2: Basic Calculator -->
<form action="" method="GET">
    <legend>Basic Calculator</legend>
    <p><input type="number" name="num1" id=""></p>
    <select name="operator" id="">
        <option value="+">Addition</option>
        <option value="-">Subtraction</option>
        <option value="*">Multiplication</option>
        <option value="/">Division</option>
    </select>
    <p><input type="number" name="num2" id=""></p>
    <p><input type="submit" name="calculator" value="Calculate"></p>
</form>
<?php 
if (isset($_GET['calculator'])) {
   $x = $_GET['num1'];
   $y = $_GET['num2'];
   $operator = $_GET['operator'];
   if($operator == '+'){
    echo $x + $y;
   }
   elseif($operator == '-'){
    echo $x - $y;
   }
   elseif ($operator == '*') {
    echo $x * $y;
   }elseif ($operator == '/') {
    echo $x / $y;
   }else{
    echo "No operator was selected. Please try again";
   }
}
?>
<!-- if(){
    code here
}
if():
endif; -->
<!-- Switch -->
<?php
$answer = "Ball";
switch($answer){
    case "boy":
        echo "The answer is not boy";
        break;
    case "bull":
        echo "The answer is not bull";
        break;
    default:
        echo "None of the above";
        break;
}
?>
<form action="" method="POST">
    <h4>Calculator Using Switch</h4>
<p><input type="number" name="num1" id=""></p>
    <select name="operator" id="">
        <option value="+">Addition</option>
        <option value="-">Subtraction</option>
    </select>
    <p><input type="number" name="num2" id=""></p>
    <p><input type="submit" name="calculator" value="Calculate"></p>
</form>
<?php 
if(isset($_POST['calculator'])){
    $x = $_POST['num1'];
    $y = $_POST['num2'];
    $operator = $_POST['operator'];

    switch ($operator) {
        case '+':
            echo $x + $y;
            break;
        
        case '-':
            echo $x - $y;
            break;
        
    }
}
?>