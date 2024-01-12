<?php

// Remove Special Character

// Problem Statement
// Write a program to Create a function that takes a string, removes all "special" characters (e.g. ., !, @, #, $, %, ^, &, , *, (, )) and returns the new string.

// Input
// The program will take a string S

// Output
// The output will print a string without any special character.

# Write your PHP code from here

// $string = trim(fgets(STDIN));

$string = "ab!cd";

echo str_replace( array( '.', '!','@', '#', '$', '%', '^', '&', '*', '(', ')', '/', '\'' ), '', $string);