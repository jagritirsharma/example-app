<?php

namespace practicals;

// Add the use statement for InvalidArgumentException
use InvalidArgumentException;

class Practical {
    public static function printHello() {
        echo "Hello, World!\n";
    }

    public static function add($num1, $num2) {
        if (!is_numeric($num1) || !is_numeric($num2)) {
            // Use fully-qualified class name with the correct namespace
            throw new InvalidArgumentException("Both arguments must be numeric");
        }
        return $num1 + $num2;
    }

    public static function generateFibonacciSequence($numTerms) {
        if (!is_int($numTerms)) {
            // Use fully-qualified class name with the correct namespace
            throw new InvalidArgumentException("Argument must be an integer");
        }

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
?>

