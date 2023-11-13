<?php

// Minimum In Rotated Sorted Array

// Problem Statement
// Write a program to find the minimum value in a rotated sorted array using binary search algorithm. If a sorted array is like {0,1,2,4,5,6,7} then the rotated sorted array can be {4,5,6,7,0,1,2}.

// Input
// The program will take an integer N as the size of a rotated sorted array. Then it will take the integer values of the array M[].

// Output
// The output will print the minimum integer number from the array.

# Write your PHP code from here

// $count = trim(fgets(STDIN));
// $numbers = explode(" ", trim(fgets(STDIN)));

$count = 7;
$numbers = [4,5,6,7,0,1,2];

echo min($numbers);
