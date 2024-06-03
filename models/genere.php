<?php
class Genere
{
    private string $title;
    private string $description;

    public function __construct(string $_title, string $_description)
    {
        $this->setTitle($_title);
        $this->setDescription($_description);
    }

    public function setTitle(string $_title)
    {
        if (strlen($_title) <= 10) {
            $this->title = $_title;
        } else {
            throw new Exception("Errore: Il titolo non può essere più lungo di 10 caratteri.");
        }
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setDescription(string $_description)
    {
        $this->description = $_description;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
