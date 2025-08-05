<?php

require_once 'AnimalInterface.php';
require_once 'FormaDeAndar.php';

class Humano extends FormaDeAndar implements AnimalInterface
{
    public function isAnimalRational(): bool
    {
        return true;
    }

    public function emitirSom(): void
    {
        echo "O humano fala!";
    }

    public function tipo(): string
    {
        return "bípede";
    }

    public function andar(): string
    {
        return "Andando com duas pernas.";
    }

    public function andaComQuantasPernas(): int
    {
        return 2;
    }
}
