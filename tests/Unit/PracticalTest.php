<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use InvalidArgumentException; // Import the exception class

require(__DIR__.'/../../practicals/Practical.php');
use practicals\Practical;

class PracticalTest extends TestCase{
    /**
     * Test the add function with numeric values
     */
    public function testAddWithNumericValues() {
        $result = Practical::add(5, 10);
        $this->assertEquals(15, $result);
    }

    /**
     * Test the add function with strings
     */
    public function testAddWithStrings() {
        $result = Practical::add("5", "10");
        $this->assertEquals(15, $result);
    }

    /**
     * Test the add function with non-numeric values
     */
 public function testAddWithNonNumericValues() {
        $this->expectException(\InvalidArgumentException::class);
        Practical::add("abc", "def");
    }    


    /**
     * Test the generateFibonacciSequence function with integer
     */
    public function testGenerateFibonacciSequenceWithInteger() {
        $result = Practical::generateFibonacciSequence(4);
        $this->assertEquals([0, 1, 1, 2], $result);
    }

    /**
     * Test the generateFibonacciSequence function with non-integer values
     */
     public function testGenerateFibonacciSequenceWithNonInteger() {
        $this->expectException(\InvalidArgumentException::class);
        Practical::generateFibonacciSequence("abc");
    }
}

?>

