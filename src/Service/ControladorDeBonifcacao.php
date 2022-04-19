<?php

namespace Luiz\Banco\Service;

use Luiz\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonifcacao
{
    private $totalBonificacoes = 0;

    public function adicionaBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal(): float
    {
        return $this->totalBonificacoes;
    }
}