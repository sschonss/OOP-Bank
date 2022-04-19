<?php

namespace Luiz\Banco\Modelo\Funcionario;

class EditorVideo extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return 450.0;
    }

}