<?php

// Remove Special Character

// Problem Statement
// Write a program where you will be given an array arr[] of size N and an integer X. Find if there’s a triplet in the array which sums up to the given integer P.

// Input
// The program will take an integer N as the size of an array. Then it will take the integer values of the array [] arr[]. Finally, it will take the target value P.

// Output
// The output will print the triplet numbers which will generate the sum.

# Write your PHP code from here

// $n = trim(fgets(STDIN));
// $arr = explode(" ",trim(fgets(STDIN)));
// $p = trim(fgets(STDIN));

$n = 5;
$arr = ['7', '2', '3', '0', '1'];
sort($arr);
$p = 12;
$count = 0;
for($i=0; $i<$n; $i++){
    for($j=$i+1; $j<$n; $j++){
        for($k=$j+1; $k<$n; $k++){
            if($arr[$i]+$arr[$j]+$arr[$k] == $p){
                echo $arr[$i]." ".$arr[$j]." ".$arr[$k]."\n";
                $count++;
                break;
            }
        }
        if($count>0){
            break;
        }
    }
    if($count>0){
        break;
    }
}
