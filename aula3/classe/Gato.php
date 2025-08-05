<?php

require_once 'AnimalInterface.php';
require_once 'FormaDeAndar.php';

class Gato extends FormaDeAndar implements AnimalInterface
{
    public function isAnimalRational(): bool
    {
        return false;
    }

    public function emitirSom(): void
    {
        echo "O gato mia!";
    }

    public function tipo(): string
    {
        return "felino";
    }

    public function andaComQuantasPernas(): int
    {
        return 4;
    }
}
