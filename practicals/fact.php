<?php
// Function to calculate the factorial of a number
function calculateFactorial($number) {
    // Base case: factorial of 0 or 1 is 1
    if ($number === 0 || $number === 1) {
        return 1;
    } else {
        // Recursive case: calculate factorial for numbers greater than 1
        return $number * calculateFactorial($number - 1);
    }
}

// Example number for which factorial is calculated
$numberToCalculate = 5;

// Calculate the factorial
$resultFactorial = calculateFactorial($numberToCalculate);

// Display the result
echo "Factorial of $numberToCalculate is: $resultFactorial\n";
?>

