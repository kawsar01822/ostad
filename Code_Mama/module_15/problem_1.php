<?php

// Lone Zeroes

// Problem Statement
// Write a program to create a function which counts how many lone 0s appear in a given number. Lone means the number doesn't appear twice or more in a row.Previous and next numbers are not zeroes. For example - countLoneZeroes(10101) ➞ 2

// Input
// The program will take an integer N as input

// Output
// The output will print the number of lone 0's in the integer.


# Write your PHP code from here

// $string = trim(fgets(STDIN));

$string = "101010100";

$prev = null;
$post = null;
$count = 0;
$length = strlen($string);
for($i=0; $i<$length; $i++){
    $current = $string[$i];
    if($current == 0){
        if($i == 0){
            $post = $string[$i+1];
            if($current != $post){
                $count++;
            }
        }elseif($i == $length-1){
            $prev = $string[$i-1];
            if($current != $prev){
                $count++;
            }
        }else{
            $prev = $string[$i-1];
            $post = $string[$i+1];
            if($current != $post && $current != $prev){
                $count++;
            }
        }
    }
}

echo $count;