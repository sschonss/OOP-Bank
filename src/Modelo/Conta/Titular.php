<?php

namespace Luiz\Banco\Modelo\Conta;

use Luiz\Banco\Modelo\Autenticavel;
use Luiz\Banco\Modelo\Pessoa;
use Luiz\Banco\Modelo\CPF;
use Luiz\Banco\Modelo\Endereco;

class Titular extends Pessoa implements Autenticavel
{

    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;

    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}
