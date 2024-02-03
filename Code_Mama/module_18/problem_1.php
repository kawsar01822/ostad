<?php

// Repdigit

// Problem Statement
// Write a program to check whether a number is Repdigit or not. A repdigit is a positive number composed out of the same digit.

// Input
// The input consists of a positive integer number N.

// Output
// The output will print either "true" or "false".


# Write your PHP code from here

// $n = trim(fgets(STDIN));
    

function isRepdigit($number) {
    $numberStr = (string) $number;
    
    for ($i = 0; $i < strlen($numberStr) - 1; $i++) {
        if ($numberStr[$i] != $numberStr[$i + 1]) {
            return false;
        }
    }

    return true;
}

$n = 55;

if (isRepdigit($n)){
    echo "true\n";
} else {
    echo "false\n";
}