<?php

class Pessoa
{
    private string $nome;
    private CpfCnpj $cpfCnpj;
    private DateTimeImmutable $dataNascimento;

    public function __construct(
        string $nome,
        CpfCnpj $cpfCnpj,
        DateTimeImmutable $dataNascimento
    ) {
        $this->nome = $nome;
        $this->cpfCnpj = $cpfCnpj;
        $this->dataNascimento = $dataNascimento;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function ePessoaFisica(): bool
    {
        return $this->cpfCnpj->eCpf();
    }

    public function getCpfCnpj(): CpfCnpj
    {
        return $this->cpfCnpj;
    }

    private function getIdade(): DateInterval
    {
        $agora = new DateTimeImmutable();

        $dateInterval = $agora->diff($this->dataNascimento);

        return $dateInterval;
    }

    public function getIdadeEmAnos(): int
    {
        return $this->getIdade()->y;
    }

    public function getIdadeDescritiva(): string
    {
        $idade = $this->getIdade();

        $dia = $idade->d === 1 ? 'dia' : 'dias';

        return sprintf(
            '%d anos, %d meses e %d %s',
            $idade->y,
            $idade->m,
            $idade->d,
            $dia,
        );
    }
}
