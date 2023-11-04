<?php

// Substring Occurrences Counting

// Problem Statement
// Write a program to create a function that finds and counts all occurrences of a substring within a larger string. For instance, in the string "abababab," the substring "ab" appears four times.

// Input
// The input consists of two strings.

// Output
// The output will print the number of occurrences of a substring which will be an integer.


// list($string, $find) = explode(" ", trim(fgets(STDIN)));

$string = "abababab"; 
$find = 'ab';

function countSubstringOccurrences($string, $find)
{
    $count = 0;
    $offset = 0;

    while (($pos = strpos($string, $find, $offset)) !== false) {
        $count++;
        $offset = $pos + strlen($find);
    }

    return $count;
}

echo $count = countSubstringOccurrences($string, $find);