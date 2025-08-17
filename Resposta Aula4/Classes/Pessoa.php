<?php
require_once __DIR__ . '/PessoaInterface.php';

abstract class Pessoa implements PessoaInterface
{
    protected string $nome;
    protected string $documento;

    public function __construct(string $nome, string $documento)
    {
        $this->nome = $nome;
        $this->documento = $documento;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getDocumento(): string
    {
        return $this->documento;
    }
}
