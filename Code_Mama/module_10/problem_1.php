<?php

// Postfix Expression Evaluation

// Problem Statement:
// Write a program to evaluate Postfix expression.A postfix expression is an expression where the operator appears after the operands.

// Input:
// The program will take a string S as input.

// Output:
// The output will print the result after evaluation which will be an integer.


# Write your PHP code from here

// $string = trim(fgets(STDIN));

$string = "82/3*";
$length = strlen($string);
$stack = [];

for ($i = 0; $i < $length; $i++) {

    $val = $string[$i];

    if (!is_numeric($val)) {

        $operand2 = array_pop($stack);
        $operand1 = array_pop($stack);

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