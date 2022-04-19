<?php

namespace Luiz\Banco\Service;

use Luiz\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void
    {
        if ($autenticavel->podeAutenticar($senha)) {
            echo "Ok. Usuário Logado no sistema.";
        } else {
            echo "Erro. Senha incorreta.";
        }
    }
}