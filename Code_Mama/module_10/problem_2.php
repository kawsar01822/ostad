<?php

// Bracket Matching

// Problem Statement:
// Write a program to verify that all the brackets in a given string are correctly matched and nested.

// Input:
// The program will take a string S as input.

// Output:
// The output will either print "Brackets are balanced." if the brackets are matched or print "Brackets are not balanced."

# Write your PHP code from here
// $string = trim(fgets(STDIN));

$string = "({[]})";
$string = "({{()}}))";

$openingBrackets = [
    "(",
    "{",
    "["
];

$closingBrackets = [
    ")",
    "}",
    "]"
];

$length = strlen($string) - 1;

$sts = 1;

if ($length % 2 != 0) {

    for ($i = 0; $i <= floor(($length / 2)); $i++) {
        $startVal = $string[$i];
        $startkey = array_search($startVal, $openingBrackets);

        $endVal = $string[$length - $i];
        $endkey = array_search($endVal, $closingBrackets);
        if ($startkey != $endkey) {
            $sts = 0;
        }
    }

}
else
{
    $sts = 0;
}


if ($sts == 0) {
    echo "Brackets are not balanced.";
} else {
    echo "Brackets are balanced.";
}