<?php
require_once __DIR__ . "/models/genere.php";
require_once __DIR__ . "/models/movie.php";

$genere1 = new Genere("Azione", "Film di azione e avventura");
$genere2 = new Genere("Commedia", "Film divertenti e umoristici");

$movie1 = new Movie("Die Hard", 1988, $genere1);
$movie2 = new Movie("The Mask", 1994, $genere2);

echo "Film 1: " . $movie1->getTitle() . "<br>";
echo "Anno: " . $movie1->getYear() . "<br>";
echo "Genere: " . $movie1->getGenere()->getTitle() . " - " . $movie1->getGenere()->getDescription() . "<br><br>";

echo "Film 2: " . $movie2->getTitle() . "<br>";
echo "Anno: " . $movie2->getYear() . "<br>";
echo "Genere: " . $movie2->getGenere()->getTitle() . " - " . $movie2->getGenere()->getDescription() . "<br>";
