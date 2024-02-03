<?php

// Remove Trailing Zeroes

// Problem Statement
// Write a program that takes in a number as a string S and returns the number without trailing zeros. Trailing zeroes before decimal point has importance , so they will not be removed. Only the trailing zeroes after decimal point which does not have any importance will be removed.

// Input
// The input consists of a string S.

// Output
// The output will print a number without trailing zeroes.

# Write your PHP code from here

// $s = trim(fgets(STDIN));


function removeTrailingZeros($numberStr) {

    $parts = explode('.', $numberStr, 2);

    if (isset($parts[1])) {
        $parts[1] = rtrim($parts[1], '0');
    }

    $result = implode('.', $parts);

    return $result;
}

$s = 45.4500;

$result = removeTrailingZeros($s);
echo $result . PHP_EOL;
