<?php

// Problem Statement
// Write a program to approximate the square root of a non-negative integer using binary search. Your function should return an integer representing the floor of the square root. For example, for 6 it will print 2.

// Input
// The input consists of an integers N.

// Output
// The output will print the square root integer value of the input.


# Write your PHP code from here

// $number = trim(fgets(STDIN));

$number = 6;
    
function getSquareRoot($number){
    if($number>=0 && $number<=10000){
        return floor(sqrt($number));
    }
}

echo getSquareRoot($number);