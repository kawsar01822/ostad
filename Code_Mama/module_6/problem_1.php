<?php

// Find Discount

// Problem Statement
// Write a program to create a function that takes two arguments: the original price and the discount percentage as integers and returns the final price after the discount.

// Input
// The input consists of two integers: the original price and the discount.

// Output
// The output will print the final price after discount which will be a float number.

// list($price,$discount) = explode(" ",trim(fgets(STDIN)));

$price = 50;
$discount = 20;
$priceAfterDiscount = $price - $price * ($discount / 100);
printf("Price: %.2f", $priceAfterDiscount);