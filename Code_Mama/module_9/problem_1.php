<?php

// Sorting String By Length

// Problem Statement
// Write a program to create a function that returns an array of strings sorted by length in ascending order.

// Input
// The program will take an integer N as the length of an array. Then it will take the string values of the array M[].

// Output
// The output will print the strings in sorted order.

# Write your PHP code from here

// $count = trim(fgets(STDIN));
// $string = explode(" ",trim(fgets(STDIN)));

$count = 6;
$string = ["abcde", "abc", "abcd", "abcdef", "ab", "a"];

usort($string,"sortByLength");

function sortByLength($a, $b){
    return strlen($a) - strlen($b);
}

foreach($string as $letter):
    echo $letter . " ";
endforeach;