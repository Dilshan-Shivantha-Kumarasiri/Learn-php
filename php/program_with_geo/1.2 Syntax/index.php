<?php

echo 'print 01/';

echo ' print 02/';

//echo "print 03/"  this is the error the reason is code is ended with out the semicolon

print ("print 04/");

echo print ("Dilshan"), '/'; // return value 1

//print echo ('D'); unexpected syntax

//print ('shivantha','dilshan'); can not concat string values like that

//print 'shivantha','dilshan'; This one also the wrong

echo 'dilshan', " ", 'shivantha/ '; // only echo syntax can concate string

//echo 'dilshan's home'; this statement also wrong

echo "dilshan's home/ "; // this is the right way (hove to write no 21 code in correct way)

echo "dilshan's home/ "; // this is the right way

echo 'Nilusha\'s home'; // this is the right way

//------------------variables -------------------------

$myName = 'My name is dilshan';
print ($myName);
echo $myName;

$x = 5;
$y = &$x; // the value of the y is 20. The reason is reference

$x = 20;

//$this = "a"; can not use varaible this the reason is the this is the keyword that represent OBJECT

echo " /Value of the y variable =", $y; //if we wouldn't use '@'before the value the answer is 5
echo " /Value of the y variable =", $y; //After using '&' before the variable

$name = "Kumarsiri";
//echo 'my name is $name' // this is also incorrect
echo "my name is $name"; // this is also correct
echo "my name is {$name}"; // this is also correct (more clarity)
echo 'my name is' . "$name";
echo 'my name is' . $name;
echo 'my name is', $name;

// comment type 01
# comment type 02
/*
        multy line comment
*/
/*
 * doc type comment
 *
 */


