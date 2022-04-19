<?php

namespace Luiz\Banco\Modelo\Funcionario;

use Luiz\Banco\Modelo\CPF;
use Luiz\Banco\Modelo\Pessoa;

abstract class Funcionario extends Pessoa
{
    private string $cargo;
    private float $salario;

    public function __construct(string $nome, CPF $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }


    public function recebeAumento(float $valorAumento) :void
    {
        if ($valorAumento < 0){
            echo "O valor precisa ser positivo";
            return;
        }
        $this->salario += $valorAumento;
    }

    abstract public function calculaBonificacao(): float;

}