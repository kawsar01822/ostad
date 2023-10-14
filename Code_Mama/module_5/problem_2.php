<?php

// Second to Hour:Minit

// Problem Statement
// Write a program which will take seconds as input and output into hour:minit.

// Input
// The input consists of a integer.

// Output
// The output will print in the form hour:minit. For example if it takes 130 as input then it will print 0:2.

// $seconds = trim(fgets(STDIN));
$seconds = 60;

$hour = floor($seconds / 3600);
$min = floor(($seconds % 3600) / 60);
echo $hour . ":" . $min;