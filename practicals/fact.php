<?php
// Function to calculate the factorial of a number
function factorial($n) {
    if ($n === 0 || $n === 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Example number
$number = 5;

// Calculate the factorial
$result = factorial($number);

// Display the result
echo "Factorial of $number is: $result\n";
?>

