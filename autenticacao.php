<?php

use Luiz\Banco\Modelo\CPF;
use Luiz\Banco\Modelo\Funcionario\Diretor;
use Luiz\Banco\Service\Autenticador;

require_once "autoload.php";

$autenticador = new Autenticador();
$umDiretor = new Diretor(
    'João da Silva',
    new CPF('456.879.146-12'),
    'Diretor Internacional',
    '14.500'
);

$autenticador->tentaLogin($umDiretor, '1234');
