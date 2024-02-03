<?php

// Stair Climbing

// Problem Statement
// Write a program to count number of ways a person can climb N stairs when a person can climb either 1 stair or 2 stairs at a time.The program should count the number of ways a person can reach the top.

// Input
// The program will take an integer N as input

// Output
// The output will be an integer.

# Write your PHP code from here

// $n = trim(fgets(STDIN));

function countWaysToClimbStairs($N) {
    if ($N <= 0) {
        return 0;
    } elseif ($N == 1) {
        return 1;
    } elseif ($N == 2) {
        return 2;
    }

    $ways = [0, 1, 2];

    for ($i = 3; $i <= $N; $i++) {
        $ways[$i] = $ways[$i - 1] + $ways[$i - 2];
    }

    return $ways[$N];
}

$n = 5;

$result = countWaysToClimbStairs($n);
echo $result;
