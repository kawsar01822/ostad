<?php

// Task 5: Password Generator

function generatePassword($length = 12)
{

    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numericChars = '0123456789';
    $specialChars = '(!@#$%^&*()_+).';

    $allChars = $lowercaseChars . $uppercaseChars . $numericChars . $specialChars;

    $password = '';

    // Generate random characters for the password
    for ($i = 0; $i < $length; $i++) {
        $randomChar = $allChars[rand(0, strlen($allChars) - 1)];
        $password .= $randomChar;
    }

    return $password;
}

// Generate a password with a length of 12 characters
$password = generatePassword(12);

// Print the generated password
echo "Generated Password:\n$password \n";
