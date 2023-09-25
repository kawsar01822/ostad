<?php

// Task 1: String Manipulation

$text = "The quick brown fox jumps over the lazy dog.";

function convertText($text)
{
    echo $text = strtolower($text).PHP_EOL.PHP_EOL;
    echo  str_replace('brown', 'red', $text);
}

convertText($text);        // the quick red fox jumps over the lazy dog.