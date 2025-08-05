<?php

abstract class FormaDeAndar
{
    public function andar(): string
    {
        return "Andando de forma genérica.";
    }

    abstract public function andaComQuantasPernas(): int;
}
