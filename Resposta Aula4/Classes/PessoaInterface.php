<?php

interface PessoaInterface
{
    public function getNome(): string;  // Método para pegar o nome
    public function getDocumento(): string; // CPF ou CNPJ
}
