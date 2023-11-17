<?php
 namespace Practicals;
/**
 * Class Song
 * Represents a song with properties like title, artist, genre, and tempo.
 */
class Song
{
    private $title;
    private $artist;
    private $genre;
    private $tempo;

    /**
     * Get the title of the song.
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the title of the song.
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get the artist of the song.
     * @return string
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * Set the artist of the song.
     * @param string $artist
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;
    }

    /**
     * Get the genre of the song.
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set the genre of the song.
     * @param string $genre
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    /**
     * Get the tempo of the song.
     * @return string
     */
    public function getTempo()
    {
        return $this->tempo;
    }

    /**
     * Set the tempo of the song.
     * @param string $tempo
     */
    public function setTempo($tempo)
    {
        $this->tempo = $tempo;
    }
}

?>
