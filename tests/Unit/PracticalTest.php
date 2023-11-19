<?php

namespace Tests\Unit;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../.././tests/Unit/PracticalTest.php';  // Use require_once and correct the path
use practicals\Practical1Test;

class PracticalTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function testAdd(): void
    {
        $this->assertEquals(4, Practical::add(1, 3));  // Reorder the arguments for consistency
    }
}

?>

