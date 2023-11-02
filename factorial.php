<?php

// Define the number for which we want to calculate the factorial
$number = 5;

// Initialize a variable to store the factorial value
$factorial = 1;

// Iterate from 1 to the number and multiply each number to the factorial
for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}

// Display the factorial of the number
echo "The factorial of " . $number . " is " . $factorial;
?>
