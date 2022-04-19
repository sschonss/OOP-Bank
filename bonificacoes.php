<?php

require_once 'autoload.php';

use Luiz\Banco\Modelo\CPF;
use Luiz\Banco\Modelo\Funcionario\Desenvolvedor;
use Luiz\Banco\Modelo\Funcionario\Diretor;
use Luiz\Banco\Modelo\Funcionario\EditorVideo;
use Luiz\Banco\Modelo\Funcionario\Gerente;
use Luiz\Banco\Service\ControladorDeBonifcacao;


$umDev = new Desenvolvedor(
    'Luiz Schons',
    new CPF('123.456.789-10'),
    'Desenvolvedor PHP',
    '5000'
);

$umDev->sobeNivel();

$umaGerente = new Gerente(
    'Mary Dulnik',
    new CPF('789.123.456-10'),
    'Gerente de Produção',
    '8000'
);

$umDiretor = new Diretor(
    'Marcos',
    new CPF('753.421.795-78'),
    'Diretor Executivo',
    '12500'
);

$umEditor = new EditorVideo(
    'Julia',
    new CPF('432.421.234-55'),
    'Editor Video JR',
    '2200'
);

$controlador = new ControladorDeBonifcacao();

$controlador->adicionaBonificacaoDe($umDev);
$controlador->adicionaBonificacaoDe($umaGerente);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);
echo $controlador->recuperaTotal();

