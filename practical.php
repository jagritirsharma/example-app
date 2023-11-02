<?php

/**
 * Class Practical
 * Contains static functions for basic practical tasks.
 */
class Practical
{
    /**
     * Prints "Hello, World!".
     */
    public static function printHello()
    {
        echo "Hello, World!";
    }

    /**
     * Takes two numbers as arguments. Returns the sum of two numbers.
     * @param int $num1
     * @param int $num2
     * @return int
     */
    public static function add($num1, $num2)
    {
        return $num1 + $num2;
    }

    /**
     * Takes an integer 'n' as argument. Returns an array of Fibonacci sequence containing 'n' integers.
     * @param int $n
     * @return array
     */
    public static function generateFibonacciSequence($n)
    {
        $fib = [0, 1];
        for ($i = 2; $i < $n; $i++) {
            $fib[] = $fib[$i - 1] + $fib[$i - 2];
        }
        return $fib;
    }
}

?>
