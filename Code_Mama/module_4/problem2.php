<?php

// Problem Statement
// Write a program that removes duplicate characters from a given string, keeping only the first occurrence of each character.

// Input
// The input consists of a string.

// Output
// The output will be a string without any duplicate character.

// fscanf(STDIN,"%s",$text);
$text = "apples";
$str = str_split(trim($text),1);
$str = array_unique($str);
print_r(implode("",$str));