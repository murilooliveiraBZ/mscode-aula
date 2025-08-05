<?php

require_once 'AnimalInterface.php';
require_once 'FormaDeAndar.php';

class Cachorro extends FormaDeAndar implements AnimalInterface
{
    public function isAnimalRational(): bool
    {
        return false;
    }

    public function emitirSom(): void
    {
        echo "O cachorro late!";
    }

    public function tipo(): string
    {
        return "canino";
    }

    public function andaComQuantasPernas(): int
    {
        return 4;
    }
}
