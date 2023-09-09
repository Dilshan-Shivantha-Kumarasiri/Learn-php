<?php

#data types

// * php is the dynamically typed language
// * dynamically types means typechecking doing in the run time

# 4 scalar types
#bool - true/false
$completed = true;
#int - 5,7,-5 (no decimal)
$age = 5;
#float - 535.5, 4.5 , -0.5
$price = 0.99;
#string - "gio"
$status = "Hello";

echo $completed . '<br>';
echo $age . '<br>';
echo $price . '<br>';
echo $status . '<br>';

echo "type =" . gettype($completed), "<br>";
echo "type =" . gettype($age), "<br>";

var_dump($price);

# 4 compound type
#array
$companies = [1, 2, 3, 0.2, 'dilshan', true];
echo print_r($companies, true) . '<br>';
#object
#callable
#iterable

# 2 special type
#resource
#null = no value