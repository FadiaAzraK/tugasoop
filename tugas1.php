<?php

class novel {
    public $judul;
    protected $genre;
    private $penulis;

    public function setJudul($judul) {
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setGenre($genre) {
        $this->genre = $genre;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }
}

$novel1 = new novel();
$novel1->setJudul("Girls in the dark");
$novel1->setGenre("Misteri");
$novel1->setPenulis("Akiyoshi Rikako");

echo "Novel Favorit Bulan ini adalah: ";
echo "<br>";
echo "Judul: ".$novel1->getJudul();
echo "<br>";
echo "Genre: ".$novel1->getGenre();
echo "<br>";
echo "Penulis: ".$novel1->getPenulis();


?>