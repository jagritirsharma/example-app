<?php
// Function to generate Fibonacci sequence up to a given number of terms
function generateFibonacci($numTerms) {
    $fibonacciSequence = array();

    if ($numTerms >= 1) {
        $fibonacciSequence[] = 0;
    }
    if ($numTerms >= 2) {
        $fibonacciSequence[] = 1;
    }

    for ($i = 2; $i < $numTerms; $i++) {
        $fibonacciSequence[] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
    }

    return $fibonacciSequence;
}

// Number of terms in the Fibonacci sequence
$numTerms = 10;

// Generate the Fibonacci sequence
$fibonacciSequence = generateFibonacci($numTerms);

// Display the generated sequence
echo "Fibonacci sequence of $numTerms terms: " . implode(", ", $fibonacciSequence) . "\n";
?>

