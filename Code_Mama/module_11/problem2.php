<?php

// Sum Digits: Odd or Even?

// Problem Statement:
// Write a program which will determine whether the sum of all the digits of the number is even or odd.

// Input
// The program will take an integer N as input.

// Output
// The output will print either "Odd" or "Even"


# Write your PHP code from here


// $numbers = trim(fgets(STDIN));

$numbers = "123";
$digits = str_split((string)$numbers);
if(array_sum($digits)%2 == 0){
	echo "Even";
}else{
	echo "Odd";
}