<?php

// Lexicographically First

// Problem Statement
// Write a program to create a function that returns the lexicographically first rearrangements of a lowercase string.

// Input
// The program will take a string S as input.

// Output
// The output will print a string.


# Write your PHP code from here

// $string = trim(fgets(STDIN));

$string = "hello";

function lexicographicallyFirst($string){

    $alphabet = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

    $arr = str_split($string);
    $pos = [];
    foreach($arr as $key => $value){
        $pos[] = array_keys ($alphabet, $value);
    }
    sort($pos);
    foreach($pos as $val){
        print_r($alphabet[$val[0]]);
    }
}

lexicographicallyFirst($string);