<?php

// Build Toy Cars

// Problem Statement
// Suppose, you work in a toy car workshop, and your job is to build toy cars from a collection of parts. Each toy car needs 4 wheels, 1 car body, and 2 figures of people to be placed inside. Write a program which will calculate how many complete toy cars can be made, given the total number of wheels, car bodies and figures available.

// Input
// The input consists of three integers: number of wheels, car bodies, figures.

// Output
// The output will print the number of cars.

// $seconds = trim(fgets(STDIN));
// list($wheels, $body, $figures) = explode(" ", trim(fgets(STDIN)));

$wheels = 10;
$body = 2;
$figures = 5;

function completeToy($wheels, $body, $figures)
{
    $wheel = 4;
    $figure = 2;
    $toyByWheel = floor($wheels / $wheel);
    $toyByFigure = floor($figures / $figure);
    return min($toyByWheel, $body, $toyByFigure);
}

echo completeToy($wheels, $body, $figures);