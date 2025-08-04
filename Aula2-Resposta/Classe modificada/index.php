<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once './classe/Pessoa.php';
require_once './classe/CpfCnpj.php';

$cpfCnpj = CpfCnpj::cpfNaoConfiavel('82.359.808/0001-24');

$pessoa = new Pessoa(
    'Rejman Nascimento',
    $cpfCnpj,
    new DateTimeImmutable('1998-08-21'),
);

var_dump(
    $pessoa->getCpfCnpj()->getDocumentoFormatado(),
);
