<?php

namespace Luiz\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return 1200;
    }


    public function sobeNivel()
    {
        $this->recebeAumento($this->recuperaSalario() * 0.75);
    }
}