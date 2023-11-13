<?php

// Rotated Sorted Array

// Problem Statement
// Write a program to find the minimum in a rotated sorted array using binary search algorithm. If a sorted array is like {0,1,2,4,5,6,7} then the rotated sorted array can be {4,5,6,7,0,1,2}.

// Input
// The program will take an integer N as the size of a rotated sorted array. Then it will take the integer values of the array M[]. Finally, it will take the target value P

// Output
// The output will print either the index of the target element or "Element not found" if the element is not found.


# Write your PHP code from here

// $count = trim(fgets(STDIN));
// $numbers = explode(' ',trim(fgets(STDIN)));
// $find = trim(fgets(STDIN));

$count = 7;
$numbers = [4,5,6,7,0,1,2];
$find = 0;

$matches = array_keys($numbers, $find);
if(count($matches)>0){
    printf($matches[0]);
}else{
    printf("Element not found");
}