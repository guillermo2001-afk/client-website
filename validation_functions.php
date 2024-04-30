<?php
// Function to check text length
function validateTextLength($text, $min, $max) {
    $length = strlen($text);
    return ($length >= $min && $length <= $max);
}

// Function to check number range
function validateNumberRange($number, $min, $max) {
    return ($number >= $min && $number <= $max);
}
