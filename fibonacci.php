<?php

// Initialize the first two numbers of the Fibonacci sequence
$firstNumber = 0;
$secondNumber = 1;

// Display the first two numbers of the Fibonacci sequence
echo $firstNumber . " " . $secondNumber . " ";

// Set the limit for the length of the sequence
$limit = 10;

// Generate and display the Fibonacci sequence up to the specified limit
for ($i = 2; $i < $limit; $i++) {
    // Calculate the next number in the sequence
    $nextNumber = $firstNumber + $secondNumber;
    // Display the next number
    echo $nextNumber . " ";
    // Update the values of the variables to move to the next numbers in the sequence
    $firstNumber = $secondNumber;
    $secondNumber = $nextNumber;
}
?>
