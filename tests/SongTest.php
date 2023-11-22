<?php

use PHPUnit\Framework\TestCase;

require_once (__DIR__ . '/../practicals/Song.php');

class SongTest extends TestCase {
    /**
     * Test the setTempo function sets tempo to 60
     */
    public function testSetTempo() {
        $song = new Song("Example Song", "Example Artist", "Pop", 120);
        $song->setTempo(60);
        $this->assertEquals(60, $song->getTempo());
    }

    /**
     * Test the setTempo function accepts integer strings
     */
    public function testSetTempoAcceptsIntegerString() {
        $song = new Song("Example Song", "Example Artist", "Pop", 120);
        $song->setTempo("60");
        $this->assertEquals(60, $song->getTempo());
    }

    /**
     * Test the setTempo function rejects alphabet strings
     */
    public function testSetTempoRejectsAlphabetString() {
        $this->expectException(InvalidArgumentException::class);
        $song = new Song("Example Song", "Example Artist", "Pop", 120);
        $song->setTempo("60 BPM");
    }

    /**
     * Test the setTempo function rejects float values
     */
    public function testSetTempoRejectsFloat() {
        $this->expectException(InvalidArgumentException::class);
        $song = new Song("Example Song", "Example Artist", "Pop", 120);
        $song->setTempo(60.5);
    }
}

?>

