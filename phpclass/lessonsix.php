<!-- LOOP -->
<!-- 
For Loop
Foreach Loop
While Loop
Do...While Loop
 -->

 <?php 
 // initialize
 // condition
 // action
 for ($i=0; $i < 101; $i+=10) { 
   echo $i ;
   echo "<br>";
 }

//  Write a PHP Script that countdown from 100 to 0
for ($i=100; $i >= 0 ; $i-=10) { 
    echo $i ;
    echo "<br>";
  }

// ForEach Loop
$mynames = array("Emma", "David", "Sarah", "Israel");
foreach ($mynames as $oneperson) {
    echo "My name is " . $oneperson;
    echo "<br>";
}
