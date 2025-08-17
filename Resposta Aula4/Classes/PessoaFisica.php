<?php
require_once './Classes/Pessoa.php';
class PessoaFisica extends Pessoa
{
    private string $cpf;

    public function __construct(string $nome, string $cpf)
    {
        parent::__construct($nome, $cpf);
        $this->cpf = $cpf;
    }

    public function getCPF(): string
    {
        return $this->cpf;
    }
}
