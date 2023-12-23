<?php

// Find Number From String

// Problem Statement
// Write a program to find a number from a string. An input string will contain english letters along with a number.There will be only one number in the string.You will have to find that number and print it.

// Input
// The program will take a string S

// Output
// The output will print a number.


# Write your PHP code from here

// $string = trim(fgets(STDIN));

$string = "ab1cd";

for($i=0; $i<strlen($string); $i++){
    if(is_numeric($string[$i])){
        echo $string[$i];
    }
}