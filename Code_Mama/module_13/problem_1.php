<?php

// Substitution Cipher

// Problem Statement
// A substitution cipher is a method of encryption where each letter in the plaintext is replaced by another letter according to a fixed system. One of the simplest substitution ciphers is the Caesar cipher, where each letter in the plaintext is shifted a certain number of places down or up the alphabet. You will be given a plaintext and a shift number. You will have to have to shift each letter of the plaintext according to the number.

// Input
// The program will take a string S and an integer N

// Output
// The output will print a string shifted by a particular number.


# Write your PHP code from here

// list($string,$number) = explode(" ",trim(fgets(STDIN)));

$string = "abcd";
$number = 3;

for($i=0; $i<strlen($string); $i++){
    echo chr(ord($string[$i])+$number);
}