<?php

namespace songs;
// File: practicals/Song.php

class Song {
    // Properties
    private $title;
    private $artist;
    private $genre;
    private $tempo;

    // Constructor
    public function __construct($title, $artist, $genre, $tempo) {
        $this->title = $title;
        $this->artist = $artist;
        $this->genre = $genre;
        $this->tempo = $tempo;
    }

    // Getter and Setter functions for 'Title'
    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    // Getter and Setter functions for 'Artist'
    public function getArtist() {
        return $this->artist;
    }

    public function setArtist($artist) {
        $this->artist = $artist;
    }

    // Getter and Setter functions for 'Genre'
    public function getGenre() {
        return $this->genre;
    }

    public function setGenre($genre) {
        $this->genre = $genre;
    }

public function getTempo() {
        return $this->tempo;
    }

    public function setTempo($tempo) {
        // Check if $tempo is a float
        if (!is_numeric($tempo) || is_float($tempo)) {
            throw new \InvalidArgumentException('Tempo must be a non-float numeric value.');
        }

        $this->tempo = $tempo;
    }
}

// Usage Example:
// $song = new Song("Song Title", "Artist Name", "Genre", "Tempo");
// echo $song->getTitle(); // Get title
// $song->setTitle("New Title"); // Set title
?>

