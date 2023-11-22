<?php
// Function to generate Fibonacci series up to a given number of terms
function generateFibonacci($numTerms) {
    // Initialize an array to store the Fibonacci series
    $fibonacciSeries = array();

    // First two numbers in the Fibonacci series
    $fibonacciSeries[] = 0;
    $fibonacciSeries[] = 1;

    // Generate the Fibonacci series
    for ($i = 2; $i < $numTerms; $i++) {
        // Calculate the next Fibonacci number by adding the last two numbers
        $fibonacciSeries[] = $fibonacciSeries[$i - 1] + $fibonacciSeries[$i - 2];
    }

    // Return the generated Fibonacci series
    return $fibonacciSeries;
}

// Number of terms in the Fibonacci series
$numTerms = 10;

// Generate the Fibonacci series
$fibonacciSeries = generateFibonacci($numTerms);

// Display the generated series
echo "Fibonacci series of $numTerms terms: " . implode(", ", $fibonacciSeries) . "\n";
?>

