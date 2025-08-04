<?php

class CpfCnpj
{
    private string $documento;

    private function __construct(
        string $documento
    ) {
        $this->documento = $documento;
    }

    public static function cpfNaoConfiavel(string $cpfNaoConfiavel): self
{
    // Remove tudo que não é número
    $valorNovo = preg_replace('/[^0-9]/', '', $cpfNaoConfiavel);

    // Se for até 11 dígitos, assume CPF
    if (strlen($valorNovo) <= 11) {
        $valorNovo = str_pad($valorNovo, 11, '0', STR_PAD_LEFT);
    } else {
        // Caso contrário, assume CNPJ
        $valorNovo = str_pad($valorNovo, 14, '0', STR_PAD_LEFT);
    }

    return new self($valorNovo);
}


    public function getDocumento(): string
    {
        return $this->documento;
    }

    public function getDocumentoFormatado(): string
    {
        return $this->eCpf()
            ? preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $this->documento)
            : preg_replace('/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/', '$1.$2.$3/$4-$5', $this->documento);
    }

    public function eCpf(): bool
    {
        return strlen($this->documento) === 11;
    }

    public function eCnpj(): bool
    {
        return strlen($this->documento) === 14;
    }
}
