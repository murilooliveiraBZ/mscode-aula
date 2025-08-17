<?php
require_once './Classes/Pessoa.php';
class PessoaJuridica extends Pessoa
{
    private string $cnpj;

    public function __construct(string $nome, string $cnpj)
    {
        parent::__construct($nome, $cnpj);
        $this->cnpj = $cnpj;
    }

    public function getCNPJ(): string
    {
        return $this->cnpj;
    }
}
