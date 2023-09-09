<?php

#---------Constant---------
#There are two types of declare a constant variable
# using define method (runtime)
# using const keyword (compile time)


define("MY_NAME_IS", "dilshan"); // initialize variable in runtime
//define("MY_NAME_IS",1); //this is an error

echo $MY_NAME_IS = "A"; // this is a normal variable

echo MY_NAME_IS . " /"; //dilshan /

echo defined('MY_NAME_IS'); //return 1
echo defined('MY_NAME'), '/ '; //nothing to return There is no constant variable with that name

$year = 2023878787878;
echo define("YEAR", $year);
//echo YEAR;
echo '**********';
$school = "schood";
define('MY' . $school, "schoolmm");//create dynamic const
echo MYschood;
echo defined(MYschood);//this is a correct (but did,'t recieved value)
echo '**********';
//using constant keyword
const NAME = "shivantha"; //compile time
echo NAME, " /"; // shivantha
//const NAME = "Nilusha"; // can not reassign a value
echo NAME; //shivantha
//const NAME ='a'; //error

$age = 23;
//const AGE = $age; // This is not a constant value
const AGE = 23;
echo AGE . 'My age';

//magic constant
echo PHP_BINARY;

//variable variable

$foo = "Dilshan";
$$foo = "shivantha"; //we use dilshan as a variable

echo $foo, $$foo; //dilshanshivantha
echo $Dilshan, $$foo . ' /'; //shivanthashivantha
echo $Dilshan, $foo; //shivantha dilshan
echo "$foo,{$$foo},/";//Dilshan,Shivantha
echo "$foo,${$foo}";//Dilshan,Shivantha

$status = 'online';
//const STATUS = $status; operation is incorrect




