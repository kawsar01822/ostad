<?php

// Positivity

// Problem Statement:
// Write a program to check if an array contains more positivity than negativity.An array has more positivity if it contains strictly more unique positive values than unique negative values. If the number of positive and negative values are equal then it is also taken as negativity.

// Input
// The program will take an integer N as the size of an array. Then it will take the integer values of the array[] M[].

// Output
// The output will print either "Positivity" or "Negativity"


# Write your PHP code from here


// $count = trim(fgets(STDIN));
// $numbers = explode(" ",trim(fgets(STDIN)));

$count = 4;
$numbers = [10,20,30,-50];
$pos = 0;
foreach($numbers as $number){
	if($number>=0){
		$pos++;
	}else{
		$pos--;
	}
}

if($pos > 0){
	echo "Positivity";
}else{
	echo "Negativity";
}