<?php

// Prefix Expression Evaluation

// Problem Statement:
// Write a program to evaluate Prefix expression.A prefix expression is an expression where the operator appears before the operands.

// Input:
// The program will take a string S as input.

// Output:
// The output will print the result after evaluation which will be an integer.


# Write your PHP code from here

// $string = trim(fgets(STDIN));

$string = "-*543";
$length = strlen($string);
$stack = [];

for ($i = $length-1; $i >= 0 ; $i--) {

    $val = $string[$i];

    if (!is_numeric($val)) {

        $operand1 = array_pop($stack);
        $operand2 = array_pop($stack);

        switch ($val) {
            case'+':
                $result = $operand1 + $operand2;
                break;
            case'-':
                $result = $operand1 - $operand2;
                break;
            case'*':
                $result = $operand1 * $operand2;
                break;
            case'/':
                $result = $operand1 / $operand2;
                break;
        }

        array_push($stack, $result);

    } else {
        array_push($stack, $val);
    }
}

print_r(floor($stack[0]));