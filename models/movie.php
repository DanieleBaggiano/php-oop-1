<?php
require_once 'Genere.php';

class Movie
{
    private string $title;
    private int $year;
    private Genere $genere;

    public function __construct(string $_title, int $_year, Genere $_genere)
    {
        $this->setTitle($_title);
        $this->setYear($_year);
        $this->setGenere($_genere);
    }

    public function setTitle(string $_title)
    {
        $this->title = $_title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setYear(int $_year)
    {
        $this->year = $_year;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setGenere(Genere $_genere)
    {
        $this->genere = $_genere;
    }

    public function getGenere(): Genere
    {
        return $this->genere;
    }
}
