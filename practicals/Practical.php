<?php
namespace practicals;

// File: practicals/Practical.php

class Practical {
    /**
     * Prints "Hello, World!"
     */
    public static function printHello() {
        echo "Hello, World!\n";
    }

    /**
     * Adds two numbers and returns the sum
     *
     * @param int $num1 The first number
     * @param int $num2 The second number
     * @return int The sum of $num1 and $num2
     */
    public static function add($num1, $num2) {
        return $num1 + $num2;
    }

    /**
     * Generates a Fibonacci sequence up to the given number of terms
     *
     * @param int $numTerms The number of terms in the Fibonacci sequence
     * @return array An array containing the Fibonacci sequence
     */
    public static function generateFibonacciSequence($numTerms) {
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
}

// Usage Examples:
// Practical::printHello(); // Prints "Hello, World!"
// $sum = Practical::add(5, 10); // Returns the sum of 5 and 10
// $fibonacci = Practical::generateFibonacciSequence(8); // Returns a Fibonacci sequence with 8 terms
?>

