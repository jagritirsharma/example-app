<?php

// Initialize two variables with self-descriptive names to represent the numbers to be swapped
$firstNumber = 5;
$secondNumber = 10;

// Display the original values of the numbers
echo "Before swapping: First number is " . $firstNumber . " and second number is " . $secondNumber . "<br>";

// Swap the numbers using a temporary variable
$temp = $firstNumber;
$firstNumber = $secondNumber;
$secondNumber = $temp;

// Display the swapped values of the numbers
echo "After swapping: First number is " . $firstNumber . " and second number is " . $secondNumber;
?>
