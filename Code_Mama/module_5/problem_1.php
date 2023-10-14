<?php

// Look For Ten

// Problem Statement
// Write a program to create a function that takes two arguments. Both arguments are integers, a and b. Return true if one of them is 10 or if their sum is 10.

// Input
// The input consists of two integers.

// Output
// The output will print "True" if one of the input is 10 or their sum is 10. Otherwise, it will print "False".

// list($int1,$int2) = explode(" ",trim(fgets(STDIN)));

$int1 = 1;
$int2 = 10;

if($int1 == 10 || $int2 == 10 || ($int1+$int2) == 10){
    echo "True";
}else{
    echo "False";
}