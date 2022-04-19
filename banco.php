<?php

require_once 'autoload.php';

use Luiz\Banco\Modelo\Conta\Titular;
use Luiz\Banco\Modelo\Endereco;
use Luiz\Banco\Modelo\CPF;
use Luiz\Banco\Modelo\Conta\Conta;

$endereco = new Endereco('Guarapuava', 'Tancredo Neves', 'Marechal Deodoro', '316');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Luiz Schons', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outroEndereco = new Endereco('São Paulo', 'Centro', 'Principal', '146A');

$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg',$outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
